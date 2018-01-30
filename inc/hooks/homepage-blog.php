<?php

if ( ! function_exists( 'business_craft_home_blog' ) ) :
    /**
     * Blog Section
     *
     * @since business-craft 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function business_craft_home_blog() {
        global $business_craft_customizer_all_values;
        global $post;
        $author_id=$post->post_author;
        $business_craft_home_blog_title = $business_craft_customizer_all_values['business-craft-home-blog-title'];
        $business_craft_home_blog_button_text = $business_craft_customizer_all_values['business-craft-home-blog-button-text'];
        $business_craft_home_blog_button_link = $business_craft_customizer_all_values['business-craft-home-blog-button-link'];
        $business_craft_home_blog_single_words = absint( $business_craft_customizer_all_values['business-craft-home-blog-single-words'] );
        
        $business_craft_home_blog_category = $business_craft_customizer_all_values['business-craft-home-blog-category'];
        if( 1 != $business_craft_customizer_all_values['business-craft-home-blog-enable'] ){
            return null;
        }
        ?>
        <section class="blog-section wrapper" id="blog-section"><!-- blog section -->
            <div class="container">
                <div class="row">
                    <div class="sec-title centre">
                        <h2><?php echo esc_html( $business_craft_home_blog_title );?></h2>
                    </div>
                    <div class="col-md-8 col-xs-12 col-sm-8 left-sect"><!-- big content -->
                        <div class="blog-wrapper">
                            <?php
                            $business_craft_home_blog_args = array(
                                'post_type' => 'post',
                                'posts_per_page' => 2,
                                'cat'           => absint($business_craft_home_blog_category),
                                'ignore_sticky_posts' => 1,
                            );
                            $business_craft_home_about_post_query = new WP_Query($business_craft_home_blog_args);
                            if ($business_craft_home_about_post_query->have_posts()) :
                                while ($business_craft_home_about_post_query->have_posts()) : $business_craft_home_about_post_query->the_post();
                                    if(has_post_thumbnail()){
                                        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'medium' );
                                        $url = $thumb['0'];
                                    }
                                    else{
                                        $url = get_template_directory_uri().'/assets/img/placeholder-banner.png';
                                    } ?>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="meet-us-content clearfix"> 
                                            <div class="col-sm-12 col-md-6 col-xs-12 overflow-hidden">                  
                                                <div class="background-image-div" style="background-image: url('<?php echo esc_url( $url )?>');">
                                                    <div class="image-overlay"></div>
                                                </div>  <!-- background image -->
                                            </div>  
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <div class="blog-content">
                                                   <!--  <p class="blog-category"><?php echo wp_kses_post(get_the_category_list( ",", "", get_the_id())); ?></p> -->
                                                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                                        <p>
                                                            <?php
                                                            if ( has_excerpt() ) {
                                                                the_excerpt();
                                                            } else {
                                                                $content_blog = get_the_content();
                                                                echo wp_kses_post(business_craft_words_count( $business_craft_home_blog_single_words, $content_blog ));
                                                            } ?>
                                                        </p>
                                                    <div class="blog-meta">
                                                        <span>
                                                            <?php
                                                            $archive_year  = get_the_time('Y'); 
                                                            $archive_month = get_the_time('m'); 
                                                            $archive_day   = get_the_time('d'); 
                                                            ?>
                                                            <a href="<?php echo esc_url(get_day_link($archive_year, $archive_month, $archive_day) ); ?>"><?php echo esc_html(get_the_date('M j , Y') );?></a>
                                                        </span>                                                       
                                                    </div>
                                                </div><!-- text content -->    
                                            </div>                          
                                        </div><!--meet-us content -->
                                    </div><!-- col md --> 
                                <?php endwhile; 
                                wp_reset_postdata();
                            endif;
                            ?>                                                     
                        </div><!-- blog wrapper -->
                    </div><!-- col-6 -->
                   <div class="col-md-4 col-xs-12 col-sm-4 pdr">
                     <div class="right-sect">
                        <?php
                        $business_craft_home_blog_args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 4,
                            'offset' => 2,
                            'cat'           => absint($business_craft_home_blog_category),
                            'ignore_sticky_posts' => 1,
                        );
                        $business_craft_home_about_post_query = new WP_Query($business_craft_home_blog_args);
                        if ($business_craft_home_about_post_query->have_posts()) :
                            while ($business_craft_home_about_post_query->have_posts()) : $business_craft_home_about_post_query->the_post();
                                if(has_post_thumbnail()){
                                    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'medium' );
                                    $url = $thumb['0'];
                                }
                                else{
                                    $url = get_template_directory_uri().'/assets/img/placeholder-banner.png';
                                } ?>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="blog-content">  
                                        <div class="blog-meta">
                                            <p>
                                                <?php
                                                $archive_year  = get_the_time('Y'); 
                                                $archive_month = get_the_time('m'); 
                                                $archive_day   = get_the_time('d'); 
                                                ?>
                                                <a href="<?php echo get_day_link($archive_year, $archive_month, $archive_day); ?>"><span><?php echo get_the_date('M');?></span> <span><?php echo get_the_date('j');?></span></a>
                                            </p>
                                        </div>
                                        <div class=" right-wrap">                                       
                                            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                            <p class="by-line">
                                                <a href="<?php echo esc_url( get_author_posts_url( $author_id ) )?>" ><span><?php echo esc_html__('By: ','business-craft'); ?><?php echo esc_html( get_the_author_meta( 'display_name', $author_id )); ?></span> </a>
                                            </p>                                           
                                        </div>                              
                                    </div><!-- text content -->    
                                </div>
                        <?php endwhile; 
                        wp_reset_postdata(); 
                        endif; ?>         
                     </div>
                   </div>
                    <div class="col-md-12 clearfix col-sm-12 col-xs-12 btn-more">
                       <a href="<?php echo esc_url($business_craft_home_blog_button_link);?>" class="border-btn view-more"><?php echo esc_html($business_craft_home_blog_button_text);?> </a>
                   </div>
                </div><!-- row -->
            </div><!-- container -->
        </section><!-- blog section -->       

        <?php
    }
endif;
add_action( 'business_craft_homepage', 'business_craft_home_blog', 50 );