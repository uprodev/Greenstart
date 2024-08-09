<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php if (is_array($items) && checkArrayForValues($items)): ?>
	<section class="contact-info"<?php if($id) echo ' id="' . $id . '"' ?>>
		<div class="content-width">
			<div class="content">

				<?php if ($title): ?>
					<h4><?= $title ?></h4>
				<?php endif ?>

				<?= $text ?>

				<ul>

					<?php foreach ($items as $item): ?>
						<?php if ($item['link']): ?>
							<li>
								<a href="<?= $item['link']['url'] ?>"<?php if($item['is_popup']) echo ' class="fancybox"' ?><?php if($item['link']['target']) echo ' target="_blank"' ?>>
									<span class="text"><?= $item['link']['title'] ?></span>

									<?php if ($item['icon']): ?>
										<span class="icon">
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
	</section>
<?php endif ?>

<?php endif; ?>