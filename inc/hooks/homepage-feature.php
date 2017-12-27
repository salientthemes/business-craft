<?php
if ( ! function_exists( 'business_craft_home_feature_array' ) ) :
    /**
     * Service Section array creation
     *
     * @since business-craft 1.0.0
     *
     * @param string $from_feature
     * @return array
     */
    function business_craft_home_feature_array( $from_feature ){
        global $business_craft_customizer_all_values;
        $business_craft_home_feature_number = absint($business_craft_customizer_all_values['business-craft-home-feature-number']);
        $business_craft_home_feature_single_words = absint($business_craft_customizer_all_values['business-craft-home-page-feature-single-words']);

        $business_craft_home_feature_contents_array = array();

        $business_craft_home_feature_contents_array[1]['business-craft-home-feature-title'] = __('Clean Designs', 'business-craft');
        $business_craft_home_feature_contents_array[1]['business-craft-home-feature-content'] = __("Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.", 'business-craft');
        $business_craft_home_feature_contents_array[1]['business-craft-home-feature-link'] = '#';
        $business_craft_home_feature_contents_array[1]['business-craft-home-feature-page-icon'] = 'fa-desktop';
        $business_craft_home_feature_contents_array[1]['business-craft-home-feature-page-link-text'] = __('Know More','business-craft');

        $business_craft_icons_array = array('business-craft-home-feature-page-icon');
        $business_craft_home_feature_page = array('business-craft-home-feature-pages-ids');

        $business_craft_icons_arrays = salient_customizer_get_repeated_all_value(6 , $business_craft_icons_array);

        if ( 'from-category' ==  $from_feature ){
            $business_craft_home_feature_category = $business_craft_customizer_all_values['business-craft-home-feature-category'];
            if( 0 != $business_craft_home_feature_category ){
                $business_craft_home_feature_args =    array(
                    'post_type' => 'post',
                    'cat' => absint($business_craft_home_feature_category),
                    'posts_per_page' => absint($business_craft_home_feature_numbe)
                );
            }
        }else {
                $business_craft_home_feature_posts = salient_customizer_get_repeated_all_value(6 , $business_craft_home_feature_page);
                $business_craft_home_feature_posts_ids = array();
                if( null != $business_craft_home_feature_posts ) {
                    foreach( $business_craft_home_feature_posts as $business_craft_home_feature_post ) {
                        if( 0 != $business_craft_home_feature_post['business-craft-home-feature-pages-ids'] ){
                            $business_craft_home_feature_posts_ids[] = $business_craft_home_feature_post['business-craft-home-feature-pages-ids'];
                        }
                    }
                    if( !empty( $business_craft_home_feature_posts_ids )){
                        $business_craft_home_feature_args =    array(
                            'post_type' => 'page',
                            'post__in' => array_map( 'absint', $business_craft_home_feature_posts_ids ),
                            'posts_per_page' => absint($business_craft_home_feature_number),
                            'orderby' => 'post__in'
                        );
                    }
                }
            }
        // the query
        if( !empty( $business_craft_home_feature_args )){

            $business_craft_home_feature_contents_array = array(); /*again empty array*/
            $business_craft_home_feature_post_query = new WP_Query( $business_craft_home_feature_args );
            if ( $business_craft_home_feature_post_query->have_posts() ) :
                $i = 1;
                while ( $business_craft_home_feature_post_query->have_posts() ) : $business_craft_home_feature_post_query->the_post();
                    $business_craft_home_feature_contents_array[$i]['business-craft-home-feature-title'] = get_the_title();
                    if (has_excerpt()) {
                        $business_craft_home_feature_contents_array[$i]['business-craft-home-feature-content'] = get_the_excerpt();
                    }
                    else {
                        $business_craft_home_feature_contents_array[$i]['business-craft-home-feature-content'] = business_craft_words_count( $business_craft_home_feature_single_words ,get_the_content());
                    }
                    $business_craft_home_feature_contents_array[$i]['business-craft-home-feature-link'] = get_permalink();
                    if(isset( $business_craft_icons_arrays[$i] )){
                        $business_craft_home_feature_contents_array[$i]['business-craft-home-feature-page-icon'] = $business_craft_icons_arrays[$i]['business-craft-home-feature-page-icon'];
                    }
                    else{
                        $business_craft_home_feature_contents_array[$i]['business-craft-home-feature-page-icon'] = 'fa-desktop';
                    }
                    $business_craft_home_feature_contents_array[$i]['business-craft-home-feature-page-link-text'] = __('Know More','business-craft');

                    $i++;
                endwhile;
                wp_reset_postdata();
            endif;
        }
        return $business_craft_home_feature_contents_array;
    }
