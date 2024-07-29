<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php if (is_array($items) && checkArrayForValues($items)): ?>
	<section class="home-banner">
		<div class="slider-wrap">
			<div class="swiper home-slider">
				<div class="swiper-wrapper">

					<?php foreach ($items as $item): ?>
						<div class="swiper-slide">

							<?php if ($item['image']): ?>
								<div class="bg">
									<?= wp_get_attachment_image($item['image']['ID'], 'full') ?>
								</div>
							<?php endif ?>
							
							<div class="wrap">

								<?php if ($item['label']): ?>
									<h6 class="label"><?= $item['label'] ?></h6>
								<?php endif ?>
								
								<?php if ($item['title']): ?>
									<h1><?= $item['title'] ?></h1>
								<?php endif ?>
								
								<?= $item['text'] ?>

								<?php if ($item['link']): ?>
									<div class="btn-wrap">
										<a href="<?= $item['link']['url'] ?>" class="btn-default btn-arrow"<?php if($item['link']['target']) echo ' target="_blank"' ?>><?= $item['link']['title'] ?> <i class="fa-light fa-arrow-right-long"></i></a>
									</div>
								<?php endif ?>

							</div>
						</div>
					<?php endforeach ?>
					
				</div>
				<div class="swiper-pagination home-pagination"></div>
			</div>
		</div>
	</section>
<?php endif ?>

<?php endif; ?>