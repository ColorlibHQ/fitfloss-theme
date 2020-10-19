<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package fitfloss
 */

get_header();
$benifits        = ! empty( fitfloss_meta( 'benifits') ) ? fitfloss_meta( 'benifits') : 'N/A';
$trainer_name    = ! empty( fitfloss_meta( 'trainer_name') ) ? fitfloss_meta( 'trainer_name') : 'N/A';
$course_fee      = ! empty( fitfloss_meta( 'course_fee') ) ? fitfloss_meta( 'course_fee') : 'N/A';
$available_seats = ! empty( fitfloss_meta( 'available_seats') ) ? fitfloss_meta( 'available_seats') : 'N/A';
$schedule_time   = ! empty( fitfloss_meta( 'schedule_time') ) ? fitfloss_meta( 'schedule_time') : 'N/A';
$enroll_url      = ! empty( fitfloss_meta( 'enroll_url') ) ? fitfloss_meta( 'enroll_url') : '#';

if( have_posts() ) {
    while( have_posts() ) : the_post();
    ?>
    <!-- cource details part here -->
    <section class="cource_details section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-7">
                    <div class="cource_details_content">
                        <div class="single_cource_details">
                            <h4><?php the_title()?></h4>
                            <?php the_content()?>
                        </div>
                        <div class="single_cource_details">
                            <h4><?php echo esc_html( 'Benifits', 'fitfloss' );?></h4>
                            <p><?php echo esc_html( $benifits )?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5">
                    <div class="cource_details_sidebar">
                        <div class="single_cource_details_sidebar">
                            <p><?php echo esc_html( 'Trainer’s Name', 'fitfloss' );?></p>
                            <span><?php echo esc_html( $trainer_name );?></span>
                        </div>
                        <div class="single_cource_details_sidebar">
                            <p><?php echo esc_html( 'Course Fee', 'fitfloss' );?></p>
                            <span><?php echo esc_html( $course_fee );?></span>
                        </div>
                        <div class="single_cource_details_sidebar">
                            <p><?php echo esc_html( 'Available Seats', 'fitfloss' );?></p>
                            <span><?php echo esc_html( $available_seats );?></span>
                        </div>
                        <div class="single_cource_details_sidebar">
                            <p><?php echo esc_html( 'Schedule', 'fitfloss' );?></p>
                            <span><?php echo esc_html( $schedule_time );?></span>
                        </div>
                        <a href="<?php echo esc_url( $enroll_url );?>" class="btn_1"><?php echo esc_html( 'Enroll the Course', 'fitfloss' );?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cource details part end -->
    <?php 
    endwhile;
}

// Footer============
get_footer();