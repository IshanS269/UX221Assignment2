<?php

add_action( 'admin_menu', 'elite_soccer_club_getting_started' );
function elite_soccer_club_getting_started() {
	add_theme_page( esc_html__('Theme Info', 'elite-soccer-club'), esc_html__('Theme Info', 'elite-soccer-club'), 'edit_theme_options', 'elite-soccer-club-guide-page', 'elite_soccer_club_test_guide', 1);
}

if ( ! defined( 'ELITE_SOCCER_CLUB_DOCS_FREE' ) ) {
define('ELITE_SOCCER_CLUB_DOCS_FREE',__('https://www.mishkatwp.com/instruction/soccer-club-free-docs/','elite-soccer-club'));
}
if ( ! defined( 'ELITE_SOCCER_CLUB_DOCS_PRO' ) ) {
define('ELITE_SOCCER_CLUB_DOCS_PRO',__('https://www.mishkatwp.com/instruction/elite-soccer-club-pro-docs/','elite-soccer-club'));
}
if ( ! defined( 'ELITE_SOCCER_CLUB_BUY_NOW' ) ) {
define('ELITE_SOCCER_CLUB_BUY_NOW',__('https://www.mishkatwp.com/themes/soccer-club-wordpress-theme/','elite-soccer-club'));
}
if ( ! defined( 'ELITE_SOCCER_CLUB_SUPPORT_FREE' ) ) {
define('ELITE_SOCCER_CLUB_SUPPORT_FREE',__('https://wordpress.org/support/theme/elite-soccer-club','elite-soccer-club'));
}
if ( ! defined( 'ELITE_SOCCER_CLUB_REVIEW_FREE' ) ) {
define('ELITE_SOCCER_CLUB_REVIEW_FREE',__('https://wordpress.org/support/theme/elite-soccer-club/reviews/#new-post','elite-soccer-club'));
}
if ( ! defined( 'ELITE_SOCCER_CLUB_DEMO_PRO' ) ) {
define('ELITE_SOCCER_CLUB_DEMO_PRO',__('https://www.mishkatwp.com/pro/soccer-club/','elite-soccer-club'));
}
if ( ! defined( 'ELITE_SOCCER_CLUB_BUNDLE' ) ) {
define('ELITE_SOCCER_CLUB_BUNDLE',__('https://www.mishkatwp.com/themes/wordpress-theme-bundle/','elite-soccer-club'));
}

