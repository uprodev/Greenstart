<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="contact-form-block"<?php if($id) echo ' id="' . $id . '"' ?>>
		<div class="content-width">

			<?php if ($label): ?>
				<h6 class="label-line"><?= $label ?></h6>
			<?php endif ?>

			<div class="content">
				<div class="title">

					<?php if ($title): ?>
						<h4><?= $title ?></h4>
					<?php endif ?>

					<?= $text ?>

					<?php if (is_array($links) && checkArrayForValues($links)): ?>
					<?php foreach ($links as $item): ?>
						<?php if ($item['link']): ?>
							<div class="link-wrap">
								<a href="<?= $item['link']['url'] ?>" class="btn btn--secondary btn--with-arrow"<?php if($item['link']['target']) echo ' target="_blank"' ?>>

									<?php if ($item['icon']): ?>
										<span>
											<?php if (pathinfo($item['icon']['url'])['extension'] == 'svg'): ?>
												<img src="<?= $item['icon']['url'] ?>" alt="<?= $item['icon']['alt'] ?>">
											<?php else: ?>
												<?= wp_get_attachment_image($item['icon']['ID'], 'full') ?>
											<?php endif ?>
										</span>
									<?php endif ?>
									
									<?= $item['link']['title'] ?>
								</a>
							</div>
						<?php endif ?>
					<?php endforeach ?>
				<?php endif ?>

			</div>

			<?php if ($form): ?>
				<div class="form-wrap">
					<?= do_shortcode('[contact-form-7 id="' . $form . '" html_class="partners-form"]') ?>
				</div>
			<?php endif ?>
			
		</div>
	</div>
</section>

<?php endif; ?>