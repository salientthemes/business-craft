<?php
if ( ! function_exists( 'business_craft_about_us_array' ) ) :
    /**
    * About us array creation
    *
    * @since business-craft 0.0.1
    *
    * @param null
    * @return null
    */
    function business_craft_about_us_array( )
    {
        global $business_craft_customizer_all_values;
       
        $business_craft_aboutus_number = absint( $business_craft_customizer_all_values['business-craft-page-selection'] );
        $business_craft_aboutus_single_words = absint( $business_craft_customizer_all_values['business-craft-about-us-single-word'] );
        
        $business_craft_aboutus_contents_array[0]['business-craft-about-us-title'] = __('Ultra Responsive Design','business-craft');
        $business_craft_aboutus_contents_array[0]['business-craft-about-us-content'] =  __('WordPress is an award-winning web software, used by millions of webmasters worldwide for building their website or blog','business-craft');
        $business_craft_aboutus_contents_array[0]['business-craft-about-us-link'] = '#';
        $business_craft_aboutus_contents_array[0]['business-craft-about-us-image'] = get_template_directory_uri ().'/assets/images/bg2.jpg';
        $repeated_page = array('business-craft-about-us-pages-id');
        $business_craft_aboutus_args = array();
        $business_craft_aboutus_posts = salient_customizer_get_repeated_all_value(2 , $repeated_page);
        $business_craft_aboutus_posts_ids = array();
        if( null != $business_craft_aboutus_posts ) {
            foreach( $business_craft_aboutus_posts as $business_craft_aboutus_post )
            {
                if( 0 != $business_craft_aboutus_post['business-craft-about-us-pages-id'] )
                {
                    $business_craft_aboutus_section_posts_ids[] = $business_craft_aboutus_post['business-craft-about-us-pages-id'];
                }
            }

            if( !empty( $business_craft_aboutus_section_posts_ids ))
            {
                $business_craft_aboutus_args =    array(
                    'post_type' => 'page',
                    'post__in' => $business_craft_aboutus_section_posts_ids,
                    'posts_per_page' => $business_craft_aboutus_number,
                    'orderby' => 'post__in'
                );
            }

        }

        if( !empty( $business_craft_aboutus_args ))
        {
            // the query
            $business_craft_aboutus_post_query = new WP_Query( $business_craft_aboutus_args );

            if ( $business_craft_aboutus_post_query->have_posts() ) :
                $i = 0;
                while ( $business_craft_aboutus_post_query->have_posts() ) : $business_craft_aboutus_post_query->the_post();
                    $url ='';
                    if(has_post_thumbnail())
                    {
                        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'business-craft-about-us-image' );
                        $url = $thumb['0'];
                    }
                    $business_craft_aboutus_contents_array[$i]['business-craft-about-us-title'] = get_the_title();
                    $business_craft_aboutus_contents_array[$i]['business-craft-about-us-content'] = business_craft_words_count( $business_craft_aboutus_single_words ,get_the_content());
                    $business_craft_aboutus_contents_array[$i]['business-craft-about-us-link'] = get_permalink();
                    $business_craft_aboutus_contents_array[$i]['business-craft-about-us-image'] = $url;
                    $i++;
                endwhile;
                wp_reset_postdata();
            endif;
        }
        return $business_craft_aboutus_contents_array;
    }
endif;

if ( ! function_exists( 'business_craft_aboutus_section' ) ) :
    /**
    * Featured Slider
    *
    * @since business-craft 0.0.1
    *
    * @param null
    * @return null
    *
    */
    function business_craft_aboutus_section()
    { 
        global $business_craft_customizer_all_values;
        if( 1 != $business_craft_customizer_all_values['business-craft-about-us-enable-option'] )
        {
            return null;
        }
        $business_craft_main_title_text = esc_html($business_craft_customizer_all_values['business-craft-about-us-main-title-text']);
        $business_craft_aboutus_section_arrays = business_craft_about_us_array( );

        if( is_array( $business_craft_aboutus_section_arrays ))
        {
            $business_craft_aboutus_number = absint( $business_craft_customizer_all_values['business-craft-page-selection'] );
            ?>
            <section class="meet-us wrapper" id="meet-us"><!-- meet us section -->
                <div class="container">
                    <div class="row">
                        <div class="wrapper-meet-us">
                            <div class="sec-title centre">
                                <h2><?php echo esc_html($business_craft_main_title_text); ?></h2>
                            </div>
                            <div class="icon-section clearfix">
                                <?php
                                $i = 1;
                                foreach( $business_craft_aboutus_section_arrays as $business_craft_aboutus_section_array )
                                {
                                    if( $business_craft_aboutus_number < $i)
                                    {
                                        break;
                                    }
                                    if(empty($business_craft_aboutus_section_array['business-craft-about-us-image']))
                                    {
                                        $business_craft_about_us_image = get_template_directory_uri().'/assets/images/bg1.jpg';
                                    }
                                    else
                                    {
                                        $business_craft_about_us_image =$business_craft_aboutus_section_array['business-craft-about-us-image'];
                                    }
                                    ?>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="meet-us-content clearfix">  
                                            <div class="col-md-6 col-sm-6 col-xs-12 overflow-hidden image">
                                                <div class="background-image-div" style = "background : url('<?php echo $business_craft_about_us_image ;?>')">
                                                    <div class="image-overlay" ></div>
                                                </div>  <!-- background image -->
                                            </div>  
                                            <div class="col-md-6 col-sm-6 col-xs-12 meet-us-text texts">
                                               <div class="text-centre">
                                                     <h4><a href="<?php echo esc_url($business_craft_aboutus_section_array['business-craft-about-us-link']);?>"><?php echo esc_html($business_craft_aboutus_section_array['business-craft-about-us-title']); ?></a></h4>
                                                    <p><?php echo wp_kses_post($business_craft_aboutus_section_array['business-craft-about-us-content']); ?></p>
                                                </div><!-- text centre -->
                                            </div><!-- text content -->
                                        </div><!--meet-us content -->
                                    </div><!-- col md -->
                                    <?php 
                                    $i++;
                                }            
                                      ?>                  
                            </div><!-- icon section -->
                        </div>  <!-- wrapper -->
                    </div><!-- row -->
                </div> <!-- container -->
            </section><!-- section -->
            
            <?php
        }
    }
endif;
add_action( 'business_craft_homepage', 'business_craft_aboutus_section', 16 );