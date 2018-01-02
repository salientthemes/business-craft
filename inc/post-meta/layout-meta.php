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
function business_craft_add_layout_metabox()
{
    global $post;
    $frontpage_id = get_option('page_on_front');
    if( $post->ID == $frontpage_id )
    {
        return;
    }
    global $business_craft_post_types;
    foreach ( $business_craft_post_types as $post_type )
    {
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

/* business-craft featured layout */
$business_craft_single_post_image_align_options = array(
    'full' => array(
        'value' => 'full',
        'label' => __( 'Full', 'business-craft' )
    ),
    'right' => array(
        'value' => 'right',
        'label' => __( 'Right ', 'business-craft' ),
    ),
    'left' => array(
        'value'     => 'left',
        'label' => __( 'Left', 'business-craft' ),
    ),
    'no-image' => array(
        'value'     => 'no-image',
        'label' => __( 'No Image', 'business-craft' )
    )
);

function business_craft_layout_options_callback() {

    global $post , $business_craft_single_post_image_align_options;
    $business_craft_customizer_saved_values = business_craft_get_all_options(1);

    /*business-craft-single-post-image-align*/
    $business_craft_single_post_image_align = $business_craft_customizer_saved_values['business-craft-single-post-image-align'];

    wp_nonce_field( basename( __FILE__ ), 'business_craft_layout_options_nonce' );
    ?>
    <style>
        .hide-radio{
            position: relative;
            margin-bottom: 6px;
        }

        .hide-radio img, .hide-radio label{
            display: block;
        }

        .hide-radio input[type="radio"]{
            position: absolute;
            left: 50%;
            top: 50%;
            opacity: 0;
        }

        .hide-radio input[type=radio] + label {
            border: 3px solid #F1F1F1;
        }

        .hide-radio input[type=radio]:checked + label {
            border: 3px solid #CCC;
        }
    </style>
    <table class="form-table page-meta-box">
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
    // Verify the nonce before proceeding.
    if ( !isset( $_POST[ 'business_craft_layout_options_nonce' ] ) || !wp_verify_nonce( $_POST[ 'business_craft_layout_options_nonce' ], basename( __FILE__ ) ) ) {
        return;
    }

    // Stop WP from clearing custom fields on autosave
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    if ( !current_user_can( 'edit_page', $post_id ) ) {
        return $post_id;
    }

    /*image align*/
    if(isset($_POST['business-craft-single-post-image-align'])){
        $old = get_post_meta( $post_id, 'business-craft-single-post-image-align', true);
        $new = sanitize_text_field($_POST['business-craft-single-post-image-align']);
        if ($new && $new != $old) {
            update_post_meta($post_id, 'business-craft-single-post-image-align', $new);
        } elseif ('' == $new && $old) {
            delete_post_meta($post_id,'business-craft-single-post-image-align', $old);
        }
    }
}
add_action('save_post', 'business_craft_save_sidebar_layout');
