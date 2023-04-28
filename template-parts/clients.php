<div class="back-text">
			<?php pll_e('КЛИЕНТЫ') ?>
			</div>
<div class="h1">
<?php pll_e('НАШИ') ?> <span class="red-text"><?php pll_e('КЛИЕНТЫ') ?></span></div>
<div class="clients-logo">
	<?php 
		$clients = carbon_get_theme_option('clients-complex');
		foreach($clients as $client){
			?>
				<img src="<?php echo wp_get_attachment_image_url($client['image'], 'full') ?>" alt="">
			<?php
		}
		?>
</div>