<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php if (is_array($items) && checkArrayForValues($items)): ?>
	<section class="equipment"<?php if($id) echo ' id="' . $id . '"' ?>>
		<div class="content-width">
			<div class="title">

				<?php if ($label): ?>
					<h6 class="label-line"><?= $label ?></h6>
				<?php endif ?>

				<?php if ($title): ?>
					<h2><?= $title ?></h2>
				<?php endif ?>

			</div>
			<div class="tabs">
				<ul class="tabs-menu">

					<?php foreach ($items as $index => $item): ?>
						<li<?php if($index == 0) echo ' class="is-active"' ?>><?= $item['tab_title'] ?></li>
					<?php endforeach ?>

				</ul>

				<div class="nice-select tabs-menu-mob">

					<?php foreach ($items as $index => $item): ?>
						<?php if ($index == 0): ?>
							<span class="current"><?= $item['tab_title'] ?></span>
						<?php endif ?>
					<?php endforeach ?>

					<ul class="list">

						<?php foreach ($items as $index => $item): ?>
							<li class="option<?php if($index == 0) echo ' selected' ?>"><?= $item['tab_title'] ?></li>
						<?php endforeach ?>

					</ul>
				</div>

				<div class="tab-content">

					<?php foreach ($items as $index => $item): ?>
						<div class="tab-item">
							<div class="wrap">
								<div class="text">

									<?php if ($item['title']): ?>
										<h3><?= $item['title'] ?></h3>
									<?php endif ?>
									
									<?= $item['text'] ?>

								</div>

								<?php if ($item['image']): ?>
									<figure>
										<?= wp_get_attachment_image($item['image']['ID'], 'full') ?>
									</figure>
								<?php endif ?>
								
							</div>
						</div>
					<?php endforeach ?>
					
				</div>
			</div>
		</div>
	</section>
<?php endif ?>

<?php endif; ?>