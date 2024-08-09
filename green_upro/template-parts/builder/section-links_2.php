<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php if (is_array($items) && checkArrayForValues($items)): ?>
	<section class="text-link"<?php if($id) echo ' id="' . $id . '"' ?>>
		<div class="content-width">

			<?php if ($label): ?>
				<h6 class="label-line"><?= $label ?></h6>
			<?php endif ?>

			<div class="content">
				<div class="text">

					<?php if ($title): ?>
						<h4><?= $title ?></h4>
					<?php endif ?>

					<?= $text ?>

				</div>
				<div class="link-wrap">
					<ul>

						<?php foreach ($items as $item): ?>
							<?php if ($item['link']): ?>
								<li>
									<a href="<?= $item['link']['url'] ?>"<?php if($item['is_popup']) echo ' class="fancybox"' ?><?php if($item['link']['target']) echo ' target="_blank"' ?>>
										<?= $item['link']['title'] ?>

										<?php if ($item['icon']): ?>
											<span>
												<?php if (pathinfo($item['icon']['url'])['extension'] == 'svg'): ?>
													<img src="<?= $item['icon']['url'] ?>" alt="<?= $item['icon']['alt'] ?>">
												<?php else: ?>
													<?= wp_get_attachment_image($item['icon']['ID'], 'full') ?>
												<?php endif ?>
											</span>
										<?php endif ?>
										
									</a>
								</li>
							<?php endif ?>
						<?php endforeach ?>

					</ul>
				</div>
			</div>
		</div>
	</section>
<?php endif ?>

<?php endif; ?>