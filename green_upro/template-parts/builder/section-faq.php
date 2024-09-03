<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php 
	$terms = get_terms( [
		'taxonomy' => 'faq_cat',
	] ); 
	?>

	<?php if ($terms && $faq): ?>
		<section class="faq-tabs"<?php if($id) echo ' id="' . $id . '"' ?>>
			<div class="content-width">
				<div class="tabs">
					<div class="left">

						<?php if ($label): ?>
							<h6 class="label-line"><?= $label ?></h6>
						<?php endif ?>

						<?php if ($title): ?>
							<h2><?= $title ?></h2>
						<?php endif ?>

						<ul class="tabs-menu">

							<?php foreach ($terms as $term): ?>
								<li><?= $term->name ?></li>
							<?php endforeach ?>

						</ul>

						<div class="nice-select tabs-menu-mob">

							<?php foreach ($terms as $index => $term): ?>
								<?php if ($index == 0): ?>
									<span class="current"><?= $term->name ?></span>
								<?php endif ?>
							<?php endforeach ?>

							<ul class="list">

								<?php foreach ($terms as $index => $term): ?>
									<li class="option<?php if($index == 0) echo ' selected' ?>"><?= $term->name ?></li>
								<?php endforeach ?>

							</ul>
						</div>
					</div>
					<div class="right">
						<div class="tab-content">

							<?php foreach ($terms as $term): ?>
								<div class="tab-item">

									<?php 
									$args = array(
										'post_type' => 'faq', 
										'posts_per_page' => 5,
										'post__in' => $faq,
										'tax_query' => array(
											array(
												'taxonomy' => 'faq_cat',
												'field'    => 'id',
												'terms'    => $term->term_id
											)
										),
										'paged' => get_query_var('paged')
									);
									$wp_query = new WP_Query($args);
									if($wp_query->have_posts()): 
										?>

										<ul class="accordion" id="response_faq">

											<?php while ($wp_query->have_posts()): $wp_query->the_post(); ?>
												<?php get_template_part('parts/content', 'faq', ['index' => $wp_query->current_post]) ?>
											<?php endwhile; ?>

										</ul>

										<?php if ($wp_query->max_num_pages > 1): ?>
											<script> var this_page = 1; </script>

											<div class="link-wrap load_faq" data-param-posts='<?php echo serialize($wp_query->query_vars); ?>' data-max-pages='<?php echo $wp_query->max_num_pages; ?>'>
												<a href="#"><?= $load_more_text ?> <i class="fa-light fa-arrow-right-long"></i></a>
											</div>
										<?php endif ?>

										<?php 
									endif;
									wp_reset_query(); 
									?>

								</div>
							<?php endforeach ?>

						</div>
					</div>
				</div>
			</div>
		</section>
	<?php endif ?>

	<?php endif; ?>