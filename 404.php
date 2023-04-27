<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package etrans
 */

get_header();
?>

	<main id="primary" class="page-404">
<div class="container">
	<h1>
		<?php pll_e('К сожелению страница') ?> <span class="red-text"><?php pll_e('не найдена') ?></span>
	</h1>
	<h2>
		<?php pll_e('Возможно') ?> <span class="red-text"><?php pll_e('вы искали') ?></span> <?php pll_e('одну из этих страниц') ?>:
	</h2>
	<section class="potential-pages">
	<?php 
			$menu_items = wp_get_nav_menu_items('Нижнее меню (укр)');
			foreach($menu_items as $item){
					?>
				<a href="<?php echo $item->url ?>"><?php echo $item->title ?></a>
					<?
			}
		?>
	</section>
</div>

	</main><!-- #main -->

<?php
get_footer();
