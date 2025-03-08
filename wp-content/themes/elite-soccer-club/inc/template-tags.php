<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package elite-soccer-club
 */
if ( ! function_exists( 'elite_soccer_club_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function elite_soccer_club_posted_on() {
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	$posted_on = sprintf(
		esc_html_x( 'Posted on %s', 'post date', 'elite-soccer-club' ),
		'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
	);

	$byline = sprintf(
		esc_html_x( 'by %s', 'post author', 'elite-soccer-club' ),
		'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
	);
	echo '<span class="posted-on">' . $posted_on . '</span><span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.
}
endif;

if ( ! function_exists( 'elite_soccer_club_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function elite_soccer_club_entry_footer() {
	// Hide category and tag text for pages.
	if ( 'post' === get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$categories_list = get_the_category_list( esc_html__( ', ', 'elite-soccer-club' ) );
		if ( $categories_list && elite_soccer_club_categorized_blog() ) {
			printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'elite-soccer-club' ) . '</span>', $categories_list ); // WPCS: XSS OK.
		}

		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', esc_html__( ', ', 'elite-soccer-club' ) );
		if ( $tags_list ) {
			printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'elite-soccer-club' ) . '</span>', $tags_list ); // WPCS: XSS OK.
		}
	}

	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link">';
		/* translators: %s: post title */
		comments_popup_link( sprintf( wp_kses( __( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'elite-soccer-club' ), array( 'span' => array( 'class' => array() ) ) ), get_the_title() ) );
		echo '</span>';
	}

	edit_post_link(
		sprintf(
			/* translators: %s: Name of current post */
			esc_html__( 'Edit %s', 'elite-soccer-club' ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		),
		'<span class="edit-link">',
		'</span>'
	);
}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function elite_soccer_club_categorized_blog() {
	if ( false === ( $elite_soccer_club_all_the_cool_cats = get_transient( 'elite_soccer_club_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$elite_soccer_club_all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$elite_soccer_club_all_the_cool_cats = count( $elite_soccer_club_all_the_cool_cats );

		set_transient( 'elite_soccer_club_categories', $elite_soccer_club_all_the_cool_cats );
	}

	if ( $elite_soccer_club_all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so elite_soccer_club_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so elite_soccer_club_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in elite_soccer_club_categorized_blog.
 */
function elite_soccer_club_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'elite_soccer_club_categories' );
}
add_action( 'edit_category', 'elite_soccer_club_category_transient_flusher' );
add_action( 'save_post',     'elite_soccer_club_category_transient_flusher' );

/**
 * Register Google fonts for elite-soccer-club.
 */

function elite_soccer_club_enqueue_google_fonts() {

	require_once get_theme_file_path( 'inc/wptt-webfont-loader.php' );
	
	wp_enqueue_style( 'google-fonts-fjalla-one', 'https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap' );  //  font-family: "Montserrat", sans-serif;

	wp_enqueue_style( 'google-fonts-roboto', 'https://fonts.googleapis.com/css2?family=Roboto&display=swap' ); //  font-family: "EB Garamond", serif;

	wp_enqueue_style( 'google-fonts-oswald', 'https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap' );
}
add_action( 'wp_enqueue_scripts', 'elite_soccer_club_enqueue_google_fonts' );

// Logo, Title, Description
if ( ! function_exists( 'elite_soccer_club_logo_title_description' ) ) :
function elite_soccer_club_logo_title_description() {
		if(has_custom_logo())
		{	
			the_custom_logo();
		}
	?>  
	    <?php  if ( get_theme_mod( 'elite_soccer_club_site_title_setting', true ) ) : ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<h2 class="site-title"><?php echo esc_html(get_bloginfo('name')); ?></h2>
			</a>
		<?php endif; ?>
	<?php
	    if ( get_theme_mod( 'elite_soccer_club_tagline_setting', false ) ) :
			$elite_soccer_club_description = get_bloginfo( 'description');
			if ($elite_soccer_club_description) : ?>
				<p class="site-description"><?php echo esc_html($elite_soccer_club_description); ?></p>
		<?php endif; ?>
	<?php endif;
}
endif;
?>