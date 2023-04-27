<div class="img-wrapper">
	<img class="header-track" src=<?php echo get_template_directory_uri()."/assets/img/header-track.png"?> alt="">
	<div class="white-back"></div>
	</div>
		<section class="header-section">
		<div class="container">
			<div class="header-text">
				<p>
				<?php pll_e('Перевозка грузов с персональным менеджером 24/7'); ?>
				</p>
				<div class="h1">
                    <?php 
                    if(is_page(pll_get_post(29))){
                    pll_e("Транспортная компания");                      
                    }else{
						if(have_posts()){
							while(have_posts()){
								the_post();
                        $title = carbon_get_post_meta(get_the_ID(), 'main-name');
						
                        if(strlen($title) == 0){
                         the_title();
                        }else{
							echo $title;
						}
							}
						}
                    }
                    ?>
			
				</div>
				<div class="h2">
					<?php pll_e('Грузоперевозки по Украине, странам ЕС и СНГ дешевле') ?>
				 <span class="red-text"><?php pll_e('на 5-9%,') ?></span>
				 <?php pll_e(' чем на рынке услуг')?>
				</div>
				<div class="h3">
					<hr>
				<?php pll_e('Узнайте цену перевозки вашего груза, рассчитаем всего за 10 минут') ?>
				</div>
				<button data-id="get-price" class="main-red-btn pop-up-btn ">
				<?php pll_e('Рассчитать стоимость ') ?>
			</div>
		</div>
		<img class="dots" src="<?php echo get_template_directory_uri()."/assets/img/dots.png"?>" alt="">
		</section>