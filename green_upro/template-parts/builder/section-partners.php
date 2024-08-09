<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="why"<?php if($id) echo ' id="' . $id . '"' ?>>
		<div class="content-width">

			<?php if ($label): ?>
				<h6 class="label-line"><?= $label ?></h6>
			<?php endif ?>
			
			<?php if ($title): ?>
				<h2><?= $title ?></h2>
			<?php endif ?>
			
			<?= $text ?>

			<?php if (is_array($content['items']) && checkArrayForValues($content['items'])): ?>
			<div class="content">

				<?php if ($content['title']): ?>
					<h3><?= $content['title'] ?></h3>
				<?php endif ?>
				
				<div class="wrap">

					<?php foreach ($content['items'] as $item): ?>
						<div class="item">

							<?php if ($item['title']): ?>
								<h4><?= $item['title'] ?></h4>
							<?php endif ?>
							
							<?= $item['text'] ?>

						</div>
					<?php endforeach ?>
					
				</div>
			</div>
		<?php endif ?>
		
	</div>
</section>

<?php endif; ?>