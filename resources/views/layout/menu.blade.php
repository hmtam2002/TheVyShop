<?php
use App\Models\NewCate;
use App\Models\NewItem;
use App\Models\NewSub;
use App\Models\ProductCate;
use App\Models\ProductItem;
use App\Models\ProductSub;
$sluglang = 'slugvi';
?>
<div class="header d-flex ">
    <div class="header-logo">
        <div class="wrap-content d-flex align-items-center justify-content-lg-between justify-content-center">
            <div class="logo ">
                <a class="logo-header" href="">
                    <img src="{{ asset('thumbs/500x100x2/upload/photo/' . $logo->photo) }}" alt="<?= $setting['name'.$lang] ?>">
                </a>
            </div>
        </div>
    </div>
    <div class="header-index">
        <div class="header-top d-flex justify-content-lg-between">
            <p class="info-header"><?= $slogan['name' . $lang] ?></p>            
            <p class="info-header"><i class="bi bi-telephone-fill"></i> Hotline: <?= $func->formatPhone($optsetting['hotline']) ?></p>
            <?php if (count($social)) { ?>
                <div class="social social-header d-flex align-items-center">
                    <?php foreach ($social as $k => $v) { ?>
                        <a href="<?= $v['link'] ?>" target="_blank" class="text-decoration-none mr-2">
                            <img class="lazy" src="{{ asset('thumbs/20x20x2/upload/photo/' . $v->photo) }}" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" style="opacity: 1;">
                        </a>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
        <hr class="hr-header-top">
        <div class="w-menu">
            <div class="menu">
                <div class="wrap-content">
                    <ul class="d-flex align-items-center justify-content-between">
                        <li><a class="<?php if (\Request::getRequestUri() == '' || \Request::getRequestUri() == '/homepage') echo 'active'; ?> transition" href="" title="Trang chủ">Trang chủ</a></li>
                        <li><a class="<?php if (\Request::getRequestUri() == 'gioi-thieu') echo 'active'; ?> transition" href="{{ route('gioithieu') }}" title="Giới thiệu">Giới thiệu</a></li>
                        <li>
                            <a class="<?php if (\Request::getRequestUri() == 'dich-vu') echo 'active'; ?> transition" href="dich-vu" title="Dịch Vụ In">Dịch Vụ In</a>
                            <?php if (count($dichvucap1)) { ?>
                                <ul>
                                    <?php foreach ($dichvucap1 as $klist => $vlist) {
                                        // $spcat = $d->rawQuery("select name$lang, slugvi, slugen, id from #_news_cat where id_list = ? and find_in_set('hienthi',status) order by numb,id desc", array($vlist['id']));
                                        $spcat = NewCate::where(['id_list' => $vlist['id'], 'status' => 'hienthi'])->get(); ?>
                                        <li>
                                            <a class="has-child transition" title="<?= $vlist['name' . $lang] ?>" href="<?= $vlist[$sluglang] ?>"><?= $vlist['name' . $lang] ?></a>
                                            <?php if (!empty($spcat)) { ?>
                                                <ul>
                                                    <?php foreach ($spcat as $kcat => $vcat) {
                                                        // $spitem = $d->rawQuery("select name$lang, slugvi, slugen, id from #_news_item where id_cat = ? and find_in_set('hienthi',status) order by numb,id desc", array($vcat['id']));
                                                        $spitem = NewItem::where(['id_cat' => $vcat['id'], 'status' => 'hienthi'])->get();
                                                         ?>
                                                        <li>
                                                            <a class="has-child transition" title="<?= $vcat['name' . $lang] ?>" href="<?= $vcat[$sluglang] ?>"><?= $vcat['name' . $lang] ?></a>
                                                            <?php if (!empty($spitem)) { ?>
                                                                <ul>
                                                                    <?php foreach ($spitem as $kitem => $vitem) {
                                                                        // $spsub = $d->rawQuery("select name$lang, slugvi, slugen, id from #_news_sub where id_item = ? and find_in_set('hienthi',status) order by numb,id desc", array($vitem['id']));
                                                                        $spsub = NewSub::where(['id_item' => $vitem['id'], 'status' => 'hienthi'])->get(); ?>
                                                                        <li>
                                                                            <a class="has-child transition" title="<?= $vitem['name' . $lang] ?>" href="<?= $vitem[$sluglang] ?>"><?= $vitem['name' . $lang] ?></a>
                                                                            <?php if (!empty($spsub)) { ?>
                                                                                <ul>
                                                                                    <?php foreach ($spsub as $ksub => $vsub) { ?>
                                                                                        <li>
                                                                                            <a class="transition" title="<?= $vsub['name' . $lang] ?>" href="<?= $vsub[$sluglang] ?>"><?= $vsub['name' . $lang] ?></a>
                                                                                        </li>
                                                                                    <?php } ?>
                                                                                </ul>
                                                                            <?php } ?>
                                                                        </li>
                                                                    <?php } ?>
                                                                </ul>
                                                            <?php } ?>
                                                        </li>
                                                    <?php } ?>
                                                </ul>
                                            <?php } ?>
                                        </li>
                                    <?php } ?>
                                </ul>
                            <?php } ?>
                        </li>
                        <li>
                            <a class="<?php if (\Request::getRequestUri() == 'san-pham') echo 'active'; ?> transition" href="san-pham" title="Mẫu sản phẩm">Mẫu Sản Phẩm</a>
                            <?php if (count($proListMenu)) { ?>
                                <ul>
                                    <?php foreach ($proListMenu as $klist => $vlist) {
                                        // $spcat = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_cat where id_list = ? and find_in_set('hienthi',status) order by numb,id desc", array($vlist['id']));
                                        $spcat = ProductCate::where(['id_list' => $vlist['id'], 'status' => 'hienthi'])->get(); ?>
                                        <li>
                                            <a class="has-child transition" title="<?= $vlist['name' . $lang] ?>" href="<?= $vlist[$sluglang] ?>"><?= $vlist['name' . $lang] ?></a>
                                            <?php if (!empty($spcat)) { ?>
                                                <ul>
                                                    <?php foreach ($spcat as $kcat => $vcat) {
                                                        // $spitem = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_item where id_cat = ? and find_in_set('hienthi',status) order by numb,id desc", array($vcat['id'])); 
                                                        $spitem = ProductItem::where(['id_cat' => $vlist['id'], 'status' => 'hienthi'])->get();?>
                                                        <li>
                                                            <a class="has-child transition" title="<?= $vcat['name' . $lang] ?>" href="<?= $vcat[$sluglang] ?>"><?= $vcat['name' . $lang] ?></a>
                                                            <?php if (!empty($spitem)) { ?>
                                                                <ul>
                                                                    <?php foreach ($spitem as $kitem => $vitem) {
                                                                        // $spsub = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_sub where id_item = ? and find_in_set('hienthi',status) order by numb,id desc", array($vitem['id']));
                                                                        $spsub = ProductSub::where(['id_item' => $vitem['id'], 'status' => 'hienthi'])->get(); ?>
                                                                        <li>
                                                                            <a class="has-child transition" title="<?= $vitem['name' . $lang] ?>" href="<?= $vitem[$sluglang] ?>"><?= $vitem['name' . $lang] ?></a>
                                                                            <?php if (!empty($spsub)) { ?>
                                                                                <ul>
                                                                                    <?php foreach ($spsub as $ksub => $vsub) { ?>
                                                                                        <li>
                                                                                            <a class="transition" title="<?= $vsub['name' . $lang] ?>" href="<?= $vsub[$sluglang] ?>"><?= $vsub['name' . $lang] ?></a>
                                                                                        </li>
                                                                                    <?php } ?>
                                                                                </ul>
                                                                            <?php } ?>
                                                                        </li>
                                                                    <?php } ?>
                                                                </ul>
                                                            <?php } ?>
                                                        </li>
                                                    <?php } ?>
                                                </ul>
                                            <?php } ?>
                                        </li>
                                    <?php } ?>
                                </ul>
                            <?php } ?>
                        </li>
                        <li>
                            <a class="has-child <?php if (\Request::getRequestUri() == 'tin-tuc') echo 'active'; ?> transition" href="tin-tuc" title="Tin tức">Tin tức</a>
                            <?php if (count($newsListMenu)) { ?>
                                <ul>
                                    <?php foreach ($newsListMenu as $klist => $vlist) {
                                        $ttcat = $d->rawQuery("select name$lang, slugvi, slugen, id from #_news_cat where id_list = ? and find_in_set('hienthi',status) order by numb,id desc", array($vlist['id'])); ?>
                                        <li>
                                            <a class="has-child transition" title="<?= $vlist['name' . $lang] ?>" href="<?= $vlist[$sluglang] ?>"><?= $vlist['name' . $lang] ?></a>
                                            <?php if (!empty($ttcat)) { ?>
                                                <ul>
                                                    <?php foreach ($ttcat as $kcat => $vcat) {
                                                        $ttitem = $d->rawQuery("select name$lang, slugvi, slugen, id from #_news_item where id_cat = ? and find_in_set('hienthi',status) order by numb,id desc", array($vcat['id'])); ?>
                                                        <li>
                                                            <a class="has-child transition" title="<?= $vcat['name' . $lang] ?>" href="<?= $vcat[$sluglang] ?>"><?= $vcat['name' . $lang] ?></a>
                                                            <?php if (!empty($ttitem)) { ?>
                                                                <ul>
                                                                    <?php foreach ($ttitem as $kitem => $vitem) {
                                                                        $ttsub = $d->rawQuery("select name$lang, slugvi, slugen, id from #_news_sub where id_item = ? and find_in_set('hienthi',status) order by numb,id desc", array($vitem['id'])); ?>
                                                                        <li>
                                                                            <a class="has-child transition" title="<?= $vitem['name' . $lang] ?>" href="<?= $vitem[$sluglang] ?>"><?= $vitem['name' . $lang] ?></a>
                                                                            <?php if (!empty($ttsub)) { ?>
                                                                                <ul>
                                                                                    <?php foreach ($ttsub as $ksub => $vsub) { ?>
                                                                                        <li>
                                                                                            <a class="transition" title="<?= $vsub['name' . $lang] ?>" href="<?= $vsub[$sluglang] ?>"><?= $vsub['name' . $lang] ?></a>
                                                                                        </li>
                                                                                    <?php } ?>
                                                                                </ul>
                                                                            <?php } ?>
                                                                        </li>
                                                                    <?php } ?>
                                                                </ul>
                                                            <?php } ?>
                                                        </li>
                                                    <?php } ?>
                                                </ul>
                                            <?php } ?>
                                        </li>
                                    <?php } ?>
                                </ul>
                            <?php } ?>
                        </li>
                        <li><a class="<?php if (\Request::getRequestUri() == 'lien-he') echo 'active'; ?> transition" href="lien-he" title="Liên hệ">Liên hệ</a></li>
                        <!-- <li class="ml-auto">
                            <div class="search d-flex align-items-center justify-content-between">
                                <input type="text" id="keyword" placeholder="Nhập từ khóa tìm kiếm..." onkeypress="doEnter(event,'keyword');" value="<?= (!empty($_GET['keyword'])) ? $_GET['keyword'] : '' ?>" />
                                <p onclick="onSearch('keyword');" class="d-flex align-items-center justify-content-center"><i class="bi bi-search"></i></p>
                            </div>
                        </li> -->
                    </ul>
                </div>
            </div>
            @include('layout.mmenu')
            <?php //include TEMPLATE . LAYOUT . "mmenu.php"; ?>
        </div>
    </div>
</div>