endif;

if ( ! function_exists( 'business_craft_home_feature' ) ) :
    /**
     * Service Section
     *
     * @since business-craft 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function business_craft_home_feature() {
        global $business_craft_customizer_all_values;
        if( 1 != $business_craft_customizer_all_values['business-craft-home-feature-enable'] ){
            return null;
        }
        $business_craft_home_feature_selection_options = $business_craft_customizer_all_values['business-craft-home-feature-selection'];
        $business_craft_feature_arrays = business_craft_home_feature_array( $business_craft_home_feature_selection_options );
        if( is_array( $business_craft_feature_arrays )){
            $business_craft_home_feature_number = absint($business_craft_customizer_all_values['business-craft-home-feature-number']);
            $business_craft_home_feature_title = $business_craft_customizer_all_values['business-craft-home-feature-title'];
            ?>          

            <section id="feature-section" class="wrapper feature-section"><!-- feature section-->
                <div class="container">
                    <div class="row">
                        <div class="wrapper-feature-content col-md-12">
                            <div class="sec-title centre">
                                <h2><?php echo esc_html(  $business_craft_home_feature_title); ?></h2>
                            </div>
                            <div class="icon-section clearfix">
                                <?php
                                $i = 1;
                                foreach( $business_craft_feature_arrays as $business_craft_feature_array ){
                                    if( $business_craft_home_feature_number < $i){
                                        break;
                                    }
                                    ?>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="feature-items clearfix">
                                        <i class="fa <?php echo esc_attr( $business_craft_feature_array['business-craft-home-feature-page-icon'] ); ?>"></i>
                                        <div class="texts">
                                            <h4><?php echo esc_html( $business_craft_feature_array['business-craft-home-feature-title'] );?></h4>
                                            <p><?php echo wp_kses_post( $business_craft_feature_array['business-craft-home-feature-content'] );?></p>
                                        </div>
                                    </div>
                                </div><!-- col-md-4 -->
                                <?php
                                $i++;
                                }
                                ?>
                            </div><!-- icon section -->
                        </div><!-- feature content wrapper -->
                    </div><!-- row -->
                </div><!-- container -->
            </section><!-- feature section -->

           <section class="about-section wrapper" id="about-section">
                <div class="container">
                    <div class="row">
                        <div class="sec-title centre">
                            <h2>DESIGN. DEVELOP. DEDICATE.</h2>
                        </div>
                        <div class="col-md-12 imgchangeabale-div-wrap">
                            <div class="col-md-6 col-xs-hidden col-sm-6">
                                 <div class="tab-content">
                                     <div class="tab-pane active" id="tab-1"></div>
                                     <div class="tab-pane" id="tab-2"> </div>
                                     <div class="tab-pane " id="tab-3"></div>
                                 </div><!-- tab content -->
                            </div><!-- xs-hdden -->
                            <div class="col-md-6 col-xs-12 col-sm-6">
                                <div class="icon-left">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <a href="#tab-1" data-toggle="tab">
                                            <div class="feature-items clearfix">
                                                <i class="fa fa-search"></i>
                                                <div class="texts">
                                                    <h4>Accountability</h4>
                                                    <p>WordPress is an award-winning web software WordPress is an award-winning web software</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div><!-- col-md-4 -->
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <a href="#tab-2" data-toggle="tab">
                                            <div class="feature-items clearfix">
                                                <i class="fa fa-briefcase"></i>
                                                <div class="texts">
                                                    <h4>Expertise</h4>
                                                    <p>WordPress is an award-winning web software WordPress is an award-winning web software</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div><!-- col-md-4 -->
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <a href="#tab-3" data-toggle="tab">
                                            <div class="feature-items clearfix">
                                                <i class="fa fa-plane"></i>
                                                <div class="texts">
                                                    <h4>Speed</h4>
                                                    <p>WordPress is an award-winning web software WordPress is an award-winning web software</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div><!-- col-md-4 -->                             
                                </div>
                            </div>
                        </div>
                    </div><!-- row -->
                </div><!-- container -->
            </section> <!-- about section -->

            <?php
        }
    }
endif;
add_action( 'business_craft_homepage', 'business_craft_home_feature', 15 );