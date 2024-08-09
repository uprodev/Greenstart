<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php if (is_array($items) && checkArrayForValues($items)): ?>
	<section class="title-item-4x"<?php if($id) echo ' id="' . $id . '"' ?>>
		<div class="content-width">

			<?php if ($title): ?>
				<h2><?= $title ?></h2>
			<?php endif ?>

			<ul>

				<?php foreach ($items as $item): ?>
					<li>

						<?php if ($item['icon']): ?>
							<div class="icon-wrap">
								<?php if (pathinfo($item['icon']['url'])['extension'] == 'svg'): ?>
									<img src="<?= $item['icon']['url'] ?>" alt="<?= $item['icon']['alt'] ?>">
								<?php else: ?>
									<?= wp_get_attachment_image($item['icon']['ID'], 'full') ?>
								<?php endif ?>
							</div>
						<?php endif ?>

						<div class="text">

							<?php if ($item['title']): ?>
								<h6><?= $item['title'] ?></h6>
							<?php endif ?>
							
							<?= $item['text'] ?>

						</div>
					</li>
				<?php endforeach ?>

			</ul>
		</div>
	</section>
<?php endif ?>

<?php endif; ?>