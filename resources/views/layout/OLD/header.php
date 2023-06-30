<!-- <div class="header">
	<div class="header-top">
		<div class="wrap-content d-flex align-items-center justify-content-between">
			<p class="info-header"><i class="bi bi-envelope"></i>Email: <?=$optsetting['email']?></p>
			<p class="info-header"><i class="bi bi-telephone-fill"></i> Hotline: <?=$func->formatPhone($optsetting['hotline'])?></p>
			<?php if(count($social)) { ?>
                <div class="social social-header d-flex align-items-center">
                    <?php foreach($social as $k => $v) { ?>
                        <a href="<?=$v['link']?>" target="_blank" class="text-decoration-none mr-2">
							<img class="lazy" data-src="<?=THUMBS?>/30x30x2/<?=UPLOAD_PHOTO_L.$v['photo']?>" alt="<?=$v['name'.$lang]?>" title="<?=$v['name'.$lang]?>" >
                        </a>
                    <?php } ?>
                </div>
            <?php } ?>
			<!-- <div class="lang-header">
	            <a href="ngon-ngu/vi/"><img src="<?=THUMBS?>/35x25x1/assets/images/vi.jpg" alt="Vietnam" title="Vietnam" ></a>
	            <a href="ngon-ngu/en/"><img src="<?=THUMBS?>/35x25x1/assets/images/en.jpg" alt="English" title="English" ></a>
	        </div> -->
	        <!-- <?php if(array_key_exists($loginMember, $_SESSION) && $_SESSION[$loginMember]['active'] == true) { ?>
	        	<div class="user-header">
		        	<a href="account/thong-tin">
		        		<span>Hi, <?=$_SESSION[$loginMember]['username']?></span>
		        	</a>
		        	<a href="account/dang-xuat">
		        		<i class="fas fa-sign-out-alt"></i>
		        		<span><?=dangxuat?></span>
		        	</a>
		        </div>
	        <?php } else { ?>
	        	<div class="user-header">
		        	<a href="account/dang-nhap">
		        		<i class="fas fa-sign-in-alt"></i>
		        		<span><?=dangnhap?></span>
		        	</a>
		        	<a href="account/dang-ky">
		        		<i class="fas fa-user-plus"></i>
		        		<span><?=dangky?></span>
		        	</a>
		        </div>
	        <?php } ?> -->
		<!-- </div>
	</div> -->
	<!-- <div class="header-bottom">
		<div class="wrap-content d-flex align-items-center justify-content-lg-between justify-content-center">
			<div class="logo "> 
				<a class="logo-header" href="">
					<?=$func->getImage(['upload' => UPLOAD_PHOTO_L,'sizes' => '180x124x2', 'image' => $logo['photo'], 'alt' => $setting['name'.$lang]])?>
				</a>
			</div>
		</div>
	</div> -->
<!-- </div> -->