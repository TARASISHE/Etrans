<?php
/**
 * 
 *  Template name: Блог
 * Template Post Type: post, page, news
 */
get_header();
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
    'post_type' =>'news',
    'post_status' => array( 'publish'),
    'posts_per_page' => '12', 
    'paged' => $paged
);
$news = new WP_Query($args);
?>
<main>
    <section class="blog-info top-info">
<div class="circle-header">
    <h1>
    <?php pll_e('Блог') ?><br> <?php pll_e('компании') ?>
    </h1>
</div>
<div class="text-block">
<h1>
<?php pll_e('СТАТЬИ') ?>
<div class="back-text">
<?php pll_e('СТАТЬИ') ?></div>
</h1>
<h2>
<?php pll_e('Доставим малогабаритный, опасный и крупногабаритный груз
в любую точку города, страны и мира') ?>
</h2>
</div>
    </section>
    <section class="posts-section">
<div class="container"> 
    <?php if ( $news->have_posts() ) : while ( $news->have_posts() ) : $news->the_post(); ?>
	<!-- Цикл WordPress -->
	<a href="<?php echo get_permalink()?>" class="post">
<div class="post-image" style="background-image: url(<?php echo get_the_post_thumbnail_url()?>);">
<div class="post-wrapper">
<h1>
<?php the_title() ?>
</h1>
</div>
</div>
<div class="post-text">
<?php
$content = get_the_excerpt();
echo mb_strimwidth($content, 0, 100, '...');?>
</div>
</a>
<?php endwhile;
else : ?>
	<h1><?php pll_e('На данный момент новостей нет') ?></h1>
<?php endif; 
?>
</div>
<div class="pagination">
<?php wp_pagenavi( array( 'query' => $news ) );?>
</div>
</div>
    </section>
</main>
<?php 
get_footer();
?>