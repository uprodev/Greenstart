<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php if($news): ?>

		<section class="blog"<?php if($id) echo ' id="' . $id . '"' ?>>
			<div class="bg">
				<img src="<?= get_stylesheet_directory_uri() ?>/img/after-2.svg" alt="">
			</div>
			<div class="content-width">
				<div class="title">

					<?php if ($label): ?>
						<h6 class="label-line"><?= $label ?></h6>
					<?php endif ?>
					
					<?php if ($title): ?>
						<h2><?= $title ?></h2>
					<?php endif ?>
					
				</div>
				<div class="slider-wrap">
					<div class="swiper blog-slider">
						<div class="swiper-wrapper">

							<?php foreach($news as $post): 

								global $post;
								setup_postdata($post); ?>
								<div class="swiper-slide">
									<?php get_template_part('parts/content', 'post_project') ?>									
								</div>
							<?php endforeach; ?>
							<?php wp_reset_postdata(); ?>

						</div>
					</div>
					<div class="nav-wrap">
						<div class="swiper-button-prev blog-prev btn"><img src="<?= get_stylesheet_directory_uri() ?>/img/icon-7.svg" alt=""></div>
						<div class="swiper-pagination blog-pagination"></div>
						<div class="swiper-button-next blog-next btn"><img src="<?= get_stylesheet_directory_uri() ?>/img/icon-7.svg" alt=""></div>
					</div>
				</div>
			</div>

			<div class="popup-blog" id="popup" style="display: none">
				<div class="main">
					<div class="swiper text-slider">
						<div class="swiper-wrapper">

							<?php foreach($news as $post): 

								global $post;
								setup_postdata($post); ?>

								<div class="swiper-slide">
									<?php the_post_thumbnail('full', 'class=floatleft') ?>
									<div class="wrap-text">
										<h4><?php the_title() ?></h4>
										<?php the_content() ?>
									</div>
								</div>

							<?php endforeach; ?>
							<?php wp_reset_postdata(); ?>
							
						</div>
					</div>
					<div class="nav-wrap">
						<div class="swiper-button-prev text-prev btn"><img src="<?= get_stylesheet_directory_uri() ?>/img/icon-7.svg" alt=""></div>
						<div class="swiper-pagination text-pagination"></div>
						<div class="swiper-button-next text-next btn"><img src="<?= get_stylesheet_directory_uri() ?>/img/icon-7.svg" alt=""></div>

					</div>
				</div>
			</div>

		</section>

	<?php endif; ?>

	<?php endif; ?>