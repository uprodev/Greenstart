<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php 
	$taxonomy = 'solution_cat';
	$terms = get_terms( [
		'taxonomy' => $taxonomy,
		'hide_empty' => false,
	] ); 
	?>

	<?php if ($terms): ?>
		<section class="img-text page-img-text"<?php if($id) echo ' id="' . $id . '"' ?>>
			<div class="bg">
				<img src="<?= get_stylesheet_directory_uri() ?>/img/after-1.png" alt="">
			</div>
			<div class="content-width">
				<div class="no-tabs">
					<ul class="tabs-menu scroll">

						<?php foreach ($terms as $index => $term): ?>
							<li<?php if($index == 0) echo ' class="is-active"' ?>><a href="#category-<?= $term->term_id ?>"><span><?= $term->name ?></span></a></li>
						<?php endforeach ?>

					</ul>

					<div class="select-block ">
						<div class="nice-select">

							<?php foreach ($terms as $index => $term): ?>
								<?php if ($index == 0): ?>
									<span class="current"><?= $term->name ?></span>
								<?php endif ?>
							<?php endforeach ?>

							<ul class="list scroll">

								<?php foreach ($terms as $index => $term): ?>
									<li class="option<?php if($index == 0) echo ' selected' ?>"><a href="#category-<?= $term->term_id ?>"><?= $term->name ?></a></li>
								<?php endforeach ?>

							</ul>
						</div>
					</div>


					<div class="tab-content">
						<div class="tab-item">

							<?php $counter = 1 ?>

							<?php foreach ($terms as $index => $term): ?>

								<?php 
								$args = array(
									'post_type' => 'solution', 
									'posts_per_page' => -1, 
									'tax_query' => array(
										array(
											'taxonomy' => $taxonomy,
											'field'    => 'id',
											'terms'    => $term->term_id
										)
									),
									'paged' => get_query_var('paged')
								);
								$wp_query = new WP_Query($args);
								if($wp_query->have_posts()): 
									?>

									<?php while ($wp_query->have_posts()): $wp_query->the_post(); ?>
										<div class="line<?php if($counter % 2 != 0) echo ' line-revers' ?>"<?php if($wp_query->current_post == 0) echo ' id="category-' . $term->term_id . '"' ?>>
											<div class="bg"></div>
											<div class="wrap">

												<?php if (has_post_thumbnail()): ?>
													<figure>
														<?php the_post_thumbnail('full') ?>
													</figure>
												<?php endif ?>

												<div class="text">
													<h6 class="label-line"><?= $term->name ?></h6>
													<h2><?php the_title() ?></h2>

													<?php if ($field = get_field('image_mobile')): ?>
														<div class="img-wrap">
															<?= wp_get_attachment_image($field['ID'], 'full') ?>
														</div>
													<?php endif ?>

													<div class="wrap-text">
														<?php the_content() ?>
													</div>
												</div>
											</div>
										</div>
										<?php 
										$counter++;
									endwhile; 
									?>

									<?php 
								endif;
								wp_reset_query(); 
								?>
								
							<?php endforeach ?>

						</div>
					</div>
				</div>
			</div>
		</section>
	<?php endif ?>

	<?php endif; ?>