<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Gallery;
use App\Models\Setting;
use App\Models\FunctionModel;
use App\Models\Photo;
use App\Models\Seo;
use App\Models\StaticModel;
use App\Models\NewList;
use App\Models\ProductList;
use App\Models\NewCate;
use App\Models\News;
use App\Models\AddonsOnline;
use App\Models\BreadCrumbs;
use App\Models\City;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function gioithieu() {
        return 'a';
    }

    public function chitiet($slug) {
        /* Timezone */
        date_default_timezone_set('Asia/Ho_Chi_Minh');

        /* Cấu hình coder */
        define('NN_CONTRACT', '0226423');
        define('NN_AUTHOR', '0306201305@caothang.edu.vn');
        // $config = [];
        // $configUrl = '';
        // $configBase = '';
        $config = array(
            'author' => array(
                'name' => 'Nguyễn Thị Tường Vy Huỳnh Minh Tâm',
                'email' => '0306201305@caothang.edu.vn',
                'timefinish' => '04/2023'
            ),
            'arrayDomainSSL' => array(),
            'database' => array(
                'server-name' => $_SERVER["SERVER_NAME"],
                'url' => '/doan/',
                'type' => 'mysql',
                'host' => 'localhost',
                'username' => 'root',
                'password' => '',
                'dbname' => 'vutruonggiang_226423w',
                'port' => 3306,
                'prefix' => 'table_',
                'charset' => 'utf8mb4'
            ),
            'website' => array(
                'error-reporting' => true,
                'secret' => '$nina@',
                'salt' => 'vutruonggiang_226423w',
                'debug-developer' => false,
                'debug-css' => true,
                'debug-js' => true,
                'index' => false,
                'image' => array(
                    'hasWebp' => false,
                ),
                'video' => array(
                    'extension' => array('mp4', 'mkv'),
                    'poster' => array(
                        'width' => 700,
                        'height' => 610,
                        'extension' => '.jpg|.png|.jpeg'
                    ),
                    'allow-size' => '100Mb',
                    'max-size' => 100 * 1024 *1024
                ),
                'upload' => array(
                    'max-width' => 1600,
                    'max-height' => 1600
                ),
                'lang' => array(
                    'vi'=>'Tiếng Việt',
                    // 'en'=>'Tiếng Anh'
                ),
                'lang-doc' => 'vi|en',
                'slug' => array(
                    'vi'=>'Tiếng Việt',
                    // 'en'=>'Tiếng Anh'
                ),
                'seo' => array(
                    'vi'=>'Tiếng Việt',
                    // 'en'=>'Tiếng Anh'
                ),
                'comlang' => array(
                    "gioi-thieu" => array("vi"=>"gioi-thieu","en"=>"about-us"),
                    "san-pham" => array("vi"=>"san-pham","en"=>"product"),
                    "tin-tuc" => array("vi"=>"tin-tuc","en"=>"news"),
                    "tuyen-dung" => array("vi"=>"tuyen-dung","en"=>"recruitment"),
                    "thu-vien-anh" => array("vi"=>"thu-vien-anh","en"=>"gallery"),
                    "video" => array("vi"=>"video","en"=>"video"),
                    "lien-he" => array("vi"=>"lien-he","en"=>"contact")
                )
            ),
            'order' => array(
                'ship' => true
            ),
            'login' => array(
                'admin' => 'LoginAdmin'.NN_CONTRACT,
                'member' => 'LoginMember'.NN_CONTRACT,
                'attempt' => 5,
                'delay' => 15
            ),
            'googleAPI' => array(
                'recaptcha' => array(
                    'active' => false,
                    'urlapi' => 'https://www.google.com/recaptcha/api/siteverify',
                    'sitekey' => '6LdnNBQgAAAAAJeYG5xa-dAX_IAVk0mR4kbR5-JI',
                    'secretkey' => '6LdnNBQgAAAAAD9syN7G36ASlD1aG-XtKAfz7YKe'
                )
            ),
            'oneSignal' => array(
                'active' => false,
                'id' => 'af12ae0e-cfb7-41d0-91d8-8997fca889f8',
                'restId' => 'MWFmZGVhMzYtY2U0Zi00MjA0LTg0ODEtZWFkZTZlNmM1MDg4'
            ),
            'license' => array(
                'version' => "7.1.0",
                'powered' => "phuctai.nina@gmail.com"
            )
        );
        /* Error reporting */
        error_reporting(($config['website']['error-reporting']) ? E_ALL : 0);

        if (isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) || isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
            $http = 'https://';
        } else {
            $http = 'http://';
        }

        /* Redirect http/https */
        if (!count($config['arrayDomainSSL']) && $http == 'https://') {
            $host = $_SERVER['HTTP_HOST'];
            $request_uri = $_SERVER['REQUEST_URI'];
            $good_url = "http://" . $host . $request_uri;
            header("HTTP/1.1 301 Moved Permanently");
            header("Location: $good_url");
            exit;
        }

        /* CheckSSL */
        if (count($config['arrayDomainSSL'])) {
            include LIBRARIES . "checkSSL.php";
        }

        /* Cấu hình base */
        $configUrl = $config['database']['server-name'].$config['database']['url'];
        $configBase = $http.$configUrl;

        /* Token */
        define('TOKEN', md5(NN_CONTRACT.$config['database']['url']));

        /* Path */
        define('ROOT', str_replace(basename(__DIR__), '', __DIR__));
        // define('ASSET', $http.$configUrl);
        define('ADMIN', 'admin');

        /* Cấu hình login */
        $loginAdmin = $config['login']['admin'];
        $loginMember = $config['login']['member'];
        $rowDetail = Product::where('slugvi', 'like', $slug)->first();
        $lang = 'vi';
        $rowDetailPhoto = Gallery::where(['id_parent' => $rowDetail['id'], 'com' => 'product', 'status' => 'hienthi', 'kind' => 'man'])->get();
        $setting = Setting::first();
        $optsetting = (!empty($setting['options'])) ? json_decode($setting['options'],true) : null;
        $func = new FunctionModel();
        $product = Product::where(['type' => 'san-pham'])->orderBy('id', 'desc')->get();
        $sluglang = 'slugvi';
        $configBase = '';
        $seo = [];
        $seo['titlevi'] = '';
        $seo['keywordsvi'] = '';
        $seo['descriptionvi'] = '';
        $favicon = Photo::where(['type' => 'favicon', 'status' => 'hienthi'])->first();
        $logo = Photo::where(['type' => 'logo', 'status' => 'hienthi'])->first();
        $setting = Setting::first();
        $lang = 'vi';
        $sluglang = 'slugvi';
        $optsetting = (!empty($setting['options'])) ? json_decode($setting['options'],true) : null;
        $slogan = StaticModel::where(['type' => 'slogan', 'status' => 'hienthi'])->first();
        $social = Photo::where(['type' => 'social', 'status' => 'hienthi'])->get();
        $dichvucap1 = NewList::where(['status' => 'hienthi'])->get();
        $proListMenu = ProductList::where(['status' => 'hienthi'])->get();
        $newsListMenu = NewCate::where(['type' => 'tin-tuc', 'status' => 'hienthi'])->get();
        $slider = Photo::where(['type' => 'slide', 'status' => 'hienthi'])->get();
        $product = Product::where(['type' => 'san-pham'])->orderBy('id', 'desc')->get();
        $footer = StaticModel::where(['type' => 'footer'])->first();
        $policy = News::where(['type' => 'chinh-sach', 'status' => 'hienthi'])->get();
        $QR = Photo::where(['type' => 'QR', 'act' => 'photo_static'])->first();
        $addons = new AddonsOnline();
        $copyright = StaticModel::where(['type' => 'copyright'])->first();
        $staticstatic = new StaticModel();
        $counter = $staticstatic->getCounter();
        $online = $staticstatic->getOnline();
        $dichvu = News::where(['type' => 'dich-vu', 'status' => 'noibat', 'status' => 'hienthi'])->get();
        $gioithieus = StaticModel::where(['type' => 'gioi-thieu'])->get();
        $taisaochon = News::where(['type' => 'tai-sao-chon', 'status' => 'hienthi'])->get();
        $tieuchi = News::where(['type' => 'tieu-chi', 'status' => 'hienthi'])->get();
        $productHot = Product::where(['type' => 'san-pham', 'status' => 'noibat', 'status' => 'hienthi'])->get();
        $banner = Photo::where(['type' => 'banner', 'status' => 'hienthi'])->get();
        $newsHot = News::where(['type' => 'tin-tuc', 'status' => 'noibat', 'status' => 'hienthi'])->get();
        $partner = Photo::where(['type' => 'doi-tac', 'status' => 'hienthi'])->get();
        $nhanxet = News::where(['type' => 'nhan-xet', 'status' => 'noibat', 'status' => 'hienthi'])->get();
        $namepro = $rowDetail->namevi;
        $breadcr = new BreadCrumbs($config['database']);
        $breadcr->set($rowDetail[$sluglang], $rowDetail['name' . $lang]);
        $breadcrumbs = $breadcr->get();
        return view('product.product_detail_tpl', compact('rowDetail', 'lang', 'rowDetailPhoto', 'setting', 'optsetting', 'func', 'product', 'sluglang', 'configBase', 'seo', 'favicon','config', 'configUrl', 'configBase', 'seo', 'favicon', 'setting', 'lang', 'optsetting', 'logo', 'slogan', 'func', 'social', 'dichvucap1', 'proListMenu', 'newsListMenu', 'slider', 'product', 'sluglang', 'footer', 'policy', 'QR', 'addons', 'copyright', 'online', 'counter', 'gioithieus', 'taisaochon', 'dichvu', 'tieuchi', 'productHot', 'banner', 'newsHot', 'partner', 'nhanxet', 'namepro', 'breadcrumbs'));
    }

    public function addToCart(Request $request) {
        $cart = session()->get('cart');

        $codeorder = md5($request->id.$request->color.$request->size);

        if (!$cart) {
            $cart = [
                'productid' => $request->id,
                'qty' => $request->quantity,
                'color' => $request->color,
                'size' => $request->size,
                'code' => $codeorder,
            ];
        } else {
            $cart['qty']++;
        }
        session()->put('cart', $cart);        
    }

    public function giohang() {
        /* Timezone */
        date_default_timezone_set('Asia/Ho_Chi_Minh');

        /* Cấu hình coder */
        define('NN_CONTRACT', '0226423');
        define('NN_AUTHOR', '0306201305@caothang.edu.vn');
        // $config = [];
        // $configUrl = '';
        // $configBase = '';
        $config = array(
            'author' => array(
                'name' => 'Nguyễn Thị Tường Vy Huỳnh Minh Tâm',
                'email' => '0306201305@caothang.edu.vn',
                'timefinish' => '04/2023'
            ),
            'arrayDomainSSL' => array(),
            'database' => array(
                'server-name' => $_SERVER["SERVER_NAME"],
                'url' => '/doan/',
                'type' => 'mysql',
                'host' => 'localhost',
                'username' => 'root',
                'password' => '',
                'dbname' => 'vutruonggiang_226423w',
                'port' => 3306,
                'prefix' => 'table_',
                'charset' => 'utf8mb4'
            ),
            'website' => array(
                'error-reporting' => true,
                'secret' => '$nina@',
                'salt' => 'vutruonggiang_226423w',
                'debug-developer' => false,
                'debug-css' => true,
                'debug-js' => true,
                'index' => false,
                'image' => array(
                    'hasWebp' => false,
                ),
                'video' => array(
                    'extension' => array('mp4', 'mkv'),
                    'poster' => array(
                        'width' => 700,
                        'height' => 610,
                        'extension' => '.jpg|.png|.jpeg'
                    ),
                    'allow-size' => '100Mb',
                    'max-size' => 100 * 1024 *1024
                ),
                'upload' => array(
                    'max-width' => 1600,
                    'max-height' => 1600
                ),
                'lang' => array(
                    'vi'=>'Tiếng Việt',
                    // 'en'=>'Tiếng Anh'
                ),
                'lang-doc' => 'vi|en',
                'slug' => array(
                    'vi'=>'Tiếng Việt',
                    // 'en'=>'Tiếng Anh'
                ),
                'seo' => array(
                    'vi'=>'Tiếng Việt',
                    // 'en'=>'Tiếng Anh'
                ),
                'comlang' => array(
                    "gioi-thieu" => array("vi"=>"gioi-thieu","en"=>"about-us"),
                    "san-pham" => array("vi"=>"san-pham","en"=>"product"),
                    "tin-tuc" => array("vi"=>"tin-tuc","en"=>"news"),
                    "tuyen-dung" => array("vi"=>"tuyen-dung","en"=>"recruitment"),
                    "thu-vien-anh" => array("vi"=>"thu-vien-anh","en"=>"gallery"),
                    "video" => array("vi"=>"video","en"=>"video"),
                    "lien-he" => array("vi"=>"lien-he","en"=>"contact")
                )
            ),
            'order' => array(
                'ship' => true
            ),
            'login' => array(
                'admin' => 'LoginAdmin'.NN_CONTRACT,
                'member' => 'LoginMember'.NN_CONTRACT,
                'attempt' => 5,
                'delay' => 15
            ),
            'googleAPI' => array(
                'recaptcha' => array(
                    'active' => false,
                    'urlapi' => 'https://www.google.com/recaptcha/api/siteverify',
                    'sitekey' => '6LdnNBQgAAAAAJeYG5xa-dAX_IAVk0mR4kbR5-JI',
                    'secretkey' => '6LdnNBQgAAAAAD9syN7G36ASlD1aG-XtKAfz7YKe'
                )
            ),
            'oneSignal' => array(
                'active' => false,
                'id' => 'af12ae0e-cfb7-41d0-91d8-8997fca889f8',
                'restId' => 'MWFmZGVhMzYtY2U0Zi00MjA0LTg0ODEtZWFkZTZlNmM1MDg4'
            ),
            'license' => array(
                'version' => "7.1.0",
                'powered' => "phuctai.nina@gmail.com"
            )
        );
        /* Error reporting */
        error_reporting(($config['website']['error-reporting']) ? E_ALL : 0);

        if (isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) || isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
            $http = 'https://';
        } else {
            $http = 'http://';
        }

        /* Redirect http/https */
        if (!count($config['arrayDomainSSL']) && $http == 'https://') {
            $host = $_SERVER['HTTP_HOST'];
            $request_uri = $_SERVER['REQUEST_URI'];
            $good_url = "http://" . $host . $request_uri;
            header("HTTP/1.1 301 Moved Permanently");
            header("Location: $good_url");
            exit;
        }

        /* CheckSSL */
        if (count($config['arrayDomainSSL'])) {
            include LIBRARIES . "checkSSL.php";
        }

        /* Cấu hình base */
        $configUrl = $config['database']['server-name'].$config['database']['url'];
        $configBase = $http.$configUrl;

        /* Token */
        define('TOKEN', md5(NN_CONTRACT.$config['database']['url']));

        /* Path */
        define('ROOT', str_replace(basename(__DIR__), '', __DIR__));
        // define('ASSET', $http.$configUrl);
        define('ADMIN', 'admin');
        /* Cấu hình login */
        $loginAdmin = $config['login']['admin'];
        $loginMember = $config['login']['member'];
        // $rowDetail = Product::where('slugvi', 'like', $slug)->first();
        $lang = 'vi';
        // $rowDetailPhoto = Gallery::where(['id_parent' => $rowDetail['id'], 'com' => 'product', 'status' => 'hienthi', 'kind' => 'man'])->get();
        $setting = Setting::first();
        $optsetting = (!empty($setting['options'])) ? json_decode($setting['options'],true) : null;
        $func = new FunctionModel();
        $product = Product::where(['type' => 'san-pham'])->orderBy('id', 'desc')->get();
        $sluglang = 'slugvi';
        $configBase = '';
        $seo = [];
        $seo['titlevi'] = '';
        $seo['keywordsvi'] = '';
        $seo['descriptionvi'] = '';
        $favicon = Photo::where(['type' => 'favicon', 'status' => 'hienthi'])->first();
        $logo = Photo::where(['type' => 'logo', 'status' => 'hienthi'])->first();
        $setting = Setting::first();
        $lang = 'vi';
        $sluglang = 'slugvi';
        $optsetting = (!empty($setting['options'])) ? json_decode($setting['options'],true) : null;
        $slogan = StaticModel::where(['type' => 'slogan', 'status' => 'hienthi'])->first();
        $social = Photo::where(['type' => 'social', 'status' => 'hienthi'])->get();
        $dichvucap1 = NewList::where(['status' => 'hienthi'])->get();
        $proListMenu = ProductList::where(['status' => 'hienthi'])->get();
        $newsListMenu = NewCate::where(['type' => 'tin-tuc', 'status' => 'hienthi'])->get();
        $slider = Photo::where(['type' => 'slide', 'status' => 'hienthi'])->get();
        $product = Product::where(['type' => 'san-pham'])->orderBy('id', 'desc')->get();
        $footer = StaticModel::where(['type' => 'footer'])->first();
        $policy = News::where(['type' => 'chinh-sach', 'status' => 'hienthi'])->get();
        $QR = Photo::where(['type' => 'QR', 'act' => 'photo_static'])->first();
        $addons = new AddonsOnline();
        $copyright = StaticModel::where(['type' => 'copyright'])->first();
        $staticstatic = new StaticModel();
        $counter = $staticstatic->getCounter();
        $online = $staticstatic->getOnline();
        $dichvu = News::where(['type' => 'dich-vu', 'status' => 'noibat', 'status' => 'hienthi'])->get();
        $gioithieus = StaticModel::where(['type' => 'gioi-thieu'])->get();
        $taisaochon = News::where(['type' => 'tai-sao-chon', 'status' => 'hienthi'])->get();
        $tieuchi = News::where(['type' => 'tieu-chi', 'status' => 'hienthi'])->get();
        $productHot = Product::where(['type' => 'san-pham', 'status' => 'noibat', 'status' => 'hienthi'])->get();
        $banner = Photo::where(['type' => 'banner', 'status' => 'hienthi'])->get();
        $newsHot = News::where(['type' => 'tin-tuc', 'status' => 'noibat', 'status' => 'hienthi'])->get();
        $partner = Photo::where(['type' => 'doi-tac', 'status' => 'hienthi'])->get();
        $nhanxet = News::where(['type' => 'nhan-xet', 'status' => 'noibat', 'status' => 'hienthi'])->get();
        // $namepro = $rowDetail->namevi;
        $breadcr = new BreadCrumbs($config['database']);
        // $breadcr->set($rowDetail[$sluglang], $rowDetail['name' . $lang]);
        $breadcrumbs = $breadcr->get();
        $cart = session()->get('cart');
        $config = [
            'order' => array(
                'ship' => true
            )
        ];
        $total = $this->ordertotal();
        $payments_info = News::where(['type' => 'hinh-thuc-thanh-toan'])->get();
        $city = City::get();
        return view('order.order_tpl', compact('cart', 'config', 'total', 'payments_info', 'city', 'lang', 'setting', 'optsetting', 'func', 'product', 'sluglang', 'configBase', 'seo', 'favicon','config', 'configUrl', 'configBase', 'seo', 'favicon', 'setting', 'lang', 'optsetting', 'logo', 'slogan', 'func', 'social', 'dichvucap1', 'proListMenu', 'newsListMenu', 'slider', 'product', 'sluglang', 'footer', 'policy', 'QR', 'addons', 'copyright', 'online', 'counter', 'gioithieus', 'taisaochon', 'dichvu', 'tieuchi', 'productHot', 'banner', 'newsHot', 'partner', 'nhanxet', 'breadcrumbs'));
    }

    public function ordertotal()
    {
        $sum = 0;
        $cart = session()->get('cart');
        if(!empty($cart))
        {
            $max = count($cart);

            for($i=0;$i<$max;$i++)
            {
                $pid = $cart['productid'];
                $q = $cart['qty'];
                $proinfo = Product::where(['id' => $pid])->first();

                if($proinfo['sale_price']) $price = $proinfo['sale_price'];
                else $price = $proinfo['regular_price'];
                $sum += ($price * $q);
            }
        }

        return $sum;
    }
}
