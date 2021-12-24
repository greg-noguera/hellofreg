<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hellofreg
 */

get_header();
?>
	<article class="hero-section hero-blog">
		<h1 class="hero-blog-h1"> <span class="hero-span hero-span-1 hero-page-span">> </span> <?php wp_title(''); ?><span class="hero-span hero-span-3 hero-page-span"> <</span></h1>
		<?php echo do_shortcode("[blog-p-hero]"); ?>  
	</article>

	<main id="primary" class="site-main site-blog">
	<div class="search-div">
		<p>Search here...</p>
        <?php echo do_shortcode("[wpdreams_ajaxsearchlite]"); ?>
    </div>

		<?php 
			if ( have_posts() ) : 
			while ( have_posts() ) : the_post(); 
		?>
			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<?php 
			the_post_thumbnail(); 
			
			the_excerpt();
			endwhile; 
			else: 
			_e( 'Sorry, no posts matched your criteria.', 'textdomain' ); 
			endif; 
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
