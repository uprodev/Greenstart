<li class="accordion-item<?php if(isset($args['index']) && $args['index'] == 0) echo ' is-active' ?>">
	<div class="accordion-thumb"><p><?php the_title() ?></p></div>
	<div class="accordion-panel">
		<div class="wrap">
			<?php the_content() ?>
		</div>
	</div>
</li>