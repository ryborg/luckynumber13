<?php
/**
 * The Template for displaying an archive of tools.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div id="container">
	<?php query_posts(array( 
        'post_type' => 'jjb_toolkit',
        'showposts' => 10 
		) );  
		?>    
				<?php while (have_posts()) : the_post(); ?>
		<div class="brick">	
		<div class="brick_featured_image">
        		<?php the_post_thumbnail('featured-home-thumb'); ?>
        		<div class="toolname"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>
 
 
</div>
<?php endwhile; ?> 
<!-- #brick -->
</div><!-- #container -->


<?php get_sidebar(); ?>
<?php get_footer(); ?>