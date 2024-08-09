<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php if($projects): ?>

		<section class="img-text line-collapse"<?php if($id) echo ' id="' . $id . '"' ?>>
			<div class="content-width">
				<div class="title">

					<?php if ($label): ?>
						<h6 class="label-line"><?= $label ?></h6>
					<?php endif ?>
					
					<?php if ($title): ?>
						<h2><?= $title ?></h2>
					<?php endif ?>
					
				</div>

				<?php foreach($projects as $index => $post): 

					global $post;
					setup_postdata($post); ?>
					<div class="line<?php if($index % 2 != 0) echo ' line-revers' ?>">
						<div class="bg"></div>
						<div class="wrap">

							<?php if (has_post_thumbnail()): ?>
								<figure>
									<?php the_post_thumbnail('full') ?>

									<?php if ($field = get_field('image_mobile')): ?>
										<?= wp_get_attachment_image($field['ID'], 'full', false, array('class' => 'img-mob')) ?>
									<?php endif ?>

								</figure>
							<?php endif ?>
							
							<div class="text">
								<h4><?php the_title() ?></h4>
								<div class="wrap-text">
									<?php the_excerpt() ?>
								</div>

								<?php if ($link && $index == count($projects) - 1): ?>
									<div class="btn-wrap">
										<a href="<?= $link['url'] ?>" class="btn-default btn-green"<?php if($link['target']) echo ' target="_blank"' ?>><?= $link['title'] ?></a>
									</div>
								<?php endif ?>

							</div>
						</div>
					</div>
				<?php endforeach; ?>

				<?php wp_reset_postdata(); ?>

			</div>
		</section>

	<?php endif; ?>

	<?php endif; ?>