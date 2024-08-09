<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="faq"<?php if($id) echo ' id="' . $id . '"' ?>>
		<div class="bg">
			<img src="<?= get_stylesheet_directory_uri() ?>/img/icon-3.svg" alt="">
		</div>
		<div class="content-width">

			<?php if ($image || $image_mobile): ?>
				<figure>
					<?= wp_get_attachment_image($image ? $image['ID'] : $image_mobile['ID'], 'full') ?>
					<?= wp_get_attachment_image($image_mobile ? $image_mobile['ID'] : $image['ID'], 'full', false, array('class' => 'img-mob')) ?>
				</figure>
			<?php endif ?>
			
			<div class="text">

				<?php if ($label): ?>
					<h6 class="label-line"><?= $label ?></h6>
				<?php endif ?>
				
				<?php if ($title): ?>
					<h2><?= $title ?></h2>
				<?php endif ?>
				
				<?= $text ?>

				<?php if ($subtitle): ?>
					<h5><?= $subtitle ?></h5>
				<?php endif ?>
				
				<?php if($faq): ?>

					<ul class="accordion">

						<?php foreach($faq as $post): 

							global $post;
							setup_postdata($post); ?>
							<li class="accordion-item">
								<div class="accordion-thumb">
									<p><?php the_title() ?></p>
									<i class="fa-solid fa-chevron-right"></i>
								</div>
								<div class="accordion-panel">
									<div class="wrap">
										<?php the_content() ?>
									</div>
								</div>
							</li>
						<?php endforeach; ?>

						<?php wp_reset_postdata(); ?>

					</ul>

				<?php endif; ?>


				<?php if ($link): ?>
					<div class="btn-wrap">
						<a href="<?= $link['url'] ?>" class="btn-default btn-arrow btn-arrow-green"<?php if($link['target']) echo ' target="_blank"' ?>><?= $link['title'] ?> <i class="fa-light fa-arrow-right-long"></i></a>
					</div>
				<?php endif ?>

			</div>
		</div>
	</section>

	<?php endif; ?>