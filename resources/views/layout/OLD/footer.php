<div class="footer">
    <div class="footer-top">
        <div class="wrap-content d-flex flex-wrap align-items-start justify-content-between">
            <div class="footer-mxh">
                <p class="text-hotline">KẾT NỐI MXH</p>
                <?php if (count($social)) { ?>
                <div class="social social-footer d-flex align-items-center">
                    <?php foreach ($social as $k => $v) { ?>
                    <a href="<?= $v['link'] ?>" target="_blank" class="text-decoration-none mr-2">
                        <img class="lazy" data-src="<?= THUMBS ?>/30x30x1/<?= UPLOAD_PHOTO_L . $v['photo'] ?>"
                            alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>">
                    </a>
                    <?php } ?>
                </div>
                <?php } ?>
            </div>
            <div class="footer-hotline">
                <p class="text-hotline">HOTLINE CHĂM SÓC KHÁCH HÀNG</p>
                <p class="hotline-phone"><?= $func->formatPhone($optsetting['hotline']) ?> -
                    <?= $func->formatPhone($optsetting['phone']) ?></p>

            </div>
            <div class="footer-top-form">
                <p class="footer-title"><?= dangkynhantin ?></p>
                <form class="validation-newsletter form-newsletter" novalidate method="post" action=""
                    enctype="multipart/form-data">
                    <div class="newsletter-input">
                        <input type="number" class="form-control text-sm" id="phone-newsletter"
                            name="dataNewsletter[phone]" placeholder="Nhập số điện thoại của bạn" required />
                        <div class="invalid-feedback">Vui lòng nhập số điện thoại</div>
                    </div>
                    <div class="newsletter-button">
                        <input type="submit" class="btn btn-sm" name="submit-newsletter" value="Đăng Ký" disabled>
                        <input type="hidden" class="btn btn-sm" name="recaptcha_response_newsletter"
                            id="recaptchaResponseNewsletter">
                    </div>
                </form>
            </div>

        </div>
    </div>
    <div class="footer-article padding-top-bottom">
        <div class="wrap-content d-flex flex-wrap align-items-start justify-content-between">
            <div class="footer-news ">
                <p class="name-company-footer"><?= $footer['name' . $lang] ?></p>
                <div class="footer-info"><?= htmlspecialchars_decode($footer['content' . $lang]) ?></div>
            </div>
            <div class="footer-news ">
                <p class="footer-name"><?= chinhsach ?></p>
                <ul class="footer-ul">
                    <?php foreach ($policy as $v) { ?>
                    <li><a href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="footer-news">
                <p class="footer-name">Mã QR</p>
                <p class="maQR">
                    <?= $func->getImage(['upload' => UPLOAD_PHOTO_L, 'sizes' => '150x150x1', 'image' => $QR['photo'], 'alt' => $setting['name' . $lang]]) ?>
                </p>
            </div>
            <div class="footer-news">
                <p class="footer-name">Fanpage facebook</p>
                <?= $addons->set('fanpage-facebook', 'fanpage-facebook', 2); ?>
            </div>
        </div>
    </div>
    <!-- <div class="footer-tags">
        <div class="wrap-content">
            <p class="footer-title">Tags sản phẩm:</p>
            <ul class="footer-tags-lists w-clear mb-3">
                <?php foreach ($tagsProduct as $v) { ?>
                    <li class="mr-1 mb-1"><a class="btn btn-sm btn-danger rounded" href="<?= $v[$sluglang] ?>" target="_blank" title="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></a></li>
                <?php } ?>
            </ul>
            <p class="footer-title">Tags tin tức:</p>
            <ul class="footer-tags-lists w-clear">
                <?php foreach ($tagsNews as $v) { ?>
                    <li class="mr-1 mb-1"><a class="btn btn-sm btn-danger rounded" href="<?= $v[$sluglang] ?>" target="_blank" title="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></a></li>
                <?php } ?>
            </ul>
        </div>
    </div> -->
    <div class="footer-powered">
        <div class="wrap-content d-flex flex-wrap align-items-center justify-content-between">
            <div class="copyright">2023 Copyright <span><?= $copyright['name' . $lang] ?></span></div>
            <div class="statistic">
                <span><?= dangonline ?>: <?= $online ?></span>
                <!-- <span><?= homnay ?>: <?= $counter['today'] ?></span>  -->
                <!-- <span><?= homqua ?>: <?= $counter['yesterday'] ?></span> -->
                <!-- <span><?= trongtuan ?>: <?= $counter['week'] ?></span> -->
                <span><?= trongthang ?>: <?= $counter['month'] ?></span>
                <span><?= tongtruycap ?>: <?= $counter['total'] ?></span>
            </div>
        </div>
    </div>
    <?= $addons->set('footer-map', 'footer-map', 2); ?>
    <!-- <?= $addons->set('chi-nhanh', 'chi-nhanh', 1); ?> -->
    <?= $addons->set('messages-facebook', 'messages-facebook', 2); ?>
</div>
<?php if ($com != 'gio-hang') { ?>
<div>
    <a class="cart-fixed text-decoration-none" href="gio-hang" title="Giỏ hàng">
        <i class="bi bi-cart3"></i>
        <span class="count-cart"><?= (!empty($_SESSION['cart'])) ? count($_SESSION['cart']) : 0 ?></span>
    </a>
</div>
<?php } ?>
<a class="btn-zalo btn-frame text-decoration-none" target="_blank"
    href="https://zalo.me/<?= preg_replace('/[^0-9]/', '', $optsetting['zalo']); ?>">
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><img data-src="assets/images/zl.png" alt="zalo" class="lazy"></i>
</a>
<a class="btn-phone btn-frame text-decoration-none"
    href="tel:<?= preg_replace('/[^0-9]/', '', $optsetting['hotline']); ?>">
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><img data-src="assets/images/hl.png" alt="Hotline" class="lazy"></i>
</a>
<!-- <?php if ($deviceType != 'mobile') { ?>
    <div class="hotline-fix">
        <a href="tel:<?= preg_replace('/[^0-9]/', '', $optsetting['hotline']); ?>" class="text-decoration-none">HOTLINE<span><?= $optsetting['hotline'] ?></span></a>
    </div>
<?php } ?> -->
<!-- <a href="javascript:void();" class="btn-datlich" data-toggle="modal" data-target=".booking"><i class="far fa-calendar-alt"></i></a> -->