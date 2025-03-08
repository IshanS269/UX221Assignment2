<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Elite Soccer Club
 */

get_header(); ?>

<section id="blog-content">
	<div class="featured-img">
		<div class="post-thumbnail">
	        <img src='<?php echo esc_url(get_template_directory_uri()); ?>/images/exist_img.png'>
	    </div>
	    <div class="single-meta-box">
			<h2 class="my-3"><?php esc_html_e('Blogs', 'elite-soccer-club'); ?></h2>
			<?php if ( get_theme_mod('elite_soccer_club_breadcrumb_setting',true) ) : ?>
	              <div class="bread_crumb text-center">
	                <?php elite_soccer_club_breadcrumb();  ?>
	              </div>
	            <?php endif; ?>
		</div>
	</div>
	<div class="container">
		<div class="row">	
			<?php
				get_template_part( 'template-parts/layouts' );
		    ?>
		</div>	
	</div>
</section>

<?php get_footer(); ?>
