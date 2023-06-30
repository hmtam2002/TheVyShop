<!-- Css -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.min.css') }}<?='?v='.$func->stringRandom(10)?>">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/bootstrap-icons/font/bootstrap-icons.css') }}<?='?v='.$func->stringRandom(10)?>">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/bootstrap/bootstrap.css') }}<?='?v='.$func->stringRandom(10)?>">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/fontawesome512/all.css') }}<?='?v='.$func->stringRandom(10)?>">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/confirm/confirm.css') }}<?='?v='.$func->stringRandom(10)?>">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/holdon/HoldOn.css') }}<?='?v='.$func->stringRandom(10)?>">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/holdon/HoldOn-style.css') }}<?='?v='.$func->stringRandom(10)?>">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/account.css') }}<?='?v='.$func->stringRandom(10)?>">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/fotorama/fotorama.css') }}<?='?v='.$func->stringRandom(10)?>">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/fotorama/fotorama-style.css') }}<?='?v='.$func->stringRandom(10)?>">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/datetimepicker/jquery.datetimepicker.css') }}<?='?v='.$func->stringRandom(10)?>">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/simplenotify/simple-notify.css') }}<?='?v='.$func->stringRandom(10)?>">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/fileuploader/font-fileuploader.css') }}<?='?v='.$func->stringRandom(10)?>">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/fileuploader/jquery.fileuploader.min.css') }}<?='?v='.$func->stringRandom(10)?>">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/fileuploader/jquery.fileuploader-theme-dragdrop.css') }}<?='?v='.$func->stringRandom(10)?>">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/comment/comment.css') }}<?='?v='.$func->stringRandom(10)?>">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/mmenu/mmenu.css') }}<?='?v='.$func->stringRandom(10)?>">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/fancybox4/fancybox.css') }}<?='?v='.$func->stringRandom(10)?>">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/slick/slick.css') }}<?='?v='.$func->stringRandom(10)?>">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/slick/slick-theme.css') }}<?='?v='.$func->stringRandom(10)?>">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/slick/slick-style.css') }}<?='?v='.$func->stringRandom(10)?>">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/magiczoomplus/magiczoomplus.css') }}<?='?v='.$func->stringRandom(10)?>">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/owlcarousel2/owl.carousel.css') }}<?='?v='.$func->stringRandom(10)?>">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/owlcarousel2/owl.theme.default.css') }}<?='?v='.$func->stringRandom(10)?>">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/aos/aos.css') }}<?='?v='.$func->stringRandom(10)?>">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}<?='?v='.$func->stringRandom(10)?>">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}<?='?v='.$func->stringRandom(10)?>">

<!-- Background -->
<?php
// $bgbody = $d->rawQueryOne("select status, options, photo from #_photo where act = ? and type = ? limit 0,1", array('photo_static', 'background'));

// if (!empty($bgbody['status']) && strpos($bgbody['status'], 'hienthi') !== false) {
//     $bgbodyOptions = json_decode($bgbody['options'], true)['background'];
//     if ($bgbodyOptions['type_show']) {
//         echo '<style type="text/css">body{background: url(' . UPLOAD_PHOTO_L . $bgbody['photo'] . ') ' . $bgbodyOptions['repeat'] . ' ' . $bgbodyOptions['position'] . ' ' . $bgbodyOptions['attachment'] . ' ;background-size:' . $bgbodyOptions['size'] . '}</style>';
//     } else {
//         echo ' <style type="text/css">body{background-color:#' . $bgbodyOptions['color'] . '}</style>';
//     }
// }
?>

<!-- Js Google Analytic -->
<?php 
// echo htmlspecialchars_decode($setting['analytics'])
?>

<!-- Js Head -->
<?php
// echo htmlspecialchars_decode($setting['headjs'])
?>