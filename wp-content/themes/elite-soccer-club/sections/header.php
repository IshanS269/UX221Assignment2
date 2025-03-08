<!-- Start: Header
============================= -->
<?php

$elite_soccer_club_header_button_link = get_theme_mod('elite_soccer_club_header_button_link');
$elite_soccer_club_header_button_text = get_theme_mod('elite_soccer_club_header_button_text');


?>

<header id="header" role="banner" class="nav-stick <?php echo esc_attr(elite_soccer_club_sticky_header()); ?>" <?php if ( get_header_image() ) { ?> style="background-image: url( <?php header_image(); ?> ); background-size: 100%;" <?php } ?>>
	<div class="container">
		<div class="navbar-area">
			<div class="row">
				<div class="col-xl-2 col-lg-3 col-md-4 col-sm-5 col-12 pe-0 logo-box">
					<div class="logo main">
						<?php if ( function_exists( 'elite_soccer_club_logo_title_description' ) ) :elite_soccer_club_logo_title_description(); endif; ?>
					</div>
				</div>
				<div class="col-xl-8 col-lg-6 col-md-4 col-sm-2 col-12 p-0">
					<div class="toggle-menu gb_menu text-md-start">
						<button onclick="elite_soccer_club_navigation_open()" class="gb_toggle p-2"><i class="fa fa-bars" aria-hidden="true"></i></button>
					</div>
					<div id="gb_responsive" class="nav side_gb_nav">
						<nav id="top_gb_menu" class="gb_nav_menu" role="navigation" aria-label="<?php esc_attr_e( 'Menu', 'elite-soccer-club' ); ?>">
							<?php 
							    wp_nav_menu( array( 
									'theme_location' => 'primary_menu',
									'container_class' => 'gb_navigation clearfix' ,
									'menu_class' => 'clearfix',
									'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav mb-0 px-0">%3$s</ul>',
									'fallback_cb' => 'wp_page_menu',
							    ) ); 
							?>
							<a href="javascript:void(0)" class="closebtn gb_menu" onclick="elite_soccer_club_navigation_close()">x<span class="screen-reader-text"><?php esc_html_e('Close Menu','elite-soccer-club'); ?></span></a>
						</nav>
					</div>
				</div>
				<div class="col-xl-2 col-lg-3 col-md-4 col-sm-5 col-12 ps-0 search-box">
					<div class="button-box">
						<!-- Search Icon -->
						<span id="search-icon" tabindex="0" style="cursor: pointer;">
						    <i class="fas fa-search" aria-label="<?php esc_attr_e( 'Open Search', 'elite-soccer-club' ); ?>"></i>
						</span>

						<!-- Popup Search -->
						<div id="search-popup" style="display: none;" aria-hidden="true">
						    <div id="search-popup-content" role="dialog" aria-labelledby="search-form-title">
						        <button id="close-popup" aria-label="<?php esc_attr_e( 'Close Search', 'elite-soccer-club' ); ?>" style="cursor: pointer;">&times;</button>
						        <form id="search-form" method="get" action="<?php echo esc_url(home_url('/')); ?>">
						            <h2 id="search-form-title" style="margin-bottom: 15px;"><?php esc_html_e('Search Posts','elite-soccer-club'); ?></h2>
						            <input type="text" name="s" placeholder="Search for posts..." required />
						            <input type="hidden" name="post_type" value="post" />
						            <button type="submit"><?php esc_html_e('Search','elite-soccer-club'); ?></button>
						        </form>
						    </div>
						</div>
						<?php if ( ! empty( $elite_soccer_club_header_button_link ) || ! empty( $elite_soccer_club_header_button_text ) ): ?>
							<a class="header-button" href="<?php echo esc_url( $elite_soccer_club_header_button_link ); ?>">
								<?php echo esc_html( $elite_soccer_club_header_button_text ); ?>
							</a>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>