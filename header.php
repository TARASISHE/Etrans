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
	<link rel="apple-touch-icon" sizes="180x180" href="/favicon_io/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon_io/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon_io/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<title><?php wp_title('',true); ?></title>
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-NXRM9TJ');</script>
  <!-- End Google Tag Manager -->
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-193880964-1">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-193880964-1');
</script>
<!----- Бизнес телефония  ---------->

<script type='text/javascript'>
(function() {
var widgetId = 'acaada35de8d8a9eeaf8078a9b138e5d';
var s = document.createElement('script');
s.type = 'text/javascript';
s.charset = 'utf-8';
s.async = true;
s.src = '//callme1.voip.com.ua/lirawidget/script/'+widgetId;
var ss = document.getElementsByTagName('script')[0];
ss.parentNode.insertBefore(s, ss);}
)();
</script>

<link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@100;400;500;700;900&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,500&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body id="<?php echo pll_current_language() ?>">

<!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXRM9TJ"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="pop-up-wrapper close">
<?php load_template( get_template_directory() . '/template-parts/modal.php', true );?>
</div>
<div class="page page-<?php echo the_ID() ?>">
<header>
		<div class="container">
		<a  href="<?php the_permalink(211) ?>" class="logo">
		<img class="svg" src="<?php echo get_template_directory_uri().'/assets/img/logo-etrans.svg'?>" alt="">
			<!-- <p>e</p><span>trans</span> -->
</a>
		<nav>
		<?php load_template( get_template_directory() . '/template-parts/desctop-nav.php', true );?>
		</nav>
		<div class="small-nav-bars">
		<i class="fas fa-bars"></i>
		</div>

		<div class="mob-phone-toggle">
				<div class="phone-wrapper">
				<div class="phone-modal">
					<i class="phone-modal_close far fa-times-circle"></i>
				<?php
					$numbers = carbon_get_theme_option('numbers');
					foreach($numbers as $number){
						?>
							<a href="tel:<?php echo $number['num']?>" ><?php echo $number['num']?></a>
						<?
					}
				
			?>
				</div>
				</div>
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
			<div class="h2">Наши контакты</div>
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
			<div class="h2">Наш адрес</div>
			<div class="wrapper">
			<img src="<?php echo get_template_directory_uri()."/assets/img/house.svg"?>" alt="">
				<a href="<?php the_permalink(24) ?>#map"><?php echo carbon_get_theme_option('adress')?>
				</a>
			</div>
		</div>
		</div>
	</header>