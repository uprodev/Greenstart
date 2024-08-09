<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php if (is_array($items) && checkArrayForValues($items)): ?>
	<section class="service"<?php if($id) echo ' id="' . $id . '"' ?>>
		<div class="bg">
			<img src="<?= get_stylesheet_directory_uri() ?>/img/after-6.svg" alt="" class="img img-1">
			<img src="<?= get_stylesheet_directory_uri() ?>/img/after-7.svg" alt="" class="img img-2">
		</div>
		<div class="content-width">
			<div class="title">

				<?php if ($label): ?>
					<h6 class="label-line"><?= $label ?></h6>
				<?php endif ?>

				<?php if ($title): ?>
					<h2><?= $title ?></h2>
				<?php endif ?>

			</div>
			<div class="content">

				<?php foreach ($items as $item): ?>
					<div class="item">

						<?php if ($item['title']): ?>
							<div class="item-title">
								<h4><?= $item['title'] ?></h4>
							</div>
						<?php endif ?>

						<?php if ($item['text']): ?>
							<div class="text"><?= $item['text'] ?></div>
						<?php endif ?>

					</div>
				<?php endforeach ?>

				<?php if ($button): ?>
					<div class="btn-wrap">
						<a href="<?= $button['url'] ?>" class="btn-default btn-arrow btn-arrow-green"<?php if($button['target']) echo ' target="_blank"' ?>><?= $button['title'] ?> <i class="fa-light fa-arrow-right-long"></i></a>
					</div>
				<?php endif ?>

			</div>
		</div>
	</section>
<?php endif ?>

<?php endif; ?>