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
<<<<<<< HEAD
        		<div class="toolpic"><a href="<?php the_permalink() ?>"><?php the_post_thumbnail('featured-home-thumb'); ?></a></div><!-- #toolpic -->
				<div class="toolname"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div><!-- #toolname -->
				<?php the_excerpt(); ?></div><!-- #brick -->
=======
        		<?php the_post_thumbnail('featured-home-thumb'); ?>
   <a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>

<?php endwhile; ?> 
<!-- #brick -->
</div><!-- #container -->
>>>>>>> a34efeeb992692bee86adde40c0e4301fb83e757

<?php endwhile; ?> 

</div><!-- #container -->
<?php wooslider( array( 'slider_type' => 'posts', 'smoothheight' => 'true' ), array( 'category' => 'featured', 'type' => 'jjb_toolkit' ) ); ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>