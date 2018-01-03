<?php
if ( ! function_exists( 'business_craft_set_global' ) ) :
    /**
     * Setting global values for all saved customizer values
     *
     * @since business_craft 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function business_craft_set_global() {
        /*Getting saved values start*/
        $GLOBALS['business_craft_customizer_all_values'] = business_craft_get_all_options(1);
    }
    endif;
add_action( 'business_craft_action_before_head', 'business_craft_set_global', 0 );

if ( ! function_exists( 'business_craft_doctype' ) ) :
    /**
     * Doctype Declaration
     *
     * @since business_craft 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function business_craft_doctype() {
        ?>
        <!DOCTYPE html><html <?php language_attributes(); ?>>
    <?php
    }
endif;
add_action( 'business_craft_action_before_head', 'business_craft_doctype', 10 );

if ( ! function_exists( 'business_craft_before_wp_head' ) ) :
    /**
     * Before wp head codes
     *
     * @since business_craft 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function business_craft_before_wp_head() {
        ?>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php
}
endif;
add_action( 'business_craft_action_before_wp_head', 'business_craft_before_wp_head', 10 );

if( ! function_exists( 'business_craft_default_layout' ) ) :
    /**
     * business_craft default layout function
     *
     * @since  business_craft 1.0.0
     *
     * @param int
     * @return string
     */
    function business_craft_default_layout(){
        global $business_craft_customizer_all_values,$post;
        $business_craft_default_layout = $business_craft_customizer_all_values['business_craft-default-layout'];
        return $business_craft_default_layout;
    }
endif;

    if ( ! function_exists( 'business_craft_body_class' ) ) :
    /**
     * add body class
     *
     * @since business_craft 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function business_craft_body_class( $business_craft_body_classes ) {
        if(!is_front_page()){
            $business_craft_default_layout = business_craft_default_layout();
            if( !empty( $business_craft_default_layout ) ){
                if( 'left-sidebar' == $business_craft_default_layout ){
                    $business_craft_body_classes[] = 'salient-left-sidebar';
                }
                elseif( 'right-sidebar' == $business_craft_default_layout ){
                    $business_craft_body_classes[] = 'salient-right-sidebar';
                }
                elseif( 'no-sidebar' == $business_craft_default_layout ){
                    $business_craft_body_classes[] = 'salient-no-sidebar';
                }
                else{
                    $business_craft_body_classes[] = 'salient-right-sidebar';
                }
            }
            else{
                $business_craft_body_classes[] = 'business_craft-right-sidebar';
            }
        }
        return $business_craft_body_classes;

    }
endif;
add_action( 'body_class', 'business_craft_body_class', 10, 1);

/*business_craft_action_after_body*/

if ( ! function_exists( 'business_craft_page_start' ) ) :
    /**
     * page start
     *
     * @since business_craft 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function business_craft_page_start() {
    ?>
        <div id="page" class="hfeed site">
    <?php
    }
endif;
add_action( 'business_craft_action_before', 'business_craft_page_start', 15 );

/*business_craft_action_after_body*/

