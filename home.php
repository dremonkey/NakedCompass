<?php /* The homepage file. */ ?>

<?php get_header(); ?>
	
	<!-- .content is here as an example to demonstrate that SASS is working properly -->
	<div class="content">

		<?php
		/* Run the loop to output the posts.
		 * If you want to overload this in a child theme then include a file
		 * called loop-index.php and that will be used instead.
		 */
		 get_template_part( 'loop', 'index' );
		?>

	</div><!-- end .content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>