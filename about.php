<?php
/**
 * Template name: О компании
 */
get_header();
?>
<main>
<section class="about-info-section top-info">
   
<div class="circle-header">
    <h1>
    <?php pll_e('О КОМПАНИИ') ?>
    </h1>
</div>
<div class="text-block">
<h1>
<?php pll_e('БУДЬТЕ УВЕРЕНЫ И ') ?><br><span class="red-text"><?php pll_e('СПОКОЙНЫ') ?></span>
<div class="back-text">
    <?php pll_e('ДОВЕРИЕ') ?>
    </div>
</h1>
<h2>
    <?php pll_e('3 года работы E-TRANS — Сотни успешно реализованных грузоперевозок и столько же довольных клиентов. Каждый пятый клиент обращается в E-TRANS по рекомендации. С нами сотрудничают крупные фирмы, такие как FAVBET, МЖК Оболонь, Ukrlandfarming, Stolitsa Group и прочие.') ?>
</h2>
</div>
</section>
<section class="staff-section">
<div class="container">
<div class="process-slider">
<?php
$slides = carbon_get_post_meta(8,'about_process_media');
foreach ($slides as $slide):
?>
 <img src="<?php echo wp_get_attachment_image_url($slide, 'full'); ?>" alt="Image">
<?php endforeach; ?>
</div>

<div class="staff">
    
    <h1>
    <?php pll_e('ПЕРЕВОЗКА ГРУЗОВ БЕЗ ОШИБОК И ЗАМИНОК – ЗАДАЧА ДЛЯ ') ?> <span class="red-text"><?php pll_e('КОМАНДЫ СПЕЦИАЛИСТОВ') ?></span>
<div class="back-text">
    <?php pll_e('КОМАНДНАЯ РАБОТА') ?>
    </div>
    </h1>
    <div class="row">
        <div class="text-block left-block">
        <div class="staff-wrapper-circle">
        <img src="<?php echo get_template_directory_uri()."/assets/img/staff-1.png"?>" alt="">
        <h2><?php pll_e('Менеджер') ?></h2>
        </div>
        <p>
            <?php pll_e('Просчитает стоимость трансфера, подберет автомобиль, будет на связи с вами 24/7, отвечая на вопросы и оповещая о ходе перевозки.') ?>
</p>

        </div>
        <div class="text-block right-block">
        <div class="staff-wrapper-circle">
        <img src="<?php echo get_template_directory_uri()."/assets/img/staff-2.png"?>" alt="">
        <h2><?php pll_e('Водитель-логист') ?></h2>
        </div>
        <p>
            <?php pll_e('Выбирает кратчайший и безопасный маршрут, соблюдает все ПДД для исключения форс-мажоров в виде задержки груза, штрафов и аварий. Грамотно рассчитывает время и скорость, чтобы вовремя привезти груз в пункт назначения.') ?>
</p>
        </div>
        <div class="text-block left-block">
        <div class="staff-wrapper-circle">
        <img src="<?php echo get_template_directory_uri()."/assets/img/staff-3.png"?>" alt="">
        <h2><?php pll_e('Грузчики') ?></h2>
        </div>
        <p>
            <?php pll_e('Выполняют погрузочно-разгрузочные работы. Воспользоваться их услугами можно при необходимости.') ?>
</p>
        </div>
        <div class="text-block right-block">
        <div class="staff-wrapper-circle">
        <img src="<?php echo get_template_directory_uri()."/assets/img/staff-4.png"?>" alt="">
        <h2><?php pll_e('Брокер') ?></h2>
        </div>
        <p>
            <?php pll_e('Занимается составлением и закрытием всей документации, необходимой при международных грузоперевозках.') ?>
    </p>
        </div>
        </div>
</div>
<section class="clients-section">
		<?php
    load_template( get_template_directory() . '/template-parts/clients.php', true );
   ?>
		</section>
</div>
</section>
<section class="dill-section">
<div class="container">
<div class="text-block">
<h1>
<?php pll_e('КАЖДЫЙ ПУНКТ ДОГОВОРА ДЛЯ НАС – ') ?> <span class="red-text"><?php pll_e('НЕОСПОРИМЫЙ ЗАКОН') ?></span>
</h1>
</div>
<div class="dill-row">
<div class="col-left">
<div class="content-block">
<div class="circle">
<img src="<?php echo get_template_directory_uri()."/assets/img/contract-1.svg"?>" alt="">
</div>
<h2>
    <?php pll_e('Подаем машину строго к назначенному времени и в обозначенное место.') ?>
</h2>
</div>
<div class="content-block">
<div class="circle">
<img src="<?php echo get_template_directory_uri()."/assets/img/contract-2.svg"?>" alt="">
</div>
<h2>
    <?php pll_e('Если отступим от регламента и нарушим обязанности – возместим убытки за счет компании.') ?>
</h2>
</div>
<div class="content-block">
<div class="circle">
<img src="<?php echo get_template_directory_uri()."/assets/img/contract-3.svg"?>" alt="">
</div>
<h2>
    <?php pll_e('Гарантия доставки груза к назначенному времени в нужный вам пункт.') ?>
</h2>
</div>
<div class="content-block">
<div class="circle">
<img src="<?php echo get_template_directory_uri()."/assets/img/contract-4.svg"?>" alt="">
</div>
<h2>
    <?php pll_e('Во время транспортировки полностью отвечаем за сохранность груза.') ?>
</h2>
</div>
</div>
<div class="col-right">
    <div class="img-zoom">
        <?php 
            $dill_doc = carbon_get_theme_option('dill_image');
        ?>
    <img src="<?php echo wp_get_attachment_image_url($dill_doc, 'full')?>" alt="">
    <div class="doc-wrapper"></div>
    </div>
</div>
</div>
</div>
</section>
</main>
<?php
get_footer();