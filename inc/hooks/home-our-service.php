<?php
if ( ! function_exists( 'business_craft_our_service_array' ) ) :
    /**
     * Featured Slider array creation
     *
     * @since business-craft 0.0.1
     *
     * @param null
     * @return array
     */
    function business_craft_our_service_array()
    {
        global $business_craft_customizer_all_values;
        $business_craft_home_Service_word_count = $business_craft_customizer_all_values['business-craft-number-of-word'];
        $business_craft_home_service_contents_array = array();

        $business_craft_home_service_contents_array[0]['business-craft-our-service-title'] = __('our-service-title', 'business-craft');
        $business_craft_home_service_contents_array[0]['business-craft-our-service-content'] = __("our-service-content", 'business-craft');
        $business_craft_home_service_contents_array[0]['business-craft-our-service-link'] = '#';
        $business_craft_home_service_contents_array[0]['business-craft-our-service-icon'] = 'fa-desktop';
        $business_craft_home_service_contents_array[0]['business-craft-our-service-image'] = get_template_directory().'/assets/images/bg1.jpg';

        $business_craft_icons_arrays = array();
        $business_craft_home_service_args = array();

        $repeated = array('business-craft-our-service-pages-icon','business-craft-desgin-develop-pages-ids');

        $business_craft_home_service_posts =salient_customizer_get_repeated_all_value(3, $repeated);
        $business_craft_home_service_posts_ids = array();
        if( null != $business_craft_home_service_posts )
        {
            foreach( $business_craft_home_service_posts as $business_craft_home_service_post )
            {
                if( isset($business_craft_home_service_post['business-craft-desgin-develop-pages-ids']) && 0 != $business_craft_home_service_post['business-craft-desgin-develop-pages-ids'] )
                {
                    $business_craft_home_service_posts_ids[] = $business_craft_home_service_post['business-craft-desgin-develop-pages-ids'];
                    if( isset( $business_craft_home_service_post['business-craft-our-service-pages-icon'] ))
                    {
                        $business_craft_home_service_page_icon = $business_craft_home_service_post['business-craft-our-service-pages-icon'];
                    }
                    else
                    {
                        $business_craft_home_service_page_icon =' fa-desktop';
                    }
                    $business_craft_icons_arrays[] = $business_craft_home_service_page_icon;
                }
            }
            if( !empty( $business_craft_home_service_posts_ids ))
            {
                $business_craft_home_service_args =    array(
                    'post_type' => 'page',
                    'post__in' => $business_craft_home_service_posts_ids,
                    'posts_per_page' => 3,
                    'orderby' => 'post__in'
                );
            }
        }
        // the query
        if( !empty( $business_craft_home_service_args ))
        {
            $business_craft_home_service_contents_array = array(); /*again empty array*/
            $business_craft_home_service_post_query = new WP_Query( $business_craft_home_service_args );
            if ( $business_craft_home_service_post_query->have_posts() ) :
                $i = 0;
                while ( $business_craft_home_service_post_query->have_posts() ) : $business_craft_home_service_post_query->the_post();
                    $business_craft_home_service_contents_array[$i]['business-craft-our-service-title'] = get_the_title();
                    $business_craft_home_service_contents_array[$i]['business-craft-our-service-content'] = business_craft_words_count( $business_craft_home_Service_word_count ,get_the_content());
                    $business_craft_home_service_contents_array[$i]['business-craft-our-service-link'] = get_permalink();
                    $thumb_image = '';
                    if(has_post_thumbnail())
                    {
                        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' );
                        $thumb_image = $thumb['0'];
                    }

                    $business_craft_home_service_contents_array[$i]['business-craft-our-service-image'] = $thumb_image;

                    if(isset( $business_craft_icons_arrays[$i] ))
                    {
                        $business_craft_home_service_contents_array[$i]['business-craft-our-service-pages-icon'] = $business_craft_icons_arrays[$i];
                    }
                    else
                    {
                        $business_craft_home_service_contents_array[$i]['business-craft-our-service-pages-icon'] = 'fa-desktop';
                    }
                    $i++;
                endwhile;
                wp_reset_postdata();
            endif;
        }
        return $business_craft_home_service_contents_array;
    }
endif;

