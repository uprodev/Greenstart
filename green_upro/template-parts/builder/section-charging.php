<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php if (is_array($items) && checkArrayForValues($items)): ?>
	<section class="item-3x"<?php if($id) echo ' id="' . $id . '"' ?>>
		<div class="bg"><img src="<?= get_stylesheet_directory_uri() ?>/img/after-3.png" alt=""></div>
		<div class="content-width">

			<?php if ($label): ?>
				<h6 class="label-line"><?= $label ?></h6>
			<?php endif ?>
			
			<?php if ($title): ?>
				<h2><?= $title ?></h2>
			<?php endif ?>
			
			<div class="content">

				<?php foreach ($items as $index => $item): ?>
					<div class="item item-<?= $index + 1 ?>">
						<div class="after"></div>
						<div class="wrap">

							<?php if ($item['image'] && $index % 2 != 0): ?>
								<figure>
									<?= wp_get_attachment_image($item['image']['ID'], 'full') ?>
								</figure>
							<?php endif ?>
							

							<?php if ($item['title']): ?>
								<h6><?= $item['title'] ?></h6>
							<?php endif ?>
							
							<?= $item['text'] ?>

							<?php if ($item['image'] && $index % 2 == 0): ?>
								<figure>
									<?= wp_get_attachment_image($item['image']['ID'], 'full') ?>
								</figure>
							<?php endif ?>
							
						</div>
					</div>
				<?php endforeach ?>
				
			</div>
		</div>
	</section>
<?php endif ?>

<?php endif; ?>