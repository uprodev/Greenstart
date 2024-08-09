<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="img-text page-img-text img-text-about"<?php if($id) echo ' id="' . $id . '"' ?>>
		<div class="content-width">
			<div class="no-tabs">
				<div class="tab-content">
					<div class="tab-item">
						<div class="line " >
							<div class="bg"></div>
							<div class="wrap">

								<?php if ($image): ?>
									<figure>
										<?= wp_get_attachment_image($image['ID'], 'full') ?>
									</figure>
								<?php endif ?>
								
								<div class="text">

									<?php if ($label): ?>
										<h6 class="label-line"><?= $label ?></h6>
									<?php endif ?>
									
									<?php if ($title): ?>
										<h2><?= $title ?></h2>
									<?php endif ?>
									
									<div class="wrap-text">
										
										<?= $text_1 ?>

										<?php if ($image): ?>
											<div class="img-wrap">
												<?= wp_get_attachment_image($image['ID'], 'full') ?>
											</div>
										<?php endif ?>

										<?= $text_2 ?>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php endif; ?>