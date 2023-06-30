<!-- Basehref -->
<?php 

$configBase = '';
$seo = [];
$seo['titlevi'] = '';
$seo['keywordsvi'] = '';
$seo['descriptionvi'] = '';
$favicon = [];
$favicon['photo'] = '';
$setting = [];
$setting['mastertool'] = '';
$setting['namevi'] = '';
$optsetting = [];
$optsetting['email'] = '';

?>
<base href="<?=$configBase?>"/>

<!-- UTF-8 -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- Title, Keywords, Description -->
<title><?= $seo['title' . $lang] ?></title>
<meta name="keywords" content="<?= $seo['keywords' . $lang] ?>"/>
<meta name="description" content="<?= $seo['description' . $lang] ?>"/>

<!-- Robots -->
<meta name="robots" content="index,follow" />

<!-- Favicon -->
<link href="{{ asset('/upload/photo/'. $favicon['photo']) }}" rel="shortcut icon" type="image/x-icon" />

<!-- Webmaster Tool -->
<?=htmlspecialchars_decode($setting['mastertool'])?>

<!-- GEO -->
<meta name="geo.region" content="VN" />
<meta name="geo.placename" content="Hồ Chí Minh" />
<meta name="geo.position" content="10.823099;106.629664" />
<meta name="ICBM" content="10.823099, 106.629664" />

<!-- Author - Copyright -->
<meta name='revisit-after' content='1 days' />
<meta name="author" content="<?=$setting['name'.$lang]?>" />
<meta name="copyright" content="<?=$setting['name'.$lang]." - [".$optsetting['email']."]"?>" />

<!-- Facebook -->
<meta property="og:type" content="<?php // echo $seo->get('type')?>" />
<meta property="og:site_name" content="<?php // echo $setting['name'.$lang]?>" />
<meta property="og:title" content="<?php // echo $seo->get('titlevi')?>" />
<meta property="og:description" content="<?php // echo $seo->get('descriptionvi')?>" />
<meta property="og:url" content="<?php // echo $seo->get('url')?>" />
<meta property="og:image" content="<?php // echo $seo->get('photo')?>" />
<meta property="og:image:alt" content="<?php // echo $seo->get('title')?>" />
<meta property="og:image:type" content="<?php // echo $seo->get('photo:type')?>" />
<meta property="og:image:width" content="<?php // echo $seo->get('photo:width')?>" />
<meta property="og:image:height" content="<?php // echo $seo->get('photo:height')?>" />

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="<?php // echo $optsetting['email']?>" />
<meta name="twitter:creator" content="<?php // echo $setting['name'.$lang]?>" />
<meta property="og:url" content="<?php // echo $seo->get('url')?>" />
<meta property="og:title" content="<?php // echo $seo->get('title')?>" />
<meta property="og:description" content="<?php // echo $seo->get('description')?>" />
<meta property="og:image" content="<?php // echo $seo->get('photo')?>" />

<!-- Canonical -->
<link rel="canonical" href="<?php // echo $func->getCurrentPageURL()?>" />

<!-- Chống đổi màu trên IOS -->
<meta name="format-detection" content="telephone=no">

<!-- Viewport -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">