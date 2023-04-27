<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package etrans
 */

?>

<div class="footer-form">
<div class="text-block">
<div class="h1"><?php pll_e('Остались вопросы') ?>?</div>
<div class="h2"><?php pll_e('Свяжитесь с нами') ?></div>
<div class="h3"><?php pll_e('Мы здесь, чтобы помогать вам') ?>!</div>
<button class='pop-up-btn' data-id="get-info"><?php pll_e('Бесплатная консультация') ?></button>
</div>
<img src="<?php echo get_template_directory_uri()."/assets/img/red-phone.png"?>" alt="">
</div>
	<footer  class="site-footer">
<div class="container">
	<a href="<?php the_permalink(29) ?>" class="logo">
	<img class="svg" src="<?php echo get_template_directory_uri().'/assets/img/logo-etrans.svg'?>" alt="">
		<!-- <h1>
		<span class="red-text">e</span>trans
		</h1> -->
</a>
	<div class="services">
		<div class="h2"><?php pll_e('УСЛУГИ') ?></div>
		<?php 
		$terms = get_terms( array( 'taxonomy' => 'services-cat', 'parent' => 0, 'order'=> 'DESC', ) );
		foreach($terms as $term){
			?>	
			<a href="<?php the_permalink(20) ?>"><?php echo $term->name ?></a>
			<?php
		}
		?>
	</div>
	<div class="pages">
		<div class="h2"><?php pll_e('СТРАНИЦЫ') ?></div>
		<?php 
		$menu_items;
		$lang = pll_current_language();
		if($lang == 'ru'){
			$menu_items = wp_get_nav_menu_items('Нижнее меню');
		}else if($lang == 'uk'){
			$menu_items = wp_get_nav_menu_items('Нижнее меню (укр)');
		} 
			
			foreach($menu_items as $item){
					?>
				<a href="<?php echo $item->url ?>"><?php echo $item->title ?></a>
					<?
			}
		?>
	</div>
	<div class="col">
		<div class="contacts">
			<div class="h2"><?php pll_e('КОНТАКТЫ') ?></div>
			<?php
			$numbers = carbon_get_theme_option('numbers');
					foreach($numbers as $number){
						?>
					<a href="tel:<?php echo $number['num']?>"><?php echo $number['num']?></a>
						<?php
					}
					?>

		</div>
		<div class="adress">
		<div class="h2"><?php pll_e('АДРЕС') ?></div>
		<a href="<?php the_permalink(24) ?>#map"><?php pll_e(carbon_get_theme_option('adress'))?>
				</a>
		</div>
	</div>
</div>
<div class="hoftech">
<?php
if ($lang === 'uk') {
    echo '<a href="https://seosolution.ua/ua/prosuvannya-sajtu-kyiv.html" target="_blank"><img src="http://e-trans.com.ua/wp-content/uploads/2023/03/sslogo-orange.png" style="margin: 0 5px -9px 0" alt="seosolution">Просування сайту у Києві від Seo Solution</a>';
} else {
    echo '<a href="https://seosolution.ua/raskrutka-i-prodvizhenie-sajtov-kiev.html" target="_blank"><img src="http://e-trans.com.ua/wp-content/uploads/2023/03/sslogo-orange.png" style="margin: 0 5px -9px 0" alt="seosolution">Раскрутка сайта в Киеве от Seo Solution</a>';
}
?>
</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<?php 
  if (pll_current_language() === 'ru'){  
?>
  <script type="text/javascript">
    (function(d, w, s) {
  var widgetHash = 'y71eqezsdog2dok9u1et', gcw = d.createElement(s); gcw.type = 'text/javascript'; gcw.async = true;
  gcw.src = '//widgets.binotel.com/getcall/widgets/'+ widgetHash +'.js';
  var sn = d.getElementsByTagName(s)[0]; sn.parentNode.insertBefore(gcw, sn);
    })(document, window, 'script');
  </script>

<?php 
  } else {
?>
  <script type="text/javascript">
    (function(d, w, s) {
    var widgetHash = 'x0skdizpeocmmchd70cp', gcw = d.createElement(s); gcw.type = 'text/javascript'; gcw.async = true;
    gcw.src = '//widgets.binotel.com/getcall/widgets/'+ widgetHash +'.js';
    var sn = d.getElementsByTagName(s)[0]; sn.parentNode.insertBefore(gcw, sn);
      })(document, window, 'script');
  </script>
<?php
  }
?>

<!-- Calltracking -->
<script type="text/javascript">
    (function(d, w, s) {
    var widgetHash = '8gnmzwvy7e3qtwknlh7r', ctw = d.createElement(s); ctw.type = 'text/javascript'; ctw.async = true;
    ctw.src = '//widgets.binotel.com/calltracking/widgets/'+ widgetHash +'.js';
    var sn = d.getElementsByTagName(s)[0]; sn.parentNode.insertBefore(ctw, sn);
})(document, window, 'script');
</script>
<!-- Calltracking -->
</body>
</html>
