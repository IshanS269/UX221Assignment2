<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Elite Soccer Club
 */

get_header();
$elite_soccer_club_sidebar_position = get_theme_mod('elite_soccer_club_single_page_sidebar_option', 'right');
 ?>

<section id="blog-content" class="search-result <?php echo $elite_soccer_club_sidebar_position == 'none' ? 'no-sidebar' : 'has-sidebar'; ?>">
    <div class="featured-img">
        <div class="post-thumbnail">
            <?php
                if ( has_post_thumbnail() ) : ?>
                        <?php the_post_thumbnail(); ?>
                <?php else : ?>
                        <img src='<?php echo esc_url(get_template_directory_uri()); ?>/images/exist_img.png'>
                <?php endif;
            ?>
        </div>
        <div class="single-meta-box">
            <h2 class="my-3"><?php the_title(); ?></h2>
            <?php if ( get_theme_mod('elite_soccer_club_breadcrumb_setting',true) ) : ?>
                  <div class="bread_crumb text-center">
                    <?php elite_soccer_club_breadcrumb();  ?>
                  </div>
                <?php endif; ?>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php if ($elite_soccer_club_sidebar_position == 'left') : ?>
                <div class="col-lg-4 col-md-4 sidebar">
                    <?php get_sidebar(); ?>
                </div>
            <?php endif; ?>
            <div class="<?php echo $elite_soccer_club_sidebar_position == 'none' ? 'col-lg-12' : 'col-lg-8'; ?> col-md-8">
                <div class="site-content">
                    <?php
				if ( have_posts() ) :
				
					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'search' );

					endwhile;

					the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>
                </div>
            </div>
            <?php if ($elite_soccer_club_sidebar_position == 'right') : ?>
                <div class="col-lg-4 col-md-4 sidebar">
                    <?php get_sidebar(); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php
get_footer();
