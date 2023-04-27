<?php
/*
 * 
Single Post Template: Новость
 Description: This part is optional, but helpful for describing the Post Template
 */
get_header();
?>
<main class="single-news">
<section class='single-news-preview'>
<div class="container">
    <h1>
        <?php
        while(have_posts()){
            the_post();
            the_title();
        } ?>
    </h1>
    <div class="row">
        <img src="<?php the_post_thumbnail_url() ?>" alt="">
        <div class="text-block">
            <p>
                <?php
                while(have_posts()){
                    the_post();
                    echo carbon_get_post_meta(get_the_ID(), 'preview');
                }
                 ?>
            </p>
        </div>
    </div>
</div>
</section>
<section class="info-section">
<div class="container">
<?php  while(have_posts()){
    the_post();
    the_content();
}
    ?>
</div>
</section>
</main>
<?php
get_footer();