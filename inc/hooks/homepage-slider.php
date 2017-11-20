<?php
if ( ! function_exists( 'business_craft_featured_slider_array' ) ) :
    /**
     * Featured Slider array creation
     *
     * @since Flare 1.0.0
     *
     * @param string $from_slider
     * @return array
     */
    function business_craft_featured_slider_array( $from_slider ){
        global $business_craft_customizer_all_values;
        $business_craft_feature_slider_number = absint( $business_craft_customizer_all_values['business-craft-featured-slider-number'] );
        $business_craft_feature_slider_single_words = absint( $business_craft_customizer_all_values['business-craft-fs-single-words'] );
        $business_craft_feature_slider_contents_array[0]['business-craft-feature-slider-title'] = __('Welcome to The Digital Media','business-craft');
        $business_craft_feature_slider_contents_array[0]['business-craft-feature-slider-link'] = '#';
        $business_craft_feature_slider_contents_array[0]['business-craft-feature-slider-image'] = get_template_directory_uri()."/assets/images/bg1.jpg";
        $repeated_page = array('business-craft-fs-pages-ids');
        $business_craft_feature_slider_args = array();

        if ( 'from-category' ==  $from_slider ){
            $business_craft_feature_slider_category = $business_craft_customizer_all_values['business-craft-featured-slider-category'];
            if( 0 != $business_craft_feature_slider_category ){
                $business_craft_feature_slider_args =    array(
                    'post_type' => 'post',
                    'cat' => absint($business_craft_feature_slider_category),
                    'ignore_sticky_posts' => true
                );
            }
        }
        else{
            $business_craft_feature_slider_posts = salient_customizer_get_repeated_all_value(3 , $repeated_page);
            $business_craft_feature_slider_posts_ids = array();
            if( null != $business_craft_feature_slider_posts ) {
                foreach( $business_craft_feature_slider_posts as $business_craft_feature_slider_post ) {
                    if( 0 != $business_craft_feature_slider_post['business-craft-fs-pages-ids'] ){
                        $business_craft_feature_section_posts_ids[] = $business_craft_feature_slider_post['business-craft-fs-pages-ids'];
                    }
                }

                if( !empty( $business_craft_feature_section_posts_ids )){
                    $business_craft_feature_slider_args =    array(
                        'post_type' => 'page',
                        'post__in' => array_map( 'absint', $business_craft_feature_section_posts_ids ),
                        'posts_per_page' => absint($business_craft_feature_slider_number),
                        'orderby' => 'post__in'
                    );
                }

            }
        }
        if( !empty( $business_craft_feature_slider_args )){
            // the query
            $business_craft_fature_section_post_query = new WP_Query( $business_craft_feature_slider_args );

            if ( $business_craft_fature_section_post_query->have_posts() ) :
                $i = 0;
                while ( $business_craft_fature_section_post_query->have_posts() ) : $business_craft_fature_section_post_query->the_post();
                    $url ='';
                    if(has_post_thumbnail()){
                        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'business-craft-main-banner' );
                        $url = $thumb['0'];
                    }
                    $business_craft_feature_slider_contents_array[$i]['business-craft-feature-slider-title'] = get_the_title();
                    $business_craft_feature_slider_contents_array[$i]['business-craft-feature-slider-link'] = get_permalink();
                    $business_craft_feature_slider_contents_array[$i]['business-craft-feature-slider-image'] = $url;
                    $i++;
                endwhile;
                wp_reset_postdata();
            endif;
        }
        return $business_craft_feature_slider_contents_array;
    }
endif;

if ( ! function_exists( 'business_craft_featured_home_slider' ) ) :
    /**
     * Featured Slider
     *
     * @since business-craft 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function business_craft_featured_home_slider() {
        global $business_craft_customizer_all_values;

        if( 1 != $business_craft_customizer_all_values['business-craft-feature-slider-enable'] ){
            return null;
        }
        $business_craft_feature_slider_selection_options = $business_craft_customizer_all_values['business-craft-featured-slider-selection'];
        $business_craft_slider_arrays = business_craft_featured_slider_array( $business_craft_feature_slider_selection_options );


        if( is_array( $business_craft_slider_arrays )){
        $business_craft_feature_slider_number = absint( $business_craft_customizer_all_values['business-craft-featured-slider-number'] );
        $business_craft_feature_enable_button = $business_craft_customizer_all_values['business-craft-fs-enable-button'];
    ?>

    <section id="banner-section" class="banner-section"><!-- banner section -->
        <div class="banner-wrapper">
            <?php
            $i = 1;
            foreach( $business_craft_slider_arrays as $business_craft_slider_array ){
                if( $business_craft_feature_slider_number < $i){
                    break;
                }
                if(empty($business_craft_slider_array['business-craft-feature-slider-image'])){
                    $business_craft_feature_slider_image = get_template_directory_uri().'/assets/images/bg1.jpg';
                }
                else{
                    $business_craft_feature_slider_image =$business_craft_slider_array['business-craft-feature-slider-image'];
                }
                ?>
                    <div class="banner-slider" style="background-image: url('<?php echo esc_url( $business_craft_feature_slider_image )?>');" >
                        <div class="overlay">
                            <h1 class="sec-title"><a href="<?php echo esc_url( $business_craft_slider_array['business-craft-feature-slider-link'] );?>"><?php echo esc_html( $business_craft_slider_array['business-craft-feature-slider-title'] );?></a></h1>
                            <?php if ( 1 == $business_craft_feature_enable_button){ ?>
                                <a href="<?php echo esc_url( $business_craft_slider_array['business-craft-feature-slider-link'] );?>" class="border-btn">
                                    <?php echo esc_html( $business_craft_customizer_all_values['business-craft-fs-button-text'] );?>
                                </a>
                            <?php } ?>
                        </div><!-- overlay -->
                    </div><!-- slider content -->  
                    <?php
                $i++;
                }
                ?>   
        </div><!-- wrapper -->
    </section><!-- section -->
    <?php
        }
    }
endif;
add_action( 'business_craft_homepage_slider', 'business_craft_featured_home_slider', 10 );