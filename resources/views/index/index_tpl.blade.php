<?php if (count($dichvu)) { ?>
<div class="dichvu-index">
    <div class="tieude">
        <div class="title-main">ƯU ĐÃI KHÁCH HÀNG</div>
        <img class="gach " src="assets/images/gach.png" alt="">
    </div>
    <div class="row align-items-center">
        <div class="dichvu-info col-lg-7">
            <div class="dichvu_contain">
                <div class="slick-v-3">
                    <?php foreach ($dichvu as $k => $v) { ?>
                    <div class="item_dichvu_outside">
                        <div class="item-dichvu d-flex align-items-center">
                            <p class="pic-dichvu m-0 rounded-circle overflow-hidden">
                                <a class="scale-img" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
                                    <img class="lazy w-100"
                                        onerror="this.src='{{ asset("thumbs/155x155x1/assets/images/noimage.png") }}';"
                                        data-src="{{ asset('thumbs/155x155x1/upload/news/'. $v->photo) }}"
                                        alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" />
                                </a>
                            </p>
                            <div class="info-dichvu">
                                <h3 class="mb-0">
                                    <a class="name-dichvu text-split text-decoration-none" href="<?= $v[$sluglang] ?>"
                                        title="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></a>
                                </h3>
                                <p class="desc-newsnb text-split3 m-0"><?= $v['desc' . $lang] ?></p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="dichvu-pic col-lg-5">
            <div class="pic-dv ">
                <a class="img-dv" href="">
                    <?= $func->getImage(['upload' => UPLOAD_PHOTO_L, 'sizes' => '540x510x1', 'image' => $anhdichvu['photo'], 'alt' => $setting['name' . $lang]]) ?>
                </a>
            </div>
        </div>
    </div>
</div>
<?php } ?>

<?php if (count($tieuchi)) { ?>
<div class="tieuchi-index">
    <div class="wrap-tieuchi padding-top-bottom">
        <div class="wrap-content">
            <div class="owl-page owl-carousel owl-theme" data-xsm-items="2:5" data-sm-items="2:5" data-md-items="3:10"
                data-lg-items="3:15" data-xlg-items="3:20" data-rewind="1" data-autoplay="1" data-loop="0"
                data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500"
                data-dots="0" data-nav="0" data-navtext="" data-navcontainer="">
                <?php foreach ($tieuchi as $k => $v) { ?>
                <div class="item-tieuchi">
                    <p class="pic-tieuchi">
                        <img class="lazy w-100" onerror="this.src='{{ asset("thumbs/453x290x1/assets/images/noimage.png") }}';"
                            data-src="{{ asset('thumbs/453x290x1/upload/news/' . $v['photo']) }}"
                            alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" />
                    </p>
                    <p class="name-tieuchi text-split text-center"> <?= $v['name' . $lang] ?></p>

                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<?php } ?>

<?php if (count($productHot)) { ?>
<div class="w-pronb">
    <div class="wrap-content padding-top-bottom">
        <div class="tieude">
            <div class="title-main">THỜI TRANG NỮ</div>
            <img class="gach " src="assets/images/gach.png" alt="">
        </div>
        <div class="paging-product"></div>
    </div>
</div>
<?php } ?>

<?php if (count($gioithieus)) { ?>
<div class="gioithieu-index">
    <div class="wrap-content padding-top-bottom">
        <div class="gioithieu-box d-flex flex-wrap">
            <?php foreach ($gioithieus as $gioithieu) : ?>
            <div class="pic-gioithieu d-flex justify-content-lg-between">
                <div class="big-pic scale-img">
                    <img class="lazy w-100" onerror="this.src='{{ asset("thumbs/450x447x1/assets/images/noimage.png") }}';"
                        data-src="{{ asset('thumbs/450x447x1/upload/news/' . $gioithieu['photo']) }}"
                        alt="<?= $gioithieu['name' . $lang] ?>" title="<?= $gioithieu['name' . $lang] ?>" />
                </div>
                <div class="small-pic scale-img">
                    <img class="lazy w-100" onerror="this.src='{{ asset("thumbs/283x320x1/assets/images/noimage.png") }}';"
                        data-src="{{ asset('thumbs/283x320x1/upload/news/' . $gioithieu['photo1']) }}"
                        alt="<?= $gioithieu['name' . $lang] ?>" title="<?= $gioithieu['name' . $lang] ?>" />
                </div>
            </div>
            <div class="info-gioithieu text-center">
                <div class="name-gioithieu">
                    <?= htmlspecialchars_decode($gioithieu['name' . $lang]) ?>
                </div>
                <div class="desc-gioithieu">
                    <?= htmlspecialchars_decode($gioithieu['desc' . $lang]) ?>
                </div>
                <div class="content-gioithieu text-split7">
                    <?= htmlspecialchars_decode($gioithieu['content' . $lang]) ?>
                </div>
                <div class="xemthem">
                    <a href="gioi-thieu" title="<?= gioithieu ?>">XEM THÊM</a>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
</div>
<?php } ?>

<?php if (count($taisaochon)) { ?>
<div class="taisaochon-index">
    <div class="wrap-content padding-top-bottom">
        <div class="row">
            <div class="taisao-info col-lg-6">
                <div class="taisaochon-tieude">TẠI SAO CHỌN CHÚNG TÔI</div>
                <p class="desc-taisao">Với 4 năm kinh nghiệm in áo thun, chúng tôi cam kết hoàn tiền 100% cho bất cứ sản
                    phẩm nào làm không đúng yêu cầu của quý khách</p>
                <div class="slick-taisaochon">
                    <?php foreach ($taisaochon as $k => $v) { ?>
                    <div class="item-taisao d-flex">
                        <img class="tich" src="assets/images/tich.png" alt="">
                        <p class="name-cauhoi text-split1 "> <a href="<?= $v[$sluglang] ?>"
                                title="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></a></p>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="cauhoi-info col-lg-6">
                <div class="taisaochon-tieude">CÂU HỎI THƯỜNG GẶP</div>
                <div class="slick-cauhoi">
                    <?php foreach ($taisaochon as $k => $v) { ?>
                    <div class="item-cauhoi">
                        <div class="text-cauhoi d-flex">
                            <img class="chamhoi" src="assets/images/chamhoi.png" alt="">
                            <p class="name-cauhoi text-split1 "> <a href=""><?= $v['name' . $lang] ?></a></p>
                        </div>
                        <p class="desc-cauhoi text-split3 "><?= $v['desc' . $lang] ?></p>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>

<?php if (count($banner)) { ?>
<div class="banner-index">
    <div class="wrap-tieuchi padding-top-bottom">
        <div class="owl-page owl-carousel owl-theme" data-xsm-items="1:0" data-sm-items="1:0" data-md-items="1:0"
            data-lg-items="1:0" data-xlg-items="1:0" data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0"
            data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500" data-dots="0"
            data-nav="0" data-navtext="" data-navcontainer="">
            <?php foreach ($banner as $k => $v) { ?>
            <div class="banner-pic">
                <a href="">
                    <img class="lazy w-100" onerror="this.src='{{ asset("thumbs/1366x300x1/assets/images/noimage.png") }}';"
                        data-src="{{ asset('thumbs/1366x300x1/upload/photo/' . $v->photo) }}"
                        alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" />
                </a>

            </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php } ?>

<?php if (count($newsHot)) { ?>
<div class="wrap-newsnb padding-top-bottom">
    <div class="wrap-content">
        <div class="tieude">
            <div class="title-main">BÀI VIẾT MỚI NHẤT</div>
            <img class="gach " src="assets/images/gach.png" alt="">
        </div>
        <div class="newHot-info">
            <div class="owl-page owl-carousel owl-theme" data-xsm-items="2:5" data-sm-items="2:5" data-md-items="2:10"
                data-lg-items="3:15" data-xlg-items="3:20" data-rewind="1" data-autoplay="0" data-loop="0"
                data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500"
                data-dots="0" data-nav="0" data-navtext="" data-navcontainer="">
                <?php foreach ($newsHot as $k => $v) { ?>
                <div class="item-newsnb text-center">
                    <p class="pic-newsnb">
                        <a class="scale-img" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
                            <img class="lazy w-100"
                                onerror="this.src='<?= THUMBS ?>/576x432x1/assets/images/noimage.png';"
                                data-src="<?= THUMBS ?>/576x432x1/<?= UPLOAD_NEWS_L . $v['photo'] ?>"
                                alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" />
                        </a>
                    </p>
                    <div class="info-newsnb">
                        <p class="time-newshome"><img class="time_03_03" src="assets/images/time_03_03.png" alt="">
                            <?= date("d/m/Y", $v['date_created']) ?></p>
                        <p class="newshome"> Ngày đăng : <?= date("d/m/Y", $v['date_created']) ?></p>
                        <h3 class="mb-0">
                            <a class="name-newsnb text-split1 text-decoration-none" href="<?= $v[$sluglang] ?>"
                                title="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></a>
                        </h3>

                        <p class="desc-newsnb text-split3"><?= $v['desc' . $lang] ?></p>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<?php } ?>


<?php if (count($partner)) { ?>
<div class="wrap-brand">
    <div class="tieude">
        <div class="title-main">ĐỐI TÁC KHÁCH HÀNG</div>
        <img class="gach " src="assets/images/gach.png" alt="">
    </div>
    <div class="brand-info">
        <div class="wrap-content padding-top-bottom">
            <div class="owl-page owl-carousel owl-theme" data-xsm-items="2:10" data-sm-items="3:10" data-md-items="4:10"
                data-lg-items="6:15" data-xlg-items="6:15" data-rewind="1" data-autoplay="1" data-loop="0"
                data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500"
                data-dots="0" data-nav="1"
                data-navtext="<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-chevron-left' width='44' height='45' viewBox='0 0 24 24' stroke-width='1.5' stroke='#2c3e50' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><polyline points='15 6 9 12 15 18' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-chevron-right' width='44' height='45' viewBox='0 0 24 24' stroke-width='1.5' stroke='#2c3e50' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><polyline points='9 6 15 12 9 18' /></svg>"
                data-navcontainer=".control-brand">
                <?php foreach ($partner as $v) { ?>
                <div c>
                    <a class="brand text-decoration-none" href="<?= $v['link'] ?>" target="_blank"
                        title="<?= $v['name' . $lang] ?>">
                        <img class="lazy w-100" onerror="this.src='<?= THUMBS ?>/190x100x1/assets/images/noimage.png';"
                            data-src="<?= THUMBS ?>/190x100x1/<?= UPLOAD_PHOTO_L . $v['photo'] ?>"
                            alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" />
                    </a>
                </div>
                <?php } ?>
            </div>
            <div class="control-brand control-owl transition"></div>
        </div>
    </div>
</div>
<?php } ?>

<?php if (count($nhanxet)) { ?>
<div class="wrap-nhanxet">
    <div class="wrap-content">
        <div class="tieude">
            <div class="title-main">NHẬN XÉT KHÁCH HÀNG</div>
            <img class="gach " src="assets/images/gach.png" alt="">
        </div>
        <div class="nhanxet-info">
            <div class="owl-page owl-carousel owl-theme" data-xsm-items="2:5" data-sm-items="2:5" data-md-items="2:10"
                data-lg-items="3:15" data-xlg-items="3:20" data-rewind="1" data-autoplay="0" data-loop="0"
                data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500"
                data-dots="0" data-nav="0" data-navtext="" data-navcontainer="">
                <?php foreach ($nhanxet as $k => $v) { ?>
                <div class="item-nhanxet text-center">
                    <div class="contain-nhanxet">
                        <p class="desc-nhanxet text-split3"><?= $v['desc' . $lang] ?></p>
                        <div class="name-icon-nhanxet text-split1 d-flex justify-content-end align-items-baseline">
                            <p class="name-nhanxet"><?= $v['name' . $lang] ?></p>
                            <img class="" src="assets/images/nhanxet.png" alt="">
                        </div>
                    </div>
                    <p class="avatar"> <img class="lazy"
                            onerror="this.src='<?= THUMBS ?>/90x90x1/assets/images/noimage.png';"
                            data-src="<?= THUMBS ?>/90x90x1/<?= UPLOAD_NEWS_L . $v['photo'] ?>"
                            alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" /></p>
                </div>

                <?php } ?>
            </div>
        </div>
    </div>
</div>
<?php } ?>