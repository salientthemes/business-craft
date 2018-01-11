<?php
if ( ! function_exists( 'business_craft_set_global' ) ) :
/**
 * Setting global values for all saved customizer values
 *
 * @since business-craft 0.0.1
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
 * @since business-craft 0.0.1
 *
 * @param null
 * @return null
 *
 */
function business_craft_doctype() {
    ?>
    <!DOCTYPE html>
    <html <?php language_attributes(); ?>>
<?php
}
endif;
add_action( 'business_craft_action_before_head', 'business_craft_doctype', 10 );

if ( ! function_exists( 'business_craft_before_wp_head' ) ) :
/**
 * Before wp head codes
 *
 * @since business-craft 0.0.1
 *
 * @param null
 * @return null
 *
 */
function business_craft_before_wp_head() {
    ?>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
<?php
}
endif;
add_action( 'business_craft_action_before_wp_head', 'business_craft_before_wp_head', 10 );

if( ! function_exists( 'business_craft_default_layout' ) ) :
    /**
     * Business-craft default layout function
     *
     * @since  Business-craft 0.0.1
     *
     * @param int
     * @return string
     */
    function business_craft_default_layout( $post_id = null ){

        global $business_craft_customizer_all_values,$post;
        $business_craft_default_layout = $business_craft_customizer_all_values['business-craft-default-layout'];
        if( is_home()){
            $post_id = get_option( 'page_for_posts' );
        }
        if( null == $post_id && isset ( $post->ID ) ){
            $post_id = $post->ID;
        }
        $business_craft_default_layout_meta = get_post_meta( $post_id, 'business-craft-default-layout', true );

        if( false != $business_craft_default_layout_meta ) {
            $business_craft_default_layout = $business_craft_default_layout_meta;
        }
        return $business_craft_default_layout;
    }
endif;

if ( ! function_exists( 'business_craft_body_class' ) ) :
/**
 * add body class
 *
 * @since business-craft 0.0.1
 *
 * @param null
 * @return null
 *
 */
function business_craft_body_class( $business_craft_body_classes ) {
    if(!is_front_page() || ( is_front_page())){
        $business_craft_default_layout = business_craft_default_layout();
        if( !empty( $business_craft_default_layout ) ){
            if( 'left-sidebar' == $business_craft_default_layout ){
                $business_craft_body_classes[] = 'salient-left-sidebar';
            }
            elseif( 'right-sidebar' == $business_craft_default_layout ){
                $business_craft_body_classes[] = 'salient-right-sidebar';
            }
            elseif( 'both-sidebar' == $business_craft_default_layout ){
                $business_craft_body_classes[] = 'salient-both-sidebar';
            }
            elseif( 'no-sidebar' == $business_craft_default_layout ){
                $business_craft_body_classes[] = 'salient-no-sidebar';
            }
            else{
                $business_craft_body_classes[] = 'salient-right-sidebar';
            }
        }
        else{
            $business_craft_body_classes[] = 'salient-right-sidebar';
        }
    }
    return $business_craft_body_classes;

}
endif;
add_action( 'body_class', 'business_craft_body_class', 10, 1);

if ( ! function_exists( 'business_craft_page_start' ) ) :
/**
 * page start
 *
 * @since Flare 1.0.0
 *
 * @param null
 * @return null
 *
 */
function business_craft_page_start() {
?>
    <div id="page" class="site">
<?php
}
endif;
add_action( 'business_craft_action_before', 'business_craft_page_start', 15 );


if ( ! function_exists( 'business_craft_skip_to_content' ) ) :
/**
 * Skip to content
 *
 * @since business-craft 0.0.1
 *
 * @param null
 * @return null
 *
 */
function business_craft_skip_to_content() {
    ?>
    <body <?php body_class(); ?>>
    <div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'business-craft' ); ?></a>
    
<?php
}
endif;
add_action( 'business_craft_action_before_header', 'business_craft_skip_to_content', 10 );

if ( ! function_exists( 'business_craft_header' ) ) :
/**
 * Main header
 *
 * @since business-craft 0.0.1
 *
 * @param null
 * @return null
 *
 */
function business_craft_header()
{
    global $business_craft_customizer_all_values;
    global $wp_version;
    global $post;
    ?>
    <header id="masthead" class="wrapper site-header">
        <div class="container">
            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="site-branding">
                    <?php if (version_compare($wp_version, '4.5', '<'))
                    {
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
                    } 
                    else
                    {
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
            </div><!-- col -->

            <div class="nav-wrapper clearfix">
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <nav id="site-navigation" class="col-md-11 col-xs-12 main-navigation clearfix">
                        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                            <i class="fa fa-bars"></i>
                        </button>
                        <?php
                            wp_nav_menu( array(
                            'theme_location' => 'menu-1',
                            'menu_id'        => 'primary-menu',
                        ) );
                        ?>                      
                    </nav><!-- #site-navigation -->
                    <div class="top-header-search-share">
                        <i class="fa fa-share-alt share" id="header-share"></i>
                        <i class="fa fa-search" id="header-search"></i>
                    </div>
                    <div class="search-form-nav" id="top-search">
                        <?php get_search_form();?>
                    </div><!-- top-search -->
                    <div id="social-header" class="social-widget salient-social-section social-icon-only top-tooltip">
                        <?php
                            wp_nav_menu( array(
                            'theme_location' => 'menu-2',
                            'menu_id'        => 'social-menu',
                        ) );
                        ?>      
                    </div>
                </div><!-- col -->
            </div><!-- wrapper-->
        </div>
            <!-- </div> -->
    </header>

    <?php if (  is_front_page() && !is_home() )
        {?>
        <!-- <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main"> -->
                    <?php } 
                    else
                    {
                        do_action('business-craft-page-inner-title');
                    }?>

                    <?php 
}?>
              <!--   </main>
            </div>
        </div> -->
<?php endif;
add_action( 'business_craft_action_header', 'business_craft_header', 10 );

if( ! function_exists( 'business_craft_add_breadcrumb' ) ) :

/**
 * Breadcrumb
 *
 * @since business-craft 0.0.1
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
        echo '<div id="breadcrumb" class="breadcrumb-wrap">';
         business_craft_simple_breadcrumb();
        echo '</div><!-- #breadcrumb -->';
    }
endif;
add_action( 'business_craft_action_after_title', 'business_craft_add_breadcrumb', 10 );


