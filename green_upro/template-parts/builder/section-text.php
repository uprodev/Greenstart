<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="text-block"<?php if($id) echo ' id="' . $id . '"' ?>>
		<div class="content-width">

			<?php if ($label): ?>
				<h6 class="label-line"><?= $label ?></h6>
			<?php endif ?>
			
			<?php if ($title): ?>
				<h2><?= $title ?></h2>
			<?php endif ?>
			
			<?= $text ?>

		</div>
	</section>

	<?php endif; ?>