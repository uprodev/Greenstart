<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php $images = get_field('gallery_1', 'option');
	if($images): ?>

		<section class="logo-block"<?php if($id) echo ' id="' . $id . '"' ?>>
			<div class="content-width">

				<?php if ($field = get_field('title_1', 'option')): ?>
					<h4><?= $field ?></h4>
				<?php endif ?>
				
				<div class="content">

					<?php foreach($images as $image): ?>

						<figure>
							<?php if (pathinfo($image['url'])['extension'] == 'svg'): ?>
								<img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
							<?php else: ?>
								<?= wp_get_attachment_image($image['ID'], 'full') ?>
							<?php endif ?>
						</figure>

					<?php endforeach; ?>

				</div>
				<div class="slider-wrap">
					<div class="swiper logo-slider">
						<div class="swiper-wrapper">

							<?php foreach($images as $image): ?>

								<div class="swiper-slide">
									<?php if (pathinfo($image['url'])['extension'] == 'svg'): ?>
										<img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
									<?php else: ?>
										<?= wp_get_attachment_image($image['ID'], 'full') ?>
									<?php endif ?>
								</div>

							<?php endforeach; ?>

						</div>
						<div class="swiper-pagination logo-pagination"></div>
					</div>
				</div>
			</div>
		</section>

	<?php endif; ?>

	<?php endif; ?>