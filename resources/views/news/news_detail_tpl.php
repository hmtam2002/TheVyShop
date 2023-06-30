<div class="row">
    <div class="col-12 mb-3">
        <div class="title-detail-main"><?= $rowDetail['name' . $lang] ?></div>
        <div class="time-main"><i class="bi bi-calendar-check-fill"></i><span class="mr-2"><?= date("d/m/Y h:i A", $rowDetail['date_created']) ?></span> <i class="bi bi-eye-fill"></i> <?= $rowDetail['view'] ?> <?= luotxem ?></div>
        <?php if (!empty($rowDetail['content' . $lang])) { ?>
            <div class="meta-toc">
                <a class="mucluc-dropdown-list_button"></a>
                <div class="box-readmore">
                    <ul class="toc-list" data-toc="article" data-toc-headings="h1, h2, h3"></ul>
                </div>
            </div>
            <div class="content-main content-text w-clear" id="toc-content"><?= htmlspecialchars_decode($rowDetail['content' . $lang]) ?></div>
            <div class="share">
                <b><?= chiase ?>:</b>
                <div class="social-plugin w-clear">
                    <?php
                    $params = array();
                    $params['oaid'] = $optsetting['oaidzalo'];
                    echo $func->markdown('social/share', $params);
                    ?>
                </div>
            </div>
        <?php } else { ?>
            <div class="alert alert-warning w-100" role="alert">
                <strong><?= noidungdangcapnhat ?></strong>
            </div>
        <?php } ?>
    </div>
    <div class="col-12">
        <?php if (!empty($news)) { ?>
            <div class="share othernews mb-3">
                <b><?= baivietkhac ?>:</b>
                <ul class="list-news-other">
                    <?php foreach ($news as $k => $v) { ?>
                        <li><i class="bi bi-stop-fill"></i><a class="text-decoration-none" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></a></li>
                    <?php } ?>
                </ul>
                <div class="pagination-home w-100"><?= (!empty($paging)) ? $paging : '' ?></div>
            </div>
        <?php } ?>
    </div>
</div>