<?php
/**
 * 
 * Template name: Услуги
 * Template Post Type: post, page, services
 */
get_header();
?>
<main>
<section class="services-info-section top-info">
<div class="circle-header">
    <h1>
    <?php pll_e('Услуги перевозки грузов') ?>

    </h1>
</div>
    <div class="text-block">
<h1>
<?php pll_e('ЕСТЬ ЗАДАЧА НА ') ?><br>
<span class="red-text"><?php pll_e('ПЕРЕВОЗКУ ГРУЗА') ?>?</span>
<div class="back-text">
<?php pll_e('ПОДБОР МАШИНЫ') ?>
    </div>
</h1>
</div>
</section>
<section class="main-form-section services-form">
<?php load_template( get_template_directory() . '/template-parts/main-form.php', true );?>
</section>
<section class="services-links">
<div class="container">
<?php load_template( get_template_directory() . '/template-parts/services-list.php', true );?>
</div>
</section>
<section class="how-we-work">
<div class="container">
<h1>
<?php pll_e('КАК МЫ ') ?><span class="red-text"><?php pll_e('РАБОТАЕМ') ?></span>
</h1>
<div class="how-we-work-slider">
    <div class="col-left">
<img src="<?php echo get_template_directory_uri()."/assets/img/process-1.png"?>" alt="">
<div class="slides-btn">
<div class="btn current" data-info="<?php pll_e('Рассмотрим возможность индивидуальной страховки, подберем менее затратный вариант, а также найдем полностью подходящий автомобиль под характеристики груза') ?>">
<span class="red-text"><?php pll_e('Индивидуальный') ?></span><br>
<?php pll_e('подход') ?>
<div class="number">
01
</div>
</div>
<div class="btn-info">
<?php pll_e('Рассмотрим возможность индивидуальной страховки, подберем менее затратный вариант, а также найдем полностью подходящий автомобиль под характеристики груза') ?>
</div>
<div class="btn" data-info="<?php pll_e('Ваш груз автоматически застрахован на 1,5 млн. грн. нашим надежным партнером. В случае утери или повреждения товара, компания полностью компенсирует нанесенный ущерб.') ?>">
<span class="red-text"><?php pll_e('Страхуем') ?>
</span>
<br>
<?php pll_e('груз') ?>
<div class="number">
02
</div>
</div>
<div class="btn" data-info="<?php pll_e('«E-TRANS» всегда на связи и ответит на все вопросы в удобное время – закрепляем за каждым заказчиком индивидуального менеджера, который знает все подробности текущей перевозки груза.') ?>">
<span class="red-text"><?php pll_e('Круглосуточно') ?>
</span>
<br>
<?php pll_e('на связи') ?>
<div class="number">
03
</div>
</div>
<div class="btn" data-info="<?php pll_e('Современная система навигации  помогает моментально узнавать детали перевозки груза, оперативно передавая всю информацию клиенту.') ?>">
<span class="red-text"><?php pll_e('Отслеживание') ?>
</span>
<br>
авто
<div class="number">
04
</div>
</div>
<div class="btn" data-info="<?php pll_e('Предоставляем услуги профессиональных грузчиков, которые бережно загружают и выгружают ваш груз. Выносят и заносят груз в помещение. Делают демонтаж. Упаковочные работы') ?>">
<span class="red-text"><?php pll_e('Разгружаем') ?>
</span>
<br>
<?php pll_e('машины') ?>
<div class="number">
05
</div>
</div>
</div>
    </div>
    <div class="col-right">
<h2>
<span class="red-text">
<?php pll_e('Индивидуальный') ?>
</span>
<br>
<?php pll_e('подход') ?>
</h2>
<p>
<?php pll_e('Рассмотрим возможность индивидуальной страховки, подберем менее затратный вариант, а также найдем полностью подходящий автомобиль под характеристики груза') ?>
</p>
<div class="number">
01
</div>
    </div>
</div>
</div>
</section>
<section class="info-section">
<div class="container">

<?php if(have_posts()){
				the_post();
                if( '' !== get_post()->post_content ) {
                    the_content();
                }else{
                    $post_id =  pll_get_post(29, $slug);
                    $parentPost = get_post_field('post_content', $post_id );
                    echo $parentPost;
                }
            } ?></div>
            
		</section>
</main>
<?php 
get_footer();
