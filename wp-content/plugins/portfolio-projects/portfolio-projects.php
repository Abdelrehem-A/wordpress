<?php
/*
Plugin Name: Portfolio Projects
Description: Custom Post Type for Projects with meta fields
Version: 1.0
Author: عبد الرحيم
*/

function create_custom_post_type_projects() {
    register_post_type('projects',
        array(
            'labels' => array(
                'name' => __('Projects'),
                'singular_name' => __('Project')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'projects'),
            'supports' => array('title', 'editor', 'thumbnail'),
            'menu_icon' => 'dashicons-portfolio',
            'show_in_rest' => true,
        )
    );
}
add_action('init', 'create_custom_post_type_projects');


// بعد كده: كود الميتا بوكس
add_action('add_meta_boxes', 'add_projects_meta_boxes');
function add_projects_meta_boxes() {
    add_meta_box('project_details', 'Project Details', 'render_project_meta_box', 'projects', 'normal', 'default');
}

function render_project_meta_box($post) {
    $client_name = get_post_meta($post->ID, '_client_name', true);
    $project_url = get_post_meta($post->ID, '_project_url', true);
    $completion_date = get_post_meta($post->ID, '_completion_date', true);
    $technology_used = get_post_meta($post->ID, '_technology_used', true);
    ?>
    <p>
        <label for="client_name">Client Name:</label><br>
        <input type="text" name="client_name" id="client_name" value="<?php echo esc_attr($client_name); ?>" style="width:100%;">
    </p>
    <p>
        <label for="project_url">Project URL:</label><br>
        <input type="url" name="project_url" id="project_url" value="<?php echo esc_attr($project_url); ?>" style="width:100%;">
    </p>
    <p>
        <label for="completion_date">Completion Date:</label><br>
        <input type="date" name="completion_date" id="completion_date" value="<?php echo esc_attr($completion_date); ?>" style="width:100%;">
    </p>
    <p>
        <label for="technology_used">Technology Used:</label><br>
        <input type="text" name="technology_used" id="technology_used" value="<?php echo esc_attr($technology_used); ?>" style="width:100%;">
    </p>
    <?php
}

add_action('save_post', 'save_project_meta_box_data');
function save_project_meta_box_data($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

    if (isset($_POST['client_name']))
        update_post_meta($post_id, '_client_name', sanitize_text_field($_POST['client_name']));

    if (isset($_POST['project_url']))
        update_post_meta($post_id, '_project_url', esc_url_raw($_POST['project_url']));

    if (isset($_POST['completion_date']))
        update_post_meta($post_id, '_completion_date', sanitize_text_field($_POST['completion_date']));

    if (isset($_POST['technology_used']))
        update_post_meta($post_id, '_technology_used', sanitize_text_field($_POST['technology_used']));
}
