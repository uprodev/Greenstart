<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="map-bg"<?php if($id) echo ' id="' . $id . '"' ?>>

		<?php if($backgrounds): ?>

			<div class="bg">

				<?php foreach($backgrounds as $index => $image_): ?>

					<?php $img_class = 'img img-' . strval($index + 1) ?>
					<?php if (pathinfo($image_['url'])['extension'] == 'svg'): ?>
						<img class="<?= $img_class ?>" src="<?= $image_['url'] ?>" alt="<?= $image_['alt'] ?>">
					<?php else: ?>
						<?= wp_get_attachment_image($image_['ID'], 'full', false, array('class' => $img_class)) ?>
					<?php endif ?>

				<?php endforeach; ?>

			</div>

		<?php endif; ?>

		<div class="content-width">

			<?php if ($image || $image_mobile): ?>
				<figure>
					<?= wp_get_attachment_image($image ? $image['ID'] : $image_mobile['ID'], 'full') ?>
					<?= wp_get_attachment_image($image_mobile ? $image_mobile['ID'] : $image['ID'], 'full', false, array('class' => 'mob')) ?>
				</figure>
			<?php endif ?>
			
			<div class="text">

				<?php if ($title): ?>
					<h2><?= $title ?></h2>
				<?php endif ?>
				
				<?= $text ?>

				<?php if ($button): ?>
					<div class="btn-wrap">
						<a href="<?= $button['url'] ?>" class="btn-default btn-white btn-52<?php if($is_popup) echo ' fancybox' ?>"<?php if($button['target']) echo ' target="_blank"' ?>><?= $button['title'] ?></a>
					</div>
				<?php endif ?>

			</div>
		</div>
	</section>

	<?php endif; ?>