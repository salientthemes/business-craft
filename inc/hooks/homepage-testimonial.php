<?php
if (!function_exists('business_craft_home_testimonial_array')) :
    /**
     * Testimonial array creation
     *
     * @since business-craft 1.0.0
     *
     * @param string $from_testimonial
     * @return array
     */
    function business_craft_home_testimonial_array($from_testimonial){
        global $business_craft_customizer_all_values;
        $business_craft_home_testimonial_number = absint( $business_craft_customizer_all_values['business-craft-home-testimonial-number'] );
        $business_craft_home_testimonial_single_words = absint( $business_craft_customizer_all_values['business-craft-home-testimonial-single-words'] );

        $business_craft_home_testimonial_contents_array = array();
        $business_craft_home_testimonial_contents_array[0]['business-craft-home-testimonial-title'] = __('John Doe','business-craft');
        $business_craft_home_testimonial_contents_array[0]['business-craft-home-testimonial-content'] = '';
        $business_craft_home_testimonial_contents_array[0]['business-craft-home-testimonial-image'] = get_template_directory_uri()."/assets/images/banner-image.jpg";
        $business_craft_home_testimonial_contents_array[0]['business-craft-home-testimonial-link'] = '#';
        $business_craft_home_testimonial_contents_array[0]['business-craft-testimonial-slider-number'] = 0;
        $repeated_page = array('business-craft-home-testimonial-pages-ids');

       
        $business_craft_home_testimonial_posts = salient_customizer_get_repeated_all_value(3 , $repeated_page);
        $business_craft_home_testimonial_posts_ids = array();
        if (null != $business_craft_home_testimonial_posts) {
            foreach ($business_craft_home_testimonial_posts as $business_craft_home_testimonial_post) {
                if (0 != $business_craft_home_testimonial_post['business-craft-home-testimonial-pages-ids']) {
                    $business_craft_home_testimonial_posts_ids[] = $business_craft_home_testimonial_post['business-craft-home-testimonial-pages-ids'];
                }
            }
            if( !empty( $business_craft_home_testimonial_posts_ids )){
                $business_craft_home_testimonial_args = array(
                    'post_type' => 'page',
                    'post__in' => array_map( 'absint', $business_craft_home_testimonial_posts_ids ),
                    'posts_per_page' => absint($business_craft_home_testimonial_number),
                    'orderby' => 'post__in'
                );
            }
        }
        
        // the query
        if( !empty( $business_craft_home_testimonial_args )){
            $business_craft_home_testimonial_contents_array = array();
            $business_craft_home_testimonial_post_query = new WP_Query($business_craft_home_testimonial_args);
            if ($business_craft_home_testimonial_post_query->have_posts()) :
                $i = 0;
                while ($business_craft_home_testimonial_post_query->have_posts()) : $business_craft_home_testimonial_post_query->the_post();
                    $thumb_image ='';
                    if(has_post_thumbnail()){
                        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'thumbnail' );
                        $thumb_image = $thumb['0'];
                    }

                    $business_craft_home_testimonial_contents_array[$i]['business-craft-home-testimonial-title'] = get_the_title();
                    if (has_excerpt()) {
                        $business_craft_home_testimonial_contents_array[$i]['business-craft-home-testimonial-content'] = get_the_excerpt();
                    }
                    else {
                        $business_craft_home_testimonial_contents_array[$i]['business-craft-home-testimonial-content'] = business_craft_words_count( $business_craft_home_testimonial_single_words ,get_the_content());
                    }
                    $business_craft_home_testimonial_contents_array[$i]['business-craft-home-testimonial-image'] = $thumb_image;
                    $business_craft_home_testimonial_contents_array[$i]['business-craft-home-testimonial-link'] = get_permalink();
                    $business_craft_home_testimonial_contents_array[$i]['business-craft-testimonial-slider-number'] = $i;
                    $i++;
                endwhile;
                wp_reset_postdata();
            endif;
        }
        return $business_craft_home_testimonial_contents_array;
    }
endif;

if ( ! function_exists( 'business_craft_home_testimonial' ) ) :
    /**
     * About Section
     *
     * @since business-craft 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function business_craft_home_testimonial() {
        global $business_craft_customizer_all_values;
        if( (1 != $business_craft_customizer_all_values['business-craft-home-testimonial-enable']) ){
            return;
        }
        $business_craft_home_testimonial_selection_options = $business_craft_customizer_all_values['business-craft-home-testimonial-selection'];
        $business_craft_testimonial_arrays = business_craft_home_testimonial_array($business_craft_home_testimonial_selection_options);
        if(1 == $business_craft_customizer_all_values['business-craft-home-testimonial-enable']) {
            if (is_array($business_craft_testimonial_arrays)) {
                $business_craft_home_testimonial_title = $business_craft_customizer_all_values['business-craft-home-testimonial-main-title'];
                $business_craft_home_testimonial_number = absint( $business_craft_customizer_all_values['business-craft-home-testimonial-number'] );
                $business_craft_home_testimonial_icon_no = ($business_craft_home_testimonial_number - 1) ;
                $business_craft_home_testimonial_image = $business_craft_customizer_all_values['business-craft-home-testimonial-image'];
                ?>
                <section class="testimonials-section" id="testimonials-section" style="background-image: url('<?php echo esc_url( $business_craft_home_testimonial_image )?>');"><!-- testimonials section -->
                    <div class="testi-overlay">
                        <div class="container">
                            <div class="row">
                                <div class="testimonials-wrapper">
                                    <div class="sec-title centre">
                                        <h2><?php echo esc_html(  $business_craft_home_testimonial_title); ?>                             
                                        </h2>
                                    </div>
                                    <div class="banner-wrapper testimonial-wrapper">
                                        <?php
                                        $i = 1;
                                        foreach( $business_craft_testimonial_arrays as $business_craft_testimonial_array ){
                                            if( $business_craft_home_testimonial_number < $i){
                                                break;
                                            }
                                            if(empty($business_craft_testimonial_array['business-craft-home-testimonial-image'])){
                                                $business_craft_feature_testimonial_slider_image = get_template_directory_uri().'/assets/img/no-img.png';
                                            }
                                            else{
                                                $business_craft_feature_testimonial_slider_image =$business_craft_testimonial_array['business-craft-home-testimonial-image'];
                                            }
                                            ?>  
                                            <div class="slide-items">
                                                <p class="col-md-6 col-md-offset-3 testi-text"><?php echo wp_kses_post( $business_craft_testimonial_array['business-craft-home-testimonial-content'] ); ?> </p>
                                                <p class="col-md-12 name"><?php echo esc_html( $business_craft_testimonial_array['business-craft-home-testimonial-title'] ); ?></p>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                    
                </section><!-- testimonials section -->
            <?php
            }
        }
    }
endif;
add_action( 'business_craft_homepage', 'business_craft_home_testimonial', 35 );