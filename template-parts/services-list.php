<?php  $lang = pll_current_language();
?>
<div class="tax-group">
    <h1>
        <?php pll_e('ПОПУЛЯРНЫЕ') ?><br>
        <span class="red-text"><?php pll_e('МАРШРУТЫ ПО УКРАИНЕ') ?></span>
        <div class="back-text">
            <?php pll_e('МАРШРУТЫ') ?>
        </div>
    </h1>
    <div class="row">
        <?php
$services_terms = get_terms([
    'taxonomy'=> 'services-cat',
    'parent' => pll_get_term(6)
]);
foreach($services_terms as $term){
    $service_args = array(
        'post_type' => 'services',
        'nopaging' => true,
        'tax_query' => array(
            array(
                'taxonomy'=> 'services-cat',
            'field'    => 'id',
		    'terms'    =>  $term->term_id,
            )
        )
    );
    $services_posts = new WP_Query($service_args);
    ?>
        <div class="col">
            <h2 class="cat-name">
                <?php echo $term->name ?>
            </h2>
            <ul class="cat-terms">
                <?php 
if($services_posts->have_posts()){
    while($services_posts->have_posts()){
        $services_posts->the_post();
        
    ?>
                <li><a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
                <?php
        }
    }
?>
            </ul>
        </div>
        <?php
}
    ?>
    </div>
</div>
<div class="tax-group">
    <h1>
        <?php pll_e('ПОПУЛЯРНЫЕ') ?><br>
        <span class="red-text">
            <?php pll_e('МЕЖДУНАРОДНЫЕ МАРШРУТЫ') ?></span>
        <div class="back-text">
            <?php pll_e('МАРШРУТЫ') ?>
        </div>
    </h1>
    <div class="row">
        <?php 
$services_terms = get_terms([
    'taxonomy'=> 'services-cat',
    'parent' => pll_get_term(10)
]);
foreach($services_terms as $term){
    $service_args = array(
        'post_type' => 'services',
        'nopaging' => true,
        'tax_query' => array(
            array(
                'taxonomy'=> 'services-cat',
            'field'    => 'id',
		    'terms'    =>  $term->term_id,
            )
        )
    );
    $services_posts = new WP_Query($service_args);
    ?>
        <div class="col">
            <h2 class="cat-name">
                <?php echo $term->name ?>
            </h2>
            <ul class="cat-terms">
                <?php 
if($services_posts->have_posts()){
    while($services_posts->have_posts()){
        $services_posts->the_post();
    ?>
                <li><a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
                <?php
        }
    }
?>
            </ul>
        </div>
        <?php
}
    ?>
    </div>
</div>
<div class="tax-group">
    <h1>
        <?php pll_e('ДРУГИЕ ВИДЫ') ?><br>
        <span class="red-text"><?php pll_e('ПЕРЕВОЗОК') ?></span>
        <div class="back-text">
            <?php pll_e('МАРШРУТЫ') ?>
        </div>
    </h1>
    <div class="row">
        <?php 
$services_terms = get_terms([
    'taxonomy'=> 'services-cat',
    'parent' => pll_get_term(14)
]);
foreach($services_terms as $term){
    $service_args = array(
        'post_type' => 'services',
        'nopaging' => true,
        'tax_query' => array(
            array(
                'taxonomy'=> 'services-cat',
            'field'    => 'id',
		    'terms'    =>  $term->term_id,
            )
        )
    );
    $services_posts = new WP_Query($service_args);
    ?>
        <div class="col">
            <h2>
                <?php echo $term->name ?>
            </h2>
            <ul class="cat-terms">
                <?php 
if($services_posts->have_posts()){
    while($services_posts->have_posts()){
        $services_posts->the_post();
    ?>
                <li><a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
                <?php
        }
    }
?>
            </ul>
        </div>
        <?php
}
    ?>
    </div>
</div>