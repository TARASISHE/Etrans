<?php
/**
 * 
 *Single Post Template: Услуга
 *Description: This part is optional, but helpful for describing the Post Template
 */
get_header();
?>
<main class="service-single home-page">
<?php
    load_template( get_template_directory() . '/template-parts/header-text.php', true );
   ?>
<section class="pick-up-car-section">
		
<div class="line">
	<div class="truck-modal">
		<img class="truck" src="<?php echo get_template_directory_uri()."/assets/img/etrans-truck.png"?>" alt="">
		<div class="text-block">
			<div class="h2">
			<?php pll_e('Подбор авто и 100% подача в любую точку за')?> <span class="red-text">
<?php pll_e('1,5 часа') ?>
</span>
			</div>
			<button class="main-red-btn pop-up-btn" data-id="get-price">
			<?php pll_e('Подобрать машину') ?>
			<img src="<?php echo get_template_directory_uri()."/assets/img/Arrow-long.png"?>" alt="">
			</button>
		</div>
	</div>
</div>
</section>
<section class="why-we-section">
			<div class="back-text">
			<?php pll_e('О КОМПАНИИ') ?>
			</div>
		<div class="text-block">
			<hr>
		<div class="wrapper">
		<div class="h1">
		<?php pll_e('ЧЕМ') ?> <span class="red-text"><?php pll_e('E-TRANS') ?></span> <?php pll_e('ЛУЧШЕ?') ?>
		</div>
		<div class="h2">
		<?php pll_e('Доставим малогабаритный, опасный и крупногабаритный груз в любую точку города, страны и мира') ?>
		</div>
		</div>
	</div>
<div class="container">
	<div class="advantages">
		<div class="advantage">
		<img class="svg" src="<?php echo get_template_directory_uri()."/assets/img/shield.svg"?>" alt="">
		<div class="h2">
		<?php pll_e('Автострахование любого груза') ?>
		</div>
		<div class="h3">
		<?php pll_e('Для любой перевозки мы предоставляем полис на 1,5 миллиона гривен, за который вам не нужно доплачивать. Все расходы на страховку берет на себя наш партнер. При наступлении страхового случая компания E-TRANS компенсирует весь ущерб без долгих разбирательств. ')?>
		</div>
		</div>
		<div class="advantage">
		<img class="svg" src="<?php echo get_template_directory_uri()."/assets/img/place.svg"?>" alt="">
		<div class="h2">
		<?php pll_e('Отслеживание автомобиля с грузом') ?>

		</div>
		<div class="h3">
		<?php pll_e('Мы используем современные отслеживающие GPS-системы на каждом грузовом автомобиле. Благодаря этому вы можете в любой момент получить информацию о местоположении вашего груза. ') ?>
		</div>
		</div>
		<div class="advantage">
		<img class="svg" src="<?php echo get_template_directory_uri()."/assets/img/speed.svg"?>" alt="">
		<div class="h2">
		<?php pll_e('Скорость на каждом этапе') ?>
		</div>
		<div class="h3">
<?php pll_e('Каждый менеджер E-TRANS работает максимально быстро, грамотно подбирая авто и составляя логистическую карту в короткие сроки.') ?>
		</div>
		</div>
		<div class="advantage">
		<img class="svg svg-transparent" src="<?php echo get_template_directory_uri()."/assets/img/time.svg"?>" alt="">
		<div class="h2">
		<?php pll_e('Всегда на связи и круглосуточная поддержка') ?>
		</div>
		<div class="h3">
		<?php pll_e('Звоните или оставляйте онлайн-заявку в любое время суток и день недели: менеджеры отвечают на них в режиме 24/7/365. Вы можете в любой момент связаться с менеджером, закрепленным за вашим грузом.') ?>
		</div>
		</div>

		<div class="advantage big-adv">
		<img class="svg " src="<?php echo get_template_directory_uri()."/assets/img/user-etrans.svg"?>" alt="">
		<div class="h2">
		<?php pll_e('Индивидуальный подход к каждому клиенту') ?>
		</div>
		<div class="h3">
		<?php pll_e('Становясь клиентом E-TRANS, вы получаете персонального менеджера, с которым можете контактировать в любое время и напрямую.') ?>
		</div>
		</div>

		<div class="advantage big-adv">
		<img class="svg " src="<?php echo get_template_directory_uri()."/assets/img/plan_etrans.svg"?>" alt="">
		<div class="h2">
		<?php pll_e('Гибкость в работе') ?>
		</div>
		<div class="h3">
		<?php pll_e('Подстраиваемся под потребности клиента. Стремимся минимизировать форс-мажорные ситуации, а при их возникновении максимально быстро находим решение.') ?>
		</div>
		</div>

	</div>
