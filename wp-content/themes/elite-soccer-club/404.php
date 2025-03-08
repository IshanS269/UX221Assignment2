<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Elite Soccer Club
 */

get_header(); ?>

<section id="wrapper-404">
	<div class="container">
		<div class="inner-content py-5">
			<h1><?php echo esc_html(get_theme_mod('elite_soccer_club_404_page_heading',__('404','elite-soccer-club')));?></h1>
            <p><?php echo esc_html(get_theme_mod('elite_soccer_club_404_page_content',__('Ops! Something happened...','elite-soccer-club')));?></p>
            <?php if( get_theme_mod('elite_soccer_club_404_page_button','Home') != ''){ ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="boxed-btn reload"><?php echo esc_html(get_theme_mod('elite_soccer_club_404_page_button',__('Home','elite-soccer-club')));?></a>
			<?php } ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>