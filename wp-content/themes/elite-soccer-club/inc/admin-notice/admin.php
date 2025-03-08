<?php 
/*******************************************************************************
 *  Get Started Notice
 *******************************************************************************/

add_action( 'wp_ajax_elite_soccer_club_dismissed_notice_handler', 'elite_soccer_club_ajax_notice_handler' );

/** * AJAX handler to record dismissible notice status. */
function elite_soccer_club_ajax_notice_handler() {
    if ( isset( $_POST['type'] ) ) {
        $type = sanitize_text_field( wp_unslash( $_POST['type'] ) );
        update_option( 'dismissed-' . $type, TRUE );
    }
}

function elite_soccer_club_admin_notice_deprecated_hook() {
        $current_screen = get_current_screen();
        if ($current_screen->id !== 'appearance_page_elite-soccer-club-guide-page') {
        if ( ! get_option('dismissed-get_started', FALSE ) ) { ?>
            <div class="updated notice notice-get-started-class is-dismissible" data-notice="get_started">
                <div class="elite-soccer-club-getting-started-notice clearfix">
                    <div class="elite-soccer-club-theme-notice-content">
                        <h2 class="elite-soccer-club-notice-h2">
                            <?php
                            echo esc_html__( 'Let\'s Create Your website With', 'elite-soccer-club' ) . ' <strong>' . esc_html( wp_get_theme()->get('Name') ) . '</strong>';
                            ?>
                        </h2>
                        <span class="st-notification-wrapper">
                            <span class="st-notification-column-wrapper">
                                <span class="st-notification-column">
                                    <h2><?php echo esc_html('Feature Rich WordPress Theme','elite-soccer-club'); ?></h2>
                                    <ul class="st-notification-column-list">
                                        <li><?php echo esc_html('Live Customize','elite-soccer-club'); ?></li>
                                        <li><?php echo esc_html('Detailed theme Options','elite-soccer-club'); ?></li>
                                        <li><?php echo esc_html('Cleanly Coded','elite-soccer-club'); ?></li>
                                        <li><?php echo esc_html('Search Engine Friendly','elite-soccer-club'); ?></li>
                                    </ul>
                                    <a href="<?php echo esc_url( admin_url( 'themes.php?page=elite-soccer-club-guide-page' ) ); ?>" target="_blank" class="button-primary button"><?php echo esc_html('Get Started With Elite Soccer Club','elite-soccer-club'); ?></a>
                                </span>
                                <span class="st-notification-column">
                                    <h2><?php echo esc_html('Customize Your Website','elite-soccer-club'); ?></h2>
                                    <ul>
                                        <li><a href="<?php echo esc_url( admin_url( 'customize.php' ) ) ?>" target="_blank" class="button button-primary"><?php echo esc_html('Customize','elite-soccer-club'); ?></a></li>
                                        <li><a href="<?php echo esc_url( admin_url( 'widgets.php' ) ) ?>" class="button button-primary"><?php echo esc_html('Add Widgets','elite-soccer-club'); ?></a></li>
                                        <li><a href="<?php echo esc_url( ELITE_SOCCER_CLUB_SUPPORT_FREE ); ?>" target="_blank" class="button button-primary"><?php echo esc_html('Get Support','elite-soccer-club'); ?></a> </li>
                                    </ul>
                                </span>
                                <span class="st-notification-column">
                                    <h2><?php echo esc_html('Get More Options','elite-soccer-club'); ?></h2>
                                    <ul>
                                        <li><a href="<?php echo esc_url( ELITE_SOCCER_CLUB_DEMO_PRO ); ?>" target="_blank" class="button button-primary"><?php echo esc_html('View Live Demo','elite-soccer-club'); ?></a></li>
                                        <li><a href="<?php echo esc_url( ELITE_SOCCER_CLUB_BUY_NOW ); ?>" class="button button-primary"><?php echo esc_html('Purchase Now','elite-soccer-club'); ?></a></li>
                                        <li><a href="<?php echo esc_url( ELITE_SOCCER_CLUB_DOCS_FREE ); ?>" target="_blank" class="button button-primary"><?php echo esc_html('Free Documentation','elite-soccer-club'); ?></a> </li>
                                    </ul>
                                </span>
                            </span>
                        </span>

                        <style>
                        </style>
                    </div>
                </div>
            </div>
        <?php }
    }
}

add_action( 'admin_notices', 'elite_soccer_club_admin_notice_deprecated_hook' );

function elite_soccer_club_switch_theme_function () {
    delete_option('dismissed-get_started', FALSE );
}

add_action('after_switch_theme', 'elite_soccer_club_switch_theme_function');