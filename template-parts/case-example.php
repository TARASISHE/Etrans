
<div class="case-example">
	<div class="col-left">
	<img src="<?php the_post_thumbnail_url('full')?>" alt="">
<div class="wrapper">
<h1>
<?php the_title(); ?>
</h1>
</div>
	</div>
	<div class="col-right">
		<h2 class="red-text">
		<?php $tax = wp_get_post_terms(get_the_ID(), 'case-cat');
		echo $tax[0]->name;
		?>
		</h2>
		<div class="text-block">
			<div class="road-map">
			<div class="geo">
			<img class="svg" src="<?php echo get_template_directory_uri()."/assets/img/place-grey.svg"?>" alt="">
			<div class="circle"></div>
			</div>
			<hr>
			<div class="geo">
			<img class="svg" src="<?php echo get_template_directory_uri()."/assets/img/place-grey.svg"?>" alt="">
			<div class="circle"></div>
			</div>
			</div>
		<div class="text-wrapper">
		<h1>
		Задача
		</h1>
		<h3 class="target">
		<?php echo carbon_get_post_meta(get_the_ID(), 'target');?>
		</h3>
		<h3>Сроки:<span><?php echo carbon_get_post_meta(get_the_ID(), 'time') ?></span></h3>
		<h3>Вес:<span><?php echo carbon_get_post_meta(get_the_ID(), 'weight') ?></span></h3>
		<h1 class="red-text">
		Решение
		</h1>
		<h3>
		<?php echo carbon_get_post_meta(get_the_ID(), 'info') ?>
		</h3>
		<a href="<?php echo get_permalink(22) ?>">
		<button class="main-red-btn">
		Смотреть все
		</button>
		</a>
		</div>
		</div>
	</div>
</div>
