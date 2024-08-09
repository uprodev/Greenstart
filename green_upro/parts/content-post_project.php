<?php if (has_post_thumbnail()): ?>
	<figure>
		<a href="#popup" class="fancybox">
			<?php the_post_thumbnail('full') ?>
		</a>
	</figure>
<?php endif ?>

<div class="text">
	<h6>
		<a href="#popup" class="fancybox"><?php the_title() ?></a>
	</h6>
	<div class="wrap">
		<?php the_excerpt() ?>
	</div>
	<div class="link-wrap">
		<a href="#popup" class="fancybox">Learn more <i class="fa-regular fa-arrow-right"></i></a>
	</div>
</div>