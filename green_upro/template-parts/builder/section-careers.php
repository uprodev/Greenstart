<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="faq faq-about"<?php if($id) echo ' id="' . $id . '"' ?>>
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
				
				<?php if (is_array($items) && checkArrayForValues($items)): ?>
				<ul class="accordion">

					<?php foreach ($items as $item): ?>
						<li class="accordion-item">

							<?php if ($item['title']): ?>
								<div class="accordion-thumb">
									<p><?= $item['title'] ?></p>
									<i class="fa-solid fa-chevron-right"></i>
								</div>
							<?php endif ?>

							<div class="accordion-panel">
								<div class="wrap">
									
									<?= $item['text'] ?>

									<?php if ($item['link']): ?>
										<div class="link-wrap">
											<a href="<?= $item['link']['url'] ?>"<?php if($item['link']['target']) echo ' target="_blank"' ?>><?= $item['link']['title'] ?></a>
										</div>
									<?php endif ?>

								</div>
							</div>
						</li>
					<?php endforeach ?>

				</ul>
			<?php endif ?>

		</div>
	</div>
</section>

<?php endif; ?>