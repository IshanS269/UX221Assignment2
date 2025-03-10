<?php
if (!function_exists('sports_blog_banner_slider_args')):
    /**
     * Banner Slider Details
     *
     * @since Sports Blog 1.0.0
     *
     * @return array $qargs Slider details.
     */
    function sports_blog_banner_slider_args()
    {
        $sports_blog_banner_slider_number = absint(sports_blog_get_option('number_of_home_slider'));
        $sports_blog_banner_slider_from = esc_attr(sports_blog_get_option('select_slider_from'));
        switch ($sports_blog_banner_slider_from) {
            case 'from-page':
                $sports_blog_banner_slider_page_list_array = array();
                for ($i = 1; $i <= $sports_blog_banner_slider_number; $i++) {
                    $sports_blog_banner_slider_page_list = sports_blog_get_option('select_page_for_slider_' . $i);
                    if (!empty($sports_blog_banner_slider_page_list)) {
                        $sports_blog_banner_slider_page_list_array[] = absint($sports_blog_banner_slider_page_list);
                    }
                }
                // Bail if no valid pages are selected.
                if (empty($sports_blog_banner_slider_page_list_array)) {
                    return;
                }
                /*page query*/
                $qargs = array(
                    'posts_per_page' => absint($sports_blog_banner_slider_number),
                    'orderby' => 'post__in',
                    'post_type' => 'page',
                    'post__in' => $sports_blog_banner_slider_page_list_array,
                );
                return $qargs;
                break;

            case 'from-category':
                $sports_blog_banner_slider_category = absint(sports_blog_get_option('select_category_for_slider'));
                $qargs = array(
                    'posts_per_page' => absint($sports_blog_banner_slider_number),
                    'post_type' => 'post',
                    'cat' => $sports_blog_banner_slider_category,
                );
                return $qargs;
                break;

            default:
                break;
        }
        ?>
        <?php
    }
endif;

