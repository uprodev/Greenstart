<?php get_header(); ?>

<?php if (get_the_content()): ?>
	<section class="text-block">
		<div class="content-width">
			
			<?php the_content() ?>

		</div>
	</section>
<?php endif ?>

<?php if ( have_rows('content') ) :

	get_template_part( 'template-parts/content', 'builder' );

else :

	get_template_part( 'template-parts/content', 'none' );

endif;
?>

<?php get_footer(); ?>