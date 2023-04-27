<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package etrans
 */

?>
<!doctype html>
<html style="margin-top: 0px!important;" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="preconnect" href="https://fonts.gstatic.com">

<link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@100;400;500;700;900&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,500&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body>
<div class="pop-up-wrapper close">
<?php load_template( get_template_directory() . '/template-parts/modal.php', true );?>
</div>

<div class="page page-<?php echo the_ID() ?>">
<header>
		<div class="container">
		<a  href="<?php the_permalink(29) ?>" class="logo">
		<img class="svg" src="<?php echo get_template_directory_uri().'/assets/img/logo-etrans.svg'?>" alt="">
			<!-- <p>e</p><span>trans</span> -->
</a>
		<nav>
		<?php load_template( get_template_directory() . '/template-parts/desctop-nav.php', true );?>
		</nav>
		<div class="small-nav-bars">
		<i class="fas fa-bars"></i>
		</div>
		<div class="contact-phone-numbers">
			<?php
					$numbers = carbon_get_theme_option('numbers');
					foreach($numbers as $number){
						?>
							<a href="tel:<?php echo $number['num']?>" ><?php echo $number['num']?></a>
						<?
					}
				
			?>
		</div>
		<button  class="get-price pop-up-btn main-red-btn" data-id="get-price">
		Рассчитать стоимость
		</button>
		</div>
		<div class="mob-nav">
		<i class="close far fa-times-circle"></i>
		<div class="logo">
		<img class="svg" src="<?php echo get_template_directory_uri().'/assets/img/logo-etrans.svg'?>" alt="">
			<!-- <p>e</p><span>trans</span> -->
		</div>

		<?php
		require get_template_directory() . '/template-parts/desctop-nav.php';;
		 ?>
		<div class="contacts">
			<h2>Наши контакты</h2>
			<?php
					$numbers = carbon_get_theme_option('numbers');
					foreach($numbers as $number){
						?>	
							<div class="wrapper">
							<img src="<?php echo get_template_directory_uri()."/assets/img/phone.png"?>" alt="">
							<a href="tel:<?php echo $number['num']?>" ><?php echo $number['num']?></a>
							</div>
						<?
					}
				
			?>
		</div>
		<div class="adress">
			<h2>Наш адрес</h2>
			<div class="wrapper">
			<img src="<?php echo get_template_directory_uri()."/assets/img/house.svg"?>" alt="">
				<a href="<?php the_permalink(24) ?>#map"><?php echo carbon_get_theme_option('adress')?>
				</a>
			</div>
		</div>
		</div>
	</header>