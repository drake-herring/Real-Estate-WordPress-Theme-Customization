// Hook to add custom fields to LearnDash admin pages
function add_acf_to_learndash_admin() {
    // Check if the user is on a LearnDash post type edit screen
    if ( ! is_admin() || ! isset( $_GET['post_type'] ) || ! in_array( $_GET['post_type'], ['sfwd-courses', 'sfwd-lessons', 'sfwd-topic', 'sfwd-quiz'] ) ) {
        return;
    }

    // Add ACF fields to LearnDash admin pages
    add_action('edit_form_after_title', 'acf_learndash_custom_fields');
}
add_action('admin_init', 'add_acf_to_learndash_admin');

function acf_learndash_custom_fields() {
    global $post;

    if ( in_array( $post->post_type, ['sfwd-courses', 'sfwd-lessons', 'sfwd-topic', 'sfwd-quiz'] ) ) {
        // Output ACF fields
        acf_form(array(
            'post_id' => $post->ID,
            'field_groups' => array('your_field_group_id'), // Replace with your field group ID
            'submit_value' => 'Update Custom Fields',
        ));
    }
}