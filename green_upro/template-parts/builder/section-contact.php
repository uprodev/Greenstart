<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="pre-footer"<?php if($id) echo ' id="' . $id . '"' ?>>

		<?php if ($image): ?>
			<div class="bg">
				<?= wp_get_attachment_image($image['ID'], 'full') ?>
			</div>
		<?php endif ?>
		
		<div class="content-width">
			<div class="content">

				<?php if ($title): ?>
					<h2><?= $title ?></h2>
				<?php endif ?>
				
				<?php if ($link): ?>
					<div class="btn-wrap">
						<a href="<?= $link['url'] ?>" class="btn-default btn-white btn-52"<?php if($link['target']) echo ' target="_blank"' ?>><?= $link['title'] ?></a>
					</div>
				<?php endif ?>

			</div>
		</div>
	</section>

	<?php endif; ?>