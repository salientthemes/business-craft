<?php
/**
 * business-craft Custom Metabox
 *
 * @package business-craft
 */
$business_craft_post_types = array(
    'post',
    'page'
);

add_action('add_meta_boxes', 'business_craft_add_layout_metabox');
function business_craft_add_layout_metabox() {
    global $post;
    $frontpage_id = get_option('page_on_front');
    if( $post->ID == $frontpage_id ){
        return;
    }

    global $business_craft_post_types;
    foreach ( $business_craft_post_types as $post_type ) {
        add_meta_box(
            'business_craft_layout_options', // $id
            __( 'Layout options', 'business-craft' ), // $title
            'business_craft_layout_options_callback', // $callback
            $post_type, // $page
            'normal', // $context
            'high'// $priority
        );
    }

}
/* business-craft sidebar layout */
$business_craft_default_layout_options = array(
    'left-sidebar' => array(
        'value'     => 'left-sidebar',
        'thumbnail' => get_template_directory_uri() . '/inc/images/left-sidebar.png'
    ),
    'right-sidebar' => array(
        'value' => 'right-sidebar',
        'thumbnail' => get_template_directory_uri() . '/inc/images/right-sidebar.png'
    ),
    'no-sidebar' => array(
        'value'     => 'no-sidebar',
        'thumbnail' => get_template_directory_uri() . '/inc/images/no-sidebar.png'
    )
);
/* business-craft featured layout */
$business_craft_single_post_image_align_options = array(
    'full' => array(
        'value' => 'full',
        'label' => esc_html__( 'Full', 'business-craft' )
    ),
    'right' => array(
        'value' => 'right',
        'label' => esc_html__( 'Right ', 'business-craft' ),
    ),
    'left' => array(
        'value'     => 'left',
        'label' => esc_html__( 'Left', 'business-craft' ),
    ),
    'no-image' => array(
        'value'     => 'no-image',
        'label' => esc_html__( 'No Image', 'business-craft' )
    )
);

function business_craft_layout_options_callback() {

    global $post , $business_craft_default_layout_options, $business_craft_single_post_image_align_options;
    $business_craft_customizer_saved_values = business_craft_get_all_options(1);

    /*business-craft-single-post-image-align*/
    $business_craft_single_post_image_align = $business_craft_customizer_saved_values['business-craft-single-post-image-align'];

    /*business-craft default layout*/
    $business_craft_single_sidebar_layout = $business_craft_customizer_saved_values['business-craft-default-layout'];

    wp_nonce_field( basename( __FILE__ ), 'business_craft_layout_options_nonce' );
    ?>
    <table class="form-table page-meta-box">
        <!--Image alignment-->
        <tr>
            <td colspan="4"><em class="f13"><?php _e( 'Choose Sidebar Template', 'business-craft' ); ?></em></td>
        </tr>
        <tr>
            <td>
                <?php
                $business_craft_single_sidebar_layout_meta = get_post_meta( $post->ID, 'business-craft-default-layout', true );
                if( false != $business_craft_single_sidebar_layout_meta ){
                   $business_craft_single_sidebar_layout = $business_craft_single_sidebar_layout_meta;
                }
                foreach ($business_craft_default_layout_options as $field) {
                    ?>
                    <div class="hide-radio radio-image-wrapper" style="float:left; margin-right:30px;">
                        <input id="<?php echo esc_attr( $field['value'] ); ?>" type="radio" name="business-craft-default-layout"
                               value="<?php echo esc_attr( $field['value'] ); ?>"
                            <?php checked( $field['value'], $business_craft_single_sidebar_layout ); ?>/>
                        <label class="description" for="<?php echo esc_attr( $field['value'] ); ?>">
                            <img src="<?php echo esc_url( $field['thumbnail'] ); ?>" />
                        </label>
                    </div>
                <?php } // end foreach
                ?>
                <div class="clear"></div>
            </td>
        </tr>
        <tr>
            <td><em class="f13"><?php _e( 'You can set up the sidebar content', 'business-craft' ); ?> <a href="<?php echo esc_url( admin_url('/widgets.php') ); ?>"><?php _e( 'here', 'business-craft' ); ?></a></em></td>
        </tr>
        <!--Image alignment-->
        <tr>
            <td colspan="4"><?php _e( 'Featured Image Alignment', 'business-craft' ); ?></td>
        </tr>
        <tr>
            <td>
                <?php
                $business_craft_single_post_image_align_meta = get_post_meta( $post->ID, 'business-craft-single-post-image-align', true );
                if( false != $business_craft_single_post_image_align_meta ){
                    $business_craft_single_post_image_align = $business_craft_single_post_image_align_meta;
                }
                foreach ($business_craft_single_post_image_align_options as $field) {
                    ?>
                    <input id="<?php echo esc_attr( $field['value'] ); ?>" type="radio" name="business-craft-single-post-image-align" value="<?php echo esc_attr( $field['value'] ); ?>" <?php checked( $field['value'], $business_craft_single_post_image_align ); ?>/>
                    <label class="description" for="<?php echo esc_attr( $field['value'] ); ?>">
                        <?php echo esc_html( $field['label'] ); ?>
                    </label>
                <?php } // end foreach
                ?>
                <div class="clear"></div>
            </td>
        </tr>
    </table>

<?php }

/**
 * save the custom metabox data
 * @hooked to save_post hook
 */
function business_craft_save_sidebar_layout( $post_id ) {
    global $post;

    if ( isset( $_POST['business_craft_layout_options_nonce'] ) ) {
        $_POST[ 'business_craft_layout_options_nonce' ] = sanitize_text_field( wp_unslash( $_POST[ 'business_craft_layout_options_nonce' ] ) );
    }
    // Verify the nonce before proceeding.
    if ( !isset( $_POST['business_craft_layout_options_nonce'] ) || !wp_verify_nonce( sanitize_key( $_POST[ 'business_craft_layout_options_nonce' ] ), basename( __FILE__ ) ) )  {
        return;
    }

    // Stop WP from clearing custom fields on autosave
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    if ( !current_user_can( 'edit_page', $post_id ) ) {
        return $post_id;
    }
    
    if ( isset( $_POST['business-craft-default-layout'] ) ) {
        
        $old = get_post_meta( $post_id, 'business-craft-default-layout', true );
        $new = sanitize_text_field( wp_unslash( $_POST['business-craft-default-layout'] ) );
        
        if ( $new && $new != $old ) {
            update_post_meta( $post_id, 'business-craft-default-layout', $new );
        } elseif ( '' == $new && $old ) {
            delete_post_meta( $post_id,'business-craft-default-layout', $old );
        }
    }

    /*image align*/
    if( isset( $_POST['business-craft-single-post-image-align'] ) ) {
        $old = get_post_meta( $post_id, 'business-craft-single-post-image-align', true );
        $new = sanitize_text_field( wp_unslash( $_POST['business-craft-single-post-image-align'] ) );
        
        if ( $new && $new != $old ) {
            update_post_meta( $post_id, 'business-craft-single-post-image-align', $new );
        } elseif ( '' == $new && $old ) {
            delete_post_meta( $post_id,'business-craft-single-post-image-align', $old );
        }
    }
}
add_action('save_post', 'business_craft_save_sidebar_layout');
