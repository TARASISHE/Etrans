<?php
/**
 * Template name: Политика конфиденциальности
 * 
 */
get_header();
?>
<main class="info-section">
<div class="container">
    
    <?php
        if(have_posts()){
            while(have_posts()){
                the_post();
                ?>
                    <h1><?php the_title() ?></h1>
                <?
                the_content();
            }
        }
    ?>
</div>
</main>
<?php 
get_footer();