if ( ! function_exists( 'business_craft_social_menu' ) ) :
    /**
     * page start
     *
     * @since business_craft 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function business_craft_social_menu() {
        global $business_craft_customizer_all_values;
    ?>

        
            <div class="social-widget evision-social-section social-icon-only">
                <?php
                    wp_nav_menu( array( 'theme_location' => 'social', 'link_before' => '<span>',
                        'link_after'=>'</span>' , 'menu_id' => 'primary-menu','fallback_cb' => false, ) );
                ?>
            </div>
        <?php
            if (is_front_page() || is_home()) { ?>
                <div class="social-widget evision-social-section social-icon-only">
                    <?php
                        wp_nav_menu( array( 'theme_location' => 'social', 'link_before' => '<span>',
                            'link_after'=>'</span>' , 'menu_id' => 'primary-menu','fallback_cb' => false, ) );
                    ?>
                </div>
        <?php }
    }
endif;
add_action( 'business_craft_action_after_page_id', 'business_craft_social_menu', 15 );


// loader

if ( ! function_exists( 'business_craft_skip_to_content' ) ) :
    /**
     * Skip to content
     *
     * @since business_craft 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function business_craft_skip_to_content() {
        ?>
        <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'business-craft' ); ?></a>
    <?php
    }
endif;
add_action( 'business_craft_action_before_header', 'business_craft_skip_to_content', 10 );

if ( ! function_exists( 'business_craft_header' ) ) :
    /**
     * Main header
     *
     * @since business_craft 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function business_craft_header() {
        global $business_craft_customizer_all_values;
        global $wp_version;
        ?>
            <div class="wrapper header-wrapper">
                <header id="masthead" class="site-header" role="banner">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="site-branding">
                                    <?php if (version_compare($wp_version, '4.5', '<')) {
                                        if ( isset($business_craft_customizer_all_values['business-craft-logo']) && !empty($business_craft_customizer_all_values['business-craft-logo'])) :
                                            echo '<div class="site-title">';?>
                                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                                <img class="header-logo" src="<?php echo esc_url($business_craft_customizer_all_values['business-craft-logo']); ?>" alt="<?php bloginfo( 'name' );?>">
                                            </a>
                                            <?php echo '</div>';?>
                                        <?php else :
                                            echo '<div class="site-title">';?>
                                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                                <?php if ( 1 == $business_craft_customizer_all_values['business-craft-enable-title'] ) :
                                                    bloginfo( 'name' );
                                                endif;?>
                                            </a>
                                            <?php if ( 1 == $business_craft_customizer_all_values['business-craft-enable-tagline'] ) :
                                                echo '<p class="site-description">'. esc_html (get_bloginfo('description' )).'</p>';
                                            endif; ?>
                                            <?php echo '</div>';
                                        endif;
                                    } else {
                                        business_craft_the_custom_logo();
                                        if ( is_front_page() && is_home() ) : ?>
                                            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                                        <?php else : ?>
                                            <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                                        <?php endif;
                                        $description = get_bloginfo( 'description', 'display' );
                                        if ( $description || is_customize_preview() ) : ?>
                                            <h2 class="site-description"><?php echo esc_html($description ); ?></h2>
                                        <?php endif;
                                    }?>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-8 col-md-8">
                                <div class="row">
                                    <div class="nav-holder">
                                        <div class="col-xs-12 mb-device go-left">
                                            <button id="menu-toggle" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><span class="fa fa-bars"></span><?php __('MENU','business_craft') ?></button>
                                            <div id="site-header-menu" class="site-header-menu">
                                                <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'business_craft' ); ?>">
                                                    <?php
                                                        wp_nav_menu( array(
                                                            'theme_location' => 'primary',
                                                            'menu_id'        => 'primary-menu',
                                                            'menu_class'     => 'primary-menu',
                                                        ) );
                                                    ?>
                                                </nav><!-- #site-navigation -->
                                            </div><!-- site-header-menu -->
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>                
            </div>
    <?php
    }
endif;
add_action( 'business_craft_action_header', 'business_craft_header', 10 );

if( ! function_exists( 'business_craft_add_breadcrumb' ) ) :
    /**
     * Breadcrumb
     *
     * @since business_craft 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function business_craft_add_breadcrumb(){
        global $business_craft_customizer_all_values;
        // Bail if Breadcrumb disabled
        $breadcrumb_enable_breadcrumb = $business_craft_customizer_all_values['business-craft-enable-breadcrumb' ];
        if ( 1 != $breadcrumb_enable_breadcrumb ) {
            return;
        }
        // Bail if Home Page
        if ( is_front_page() || is_home() ) {
            return;
        }
        echo '<div id="breadcrumb" class="wrapper wrap-breadcrumb"><div class="container"><div class="breadcrumb-inner">';
         business_craft_simple_breadcrumb();
        echo '</div></div><!-- .container-fluid --></div><!-- #breadcrumb -->';
        return;
    }
endif;
add_action( 'business_craft_action_after_header', 'business_craft_add_breadcrumb', 20 );