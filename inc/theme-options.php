<?php
// Ensure this file is being included by a WordPress environment
if (!defined('ABSPATH')) {
    exit;
}

// Include WordPress functions
require_once ABSPATH . 'wp-admin/includes/template.php';
require_once ABSPATH . 'wp-includes/pluggable.php';

function theme_customization_page() {
    add_menu_page(
        'Theme Options',
        'Theme Options',
        'manage_options',
        'theme_options',
        'theme_customization',
        'dashicons-admin-generic',
        30
    );
}
add_action('admin_menu', 'theme_customization_page');

function theme_customization() {
    ?>
    <div class="wrap">
        <h2>Theme Options Page</h2>
        <form method="post" action="options.php" style="background-color:white;height:auto;border-radius:12px;padding:20px;">
            <?php
            settings_fields('theme_options');
            do_settings_sections('theme_options');
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

function theme_options_init() {
    add_settings_section(
        'header_section',
        'Header Section',
        'header_section_callback',
        'theme_options'
    );

    // Settings fields for the header section
    add_settings_field(
        'top_bar_button_text',
        'Notification Text',
        'top_bar_button_text_callback',
        'theme_options',
        'header_section'
    );

    add_settings_field(
        'notification_link_text',
        'Link Text',
        'top_bar_button_url_callback',
        'theme_options',
        'header_section'
    );

    add_settings_field(
        'notification_link_url',
        'Url Link',
        'notification_callback',
        'theme_options',
        'header_section'
    );
   
    // Settings fields for the slider section
    add_settings_section(
        'slider_section',
        'Slider Section',
        'slider_section_callback',
        'theme_options'
    );
    add_settings_field(
        'slider_background_image',
        'Slider Background Image',
        'slider_background_image_callback',
        'theme_options',
        'slider_section'
    );
    
    register_setting('theme_options', 'num_slides', 'sanitize_text_field'); 
    $num_slides = get_option('num_slides', 3);
    for ($i = 1; $i <=$num_slides; $i++) {
        add_settings_field(
            'slide_content' . $i,
            'Slide ' . $i . ' Content (Video Thumbnail)',
            'slide_content_callback',
            'theme_options',
            'slider_section',
            array('slide_number' => $i)
        );

        add_settings_field(
            'slide_header' . $i,
            'Slide ' . $i . ' Header',
            'slide_header_callback',
            'theme_options',
            'slider_section',
            array('slide_number' => $i)
        );

        add_settings_field(
            'slide_textarea' . $i,
            'Slide ' . $i . ' Textarea',
            'slide_textarea_callback',
            'theme_options',
            'slider_section',
            array('slide_number' => $i)
        );

        add_settings_field(
            'video_url' . $i,
            'Slide ' . $i . ' Video URL Link',
            'video_url_callback',
            'theme_options',
            'slider_section',
            array('slide_number' => $i)
        );
        add_settings_section(
            'tabs_section',
            'Tabs Content Section',
            'tabs_section_callback',
            'theme_options'
        );
    }

    // Register settings fields
    register_setting('theme_options', 'top_bar_notification_text', 'sanitize_text_field');
    register_setting('theme_options', 'notification_link_text', 'sanitize_text_field');
    register_setting('theme_options', 'notification_link_url', 'esc_url_raw');
    register_setting('theme_options', 'slider_background_image');
    register_setting('theme_options', 'num_slides', 'sanitize_text_field'); 
    register_setting('theme_options', 'enable_top_bar_notification', 'sanitize_text_field');
    register_setting('theme_options', 'show_close_icon', 'sanitize_text_field');
    $num_slides = get_option('num_slides', 3);
    for ($i = 1; $i <= $num_slides; $i++) {
        register_setting('theme_options', 'slide_content' . $i); 
        register_setting('theme_options', 'slide_header' . $i, 'sanitize_text_field');
        register_setting('theme_options', 'slide_textarea' . $i, 'sanitize_text_field');
        register_setting('theme_options', 'video_url' . $i, 'esc_url_raw');
    }
    for ($i = 0; $i <= 2; $i++) {
        add_settings_field(
            'tab' . $i . '_content',
            'Tab ' . $i . ' Content',
            'tab_content_callback',
            'theme_options',
            'tabs_section',
            array('tab_number' => $i)
        );

        register_setting('theme_options', 'tab' . $i . '_content', 'wp_kses_post');
    }
   
}
add_action('admin_init', 'theme_options_init');

function header_section_callback() {
    echo '<p>Settings for the Notification-bar section</p>';
     // Field for enabling top bar notification
     echo '<h2>Top Bar Notification</h2>';
     echo '<label for="enable_top_bar_notification">';
     echo '<input type="checkbox" id="enable_top_bar_notification" name="enable_top_bar_notification" value="1" ' . checked(1, get_option('enable_top_bar_notification'), false) . ' />';
     echo ' Enable Top Bar Notification</label>';
 
     // Field for showing close icon
     echo '<h3>Show Close Icon</h3>';
     echo '<label for="show_close_icon">';
     echo '<input type="checkbox" id="show_close_icon" name="show_close_icon" value="1" ' . checked(1, get_option('show_close_icon'), false) . ' />';
     echo ' Show Close Icon</label>';
}

function top_bar_button_text_callback() {
    $value = get_option('top_bar_notification_text', 'Notification text');
    echo '<input type="text" name="top_bar_notification_text" value="' . esc_attr($value) . '" />';
}

function top_bar_button_url_callback() {
    $value = get_option('notification_link_text', 'link text');
    echo '<input type="text" name="notification_link_text" value="' . esc_attr($value) . '" />';
}

function notification_callback() {
    $value = get_option('notification_link_url', 'link url');
    echo '<input type="url" name="notification_link_url" value="' . esc_url($value) . '" />';
}

function slider_section_callback() {
    echo '<p>Settings for the Slider section</p>';
    $num_slides = get_option('num_slides', 3);
    echo '<label for="num_slides">No of Slides:</label>';
    echo '<input type="number" name="num_slides" value="' . esc_attr($num_slides) . '" min="1" max="10" />';
}
function slider_background_image_callback() {
    $value = get_option('slider_background_image');
    echo '<input type="text" name="slider_background_image" id="slider_background_image" value="' . esc_attr($value) . '" />';
    echo '<button class="upload-image-button button">Upload/Select Image</button>';
}
function slide_content_callback($args) {
    $slide_number = $args['slide_number'];
    $value = get_option('slide_content' . $slide_number);
    echo '<hr>';
    echo '<input type="text" name="slide_content' . $slide_number . '" id="slide_content' . $slide_number . '" value="' . esc_attr($value) . '" />';
    echo '<button class="upload-image-button button">Upload/Select Image</button>';
}

function slide_header_callback($args) {
    $slide_number = $args['slide_number'];
    $value = get_option('slide_header' . $slide_number, 'Slide Header');
    echo '<input type="text" name="slide_header' . $slide_number . '" value="' . esc_attr($value) . '" />';
}

function slide_textarea_callback($args) {
    $slide_number = $args['slide_number'];
    $value = get_option('slide_textarea' . $slide_number, 'Slide Textarea');
    echo '<textarea name="slide_textarea' . $slide_number . '">' . esc_textarea($value) . '</textarea>';
}

function video_url_callback($args) {
    $slide_number = $args['slide_number'];
    $value = get_option('video_url' . $slide_number);
    echo '<input type="url" name="video_url' . $slide_number . '" value="' . esc_url($value) . '" />';
}
function tabs_section_callback() {
    echo '<p>Settings for the Tabs Content section</p>';
}

function tab_content_callback($args) {
    $tab_number = $args['tab_number'];
    $value = get_option('tab' . $tab_number . '_content', '');
    echo '<textarea name="tab' . $tab_number . '_content">' . esc_textarea($value) . '</textarea>';
}


?>