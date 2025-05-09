<?php
// Theme setup
function zeshan_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'zeshan-business'),
    ));
}
add_action('after_setup_theme', 'zeshan_theme_setup');

// Enqueue styles and scripts
function zeshan_enqueue_scripts() {
    wp_enqueue_style('zeshan-style', get_stylesheet_uri());
    wp_enqueue_script('zeshan-script', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0', true);
    wp_localize_script('zeshan-script', 'zeshanAjax', array('ajaxurl' => admin_url('admin-ajax.php')));
}
add_action('wp_enqueue_scripts', 'zeshan_enqueue_scripts');

// Handle contact form submission
function zeshan_contact_form_handler() {
    if (!isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['message'])) {
        wp_send_json_error('Missing fields.');
        return;
    }

    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $message = sanitize_textarea_field($_POST['message']);
    $to = get_option('admin_email');
    $subject = 'New Contact Form Submission from ' . $name;
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    $headers = array('From: ' . $email);

    if (wp_mail($to, $subject, $body, $headers)) {
        wp_send_json_success('Message sent successfully!');
    } else {
        wp_send_json_error('Failed to send message.');
    }
}
add_action('admin_post_nopriv_zeshan_contact_form', 'zeshan_contact_form_handler');
add_action('admin_post_zeshan_contact_form', 'zeshan_contact_form_handler');
?>
