<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddonsOnline extends Model
{
    use HasFactory;

    private $arrayScript = array();

        function __construct()
        {

        }

        public function script($element='', $type='', $timeout=3.5)
        {
            $script = '';
            $timeout = $timeout * 1000;

            if($element && $type)
            {
                $script = '<script type="text/javascript">(function(){setTimeout(function(){$("#'.$element.'").load("public/api/addons.php?type='.$type.'")},'.$timeout.');});</script>';
                $this->arrayScript[] = $script;
            }
        }

        public function set($element='', $type='', $timeout=3.5)
        {
            $elementAddons = '';

            if($element && $type)
            {
                $elementAddons = '<div id="'.$element.'"></div>';
                $this->script($element, $type, $timeout);
            }

            return $elementAddons;
        }

        public function get()
        {
            $textAddons = '';

            if($this->arrayScript)
            {
                foreach($this->arrayScript as $v)
                {
                    $textAddons .= $v;
                }
            }

            return $textAddons;
        }
}
