<?php if ( true == get_theme_mod( 'elite_soccer_club_why_join_us_on_off', 'off' ) ) : ?>
<?php  
$elite_soccer_club_why_join_us_short_heading = get_theme_mod('elite_soccer_club_why_join_us_short_heading');
$elite_soccer_club_industry_why_join_us_heading = get_theme_mod('elite_soccer_club_industry_why_join_us_heading');
$elite_soccer_club_industry_why_join_us_content = get_theme_mod('elite_soccer_club_industry_why_join_us_content');

$elite_soccer_club_industry_why_join_us_counter_number_1 = get_theme_mod('elite_soccer_club_industry_why_join_us_counter_number_1');
$elite_soccer_club_industry_why_join_us_counter_text_1 = get_theme_mod('elite_soccer_club_industry_why_join_us_counter_text_1');

$elite_soccer_club_industry_why_join_us_counter_number_2 = get_theme_mod('elite_soccer_club_industry_why_join_us_counter_number_2');
$elite_soccer_club_industry_why_join_us_counter_text_2 = get_theme_mod('elite_soccer_club_industry_why_join_us_counter_text_2');

$elite_soccer_club_industry_why_join_us_counter_number_3 = get_theme_mod('elite_soccer_club_industry_why_join_us_counter_number_3');
$elite_soccer_club_industry_why_join_us_counter_text_3 = get_theme_mod('elite_soccer_club_industry_why_join_us_counter_text_3');

$elite_soccer_club_why_join_us_image = get_theme_mod('elite_soccer_club_why_join_us_image');

?>
<section id="home_our_cases" class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 align-self-center left-box">
        <?php if ( ! empty( $elite_soccer_club_why_join_us_short_heading ) ) : ?>
          <h5 class="mb-3"><?php echo esc_html( $elite_soccer_club_why_join_us_short_heading ); ?></h5>
        <?php endif; ?>
        <?php if ( ! empty( $elite_soccer_club_industry_why_join_us_heading ) ): ?>
          <h4 class="text-left mb-3"><?php echo esc_html( $elite_soccer_club_industry_why_join_us_heading ); ?></h4>
        <?php endif; ?>
        <?php if ( ! empty( $elite_soccer_club_industry_why_join_us_content ) ) : ?>
          <p class="m-0"><?php echo esc_html( $elite_soccer_club_industry_why_join_us_content ); ?></p>
        <?php endif; ?>
        <div class="heroes_content_box text-center mt-5 mb-4">
          <?php if ( ! empty( $elite_soccer_club_industry_why_join_us_counter_number_1 ) || ! empty( $elite_soccer_club_industry_why_join_us_counter_text_1 ) || ! empty( $elite_soccer_club_industry_why_join_us_counter_number_2 ) || ! empty( $elite_soccer_club_industry_why_join_us_counter_text_2 ) || ! empty( $elite_soccer_club_industry_why_join_us_counter_number_3 ) || ! empty( $elite_soccer_club_industry_why_join_us_counter_text_3 ) ) : ?>
            <div class="goal-box row">
              <div class="col-lg-4 col-md-4 col-sm-4 col-4 goal-box-main">
                <?php if ( ! empty( $elite_soccer_club_industry_why_join_us_counter_number_1 ) || ! empty( $elite_soccer_club_industry_why_join_us_counter_text_1 ) ) : ?>
                  <div class="text-box">
                    <h5 class="mb-0"><?php echo esc_html( $elite_soccer_club_industry_why_join_us_counter_number_1 ); ?></h5>
                    <p class="mb-0"><?php echo esc_html( $elite_soccer_club_industry_why_join_us_counter_text_1 ); ?></p>
                  </div>
                <?php endif; ?>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-4 goal-box-main">
                <?php if ( ! empty( $elite_soccer_club_industry_why_join_us_counter_number_2 ) || ! empty( $elite_soccer_club_industry_why_join_us_counter_text_2 ) ) : ?>
                  <div class="text-box">
                    <h5 class="mb-0"><?php echo esc_html( $elite_soccer_club_industry_why_join_us_counter_number_2 ); ?></h5>
                    <p class="mb-0"><?php echo esc_html( $elite_soccer_club_industry_why_join_us_counter_text_2 ); ?></p>
                  </div>
                <?php endif; ?>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-4 goal-box-main">
                <?php if ( ! empty( $elite_soccer_club_industry_why_join_us_counter_number_3 ) || ! empty( $elite_soccer_club_industry_why_join_us_counter_text_3 ) ) : ?>
                  <div class="text-box">
                    <h5 class="mb-0"><?php echo esc_html( $elite_soccer_club_industry_why_join_us_counter_number_3 ); ?></h5>
                    <p class="mb-0"><?php echo esc_html( $elite_soccer_club_industry_why_join_us_counter_text_3 ); ?></p>
                  </div>
                <?php endif; ?>
              </div>
            </div>
          <?php endif; ?>
        </div>
      </div>
      <div class="col-lg-2 align-self-center">
      </div>
      <div class="col-lg-5 align-self-center">
        <?php if ( ! empty( $elite_soccer_club_why_join_us_image ) ) : ?>
          <div class="heroes_main_box text-center">
            <img class="" src="<?php echo esc_url( $elite_soccer_club_why_join_us_image ); ?>">
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
