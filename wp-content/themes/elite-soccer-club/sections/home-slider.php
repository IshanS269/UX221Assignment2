<?php if ( true == get_theme_mod( 'elite_soccer_club_slide_on_off', 'off' ) ) : ?>

<?php $elite_soccer_club_slide_count = get_theme_mod('elite_soccer_club_slide_count');

$elite_soccer_club_slider_counter_number_1 = get_theme_mod('elite_soccer_club_slider_counter_number_1');
$elite_soccer_club_slider_counter_text_1 = get_theme_mod('elite_soccer_club_slider_counter_text_1');

$elite_soccer_club_slider_counter_number_2 = get_theme_mod('elite_soccer_club_slider_counter_number_2');
$elite_soccer_club_slider_counter_text_2 = get_theme_mod('elite_soccer_club_slider_counter_text_2');

$elite_soccer_club_slider_counter_number_3 = get_theme_mod('elite_soccer_club_slider_counter_number_3');
$elite_soccer_club_slider_counter_text_3 = get_theme_mod('elite_soccer_club_slider_counter_text_3');

$elite_soccer_club_slider_latest_match_short_heading = get_theme_mod('elite_soccer_club_slider_latest_match_short_heading');
$elite_soccer_club_slider_latest_match_heading = get_theme_mod('elite_soccer_club_slider_latest_match_heading');

$elite_soccer_club_slider_latest_match_left_logo_image = get_theme_mod('elite_soccer_club_slider_latest_match_left_logo_image');
$elite_soccer_club_slider_latest_match_right_logo_image = get_theme_mod('elite_soccer_club_slider_latest_match_right_logo_image');

$elite_soccer_club_slider_latest_match_sccore_number_left = get_theme_mod('elite_soccer_club_slider_latest_match_sccore_number_left');
$elite_soccer_club_slider_latest_match_sccore_number_right = get_theme_mod('elite_soccer_club_slider_latest_match_sccore_number_right');

$elite_soccer_club_slider_latest_match_stadium_name = get_theme_mod('elite_soccer_club_slider_latest_match_stadium_name');
$elite_soccer_club_slider_latest_match_date_and_time = get_theme_mod('elite_soccer_club_slider_latest_match_date_and_time');

?>