</div>
</section>
<section class="our-transport-section">
<div class="container">
	<div class="back-text">
	<?php pll_e('КАТЕГОРИИ ГРУЗОВ') ?>
	</div>
	<div class="h1">
	<?php pll_e('МЫ ИМЕЕМ ПАРТНЕРСКУЮ СЕТЬ ИЗ ') ?>
  <span class="red-text"><?php pll_e('3500 АВТО') ?></span> <?php pll_e('ДЛЯ ГРУЗОПЕРЕВОЗОК') ?>
	</div>
	<div class="transport-types">


		<div class="transport">
			<div class="circle">
				<img  src="<?php echo get_template_directory_uri()."/assets/img/car1.png"?>" alt="">
				<div class="h1">
				2.5
				</div>
			</div>
			<div class="pounds">
				<p>до</p> <p class="red-text">тонн</p>
			</div>
			<div class="h2">
			<?php pll_e('Тип кузова')?>:
			</div>
			<div class="h3 type">
			<?php pll_e('тент, рефрижератор, изотерм, октрытый, цельнометаллический') ?>
			</div>
			<div class="h2">
			<?php pll_e('Д/Ш/В') ?>:
			</div>
			<div class="h3">
			4.2м / 2м / 2.2м
			</div>
			<div class="h2">
			<?php pll_e('Объем') ?>:
			</div>
			<div class="h3">
			20 м3
			</div>
			<div class="h3">
			<?php pll_e('Возможен гидроборт') ?>
			</div>
			<div class="btn-row">
			<button class="main-red-btn pop-up-btn" data-id="get-transport">
			<?php pll_e('Выбрать авто') ?> <img src="<?php echo get_template_directory_uri()."/assets/img/Arrow-long.png"?>" alt="">
			</button>
			</div>
		</div>

		<div class="transport">
			<div class="circle">
				<img src="<?php echo get_template_directory_uri()."/assets/img/car2.png"?>" alt="">
				<div class="h1">
				5
				</div>
			</div>
			<div class="pounds">
				<p>до</p> <p class="red-text">тонн</p>
			</div>
			<div class="h2">
			<?php pll_e('Тип кузова')?>:
			</div>
			<div class="h3 type">
			<?php pll_e('тент, рефрижератор, изотерм, октрытый, цельнометаллический') ?>

			</div>
			<div class="h2">
			<?php pll_e('Д/Ш/В') ?>:
			</div>
			<div class="h3">
			7.2м / 2.45м / 2.8м
			</div>
			<div class="h2">
			<?php pll_e('Объем') ?>:
			</div>
			<div class="h3">
			50 м3
			</div>
			<div class="h3">
			<?php pll_e('Возможен гидроборт') ?> <br>
<?php  pll_e('Возможен манипулятор')?>
			</div>
			<div class="btn-row">
			<button class="main-red-btn pop-up-btn" data-id="get-transport">
			<?php pll_e('Выбрать авто') ?><img src="<?php echo get_template_directory_uri()."/assets/img/Arrow-long.png"?>" alt="">
			</button>
			</div>
		</div>

		<div class="transport">
			<div class="circle">
				<img src="<?php echo get_template_directory_uri()."/assets/img/car3.png"?>" alt="">
				<div class="h1">
				10
				</div>
			</div>
			<div class="pounds">
				<p>до</p> <p class="red-text">тонн</p>
			</div>
			<div class="h2">
			<?php pll_e('Тип кузова')?>:
			</div>
			<div class="h3 type">
			<?php pll_e('тент, рефрижератор, изотерм, октрытый, цельнометаллический') ?>

			</div>
			<div class="h2">
			<?php pll_e('Д/Ш/В') ?>:
			</div>
			<div class="h3">
			8м / 2.45м / 3м
			</div>
			<div class="h2">
			<?php pll_e('Объем') ?>:
			</div>
			<div class="h3">
			60 м3
			</div>
			<div class="h3">
			<?php pll_e('Возможен гидроборт') ?> <br>
