<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php if (is_array($items) && checkArrayForValues($items)): ?>
	<section class="download"<?php if($id) echo ' id="' . $id . '"' ?>>
		<div class="content-width">
			<div class="content">

				<?php if ($title): ?>
					<h2><?= $title ?></h2>
				<?php endif ?>
				
				<?= $text ?>

				<ul>

					<?php foreach ($items as $item): ?>
						<?php if ($item['image']): ?>
							<li>
								<a href="<?= $item['url'] ?>" target="_blank">
									<?php if (pathinfo($item['image']['url'])['extension'] == 'svg'): ?>
										<img src="<?= $item['image']['url'] ?>" alt="<?= $item['image']['alt'] ?>">
									<?php else: ?>
										<?= wp_get_attachment_image($item['image']['ID'], 'full') ?>
									<?php endif ?>
								</a>
							</li>
						<?php endif ?>
					<?php endforeach ?>
					
				</ul>
			</div>
		</div>
	</section>
<?php endif ?>

<?php endif; ?>