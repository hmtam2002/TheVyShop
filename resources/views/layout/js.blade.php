

<!-- Js Files -->
<script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
<!-- Js Config -->
<script type="text/javascript">
    var NN_FRAMEWORK = NN_FRAMEWORK || {};
    var CONFIG_BASE = '<?= $configBase ?>';
    var ASSET = '<?= ASSET ?>';
    var WEBSITE_NAME = '<?= (!empty($setting['name' . $lang])) ? addslashes($setting['name' . $lang]) : '' ?>';
    var TIMENOW = '<?= date("d/m/Y", time()) ?>';
    var SHIP_CART = <?= (!empty($config['order']['ship'])) ? 'true' : 'false' ?>;
    var RECAPTCHA_ACTIVE = '<?php //echo (!empty($config['googleAPI']['recaptcha']['active'])) ? 'true' : 'false' ?>';
    var RECAPTCHA_SITEKEY = '<?php //echo $config['googleAPI']['recaptcha']['sitekey'] ?>';
    var GOTOP = ASSET + 'assets/images/top.png';
    var LANG = {
        'no_keywords': '<?= chuanhaptukhoatimkiem ?>',
        'delete_product_from_cart': '<?= banmuonxoasanphamnay ?>',
        'no_products_in_cart': '<?= khongtontaisanphamtronggiohang ?>',
        'ward': '<?= phuongxa ?>',
        'back_to_home': '<?= vetrangchu ?>',
    };
    var _token = $('input[name="_token"]').val();
    var url = "{{ route('addtocart') }}";
</script>
<script type="text/javascript" src="{{ asset('assets/js/lazyload.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/bootstrap/bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/wow.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/confirm/confirm.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/holdon/HoldOn.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/easyticker/easy-ticker.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/simplenotify/simple-notify.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/fileuploader/jquery.fileuploader.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/datetimepicker/php-date-formatter.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/datetimepicker/jquery.mousewheel.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/datetimepicker/jquery.datetimepicker.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/comment/comment.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/mmenu/mmenu.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/fotorama/fotorama.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/owlcarousel2/owl.carousel.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/magiczoomplus/magiczoomplus.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/slick/slick.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/fancybox4/fancybox.umd.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/functions.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/aos/aos.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/toc/toc.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/apps.js') }}"></script>
<?php
// $js->set("js/jquery.min.js");
// $js->set("js/lazyload.min.js");
// $js->set("bootstrap/bootstrap.js");
// $js->set("js/wow.min.js");
// $js->set("confirm/confirm.js");
// $js->set("holdon/HoldOn.js");
// $js->set("easyticker/easy-ticker.js");
// $js->set("simplenotify/simple-notify.js");
// $js->set("fileuploader/jquery.fileuploader.min.js");
// $js->set("datetimepicker/php-date-formatter.min.js");
// $js->set("datetimepicker/jquery.mousewheel.js");
// $js->set("datetimepicker/jquery.datetimepicker.js");
// $js->set("comment/comment.js");
// $js->set("mmenu/mmenu.js");
// $js->set("fotorama/fotorama.js");
// $js->set("owlcarousel2/owl.carousel.js");
// $js->set("magiczoomplus/magiczoomplus.js");
// $js->set("slick/slick.js");
// $js->set("fancybox4/fancybox.umd.js");
// $js->set("js/functions.js");
// $js->set("aos/aos.js");
// $js->set("toc/toc.js");
// $js->set("js/apps.js");
// echo $js->get();
die();
?>

<?php if (!$func->isGoogleSpeed()) { ?>
    <?php if (!empty($config['googleAPI']['recaptcha']['active'])) { ?>
        <!-- Js Google Recaptcha V3 -->
        <script src="https://www.google.com/recaptcha/api.js?render=<?= $config['googleAPI']['recaptcha']['sitekey'] ?>">
        </script>
        <script type="text/javascript">
            grecaptcha.ready(function() {
                /* Newsletter */
                generateCaptcha('Newsletter', 'recaptchaResponseNewsletter');

                /* Booking */
                generateCaptcha('Booking', 'recaptchaResponseBooking');

                <?php if ($source == 'contact') { ?>
                    /* Contact */
                    generateCaptcha('contact', 'recaptchaResponseContact');
                <?php } ?>
            });
        </script>
    <?php } ?>
<?php } ?>

<?php if (!empty($config['oneSignal']['active'])) { ?>
    <!-- Js OneSignal -->
    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
    <script type="text/javascript">
        var OneSignal = window.OneSignal || [];
        OneSignal.push(function() {
            OneSignal.init({
                appId: "<?= $config['oneSignal']['id'] ?>"
            });
        });
    </script>
<?php } ?>

<!-- Js Structdata -->
<?php include TEMPLATE . LAYOUT . "strucdata.php"; ?>

<!-- Js Addons -->
<?= $addons->set('script-main', 'script-main', 2); ?>
<?= $addons->get(); ?>

<!-- Js Body -->
<?= htmlspecialchars_decode($setting['bodyjs']) ?>