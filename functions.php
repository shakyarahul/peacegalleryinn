<?php 
add_action('admin_enqueue_scripts', 'my_admin_scripts');
 
function my_admin_scripts() {
        wp_enqueue_media();
        wp_register_script('my-admin-js', 'http://localhost/wordpress/my-admin.js', array('jquery'));
        wp_enqueue_script('my-admin-js');
}
add_action('admin_init', 'my_general_section');  
function my_general_section() {  
    add_settings_section(  
        'my_settings_about_section', // Section ID 
        'About Us', // Section Title
        'my_about_section_options_callback', // Callback
        'general' // What Page?  This makes the section show up on the General Settings Page
    );

    add_settings_field( // Option 1
        'about_section_option_one', // Option ID
        'About Us', // Label
        'my_about_section_textbox_callback', // !important - This is where the args go!
        'general', // Page it will be displayed (General Settings)
        'my_settings_about_section', // Name of our section
        array( // The $args
            'about_section_option_one' // Should match Option ID
        )  
    );
    add_settings_field( // Option 1
        'facebook_section_option_eight', // Option ID
        'Facebook', // Label
        'my_about_section_textbox_callback', // !important - This is where the args go!
        'general', // Page it will be displayed (General Settings)
        'my_settings_about_section', // Name of our section
        array( // The $args
            'facebook_section_option_eight' // Should match Option ID
        )  
    );
    add_settings_field( // Option 1
        'instagram_section_option_nine', // Option ID
        'Instagram', // Label
        'my_about_section_textbox_callback', // !important - This is where the args go!
        'general', // Page it will be displayed (General Settings)
        'my_settings_about_section', // Name of our section
        array( // The $args
            'instagram_section_option_nine' // Should match Option ID
        )  
    );
    add_settings_field( // Option 1
        'wechat_section_option_ten', // Option ID
        'We Chat', // Label
        'my_about_section_textbox_callback', // !important - This is where the args go!
        'general', // Page it will be displayed (General Settings)
        'my_settings_about_section', // Name of our section
        array( // The $args
            'wechat_section_option_ten' // Should match Option ID
        )  
    );
    add_settings_field( // Option 1
        'booking_section_option_eleven', // Option ID
        'Booking.com', // Label
        'my_about_section_textbox_callback', // !important - This is where the args go!
        'general', // Page it will be displayed (General Settings)
        'my_settings_about_section', // Name of our section
        array( // The $args
            'booking_section_option_eleven' // Should match Option ID
        )  
    );
    add_settings_field( // Option 1
        'address_section_option_seven', // Option ID
        'Addresses', // Label
        'my_address_section_textbox_callback', // !important - This is where the args go!
        'general', // Page it will be displayed (General Settings)
        'my_settings_about_section', // Name of our section
        array( // The $args
            'address_section_option_seven' // Should match Option ID
        )  
    ); 

    add_settings_field( // Option 1
        'mapdata_section_option_five', // Option ID
        'Latitude Longitude', // Label
        'my_about_section_textbox_callback', // !important - This is where the args go!
        'general', // Page it will be displayed (General Settings)
        'my_settings_about_section', // Name of our section
        array( // The $args
            'mapdata_section_option_five' // Should match Option ID
        )  
    ); 

    add_settings_field( // Option 1
        'openingclosing_section_option_six', // Option ID
        'Opening/Closing time', // Label
        'my_openingclosing_section_textbox_callback', // !important - This is where the args go!
        'general', // Page it will be displayed (General Settings)
        'my_settings_about_section', // Name of our section
        array( // The $args
            'openingclosing_section_option_six' // Should match Option ID
        )  
    ); 

    add_settings_field( // Option 2
        'signature_section_option_two', // Option ID
        'Signature', // Label
        'my_signature_section_textbox_callback', // !important - This is where the args go!
        'general', // Page it will be displayed
        'my_settings_about_section', // Name of our section (General Settings)
        array( // The $args
            'signature_section_option_two' // Should match Option ID
        )  
    );
    add_settings_field( // Option 2
        'logo_section_option_four', // Option ID
        'Logo', // Label
        'my_logo_section_textbox_callback', // !important - This is where the args go!
        'general', // Page it will be displayed
        'my_settings_about_section', // Name of our section (General Settings)
        array( // The $args
            'logo_section_option_four' // Should match Option ID
        )  
    );

    add_settings_field( // Option 2
        'gallery_section_option_three', // Option ID
        'About Gallery', // Label
        'my_gallery_section_textbox_callback', // !important - This is where the args go!
        'general', // Page it will be displayed
        'my_settings_about_section', // Name of our section (General Settings)
        array( // The $args
            'gallery_section_option_three' // Should match Option ID
        )  
    );
    register_setting('general','about_section_option_one', array(
        'show_in_rest' => true,
        'type' => 'string',
        'default' => '',
    ));
    register_setting('general','facebook_section_option_eight', array(
        'show_in_rest' => true,
        'type' => 'string',
        'default' => '',
    ));
    register_setting('general','instagram_section_option_nine', array(
        'show_in_rest' => true,
        'type' => 'string',
        'default' => '',
    ));
    register_setting('general','booking_section_option_eleven', array(
        'show_in_rest' => true,
        'type' => 'string',
        'default' => '',
    ));
    register_setting('general','wechat_section_option_ten', array(
        'show_in_rest' => true,
        'type' => 'string',
        'default' => '',
    ));
    register_setting('general','openingclosing_section_option_six', array(
        'show_in_rest' => true,
        'type' => 'string',
        'default' => '',
    ));
    register_setting('general','address_section_option_seven', array(
        'show_in_rest' => true,
        'type' => 'string',
        'default' => '',
    ));
    register_setting('general','mapdata_section_option_five', array(
        'show_in_rest' => true,
        'type' => 'string',
        'default' => '',
    ));
    register_setting('general','signature_section_option_two',array(
        'show_in_rest' => true,
        'type' => 'string',
        'default' => '',
    ));
    register_setting('general','logo_section_option_four',array(
        'show_in_rest' => true,
        'type' => 'string',
        'default' => '',
    ));
    register_setting('general','gallery_section_option_three', array(
        'show_in_rest' => true,
        'type' => 'string',
        'default' => '',
    ));
}