<section id="home_slider">
	<div class="owl-carousel slider-box">
		<?php for ($i=1; $i <= $elite_soccer_club_slide_count; $i++) {
			$elite_soccer_club_slider_image = get_theme_mod('elite_soccer_club_slider_image'.$i);
			$elite_soccer_club_slider_short_heading = get_theme_mod('elite_soccer_club_slider_short_heading'.$i);
			$elite_soccer_club_slider_main_heading = get_theme_mod('elite_soccer_club_slider_main_heading'.$i);
			$elite_soccer_club_slider_content = get_theme_mod('elite_soccer_club_slider_content'.$i);
			$elite_soccer_club_slider_button_link = get_theme_mod('elite_soccer_club_slider_button_link'.$i); 
			$elite_soccer_club_slider_button_text = get_theme_mod('elite_soccer_club_slider_button_text'.$i); 
			?>
			<div class="slider_main_box">
				<?php if ( ! empty( $elite_soccer_club_slider_image ) ) : ?>
					<img src="<?php echo esc_url( $elite_soccer_club_slider_image ); ?>">
					<div class="slider_content_box">
						<div class="slider_heading">
							<?php if ( ! empty( $elite_soccer_club_slider_short_heading ) ) : ?>
								<h3><?php echo esc_html( $elite_soccer_club_slider_short_heading ); ?></h3>
							<?php endif; ?>
							<?php if (! empty( $elite_soccer_club_slider_main_heading ) ): ?>
								<h2><?php echo esc_html( $elite_soccer_club_slider_main_heading ); ?></h2>
							<?php endif; ?>
							<?php if ( ! empty( $elite_soccer_club_slider_content ) ) : ?>
								<p><?php echo esc_html( $elite_soccer_club_slider_content ); ?></p>
							<?php endif; ?>
							<div class="slider_button mt-4">
								<?php if ( ! empty( $elite_soccer_club_slider_button_link ) || ! empty( $elite_soccer_club_slider_button_text ) ): ?>
									<a class="button1" href="<?php echo esc_url( $elite_soccer_club_slider_button_link ); ?>"><span><?php echo esc_html( $elite_soccer_club_slider_button_text ); ?></span></a>
								<?php endif; ?>
							</div>
						</div>
					</div>
				<?php endif; ?>
			</div>
		<?php } ?>
	</div>
	<div class="slider-bottom-box">
		<div class="row m-0">
			<?php if ( ! empty( $elite_soccer_club_slider_counter_number_1 ) || ! empty( $elite_soccer_club_slider_counter_text_1 ) ) : ?>
				<div class="col-xl-7 col-lg-6 col-md-12 slider-counter-box align-self-center">
					<div class="count-main-box text-center mt-5 mb-5">
			          	<div class="counter-box row">
				            <div class="col-lg-4 col-md-4 col-sm-4 col-4 counter-box-main">
				              <?php if ( ! empty( $elite_soccer_club_slider_counter_number_1 ) || ! empty( $elite_soccer_club_slider_counter_text_1 ) || ! empty( $elite_soccer_club_slider_counter_number_2 ) || ! empty( $elite_soccer_club_slider_counter_text_2 ) || ! empty( $elite_soccer_club_slider_counter_number_3 ) || ! empty( $elite_soccer_club_slider_counter_text_3 ) ) : ?>
				                <div class="text-box">
				                  <h5 class="mb-0"><?php echo esc_html( $elite_soccer_club_slider_counter_number_1 ); ?></h5>
				                  <p class="mb-0"><?php echo esc_html( $elite_soccer_club_slider_counter_text_1 ); ?></p>
				                </div>
				              <?php endif; ?>
				            </div>
				            <div class="col-lg-4 col-md-4 col-sm-4 col-4 counter-box-main">
				              <?php if ( ! empty( $elite_soccer_club_slider_counter_number_2 ) || ! empty( $elite_soccer_club_slider_counter_text_2 ) ) : ?>
				                <div class="text-box">
				                  <h5 class="mb-0"><?php echo esc_html( $elite_soccer_club_slider_counter_number_2 ); ?></h5>
				                  <p class="mb-0"><?php echo esc_html( $elite_soccer_club_slider_counter_text_2 ); ?></p>
				                </div>
				              <?php endif; ?>
				            </div>
				            <div class="col-lg-4 col-md-4 col-sm-4 col-4 counter-box-main">
				              <?php if ( ! empty( $elite_soccer_club_slider_counter_number_3 ) || ! empty( $elite_soccer_club_slider_counter_text_3 ) ) : ?>
				                <div class="text-box">
				                  <h5 class="mb-0"><?php echo esc_html( $elite_soccer_club_slider_counter_number_3 ); ?></h5>
				                  <p class="mb-0"><?php echo esc_html( $elite_soccer_club_slider_counter_text_3 ); ?></p>
				                </div>
				              <?php endif; ?>
				            </div>
			          	</div>
			        </div>
				</div>
			<?php endif; ?>
			<?php if ( ! empty( $elite_soccer_club_slider_latest_match_short_heading ) || ! empty( $elite_soccer_club_slider_latest_match_heading ) || ! empty( $elite_soccer_club_slider_latest_match_left_logo_image ) || ! empty( $elite_soccer_club_slider_latest_match_sccore_number_left ) || ! empty( $elite_soccer_club_slider_latest_match_sccore_number_right ) || ! empty( $elite_soccer_club_slider_latest_match_stadium_name ) || ! empty( $elite_soccer_club_slider_latest_match_date_and_time ) || ! empty( $elite_soccer_club_slider_latest_match_right_logo_image ) ) : ?>
				<div class="col-xl-5 col-lg-6 match-box-main py-5 align-self-center">
					<div class="row score-box-main">
						<div class="col-lg-5 col-md-5 col-sm-12 col-12 match-box-left align-self-center">
							<?php if ( ! empty( $elite_soccer_club_slider_latest_match_short_heading ) || ! empty( $elite_soccer_club_slider_latest_match_heading ) ) : ?>
			                	<div class="text-box">
			                  		<h6 class="mb-0"><?php echo esc_html( $elite_soccer_club_slider_latest_match_short_heading ); ?></h6>
			                  		<h4 class="mb-0"><?php echo esc_html( $elite_soccer_club_slider_latest_match_heading ); ?></h4>
			                	</div>
			              	<?php endif; ?>
						</div>
						<div class="col-lg-7 col-md-7 col-sm-12 col-12 align-self-center align-self-center">
							<div class="row team-score-box">
								<div class="col-lg-3 col-md-3 col-sm-3 col-3 align-self-center">
									<?php if ( ! empty( $elite_soccer_club_slider_latest_match_left_logo_image ) ) : ?>
										<img src="<?php echo esc_url( $elite_soccer_club_slider_latest_match_left_logo_image ); ?>">
									<?php endif; ?>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-6 align-self-center">
									<div class="sccore-box-number">
										<div class="score-number">
											<?php if ( ! empty( $elite_soccer_club_slider_latest_match_sccore_number_left ) ) : ?>
												<span>
													<?php echo esc_html( $elite_soccer_club_slider_latest_match_sccore_number_left ); ?>
												</span>
											<?php endif; ?>
											-
											<?php if ( ! empty( $elite_soccer_club_slider_latest_match_sccore_number_right ) ) : ?>
												<span>
													<?php echo esc_html( $elite_soccer_club_slider_latest_match_sccore_number_right ); ?>
												</span>
											<?php endif; ?>
										</div>
										<?php if ( ! empty( $elite_soccer_club_slider_latest_match_stadium_name ) ) : ?>
						                  		<h4 class="mb-0"><?php echo esc_html( $elite_soccer_club_slider_latest_match_stadium_name ); ?></h4>
						              	<?php endif; ?>
						              	<?php if ( ! empty( $elite_soccer_club_slider_latest_match_date_and_time ) ) : ?>
						                  		<p class="mb-0"><?php echo esc_html( $elite_soccer_club_slider_latest_match_date_and_time ); ?></p>
						              	<?php endif; ?>
									</div>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-3 col-3 align-self-center">
									<?php if ( ! empty( $elite_soccer_club_slider_latest_match_right_logo_image ) ) : ?>
										<img src="<?php echo esc_url( $elite_soccer_club_slider_latest_match_right_logo_image ); ?>">
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>

<?php endif; ?>