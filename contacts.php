<?php
/**
 * Template name: Контакты
 */
get_header();
?>
<main>
<section class="contatcs-info-section top-info">
<div class="circle-header">
    <h1>
    <?php pll_e('Контакты') ?>

    </h1>
</div>
    <div class="text-block">
<h1>
<span class="red-text"><?php pll_e('СВЯЖИТЕСЬ') ?> </span><?php pll_e('С НАМИ') ?>
<div class="back-text">
<?php pll_e('Контакты') ?>
    </div>
</h1>
<h2>
<?php pll_e('Ответим на ваши вопросы, рассчитаем стоимость доставки,
подберем машину или просто поговорим о вашей задаче.') ?>
</h2>
</div>
</section>
<section class="contacts-details">
<div class="container">
<div class="col-left">
<div class="adress">
        <img src="<?php echo get_template_directory_uri()."/assets/img/house-big.png"?>" alt="">
        <div class="col">
            <h2><?php pll_e('Наш адрес') ?></h2>
            <p><?php pll_e(carbon_get_theme_option('adress')) ?></p>
        </div>
    </div>
    <div class="phone-numbers">
    <img src="<?php echo get_template_directory_uri()."/assets/img/phone-big.png"?>" alt="">
    <div class="col">
            <h2><?php pll_e('Наши контакты') ?></h2>
            <?php 
                $numbers = carbon_get_theme_option('numbers');
                
                foreach($numbers as $number){
?>
<a href="tel:<?php echo $number['num']?>"><?php echo $number['num'] ?></a>
<?php
                };
            ?>
            <a href="mailto:<?php echo carbon_get_theme_option('email'); ?>"><?php echo carbon_get_theme_option('email'); ?></a>
        </div>
    </div>
</div>
<div class="col-right">
<div id="map">
<iframe width="100%" height="100%" style="border:0" loading="lazy" allowfullscreen
src="https://www.google.com/maps/embed/v1/place?q=e-trans&key=AIzaSyAB_pfSHbfM4UU4qSvvVQLYn3m43bEVd7g&language=ru"></iframe></div>

</div>
</div>
</section>
<section class="contact-form">
<div class="container">
    <h1>
    <span class="red-text"><?php pll_e('СВЯЖИТЕСЬ') ?></span> <?php pll_e('С НАМИ ЧЕРЕЗ
ФОРМУ ОБРАТНОЙ СВЯЗИ') ?>
    </h1>
    <form action="<?php echo admin_url('admin-ajax.php?action=client_message') ?>">
        <div class="input-row">
        <div class="col">
            <h2><span class="red-text">*</span><?php pll_e('Имя, фамилия') ?></h2>
            <input class="input" type="text" name="name" placeholder="<?php pll_e('Ваши данные') ?>">
            <h2><span class="red-text">*</span><?php pll_e('Электронная почта') ?></h2>
            <input class="input" type="email" name="email" placeholder="example@gmail.com">
        </div>
        <div class="col">
        <h2><span class="red-text">*</span><?php pll_e('Сообщение') ?></h2>
        <textarea type="text" name="message" placeholder="<?php pll_e('Ваши данные') ?>"></textarea>
        </div>
        </div>
        <div class="btn-row">
            <button class="main-red-btn">
            <?php pll_e('Отправить сообщение') ?>
            </button>
            <label for=""><?php pll_e('Нажимая кнопку, я даю согласие на обработку персональных данных') ?><input type="checkbox" name="check" id=""></label>
        </div>
        <div class="errors"></div>
    </form>
</div>
</section>
</main>
<?php 
get_footer();