function my_about_section_options_callback() { // Section Callback
    echo '<p>About us Information goes here</p>';  
}

function my_about_section_textbox_callback($args) {  // Textbox Callback
    $option = get_option($args[0]);
    echo '<textarea type="text" id="'. $args[0] .'" name="'. $args[0] .'" />'.$option.'</textarea>';
}
function my_address_section_textbox_callback($args) {  // Textbox Callback
    $option = get_option($args[0]);
    echo '<textarea type="text" id="'. $args[0] .'" placeholder="63 W 38th St, New York 
NY 10018
(513) 352-3209 " name="'. $args[0] .'" />'.$option.'</textarea>';
}
function my_openingclosing_section_textbox_callback($args) {  // Textbox Callback
    $option = get_option($args[0]);
    echo '<textarea type="text" id="'. $args[0] .'" placeholder="9am — 6pm
All days of the week. " name="'. $args[0] .'" />'.$option.'</textarea>';
}
function my_signature_section_textbox_callback($args) {  // Textbox Callback
    $option = get_option($args[0]);
    echo '<input id="upload_image1" type="text" size="36" name="'.$args[0].'" value="'.$option.'" /> 
    <input id="upload_image_button1" class="button" type="button" value="Upload Image" />';
}
function my_logo_section_textbox_callback($args) {  // Textbox Callback
    $option = get_option($args[0]);
    echo '<input id="upload_image3" type="text" size="36" name="'.$args[0].'" value="'.$option.'" /> 
    <input id="upload_image_button3" class="button" type="button" value="Upload Image" />';
}
function my_gallery_section_textbox_callback($args) {  // Textbox Callback
    $option = get_option($args[0]);
    echo '<input id="upload_image2" type="text" size="36" name="'.$args[0].'" value="'.$option.'" /> 
    <input id="upload_image_button2" class="button" type="button" value="Upload Image" />';
}

require 'model/room.php';