function elite_soccer_club_test_guide() { ?>
	<?php $elite_soccer_club_theme = wp_get_theme();
	require_once get_template_directory() .'/inc/started/demo-import.php'; ?>
	<div class="wrap" id="main-page">
		<div id="righty">
			<div class="getstart-postbox donate">
				<h4><?php esc_html_e( 'Discount Upto 25%', 'elite-soccer-club' ); ?> <span><?php esc_html_e( '"Special25"', 'elite-soccer-club' ); ?></span></h4>
				<h3 class="hndle"><?php esc_html_e( 'Upgrade to Premium', 'elite-soccer-club' ); ?></h3>
				<div class="getstart-inside">
					<p><?php esc_html_e('Click to upgrade to see the enhanced pro features available in the premium version.','elite-soccer-club'); ?></p>
					<div id="admin_pro_links">
						<a class="blue-button-2" href="<?php echo esc_url( ELITE_SOCCER_CLUB_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Go Pro', 'elite-soccer-club' ); ?></a>
						<a class="blue-button-1" href="<?php echo esc_url( ELITE_SOCCER_CLUB_DEMO_PRO ); ?>" target="_blank"><?php esc_html_e( 'Live Demo', 'elite-soccer-club' ) ?></a>
						<a class="blue-button-2" href="<?php echo esc_url( ELITE_SOCCER_CLUB_DOCS_PRO ); ?>" target="_blank"><?php esc_html_e( 'Pro Docs', 'elite-soccer-club' ) ?></a>
					</div>
				</div>
				<div class="d-table">
				    <ul class="d-column">
				      <li class="feature"><?php esc_html_e('Features','elite-soccer-club'); ?></li>
				      <li class="free"><?php esc_html_e('Pro','elite-soccer-club'); ?></li>
				      <li class="plus"><?php esc_html_e('Free','elite-soccer-club'); ?></li>
				    </ul>
				    <ul class="d-row">
				      <li class="points"><?php esc_html_e('24hrs Priority Support','elite-soccer-club'); ?></li>
				      <li class="right"><span class="dashicons dashicons-yes"></span></li>
				      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
				    </ul>
				    <ul class="d-row">
				      <li class="points"><?php esc_html_e('LearnPress Campatiblity','elite-soccer-club'); ?></li>
				      <li class="right"><span class="dashicons dashicons-yes"></span></li>
				      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
				    </ul>
				    <ul class="d-row">
				      <li class="points"><?php esc_html_e('Kirki Framework','elite-soccer-club'); ?></li>
				      <li class="right"><span class="dashicons dashicons-yes"></span></li>
				      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
				    </ul>
				    <ul class="d-row">
				      <li class="points"><?php esc_html_e('Advance Posttype','elite-soccer-club'); ?></li>
				      <li class="right"><span class="dashicons dashicons-yes"></span></li>
				      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
				    </ul>
				    <ul class="d-row">
				      <li class="points"><?php esc_html_e('One Click Demo Import','elite-soccer-club'); ?></li>
				      <li class="right"><span class="dashicons dashicons-yes"></span></li>
				      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
				    </ul>
				    <ul class="d-row">
				      <li class="points"><?php esc_html_e('Section Reordering','elite-soccer-club'); ?></li>
				      <li class="right"><span class="dashicons dashicons-yes"></span></li>
				      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
				    </ul>
				    <ul class="d-row">
				      <li class="points"><?php esc_html_e('Enable / Disable Option','elite-soccer-club'); ?></li>
				      <li class="right"><span class="dashicons dashicons-yes"></span></li>
				      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
				    </ul>
				    <ul class="d-row">
				      <li class="points"><?php esc_html_e('Multiple Sections','elite-soccer-club'); ?></li>
				      <li class="right"><span class="dashicons dashicons-yes"></span></li>
				      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
				    </ul>
				    <ul class="d-row">
				      <li class="points"><?php esc_html_e('Advance Color Pallete','elite-soccer-club'); ?></li>
				      <li class="right"><span class="dashicons dashicons-yes"></span></li>
				      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
				    </ul>
				    <ul class="d-row">
				      <li class="points"><?php esc_html_e('Advance Widgets','elite-soccer-club'); ?></li>
				      <li class="right"><span class="dashicons dashicons-yes"></span></li>
				      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
				    </ul>
				    <ul class="d-row">
				      <li class="points"><?php esc_html_e('Page Templates','elite-soccer-club'); ?></li>
				      <li class="right"><span class="dashicons dashicons-yes"></span></li>
				      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
				    </ul>
		  		</div>
			</div>
		</div>
		<div id="lefty">
			<div id="description">
				<h3><?php esc_html_e('Welcome! Thank you for choosing ','elite-soccer-club'); ?><?php echo esc_html( $elite_soccer_club_theme ); ?>  <span><?php esc_html_e('Version: ', 'elite-soccer-club'); ?><?php echo esc_html($elite_soccer_club_theme['Version']);?></span></h3>
				<div class="demo-import-box">
					<h4><?php echo esc_html('Import homepage demo in just one click.','elite-soccer-club'); ?></h4>
					<p><?php echo esc_html('Get started with the wordpress theme installation','elite-soccer-club'); ?></p>
					<?php if(isset($_GET['import-demo']) && $_GET['import-demo'] == true){ ?>
			    		<p class="imp-success"><?php echo esc_html('Imported Successfully','elite-soccer-club'); ?></p>
			    		<a class="blue-button-1" href="<?php echo esc_url(home_url()); ?>" target="_blank"><?php echo esc_html('Go to Homepage','elite-soccer-club'); ?></a>
			    	<?php } else { ?>
					<form id="demo-importer-form" action="<?php echo esc_url(home_url()); ?>/wp-admin/themes.php" method="POST">
			        	<input type="submit" name="submit" value="<?php esc_attr_e('Get Start With Elite Soccer Club','elite-soccer-club'); ?>" class="blue-button-2">
			    	</form>
			    	<?php } ?>
				</div>
				<h4><?php esc_html_e('Begin with our theme features','elite-soccer-club'); ?></span></h4>
				<div class="customizer-inside">
					<div class="elite-soccer-club-theme-setting-item">
                        <div class="elite-soccer-club-theme-setting-item-header">
                            <?php esc_html_e( 'Add Menus', 'elite-soccer-club' ); ?>                            
                       	</div>
                        <div class="elite-soccer-club-theme-setting-item-content">
                        	<a target="_blank" href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>"><?php esc_html_e('Go to Menu', 'elite-soccer-club'); ?></a>
                     	</div>
                     	<p><?php esc_html_e( 'After Clicking go to customizer >> Go to menu >> Select menu which you had created >> Then Publish ', 'elite-soccer-club' ); ?></p>
                	</div>
                	<div class="elite-soccer-club-theme-setting-item">
                        <div class="elite-soccer-club-theme-setting-item-header">
                            <?php esc_html_e( 'Add Logo', 'elite-soccer-club' ); ?>                            
                       	</div>
                        <div class="elite-soccer-club-theme-setting-item-content">
                        	<a target="_blank" href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>"><?php esc_html_e('Go to Site Identity', 'elite-soccer-club'); ?></a>
                     	</div>
                     	<p><?php esc_html_e( 'After Clicking go to customizer >> Go to Site Identity >> Select Logo Add Title or Tagline >> Then Publish ', 'elite-soccer-club' ); ?></p>
                	</div>
                	<div class="elite-soccer-club-theme-setting-item">
                        <div class="elite-soccer-club-theme-setting-item-header">
                            <?php esc_html_e( 'Home Page Section', 'elite-soccer-club' ); ?>                            
                       	</div>
                        <div class="elite-soccer-club-theme-setting-item-content">
                        	<a target="_blank" href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=elite_soccer_club_home_page_section') ); ?>"><?php esc_html_e('Go to Home Page Section', 'elite-soccer-club'); ?></a>
                     	</div>
                     	<p><?php esc_html_e( 'After Clicking go to customizer >> Go to Home Page Sections >> Then go to different section which ever you want >> Then Publish ', 'elite-soccer-club' ); ?></p>
                	</div>
                	<div class="elite-soccer-club-theme-setting-item">
                        <div class="elite-soccer-club-theme-setting-item-header">
                            <?php esc_html_e( 'Post Options', 'elite-soccer-club' ); ?>                            
                       	</div>
                        <div class="elite-soccer-club-theme-setting-item-content">
                        	<a target="_blank" href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=elite_soccer_club_post_image_on_off') ); ?>"><?php esc_html_e('Go to Post Options', 'elite-soccer-club'); ?></a>
                     	</div>
                     	<p><?php esc_html_e( 'After Clicking go to customizer >> Go to Post Options >> Then go to different settings which ever you want >> Then Publish ', 'elite-soccer-club' ); ?></p>
                	</div>
                	<div class="elite-soccer-club-theme-setting-item">
                        <div class="elite-soccer-club-theme-setting-item-header">
                            <?php esc_html_e( 'Post Layout Options', 'elite-soccer-club' ); ?>                            
                       	</div>
                        <div class="elite-soccer-club-theme-setting-item-content">
                        	<a target="_blank" href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=elite_soccer_club_post_layout') ); ?>"><?php esc_html_e('Go to Post Layout Options', 'elite-soccer-club'); ?></a>
                     	</div>
                     	<p><?php esc_html_e( 'After Clicking go to customizer >> Go to Post Layout Options >> Then go to different settings which ever you want >> Then Publish ', 'elite-soccer-club' ); ?></p>
                	</div>
                	<div class="elite-soccer-club-theme-setting-item">
                        <div class="elite-soccer-club-theme-setting-item-header">
                            <?php esc_html_e( 'General Options Options', 'elite-soccer-club' ); ?>                            
                       	</div>
                        <div class="elite-soccer-club-theme-setting-item-content">
                        	<a target="_blank" href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=elite_soccer_club_preloader_setting') ); ?>"><?php esc_html_e('Go to General Options', 'elite-soccer-club'); ?></a>
                     	</div>
                     	<p><?php esc_html_e( 'After Clicking go to customizer >> Go to Post General Options >> Then go to different settings which ever you want >> Then Publish ', 'elite-soccer-club' ); ?></p>
                	</div>
                	
                	<a target="_blank" href="<?php echo esc_url( ELITE_SOCCER_CLUB_BUY_NOW ); ?>" class="elite-soccer-club-theme-setting-item elite-soccer-club-theme-setting-item-unavailable">
					    <div class="elite-soccer-club-theme-setting-item-header pro-option">
					        <span><?php esc_html_e("Customize All Fonts", "elite-soccer-club"); ?></span> <span><?php esc_html_e("Premium", "elite-soccer-club"); ?></span>
					    </div>
					</a>

					<a target="_blank" href="<?php echo esc_url( ELITE_SOCCER_CLUB_BUY_NOW ); ?>" class="elite-soccer-club-theme-setting-item elite-soccer-club-theme-setting-item-unavailable">
					    <div class="elite-soccer-club-theme-setting-item-header pro-option">
					        <span><?php esc_html_e("Customize All Color", "elite-soccer-club"); ?></span> <span><?php esc_html_e("Premium", "elite-soccer-club"); ?></span>
					    </div>
					</a>

					<a target="_blank" href="<?php echo esc_url( ELITE_SOCCER_CLUB_BUY_NOW ); ?>" class="elite-soccer-club-theme-setting-item elite-soccer-club-theme-setting-item-unavailable">
					    <div class="elite-soccer-club-theme-setting-item-header pro-option">
					        <span><?php esc_html_e("Section Reorder", "elite-soccer-club"); ?></span> <span><?php esc_html_e("Premium", "elite-soccer-club"); ?></span>
					    </div>
					</a>

					<a target="_blank" href="<?php echo esc_url( ELITE_SOCCER_CLUB_BUY_NOW ); ?>" class="elite-soccer-club-theme-setting-item elite-soccer-club-theme-setting-item-unavailable">
					    <div class="elite-soccer-club-theme-setting-item-header pro-option">
					        <span><?php esc_html_e("Typography Options", "elite-soccer-club"); ?></span> <span><?php esc_html_e("Premium", "elite-soccer-club"); ?></span>
					    </div>
					</a>

					<a target="_blank" href="<?php echo esc_url( ELITE_SOCCER_CLUB_BUY_NOW ); ?>" class="elite-soccer-club-theme-setting-item elite-soccer-club-theme-setting-item-unavailable">
					    <div class="elite-soccer-club-theme-setting-item-header pro-option">
					        <span><?php esc_html_e("One Click Demo Import", "elite-soccer-club"); ?></span> <span><?php esc_html_e("Premium", "elite-soccer-club"); ?></span>
					    </div>
					</a>
					<a target="_blank" href="<?php echo esc_url( ELITE_SOCCER_CLUB_BUY_NOW ); ?>" class="elite-soccer-club-theme-setting-item elite-soccer-club-theme-setting-item-unavailable">
					    <div class="elite-soccer-club-theme-setting-item-header pro-option">
					        <span><?php esc_html_e("Background  Settings", "elite-soccer-club"); ?></span> <span><?php esc_html_e("Premium", "elite-soccer-club"); ?></span>
					    </div>
					</a>
					
				</div>
			</div>
		</div>
		<div id="righty">
			<div class="elite-soccer-club-theme-setting-sidebar-item">
		        <div class="elite-soccer-club-theme-setting-sidebar-header"><?php esc_html_e( 'Theme Bundle', 'elite-soccer-club' ) ?></div>
		        <div class="elite-soccer-club-theme-setting-sidebar-content">
		            <p class="m-0"><?php esc_html_e( 'Get our all themes in single pack.', 'elite-soccer-club' ) ?></p>
		            <div id="admin_links">
		            	<a href="<?php echo esc_url( ELITE_SOCCER_CLUB_BUNDLE ); ?>" target="_blank" class="blue-button-2"><?php esc_html_e( 'Theme Bundle', 'elite-soccer-club' ) ?></a>
		            </div>
		        </div>
		    </div>
			<div class="elite-soccer-club-theme-setting-sidebar-item">
		        <div class="elite-soccer-club-theme-setting-sidebar-header"><?php esc_html_e( 'Free Documentation', 'elite-soccer-club' ) ?></div>
		        <div class="elite-soccer-club-theme-setting-sidebar-content">
		            <p class="m-0"><?php esc_html_e( 'Our guide is available if you require any help configuring and setting up the theme.', 'elite-soccer-club' ) ?></p>
		            <div id="admin_links">
		            	<a href="<?php echo esc_url( ELITE_SOCCER_CLUB_DOCS_FREE ); ?>" target="_blank" class="blue-button-1"><?php esc_html_e( 'Free Documentation', 'elite-soccer-club' ) ?></a>
		            </div>
		        </div>
		    </div>
		    <div class="elite-soccer-club-theme-setting-sidebar-item">
		        <div class="elite-soccer-club-theme-setting-sidebar-header"><?php esc_html_e( 'Support', 'elite-soccer-club' ) ?></div>
		        <div class="elite-soccer-club-theme-setting-sidebar-content">
		            <p class="m-0"><?php esc_html_e( 'Visit our website to contact us if you face any issues with our lite theme!', 'elite-soccer-club' ) ?></p>
		            <div id="admin_links">
		            	<a class="blue-button-2" href="<?php echo esc_url( ELITE_SOCCER_CLUB_SUPPORT_FREE ); ?>" target="_blank" class="btn3"><?php esc_html_e( 'Support', 'elite-soccer-club' ) ?></a>
		            </div>
		        </div>
		    </div>
		    <div class="elite-soccer-club-theme-setting-sidebar-item">
		        <div class="elite-soccer-club-theme-setting-sidebar-header"><?php esc_html_e( 'Review', 'elite-soccer-club' ) ?></div>
		        <div class="elite-soccer-club-theme-setting-sidebar-content">
		            <p class="m-0"><?php esc_html_e( 'Are you having fun with Elite Soccer Club? Review us on WordPress.org to show your support!', 'elite-soccer-club' ) ?></p>
		            <div id="admin_links">
		            	<a href="<?php echo esc_url( ELITE_SOCCER_CLUB_REVIEW_FREE ); ?>" target="_blank" class="blue-button-1"><?php esc_html_e( 'Review', 'elite-soccer-club' ) ?></a>
		            </div>
		        </div>
		    </div>
		</div>
	</div>

<?php } ?>