if ( ! function_exists( 'business_craft_home_service_section' ) ) :
    /**
     * Featured Slider
     *
     * @since business-craft 0.0.1
     *
     * @param null
     * @return null
     *
     */
    function business_craft_home_service_section()
    {
        global $business_craft_customizer_all_values;
        if( 1 != $business_craft_customizer_all_values['business-craft-our-service-enable'] )
        {
            return null;
        }
        $business_craft_service_arrays = business_craft_our_service_array( );
        if( is_array( $business_craft_service_arrays ))
        {
            $business_craft_service_mian_title = $business_craft_customizer_all_values['business-craft-main-title-text'];

            $about_title_1 = ''; $about_content_1= ''; $about_icon_1 = ''; $about_image_1 = ''; $about_link_1 = '';
            $about_title_2 = ''; $about_content_2= ''; $about_icon_2 = ''; $about_image_2 = ''; $about_link_2 = '';
            $about_title_3 = ''; $about_content_3= ''; $about_icon_3 = ''; $about_image_3 = ''; $about_link_3 = '';
            ?>
            <section class="about-section wrapper" id="about-section">
                <div class="container">
                    <div class="row">
                        <div class="sec-title centre">
                            <h2><?php echo esc_html($business_craft_service_mian_title); ?></h2>
                        </div>

                        <?php
                        $i = 1;
                        foreach( $business_craft_service_arrays as $business_craft_service_array )
                        {
                            if( 3 < $i)
                            {
                                break;
                            } 
                            ${'about_title_'.$i} = esc_html( $business_craft_service_array['business-craft-our-service-title'] );
                            ${'about_content_'.$i} =  wp_kses_post( $business_craft_service_array['business-craft-our-service-content'] );
                            ${'about_icon_'.$i} =  esc_attr( $business_craft_service_array['business-craft-our-service-pages-icon'] );
                            ${'about_image_'.$i} =  esc_url( $business_craft_service_array['business-craft-our-service-image'] );
                            ${'about_link_'.$i} = esc_url($business_craft_service_array['business-craft-our-service-link']);
                            $i++;
                        }
                        ?>
                        <div class="col-md-12 imgchangeabale-div-wrap">
                            <div class="col-md-6 col-xs-12 col-sm-6">
                                <div class="icon-left">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <a href="#tab-1" data-toggle="tab">
                                            <div class="feature-items clearfix">
                                                 <i class="fa <?php echo esc_attr($about_icon_1); ?>"></i>
                                                <div class="texts">
                                                    <h4><a href="<?php echo esc_url($about_link_1);?>"><?php echo esc_html($about_title_1); ?></a></h4>
                                                    <p><?php echo wp_kses_post($about_content_1); ?></p>
                                                </div>
                                            </div>
                                        </a>
                                    </div><!-- col-md-4 -->
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <a href="#tab-2" data-toggle="tab">
                                            <div class="feature-items clearfix">
                                                <i class="fa <?php echo esc_attr($about_icon_2); ?>"></i>
                                                <div class="texts">
                                                    <h4><a href="<?php echo esc_url($about_link_2);?>"><?php echo esc_html($about_title_2); ?></a></h4>
                                                    <p><?php echo wp_kses_post($about_content_2); ?></p>
                                                </div>
                                            </div>
                                        </a>
                                    </div><!-- col-md-4 -->
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <a href="#tab-3" data-toggle="tab">
                                            <div class="feature-items clearfix">
                                                <i class="fa <?php echo esc_attr($about_icon_3); ?>"></i>
                                                <div class="texts">
                                                    <h4><a href="<?php echo esc_url($about_link_3);?>"><?php echo esc_html($about_title_3); ?></a></h4>
                                                    <p><?php echo wp_kses_post($about_content_3); ?></p>
                                                </div>
                                            </div>
                                        </a>
                                    </div><!-- col-md-4 -->                             
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-hidden col-sm-6">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab-1" style = "background : url('<?php echo $about_image_1 ;?>')"></div>
                                    <div class="tab-pane" id="tab-2" style = "background : url('<?php echo $about_image_2 ;?>')"></div>
                                    <div class="tab-pane " id="tab-3" style = "background : url('<?php echo $about_image_3 ;?>')"></div>
                                </div><!-- tab content -->
                            </div><!-- xs-hdden -->
                        </div>
                    </div><!-- row -->
                </div><!-- container -->
            </section> <!-- about section -->
            <?php
        }
    }
endif;
add_action( 'business_craft_homepage', 'business_craft_home_service_section', 21);