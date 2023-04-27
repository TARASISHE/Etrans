<div id="get-price" class="get-price-form popup-form">
<i class="form-close far fa-times-circle"></i>
<div class="h1">
<?php pll_e('Рассчитаем стоимость перевозки вашего груза ') ?> <span class="red-text"><?php pll_e('за 15 минут') ?></span>
</div>
<form action="<?php echo admin_url('admin-ajax.php?action=send_mail') ?>">
	<div class="h2">
		<span class="red-text">*</span><?php pll_e('Имя, фамилия') ?>
	</div>
	<input name="name" type="text" placeholder="<?php pll_e('Ваши данные') ?>">
	<div class="h2">
	<span class="red-text">*</span><?php pll_e('Укажите номер телефона для связи с вами') ?>
	</div>
	<input type="tel" name="phone" id="" placeholder="+380">
	<button type="submit" class="main-red-btn">
<?php pll_e('Рассчитать стоимость ') ?>
    </button>
    <div class="errors"></div>
</form>
</div>
<div id="get-transport" class="get-transport-form popup-form">
<i class="form-close far fa-times-circle"></i>
<div class="h1">
<?php pll_e('Выбрать авто ') ?><br><span class="red-text"></span>
</div>
<form action="<?php echo admin_url('admin-ajax.php?action=send_mail') ?>">
	<div class="h2">
		<span class="red-text">*</span><?php pll_e('Имя, фамилия') ?>
	</div>
	<input name="name" type="text" placeholder="<?php pll_e('Ваши данные') ?>">
	<div class="h2">
	<span class="red-text">*</span><?php pll_e('Укажите номер телефона для связи с вами') ?>
	</div>
	<input type="tel" name="phone" id="" placeholder="+380">
	<button type="submit" class="main-red-btn">
	<?php pll_e('Рассчитать стоимость ') ?>
    </button>
    <div class="errors"></div>
</form>
</div>
<div id="get-info" class="get-info-form popup-form">
<i class="form-close far fa-times-circle"></i>
<div class="h1">
<?php pll_e('Бесплатная консультация') ?>
</div>
<div class="h2 info-h2">
<?php pll_e('Введите свое имя и номер телефона. Наш менеджер
свяжется с вами в ближайшее время!') ?>
</div>
<form action="<?php echo admin_url('admin-ajax.php?action=send_mail') ?>">
	<div class="h2">
		<span class="red-text">*</span><?php pll_e('Имя, фамилия') ?>
	</div>
	<input name="name" type="text" placeholder="<?php pll_e('Ваши данные') ?>">
	<div class="h2">
	<span class="red-text">*</span><?php pll_e('Укажите номер телефона для связи с вами') ?>
	</div>
	<input type="tel" name="phone" id="" placeholder="+380">
	<button type="submit" class="main-red-btn">
<?php pll_e('Отправить') ?>
    </button>
    <div class="errors"></div>
</form>
</div>