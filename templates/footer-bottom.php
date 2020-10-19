<?php 
	$siteUrl 	  = home_url('/');		
		
	// Copyright text
	$url = 'https://colorlib.com/';
	$copyText = sprintf( __( 'Theme by %s colorlib %s Copyright &copy; %s  |  All rights reserved.', 'fitfloss' ), '<a target="_blank" href="' . esc_url( $url ) . '">', '</a>', date( 'Y' ) );
	$copyRight = !empty( fitfloss_opt( 'fitfloss_footer_copyright_text' ) ) ? fitfloss_opt( 'fitfloss_footer_copyright_text' ) : $copyText;
?>

	<div class="row align-items-center">
		<div class="col-lg-12">
			<div class="copyright_part_text">
				<div class="row">
					<div class="col-lg-6">
						<p class="footer-text m-0"><?php echo wp_kses_post( $copyRight ); ?></p>
					</div>

					<?php
					// Social profiles
					$social_opt = fitfloss_opt('fitfloss_social_profile_toggle');
					if ( $social_opt == true ) {
						$social_items = fitfloss_opt('fitfloss_social_profiles');
						if( is_array( $social_items ) && count( $social_items ) > 0 ){
							echo '<div class="col-lg-6"><div class="social_icon">';
								foreach ($social_items as $value) {
									echo '<a href="'. esc_url($value['social_url']) .'"> <i class="'. esc_attr($value['social_icon']) .'"></i> </a>';
								}
							echo '</div></div>';
						}          
					}  
					?>				
				</div>
			</div>
		</div>
	</div>