<div class="wrapper">
	<div class="back-text">
	<?php pll_e('ПОДБОР МАШИНЫ') ?>
	</div>
<div class="container">
	<div class="h1">
	<?php pll_e('НУЖНА ГРУЗОПЕРЕВОЗКА УЖЕ СЕЙЧАС?') ?>
	</div>
<div class="row">
<div class="left-col">
<div id="main-form-1" class="modal">
<div class="h3">
	<div class="circle">
		1
	</div>
<?php pll_e('Где забрать груз')?>?
</div>
<input name="from" type="text" placeholder="<?php pll_e('Пункт загрузки') ?>">
<div class="h3">
<div class="circle">
		2
	</div>
<?php pll_e('Куда доставить') ?>?
</div>
<input name="to" type="text" placeholder="<?php pll_e('Пункт выгрузки') ?>">



<div class="fase">
<div class="fase-wrapper">
<span class="current">1</span>/3
</div>
<button class="main-red-btn next-btn">
<?php pll_e('Продолжить') ?> <img src="<?php echo get_template_directory_uri()."/assets/img/Arrow-long.png"?>" alt="">
</button>
</div>
<div class="errors"></div>
</div>
<div id="main-form-2" class="modal">
<div class="h3">
<div class="circle">
		3
	</div>
<?php pll_e("Дата отправления") ?>
</div>
<input name="date" type="date" placeholder="29.12.2020">
<div class="h3">
<div class="circle">
		4
	</div>
<?php pll_e('Описание груза') ?>
</div>
<input name="productType" type="text" placeholder="<?php pll_e('Мебель') ?>">
<div class="h3">
<div class="circle">
		5
	</div>
<?php pll_e('Тип кузова') ?>
</div>
<input name="transportType" type="text" placeholder="Тент">



<div class="h3">
<div  class="circle">
		6
	</div>
<?php pll_e('Масса (тон)') ?>

</div>
<input name='weight' type="number" placeholder="3">

<div class="h3">
<div  class="circle">
		7
	</div>
<?php pll_e('Габариты груза') ?>

</div>
<input name='metrics' type="text" placeholder="д/ш/в">

<div class="fase">
<div class="fase-wrapper">
<span class="current">2</span>/3
</div>
<button class="main-red-btn next-btn">
<?php pll_e('Продолжить') ?> <img src="<?php echo get_template_directory_uri()."/assets/img/Arrow-long.png"?>" alt="">
</button>
</div>
<div class="errors"></div>
</div>
<div id="main-form-3" class="modal">
<form action="<?php echo admin_url('admin-ajax.php?action=main_form') ?>">
<div class="h3">
	<div class="circle">
		8
	</div>
	<?php pll_e('Имя, фамилия') ?>

</div>
<input type="text" name="name" placeholder="<?php pll_e('Имя, фамилия') ?>">
<div class="h3">
<div class="circle">
		9
	</div>
	<?php pll_e('Номер телефона') ?>
</div>
<input type="tel" name="phone" placeholder="+380 ** *** ** **">
<div class="fase">
<div class="fase-wrapper">
<span class="current">3</span>/3
</div>
<button type="submit" class="main-red-btn">
<?php pll_e('Подобрать машину') ?>
</button>
</div>
<div class="errors"></div>
</form>
</div>
	</div>
	<div class="right-col">
<div class="h2">
<?php pll_e('Простая форма для быстрой подачи машины') ?>
</div>
<div class="h3">
<?php pll_e('Заполните эту анкету, если уже знаете, какое авто для перевозки вам необходимо.') ?>

</div>
<div class="h3">
<?php pll_e('Мы используем ваши ответы для моментального расчета цены. Менеджер перезвонит в течение 15 минут и предложит конкретный вариант.') ?>
</div>
	</div>
</div>
</div>
</div>