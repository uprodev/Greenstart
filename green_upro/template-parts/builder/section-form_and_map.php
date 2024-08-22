<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="form-map">
		<div class="content-width">
			<div class="content">
				<div class="title">

					<?php if ($title_1): ?>
						<h4><?= $title_1 ?></h4>
					<?php endif ?>
					
					<?= $text ?>

				</div>

				<?php if ($form): ?>
					<div class="left">
						
						<?php if ($title_2): ?>
							<h4><?= $title_2 ?></h4>
						<?php endif ?>
						
						<?= do_shortcode('[contact-form-7 id="' . $form . '" html_class="partners-form"]') ?>
					</div>
				<?php endif ?>
				
				<?php if ($map): ?>
					<div class="right"><?= $map ?></div>
				<?php endif ?>
				
			</div>
		</div>
	</section>

	<?php endif; ?>