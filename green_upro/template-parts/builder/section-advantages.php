<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="text-item-4x"<?php if($id) echo ' id="' . $id . '"' ?>>
		<div class="content-width">
			<div class="content">
				<div class="title">

					<?php if ($title): ?>
						<h3><?= $title ?></h3>
					<?php endif ?>

					<?= $text ?>

					<?php if ($link): ?>
						<div class="btn-wrap">
							<a href="<?= $link['url'] ?>" class="btn-default btn-arrow btn-arrow-green"<?php if($link['target']) echo ' target="_blank"' ?>><?= $link['title'] ?> <i class="fa-light fa-arrow-right-long"></i></a>
						</div>
					<?php endif ?>

				</div>

				<?php if (is_array($items) && checkArrayForValues($items)): ?>
				<div class="wrap">

					<?php foreach ($items as $item): ?>
						<div class="item">

							<?php if ($item['icon']): ?>
								<figure>
									<?php if (pathinfo($item['icon']['url'])['extension'] == 'svg'): ?>
										<img src="<?= $item['icon']['url'] ?>" alt="<?= $item['icon']['alt'] ?>">
									<?php else: ?>
										<?= wp_get_attachment_image($item['icon']['ID'], 'full') ?>
									<?php endif ?>
								</figure>
							<?php endif ?>

							<?php if ($item['text']): ?>
								<div class="text">
									<p><?= $item['text'] ?></p>
								</div>
							<?php endif ?>
							
						</div>
					<?php endforeach ?>
					
				</div>
			<?php endif ?>


			<?php if ($link): ?>
				<div class="btn-wrap btn-wrap-mobile">
					<a href="<?= $link['url'] ?>" class="btn-default btn-arrow btn-arrow-green"<?php if($link['target']) echo ' target="_blank"' ?>><?= $link['title'] ?> <i class="fa-light fa-arrow-right-long"></i></a>
				</div>
			<?php endif ?>

		</div>
	</div>
</section>

<?php endif; ?>