<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="partners-form-block"<?php if($id) echo ' id="' . $id . '"' ?>>
		<div class="content-width">
			<div class="content">

				<?php if ($title): ?>
					<h4><?= $title ?></h4>
				<?php endif ?>
				
				<?= $text ?>

				<?php if ($form): ?>
					<?= do_shortcode('[contact-form-7 id="' . $form . '" html_class="partners-form"]') ?>
				<?php endif ?>
				
			</div>
		</div>
	</section>

	<?php endif; ?>