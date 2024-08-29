<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php if($faq): ?>

		<section class="faq-tabs faq-full"<?php if($id) echo ' id="' . $id . '"' ?>>
			<div class="content-width">
				<div class="tabs">
					<div class="left">

						<?php if ($label): ?>
							<h6 class="label-line"><?= $label ?></h6>
						<?php endif ?>

						<?php if ($title): ?>
							<h2><?= $title ?></h2>
						<?php endif ?>

					</div>
					<div class="right">
						<div class="tab-content">
							<div class="tab-item">
								<ul class="accordion" id="response_faq">

									<?php foreach($faq as $index => $post): 

										global $post;
										setup_postdata($post); ?>
										<?php get_template_part('parts/content', 'faq', ['index' => $index]) ?>
									<?php endforeach; ?>

									<?php wp_reset_postdata(); ?>

								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

	<?php endif; ?>

	<?php endif; ?>