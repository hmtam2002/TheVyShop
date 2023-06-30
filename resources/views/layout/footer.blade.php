<div class="footer">
    <div class="footer-top">
        <div class="wrap-content d-flex flex-wrap align-items-start justify-content-between">
            <div class="footer-mxh">
                <p class="text-hotline">KẾT NỐI MXH</p>
                <?php if (count($social)) { ?>
                <div class="social social-footer d-flex align-items-center">
                    <?php foreach ($social as $k => $v) { ?>
                    <a href="<?= $v['link'] ?>" target="_blank" class="text-decoration-none mr-2">
                        <img src="{{ asset('thumbs/30x30x1/upload/photo/' . $v->photo) }}" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>">
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
                    <img src="{{ asset('thumbs/150x150x1/upload/photo/'.$QR->photo) }}" alt="<?=$setting['name' . $lang]?>">
                </p>
            </div>
            <div class="footer-news">
                <p class="footer-name">Fanpage facebook</p>
                <?php // echo $addons->set('fanpage-facebook', 'fanpage-facebook', 2); ?>
                    <div id="fanpage-facebook">
                        <div class="fb-page" 
                    data-href="<?=$optsetting['fanpage']?>" 
                    data-tabs="timeline" 
                    data-width="300" 
                    data-height="200" 
                    data-small-header="false" 
                    data-adapt-container-width="true" 
                    data-hide-cover="false" 
                    data-show-facepile="true">
                    <blockquote cite="<?=$optsetting['fanpage']?>" class="fb-xfbml-parse-ignore">
                        <a href="<?=$optsetting['fanpage']?>">Facebook</a>
                    </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!-- <div class="footer-tags">
        <div class="wrap-content">
            <p class="footer-title">Tags sản phẩm:</p>
            <ul class="footer-tags-lists w-clear mb-3">
                <?php //foreach ($tagsProduct as $v) { ?>
                    <li class="mr-1 mb-1"><a class="btn btn-sm btn-danger rounded" href="<?php // echo $v[$sluglang] ?>" target="_blank" title="<?php // echo $v['name' . $lang] ?>"><?php // echo $v['name' . $lang] ?></a></li>
                <?php //} ?>
            </ul>
            <p class="footer-title">Tags tin tức:</p>
            <ul class="footer-tags-lists w-clear">
                <?php //foreach ($tagsNews as $v) { ?>
                    <li class="mr-1 mb-1"><a class="btn btn-sm btn-danger rounded" href="<?php // echo $v[$sluglang] ?>" target="_blank" title="<?php // echo $v['name' . $lang] ?>"><?php // echo $v['name' . $lang] ?></a></li>
                <?php //} ?>
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
    <?php // echo $addons->set('footer-map', 'footer-map', 2); ?>
    <?php echo htmlspecialchars_decode($optsetting['coords_iframe']) ?>
    <?php //echo $addons->set('chi-nhanh', 'chi-nhanh', 1); ?>
    <?php //echo $addons->set('messages-facebook', 'messages-facebook', 2); ?>
    <div id="message-facebook">
        <div class="js-facebook-messenger-box onApp rotate bottom-right cfm rubberBand animated" data-anim="rubberBand">
            <svg id="fb-msng-icon" data-name="messenger icon" xmlns="//www.w3.org/2000/svg" viewBox="0 0 30.47 30.66"><path d="M29.56,14.34c-8.41,0-15.23,6.35-15.23,14.19A13.83,13.83,0,0,0,20,39.59V45l5.19-2.86a16.27,16.27,0,0,0,4.37.59c8.41,0,15.23-6.35,15.23-14.19S38,14.34,29.56,14.34Zm1.51,19.11-3.88-4.16-7.57,4.16,8.33-8.89,4,4.16,7.48-4.16Z" transform="translate(-14.32 -14.34)" style="fill:#fff"></path></svg>
            <svg id="close-icon" data-name="close icon" xmlns="//www.w3.org/2000/svg" viewBox="0 0 39.98 39.99"><path d="M48.88,11.14a3.87,3.87,0,0,0-5.44,0L30,24.58,16.58,11.14a3.84,3.84,0,1,0-5.44,5.44L24.58,30,11.14,43.45a3.87,3.87,0,0,0,0,5.44,3.84,3.84,0,0,0,5.44,0L30,35.45,43.45,48.88a3.84,3.84,0,0,0,5.44,0,3.87,3.87,0,0,0,0-5.44L35.45,30,48.88,16.58A3.87,3.87,0,0,0,48.88,11.14Z" transform="translate(-10.02 -10.02)" style="fill:#fff"></path></svg>
        </div>
        <div class="js-facebook-messenger-container">
            <div class="js-facebook-messenger-top-header">
                <span><?=$setting['name'.$lang]?></span>
            </div>
            <div class="fb-page" data-href="<?=$optsetting['fanpage']?>" data-tabs="messages" data-small-header="true" data-height="300" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="<?=$optsetting['fanpage']?>" class="fb-xfbml-parse-ignore"><a href="<?=$optsetting['fanpage']?>">Facebook</a></blockquote></div>
        </div>
    </div>
</div>
<?php if (\Request::getRequestUri() != 'gio-hang') { ?>
<div>
    <a class="cart-fixed text-decoration-none" href="{{ route('giohang') }}" title="Giỏ hàng">
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
<!-- <?php //if ($deviceType != 'mobile') { ?>
    <div class="hotline-fix">
        <a href="tel:<?php // echo preg_replace('/[^0-9]/', '', $optsetting['hotline']); ?>" class="text-decoration-none">HOTLINE<span><?php // echo $optsetting['hotline'] ?></span></a>
    </div>
<?php //} ?> -->
<!-- <a href="javascript:void();" class="btn-datlich" data-toggle="modal" data-target=".booking"><i class="far fa-calendar-alt"></i></a> -->