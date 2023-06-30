<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Counter;
use App\Models\UserOnline;

class StaticModel extends Model
{
    use HasFactory;

    protected $table = 'table_static'; 
      
    // private $d;

    // function __construct($d, $cache)
    // {
    //     $this->d = $d;
    //     $this->cache = $cache;
    // }

    public function getCounter()
    {
        $locktime = 15 * 60;
        $initialvalue = 1;
        $records = 100000;
        $day = date('d');
        $month = date('n');
        $year = date('Y');

        /* Day start */
        $daystart = mktime(0,0,0,$month,$day,$year);

        /* Month start */
        $monthstart = mktime(0,0,0,$month,1,$year);
        
        /* Week start */
        $weekday = date('w');
        $weekday--;
        if($weekday < 0) $weekday = 7;
        $weekday = $weekday * 24*60*60;
        $weekstart = $daystart - $weekday;

        /* Yesterday start */
        $yesterdaystart = $daystart - (24*60*60);
        $now = time();
        $ip = $_SERVER['REMOTE_ADDR'];
        
        // $t = $this->cache->get("select max(id) as total from #_counter", null, 'fetch', 1800);
        $t = Counter::orderBy('id', 'desc')->first();
        $all_visitors = $t['id'];
        
        if($all_visitors !== NULL) $all_visitors += $initialvalue;
        else $all_visitors = $initialvalue;
        
        /* Delete old records */
        $temp = $all_visitors - $records;

        // if($temp>0) $this->d->rawQuery("delete from #_counter where id < '$temp'");
        if($temp>0) Counter::where(['id' => $temp])->delete();
        
        // $vip = $this->d->rawQueryOne("select count(*) as visitip from #_counter where ip='$ip' and (tm+'$locktime')>'$now' limit 0,1");
        $counterip = Counter::where(['ip' => $ip])->first();
        $tm = $counterip->tm + $locktime;
        $vip = Counter::where('tm', '>', $tm)->where('tm', '<', $now)->where(['ip' => $ip])->get();
        $items = count($vip);

        // if(empty($items)) $this->d->rawQuery("insert into #_counter (tm, ip) values ('$now', '$ip')");
        if(empty($items)) {
            $counterNew = new Counter();
            $counterNew->tm = $now;
            $counterNew->ip = $ip;
            $counterNew->save();
        }
        
        $n = $all_visitors;
        $div = 100000;
        while ($n > $div) $div *= 10;

        // $todayrec = $this->cache->get("select count(*) as todayrecord from #_counter where tm > '$daystart'", null, 'fetch', 1800);
        $todayrec = Counter::where('tm', '>', $daystart)->get()->count();
        // $yesrec = $this->cache->get("select count(*) as yesterdayrec from #_counter where tm > '$yesterdaystart' and tm < '$daystart'", null, 'fetch', 1800);
        $yesrec = Counter::where('tm', '>', $yesterdaystart)->get()->count();
        // $weekrec = $this->cache->get("select count(*) as weekrec from #_counter where tm >= '$weekstart'", null, 'fetch', 1800);
        $weekrec = Counter::where('tm', '>=', $weekstart)->get()->count();
        // $monthrec = $this->cache->get("select count(*) as monthrec from #_counter where tm >= '$monthstart'", null, 'fetch', 1800);
        $monthrec = Counter::where('tm', '>=', $monthstart)->get()->count();
        // $totalrec = $this->cache->get("select max(id) as totalrec from #_counter", null, 'fetch', 1800);
        $totalrec = Counter::orderBy('id', 'desc')->first();

        // $result['today'] = $todayrec['todayrecord'];
        // $result['yesterday'] = $yesrec['yesterdayrec'];
        // $result['week'] = $weekrec['weekrec'];
        // $result['month'] = $monthrec['monthrec'];
        // $result['total'] = $totalrec['totalrec'];

        $result['today'] = $todayrec;
        $result['yesterday'] = $yesrec;
        $result['week'] = $weekrec;
        $result['month'] = $monthrec;
        $result['total'] = $totalrec->id;

        return $result;
    }

    public function getOnline()
    {
        $session = session_id();
        $time = time();
        $time_check = $time - 600;
        $ip = $_SERVER['REMOTE_ADDR'];

        // $result = $this->d->rawQuery("select * from #_user_online where session = ?",array($session));

        $result = UserOnline::where(['session' => $session])->get();
        
        if(count($result) == 0)
        {
            // $this->d->rawQuery("insert into #_user_online(session,time,ip) values(?,?,?)",array($session,$time,$ip));
            $userOnline = new UserOnline();
            $userOnline->session = $session;
            $userOnline->time = $time;
            $userOnline->ip = $ip;
            $userOnline->save();
        }
        else
        {
            // $this->d->rawQuery("update #_user_online set time = ? where session = ?",array($time,$session));
            $userOnline = UserOnline::where(['session' => $session])->first();
            $userOnline->time = $time;
            $userOnline->update();
        }

        // $this->d->rawQuery("delete from #_user_online where time < $time_check");
        $userOnlineNew = UserOnline::where('time', '<', $time_check)->delete();

        // $user_online = $this->d->rawQuery("select * from #_user_online");

        $user_online = UserOnline::get();
        $user_online = count($user_online);

        return $user_online;
    }
}
