<?php 
	if(isset($_GET['import-demo']) && $_GET['import-demo'] == true){
		// ------- Create Nav Menu --------
		$elite_soccer_club_menuname ='Primary Menu';
	    $elite_soccer_club_bpmenulocation = 'primary_menu';
	    $elite_soccer_club_menu_exists = wp_get_nav_menu_object( $elite_soccer_club_menuname );
	    if( !$elite_soccer_club_menu_exists){
	        $elite_soccer_club_menu_id = wp_create_nav_menu($elite_soccer_club_menuname);
	        $elite_soccer_club_home_parent = wp_update_nav_menu_item($elite_soccer_club_menu_id, 0, array(
				'menu-item-title' =>  __('HOME','elite-soccer-club'),
				'menu-item-classes' => 'home',
				'menu-item-url' =>home_url( '/' ),
				'menu-item-status' => 'publish')
			);                                                                                                        
			wp_update_nav_menu_item($elite_soccer_club_menu_id, 0, array(
	            'menu-item-title' =>  __('About Us','elite-soccer-club'),
	            'menu-item-classes' => 'about',
	            'menu-item-url' => home_url( '//about/' ),
	            'menu-item-status' => 'publish'));

			wp_update_nav_menu_item($elite_soccer_club_menu_id, 0, array(
	            'menu-item-title' =>  __('Services','elite-soccer-club'),
	            'menu-item-classes' => 'services',
	            'menu-item-url' => home_url( '//services/' ),
	            'menu-item-status' => 'publish'));

			
			wp_update_nav_menu_item($elite_soccer_club_menu_id, 0, array(
	            'menu-item-title' =>  __('Programs','elite-soccer-club'),
	            'menu-item-classes' => 'programs',
	            'menu-item-url' => home_url( '//programs/' ),
	            'menu-item-status' => 'publish'));

	        wp_update_nav_menu_item($elite_soccer_club_menu_id, 0, array(
	            'menu-item-title' =>  __('Team','elite-soccer-club'),
	            'menu-item-classes' => 'team',
	            'menu-item-url' => home_url( '//team/' ),
	            'menu-item-status' => 'publish'));

			wp_update_nav_menu_item($elite_soccer_club_menu_id, 0, array(
	            'menu-item-title' =>  __('Blog','elite-soccer-club'),
	            'menu-item-classes' => 'bog',
	            'menu-item-url' => home_url( '//bog/' ),
	            'menu-item-status' => 'publish'));

			wp_update_nav_menu_item($elite_soccer_club_menu_id, 0, array(
	            'menu-item-title' =>  __('Contact Us','elite-soccer-club'),
	            'menu-item-classes' => 'contact',
	            'menu-item-url' => home_url( '//contact/' ),
	            'menu-item-status' => 'publish'));
	        
			if( !has_nav_menu( $elite_soccer_club_bpmenulocation ) ){
	            $locations = get_theme_mod('nav_menu_locations');
	            $locations[$elite_soccer_club_bpmenulocation] = $elite_soccer_club_menu_id;
	            set_theme_mod( 'nav_menu_locations', $locations );
	        }
	    }
	    $elite_soccer_club_home_id='';
		$elite_soccer_club_home_content = '';
		$elite_soccer_club_home_title = 'Home';
		$elite_soccer_club_home = array(
			'post_type' => 'page',
			'post_title' => $elite_soccer_club_home_title,
			'post_content' => $elite_soccer_club_home_content,
			'post_status' => 'publish',
			'post_author' => 1,
			'post_slug' => 'home'
		);
		$elite_soccer_club_home_id = wp_insert_post($elite_soccer_club_home);
	    
		add_post_meta( $elite_soccer_club_home_id, '_wp_page_template', 'templates/template-homepage.php' );

		update_option( 'page_on_front', $elite_soccer_club_home_id );
		update_option( 'show_on_front', 'page' );

		//-----Header-----//

		set_theme_mod('elite_soccer_club_header_button_text','Join Us');
		set_theme_mod('elite_soccer_club_header_button_link','#');
		

		//-----Slider-----//

		set_theme_mod( 'elite_soccer_club_slide_on_off', 'on' );

		set_theme_mod('elite_soccer_club_slide_count','2');


		$elite_soccer_club_slider_sub_title=array('Every Kick Counts, Every Dream Takes Flight', 'Every Kick Matters, Every Dream Soars.');

		for ($i=1; $i <= 2; $i++) {
			set_theme_mod( 'elite_soccer_club_slider_image'.$i, get_template_directory_uri().'/images/demo-import-images/slides/slide_'.$i.'.png' );
			set_theme_mod('elite_soccer_club_slider_main_heading'.$i, $elite_soccer_club_slider_sub_title[$i - 1]);
			set_theme_mod('elite_soccer_club_slider_short_heading'.$i, 'Best Football Academy in Town');
			set_theme_mod('elite_soccer_club_slider_content'.$i, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do . ');
			set_theme_mod('elite_soccer_club_slider_button_link'.$i, '#');
			set_theme_mod('elite_soccer_club_slider_button_text'.$i, 'Register Now');
		}

		set_theme_mod('elite_soccer_club_slider_counter_number_1', '7+');
		set_theme_mod('elite_soccer_club_slider_counter_text_1', 'Years');

		set_theme_mod('elite_soccer_club_slider_counter_number_2', '150+');
		set_theme_mod('elite_soccer_club_slider_counter_text_2', 'Trophies');

		set_theme_mod('elite_soccer_club_slider_counter_number_3', '220+');
		set_theme_mod('elite_soccer_club_slider_counter_text_3', 'Tournaments');

		set_theme_mod('elite_soccer_club_slider_latest_match_short_heading', 'Latest Matches');
		set_theme_mod('elite_soccer_club_slider_latest_match_heading', 'Updates from Our Last Game');

		set_theme_mod('elite_soccer_club_slider_latest_match_sccore_number_left', '5');
		set_theme_mod('elite_soccer_club_slider_latest_match_sccore_number_right', '2');

		set_theme_mod('elite_soccer_club_slider_latest_match_stadium_name', 'Golden Stadium');
		set_theme_mod('elite_soccer_club_slider_latest_match_date_and_time', '10.03.22 - 06.00 PM');

		set_theme_mod( 'elite_soccer_club_slider_latest_match_left_logo_image', get_template_directory_uri().'/images/demo-import-images/slides/logo-left.png' );

		set_theme_mod( 'elite_soccer_club_slider_latest_match_right_logo_image', get_template_directory_uri().'/images/demo-import-images/slides/logo-right.png' );
		

		//-----Products-----//

		set_theme_mod( 'elite_soccer_club_product_on_off', 'on' );

		set_theme_mod('elite_soccer_club_why_join_us_short_heading', 'Why Join Us');

		set_theme_mod('elite_soccer_club_industry_why_join_us_heading', 'Elevate Your Game, Expand Your Horizons with Us');

		set_theme_mod('elite_soccer_club_industry_why_join_us_content', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.Lorem ipsum dolor sit amet, ');

		set_theme_mod('elite_soccer_club_industry_why_join_us_counter_number_1', '50+');
		set_theme_mod('elite_soccer_club_industry_why_join_us_counter_text_1', 'Active Players');

		set_theme_mod('elite_soccer_club_industry_why_join_us_counter_number_2', '230+');
		set_theme_mod('elite_soccer_club_industry_why_join_us_counter_text_2', 'Academy Alumni');

		set_theme_mod('elite_soccer_club_industry_why_join_us_counter_number_3', '175+');
		set_theme_mod('elite_soccer_club_industry_why_join_us_counter_text_3', 'Become Pro Player');

		set_theme_mod( 'elite_soccer_club_why_join_us_image', get_template_directory_uri().'/images/demo-import-images/why-join/why-join.png' );

	}
?>