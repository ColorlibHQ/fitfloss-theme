<!--::header part start::-->
<header class="main_menu">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <?php echo fitfloss_theme_logo( 'navbar-brand' );?>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <?php
                        if(has_nav_menu('primary-menu')) {
                            wp_nav_menu(array(
                                'menu'            => 'primary-menu',
                                'theme_location'  => 'primary-menu',
                                'menu_id'         => false,
                                'container_class' => 'collapse navbar-collapse main-menu-item justify-content-center',
                                'container_id' => 'navbarSupportedContent',
                                'menu_class'      => 'navbar-nav align-items-center',
                                'depth'           => 3,
                                'walker'          => new fitfloss_bootstrap_navwalker()
                            ));
                        }
                        
                        if ( !empty( fitfloss_opt('fitfloss_header_phone_number') )) { 
                            $phone_number  = fitfloss_opt('fitfloss_header_phone_number');
                            ?>
                            <a href="tel:<?php echo trim( $phone_number )?>" class="btn_1 d-none d-lg-inline-block"><?php echo esc_html( $phone_number )?></a>
                            <?php
                        }
                    ?>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Header part end-->