if (!function_exists('sports_blog_banner_slider')):
    /**
     * Banner Slider
     *
     * @since Sports Blog 1.0.0
     *
     */
    function sports_blog_banner_slider()
    {
        $sports_blog_slider_excerpt_number = absint(sports_blog_get_option('number_of_content_home_slider'));
        $sports_blog_slider_content_enable = (sports_blog_get_option('show_slider_content_section'));
        if (1 != sports_blog_get_option('show_slider_section')) {
            return null;
        }
        $sports_blog_banner_slider_args = sports_blog_banner_slider_args();
        $sports_blog_banner_slider_query = new WP_Query($sports_blog_banner_slider_args);
        $i = 0;
        ?>
        <div class="slider">
            <?php $rtl_class = 'false';
            if(is_rtl()){ 
                $rtl_class = 'true';
            }?>
            <div id="mainslider" data-slick='{"rtl": <?php echo($rtl_class); ?>}'>
                <?php
                if ($sports_blog_banner_slider_query->have_posts()) :
                    while ($sports_blog_banner_slider_query->have_posts()) : $sports_blog_banner_slider_query->the_post();
                        if (has_excerpt()) {
                            $sports_blog_slider_content = get_the_excerpt();
                        } else {
                            $sports_blog_slider_content = sports_blog_words_count($sports_blog_slider_excerpt_number, get_the_content());
                        }
                        ?>
                        <div class="item">
                            <?php if (has_post_thumbnail()) { ?>
                                <a href="<?php the_permalink(); ?>" aria-label="<?php the_title_attribute(); ?>">
                                    <?php
                                    the_post_thumbnail('sports-blog-full-800-600', array(
                                        'alt' => get_the_title(),
                                    ));
                                    ?>
                                </a>
                            <?php } ?>
                            <div class="slide-caption">
                                <h2 class="entry-title slides-title">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h2>
                                <?php if ($sports_blog_slider_content_enable == 1) { ?>
                                    <div class="excerpt slides-excerpt hidden-mobile">
                                        <?php if ($sports_blog_slider_excerpt_number != 0) { ?>
                                            <span class="smalltext"><?php echo wp_kses_post($sports_blog_slider_content); ?></span>
                                        <?php } ?>
                                    </div>
                                <?php } ?>

                            </div>
                            <div class="overlay overlay-enable"></div>
                        </div>
                        <?php
                        $i++;
                    endwhile;
                    wp_reset_postdata();
                endif; ?>
            </div>
            <?php if ($i > 1) { ?>
                <div class="slidernav">
                    <div class="slidernav-inner">
                        <div class="prev">
                            <svg class="svg-icon" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 32.635 32.635"
                                 style="enable-background:new 0 0 32.635 32.635;" xml:space="preserve">
							<g>
                                <path d="M32.135,16.817H0.5c-0.276,0-0.5-0.224-0.5-0.5s0.224-0.5,0.5-0.5h31.635c0.276,0,0.5,0.224,0.5,0.5S32.411,16.817,32.135,16.817z"/>
                                <path d="M13.037,29.353c-0.128,0-0.256-0.049-0.354-0.146L0.146,16.669C0.053,16.575,0,16.448,0,16.315s0.053-0.26,0.146-0.354L12.684,3.429c0.195-0.195,0.512-0.195,0.707,0s0.195,0.512,0,0.707L1.207,16.315l12.184,12.184c0.195,0.195,0.195,0.512,0,0.707C13.293,29.304,13.165,29.353,13.037,29.353z"/>
                            </g>
						</svg>
                        </div>
                        <div class="next">
                            <svg class="svg-icon" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 32.635 32.635"
                                 style="enable-background:new 0 0 32.635 32.635;" xml:space="preserve">
							<g>
                                <path d="M32.135,16.817H0.5c-0.276,0-0.5-0.224-0.5-0.5s0.224-0.5,0.5-0.5h31.635c0.276,0,0.5,0.224,0.5,0.5S32.411,16.817,32.135,16.817z"/>
                                <path d="M19.598,29.353c-0.128,0-0.256-0.049-0.354-0.146c-0.195-0.195-0.195-0.512,0-0.707l12.184-12.184L19.244,4.136c-0.195-0.195-0.195-0.512,0-0.707s0.512-0.195,0.707,0l12.537,12.533c0.094,0.094,0.146,0.221,0.146,0.354s-0.053,0.26-0.146,0.354L19.951,29.206C19.854,29.304,19.726,29.353,19.598,29.353z"/>
                            </g>
						</svg>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
        <!-- end slider-section -->
        <?php
    }
endif;
add_action('sports_blog_action_slider_post', 'sports_blog_banner_slider', 10);

// end of slider
if (!function_exists('sports_blog_featured_page')):
    /**
     * Featured Page
     *
     * @since Sports Blog 1.0.0
     *
     */
    function sports_blog_featured_page()
    {
        $sports_blog_featured_page = 30;
        if (1 != sports_blog_get_option('enable_featured_page_section')) {
            return null;
        }
        $sports_blog_featured_page_array[] = absint(sports_blog_get_option('select_featured_page'));

        $sports_blog_featured_page_args = array(
            'post_type' => 'page',
            'posts_per_page' => 1,
            'post__in' => $sports_blog_featured_page_array,
        );
        $sports_blog_featured_page_query = new WP_Query($sports_blog_featured_page_args);
        if ($sports_blog_featured_page_query->have_posts()) :
            while ($sports_blog_featured_page_query->have_posts()) : $sports_blog_featured_page_query->the_post();
                ?>
                <section class="united-block intro-section">
                    <div class="wrapper">
                        <div class="row">
                            <div class="col col-full text-center">
                                <h2 class="title-header alt-font">
                                    <?php the_title(); ?>
                                </h2>
                                <div class="title-seperator"></div>
                                <div class="section-excerpt">
                                    <div class="excerpt">
                                        <?php if (has_excerpt()) {
                                            $sports_blog_featured_content = get_the_excerpt();
                                        } else {
                                            $sports_blog_featured_content = sports_blog_words_count($sports_blog_featured_page, get_the_content());
                                        }
                                        echo wp_kses_post($sports_blog_featured_content);
                                        ?>
                                    </div>
                                    <a href="<?php the_permalink(); ?>"
                                       class="btn btn-link"><?php echo esc_html(sports_blog_get_option('featured_page_button_text')); ?></a>
                                    <?php
                                    $pb_button_text = esc_html(sports_blog_get_option('featured_page_additional_button_text'));
                                    if(!empty($pb_button_text)){ ?>
                                    <a href="<?php echo esc_url(sports_blog_get_option('featured_page_additional_button_link')) ?>"
                                       class="btn btn-link"><?php echo esc_html(sports_blog_get_option('featured_page_additional_button_text')); ?></a>
                                   <?php }?>
                                </div>
                            </div>
                        </div>
                </section>
                <?php
                wp_reset_postdata();
            endwhile;
        endif;
    }
endif;
add_action('sports_blog_action_featured_page', 'sports_blog_featured_page', 10);


if (!function_exists('sports_blog_featured_blog')):
    /**
     * Featured Blog
     *
     * @since Sports Blog 1.0.0
     *
     */
    function sports_blog_featured_blog()
    {
        if (1 != sports_blog_get_option('enable_featured_blog')) {
            return null;
        }

        $sports_blog_featured_blog_args = array(
            'post_type' => 'post',
            'posts_per_page' => 6,
            'cat' => absint(sports_blog_get_option('select_category_for_featured_blog')),
        ); ?>
        <section class="united-block united-featured-block">
            <div class="wrapper">
            <div class="row">
                <div class="col col-full text-center">
                    <h2 class="title-header alt-font">
                        <?php echo esc_html(sports_blog_get_option('featured_blog_title')); ?>
                    </h2>
                </div>
            <?php $sports_blog_featured_blog_query = new WP_Query($sports_blog_featured_blog_args);
            if ($sports_blog_featured_blog_query->have_posts()) :
                while ($sports_blog_featured_blog_query->have_posts()) : $sports_blog_featured_blog_query->the_post();
                    ?>
                    <div class="col col-three-1">
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <div class="photo-grid">

                                <?php if (has_post_thumbnail()) { ?>
                                    <div class="photo-wrapper zoom-gallery">
                                        <a href="<?php the_permalink(); ?>" class="zoom-image">
                                            <?php the_post_thumbnail('medium_large'); ?>
                                        </a>
                                       <button type="button" class="enlarge-icon-zoomer" data-mfp-src="<?php the_post_thumbnail_url('full'); ?>"><span class="enlarge-icon"></span></button>
                                    </div>
                                <?php } ?>

                                <header class="entry-header">
                                    <h2 class="entry-title">
                                        <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
                                    </h2>
                                    <div class="entry-meta">
                                        <?php
                                        sports_blog_posted_on();
                                        ?>
                                    </div><!-- .entry-meta -->
                                </header>
                            </div>
                        </article>
                    </div>
                <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
            </div>
            </div>
        </section>
        <?php
    }
endif;
add_action('sports_blog_action_featured_page', 'sports_blog_featured_blog', 20);


if (!function_exists('sports_blog_ticker')):
    /**
     * Featured Ticker
     *
     * @since Sports Blog 1.0.0
     *
     */
    function sports_blog_ticker()
    {
        if (1 != sports_blog_get_option('show_ticker_section')) {
            return null;
        }

        $sports_blog_ticker_args = array(
            'post_type' => 'post',
            'posts_per_page' => absint(sports_blog_get_option('home_top_ticker')),
            'cat' => absint(sports_blog_get_option('select_category_for_ticker')),
        ); ?>
        <section class="united-block header-block">
            <div class="wrapper-fluid">
             <div class="header-slider">
                 <?php $sports_blog_ticker_query = new WP_Query($sports_blog_ticker_args);
                 if ($sports_blog_ticker_query->have_posts()) :
                     while ($sports_blog_ticker_query->have_posts()) : $sports_blog_ticker_query->the_post();
                         ?>
                         <div class="featured-grid">
                             <div class="featured-wrapper">

                                 <?php if (has_post_thumbnail()) { ?>
                                     <div class="featured-wrapper-child featured-img-wrapper">
                                         <a href="<?php the_permalink(); ?>">
                                             <?php
                                             the_post_thumbnail('thumbnail', array(
                                                 'alt' => get_the_title(),
                                             ));
                                             ?>
                                         </a>
                                     </div>
                                 <?php } ?>

                                 <header class="featured-wrapper-child entry-header">
                                     <h2 class="entry-title font-1">
                                         <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
                                     </h2>
                                     <div class="entry-meta">
                                         <?php
                                         sports_blog_posted_on();
                                         ?>
                                     </div><!-- .entry-meta -->
                                 </header>
                             </div>
                         </div>
                         <?php
                         wp_reset_postdata();
                     endwhile;
                 endif; ?>

             </div>
            </div>
        </section>
    <?php }
endif;
add_action('sports_blog_action_ticker', 'sports_blog_ticker', 20);

/**
 * Metabox.
 *
 * @package sports-blog
 */

if ( ! function_exists( 'sports_blog_add_meta_box' ) ) :

    /**
     * Add the Meta Box
     *
     * @since 1.0.0
     */
    function sports_blog_add_meta_box() {

        $meta_box_on = array( 'post', 'page' );

        foreach ( $meta_box_on as $meta_box_as ) {
            add_meta_box(
                'sports-blog-theme-settings',
                esc_html__( 'Layout Options', 'sports-blog' ),
                'sports_blog_render_layout_option_metabox',
                $meta_box_as,
                'side',
                'low'
            );
        }

    }

endif;

add_action( 'add_meta_boxes', 'sports_blog_add_meta_box' );

if ( ! function_exists( 'sports_blog_render_layout_option_metabox' ) ) :

    /**
     * Render theme settings meta box.
     *
     * @since 1.0.0
     */
    function sports_blog_render_layout_option_metabox( $post, $metabox ) {

        $post_id = $post->ID;
        $sports_blog_post_meta_value = get_post_meta($post_id);

        // Meta box nonce for verification.
        wp_nonce_field( basename( __FILE__ ), 'sports_blog_meta_box_nonce' );
        ?>
        <div id="pb_metabox-container" class="pb-metabox-container">
            <div id="pb-metabox-layout">
                <div class="row-content">
                    <p>
                        <div class="pb-row-content">
                            <label for="sports-blog-meta-checkbox">
                                <input type="checkbox" name="sports-blog-meta-checkbox" id="sports-blog-meta-checkbox"
                                       value="yes" <?php if (isset ($sports_blog_post_meta_value['sports-blog-meta-checkbox'])) checked($sports_blog_post_meta_value['sports-blog-meta-checkbox'][0], 'yes'); ?> />
                                <?php _e('Disable Featured Image on single page', 'sports-blog') ?>
                            </label>
                        </div>
                    </p>
                </div>
            </div>
        </div>

        <?php
    }

endif;



if ( ! function_exists( 'sports_blog_save_settings_meta' ) ) :

    /**
     * Save meta box value.
     *
     * @since 1.0.0
     *
     * @param int     $post_id Post ID.
     * @param WP_Post $post Post object.
     */
    function sports_blog_save_settings_meta( $post_id, $post ) {

        // Verify nonce.
        if ( ! isset( $_POST['sports_blog_meta_box_nonce'] ) || ! wp_verify_nonce( $_POST['sports_blog_meta_box_nonce'], basename( __FILE__ ) ) ) {
            return; }

        // Bail if auto save or revision.
        if ( defined( 'DOING_AUTOSAVE' ) || is_int( wp_is_post_revision( $post ) ) || is_int( wp_is_post_autosave( $post ) ) ) {
            return;
        }

        // Check the post being saved == the $post_id to prevent triggering this call for other save_post events.
        if ( empty( $_POST['post_ID'] ) || $_POST['post_ID'] != $post_id ) {
            return;
        }

        // Check permission.
        if ( 'page' === $_POST['post_type'] ) {
            if ( ! current_user_can( 'edit_page', $post_id ) ) {
                return; }
        } else if ( ! current_user_can( 'edit_post', $post_id ) ) {
            return;
        }

        $sports_blog_meta_checkbox = isset($_POST['sports-blog-meta-checkbox']) ? esc_attr($_POST['sports-blog-meta-checkbox']) : '';
        update_post_meta($post_id, 'sports-blog-meta-checkbox', sanitize_text_field($sports_blog_meta_checkbox));

    }

endif;

add_action( 'save_post', 'sports_blog_save_settings_meta', 10, 2 );