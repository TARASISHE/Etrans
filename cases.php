<?php
/**
 * Template name: Кейсы
 * 
 */
get_header();
?>
<main>
<section class="cases-info-section top-info">
<div class="circle-header">
    <h1>
    ВЫПОЛНЕННЫЕ ПЕРЕВОЗКИ
    </h1>
</div>
    <div class="text-block">
<h1>
СЛОВА 
<div class="back-text">
КЕЙСЫ
    </div>
</h1>
<div class="under-text">
ПОДТВЕРЖДАЕМ
<span class="red-text">ДЕЛОМ</span>
</div>
<h2>
Ответим на ваши вопросы, рассчитаем стоимость доставки,
подберем машину или просто поговорим о вашей задаче.
</h2>
</div>
</section>
<section class="cases-cat">
  <div class="container">
  <a class='active' href="<?php echo get_permalink(22)?>">Все</a>
  <?php 
    $cat = get_terms(['taxonomy'=> 'case-cat']);
    foreach($cat as $cat){
       ?>
<a href="<?php echo get_term_link($cat->term_id, 'case-cat')?>"><?php echo $cat->name?></a>
       <?php
    }
    ?>
  </div>
</section>
<section class='case-example-section cases-list'>
<div class="container">
<?php
   $cases_args = array(
       'post_type'=> 'case',
       'post_status' => array( 'publish'),
       'posts_per_page' => '4',
       'paged' => get_query_var('paged') ?: 1
   );
   $cases = new WP_Query($cases_args);
   if($cases->have_posts()){
       while($cases->have_posts()){
           $cases->the_post();
           require dirname(__FILE__). '/template-parts/case-example.php';
       }
   }
   ?>
<div class="pagination">
<?php wp_pagenavi(array('query' => $cases));?>
</div>
   <?php
   ?>
</div>
</section>
</main>
<?php
get_footer();