<?php  pll_e('Возможен манипулятор')?>
			</div>
			<div class="btn-row">
			<button class="main-red-btn pop-up-btn" data-id="get-transport">
			<?php pll_e('Выбрать авто') ?><img src="<?php echo get_template_directory_uri()."/assets/img/Arrow-long.png"?>" alt="">
			</button>
			</div>
		</div>

		<div class="transport">
			<div class="circle">
				<img src="<?php echo get_template_directory_uri()."/assets/img/car4.png"?>" alt="">
				<div class="h1">
				22
				</div>
			</div>
			<div class="pounds">
				<p>до</p> <p class="red-text">тонн</p>
			</div>
			<div class="h2">
			<?php pll_e('Тип кузова')?>:
			</div>
			<div class="h3 type">
			<?php pll_e('тент, рефрижератор, изотерм, октрытый, цельнометаллический') ?>

			</div>
			<div class="h2">
			<?php pll_e('Д/Ш/В') ?>:
			</div>
			<div class="h3">
			13.6м / 2.5м / 3м
			</div>
			<div class="h2">
			<?php pll_e('Объем') ?>:
			</div>
			<div class="h3">
			96 м3

			</div>
			<div class="h3">
			<?php pll_e('Возможна цистерна') ?> <br>
<?php pll_e('Возможна сцепка') ?>
			</div>
			<div class="btn-row">
			<button class="main-red-btn pop-up-btn" data-id="get-transport">
			<?php pll_e('Выбрать авто') ?><img src="<?php echo get_template_directory_uri()."/assets/img/Arrow-long.png"?>" alt="">
			</button>
			</div>
		</div>

		<div class="transport">
			<div class="circle">
				<img src="<?php echo get_template_directory_uri()."/assets/img/car5.png"?>" alt="">
				<div class="h1">
				40
				</div>
			</div>
			<div class="pounds">
				<p>до</p> <p class="red-text">тонн</p>
			</div>
			<div class="h2">
			<?php pll_e('Тип кузова')?>:
			</div>
			<div class="h3 type">
			20 футов, 40 футов

			</div>
			<div class="h2">
			<?php pll_e('Д/Ш/В') ?>:
			</div>
			<div class="h3">
			12м / 2.4м / 2.6м
			</div>
			<div class="h2">
			<?php pll_e('Объем') ?>:
			</div>
			<div class="h3">
			75м3
			</div>
			<div class="h3">
			
			</div>
			<div class="btn-row">
			<button class="main-red-btn pop-up-btn" data-id="get-transport">
			<?php pll_e('Выбрать авто') ?> <img src="<?php echo get_template_directory_uri()."/assets/img/Arrow-long.png"?>" alt="">
			</button>
			</div>
		</div>

		<div class="transport">
			<div class="circle">
				<img src="<?php echo get_template_directory_uri()."/assets/img/car6.png"?>" alt="">
				<div class="h1">
				100
				</div>
			</div>
			<div class="pounds">
				<p>до</p> <p class="red-text">тонн</p>
			</div>
			<div class="h2">
			<?php pll_e('Тип кузова')?>:
			</div>
			<div class="h3 type">
			<?php pll_e('Открытый') ?>
			</div>
			<div class="h2">
			<?php pll_e('Д/Ш/В') ?>:
			</div>
			<div class="h3">
			18м / 3м
			</div>
			<div class="h2">
			<?php pll_e('Объем') ?>:
			</div>
			<div class="h3">
			96 м3

			</div>
			<div class="h3">
			<?php pll_e('Возможен самозаезд') ?>
			</div>
			<div class="btn-row">
			<button class="main-red-btn pop-up-btn" data-id="get-transport">
			<?php pll_e('Выбрать авто') ?> <img src="<?php echo get_template_directory_uri()."/assets/img/Arrow-long.png"?>" alt="">
			</button>
			</div>
		</div>
	</div>
</div>
</section>
		
<section class="main-form-section home-form" style="background-image: url(<?php echo get_template_directory_uri()."/assets/img/main-form-back.png"?>);">
		<?php load_template( get_template_directory() . '/template-parts/main-form.php', true );?>
</section>
<section class="info-section">
<div class="container">

<?php 
if ( have_posts() ) {
    the_post();
    if ( '' !== get_the_content() ) {
        the_content();
    } else {
        echo '<h1>' . get_the_title() . '</h1>';
    }
}
?>

</div>
            
</section>
<section class="clients-section">
            <?php
                load_template( get_template_directory() . '/template-parts/clients.php', true );
            ?>
</section>
</main>
<?php 
get_footer();