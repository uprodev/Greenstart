<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="page-banner<?php if($class) echo ' ' . $class ?>"<?php if($id) echo ' id="' . $id . '"' ?>>

		<?php if ($image): ?>
			<div class="bg">
				<?= wp_get_attachment_image($image['ID'], 'full') ?>
			</div>
		<?php endif ?>
		
		<div class="content-width">
			<div class="content">

				<?php if ($title): ?>
					<h1><?= $title ?></h1>
				<?php endif ?>

				<?= $text ?>

				<?php if ($link): ?>
					<div class="btn-wrap">
						<a href="<?= $link['url'] ?>" class="btn-default btn-white scroll"<?php if($link['target']) echo ' target="_blank"' ?>><?= $link['title'] ?></a>
					</div>
				<?php endif ?>

				<?php if (is_array($links) && checkArrayForValues($links)): ?>
				<ul>

					<?php foreach ($links as $item): ?>
						<?php if ($item['link']): ?>
							<li<?php if(str_contains($item['link']['url'], '#')) echo ' class="scroll"' ?>>

								<?php if ($item['text']): ?>
									<p><?= $item['text'] ?></p>
								<?php endif ?>
								
								<a href="<?= $item['link']['url'] ?>" class="btn-default btn-green"<?php if($item['link']['target']) echo ' target="_blank"' ?>><?= $item['link']['title'] ?></a>
							</li>
						<?php endif ?>
					<?php endforeach ?>

				</ul>
			<?php endif ?>

		</div>
	</div>
</section>

<?php endif; ?>