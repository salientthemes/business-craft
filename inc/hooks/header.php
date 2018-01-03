<?php
if ( ! function_exists( 'business_craft_set_global' ) ) :
/**
 * Setting global values for all saved customizer values
 *
 * @since Business-craft 1.0.0
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
 * @since Business-craft 1.0.0
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
 * @since Business-craft 1.0.0
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
     * @since  Business-craft 1.0.0
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
 * @since Business-craft 1.0.0
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

if ( ! function_exists( 'business_craft_before_page_start' ) ) :
/**
 * intro loader
 *
 * @since Business-craft 1.0.0
 *
 * @param null
 * @return null
 *
 */
function business_craft_before_page_start() {
    global $business_craft_customizer_all_values;
    /*intro loader*/
}
endif;
add_action( 'business_craft_action_before', 'business_craft_before_page_start', 10 );

if ( ! function_exists( 'business_craft_page_start' ) ) :
/**
 * page start
 *
 * @since Business-craft 1.0.0
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
 * @since Business-craft 1.0.0
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
 * @since Business-craft 1.0.0
 *
 * @param null
 * @return null
 *
 */
function business_craft_header() {
    global $business_craft_customizer_all_values;
    global $wp_version;
    global $post;
    ?>
        <header id="masthead" class="wrapper site-header" role="banner">
            <?php if (  is_front_page() && !is_home() ) { do_action('business_craft_header_section'); } ?>  
            <div id="main-menu" class="business-craft-main-menu-wrapper>          
                <div class="container main-menu">
                    <div class="row">
                        <!-- site branding -->
                        <div class="col-xs-9 col-sm-12 col-md-4">
                            <div class="site-branding">
                                        <?php business_craft_the_custom_logo(); ?>
                                        <?php if ( is_front_page() && is_home() ) : ?>
                                            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                                        <?php else : ?>
                                            <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                                        <?php endif;

                                        $description = get_bloginfo( 'description', 'display' );
                                        if ( $description || is_customize_preview() ) : ?>
                                            <h2 class="site-description"><?php echo esc_html($description); ?></h2>
                                        <?php endif;
                                ?>
                            </div><!-- .site-branding -->
                        </div><!-- .col-md-3 -->

                        <div class="col-xs-12 col-sm-12 col-md-8 cleaxfix">                            
                            <nav class="nav main-navigation">
                                <div class="nav-mobile">
                                  <i class="fa fa-bars"></i>
                                </div>
                              <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
                            </nav>                 
                        </div><!-- .col-md-9 -->
                    </div>
                </div>
           </div> 
        </header>
    <?php if (  !is_front_page() && is_home() ) { ?>
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">

    <?php } else if (!is_front_page()) {
        do_action('business-craft-page-inner-title');
    }?>

<?php 
}
endif;
add_action( 'business_craft_action_header', 'business_craft_header', 10 );

if( ! function_exists( 'business_craft_add_breadcrumb' ) ) :

/**
 * Breadcrumb
 *
 * @since Business-craft 1.0.0
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


