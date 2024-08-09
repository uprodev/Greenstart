<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="text-img"<?php if($id) echo ' id="' . $id . '"' ?>>
		<div class="content-width">
			<div class="text">

				<?php if ($label): ?>
					<h6 class="label-line"><?= $label ?></h6>
				<?php endif ?>

				<?php if ($title): ?>
					<h2><?= $title ?></h2>
				<?php endif ?>

				<?= $text ?>

				<?php if (is_array($items) && checkArrayForValues($items)): ?>
				<div class="wrap">

					<?php foreach ($items as $item): ?>
						<div class="item">

							<?php if ($item['icon']): ?>
								<figure>
									<?= wp_get_attachment_image($item['icon']['ID'], 'full') ?>
								</figure>
							<?php endif ?>
							
							<div class="text-wrap">

								<?php if ($item['title']): ?>
									<h6><?= $item['title'] ?></h6>
								<?php endif ?>

								<?= $item['text'] ?>

							</div>
						</div>
					<?php endforeach ?>

				</div>
			<?php endif ?>

		</div>

		<?php if ($image): ?>
			<figure>
				<?= wp_get_attachment_image($image['ID'], 'full') ?>
			</figure>
		<?php endif ?>

	</div>
</section>

<?php endif; ?>