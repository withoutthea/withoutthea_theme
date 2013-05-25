<?php

/**
 * Adds the Customize page to the WordPress admin area
 */
function wota_customizer_menu() {
    // @TODO -> make page title i18n friendly
    add_theme_page( 'Customize', 'Customize', 'edit_theme_options', 'customize.php' );
}
add_action( 'admin_menu', 'wota_customizer_menu' );

/**
 * Adds the individual sections, settings, and controls to the theme customizer
 */
function wota_customizer( $wp_customize ) {
    
    // start with custom controls
    
    /**
    * Adds textarea support to the theme customizer
    * @TODO -> extend this out beyond the default example
    */
   class Wota_Customize_Textarea_Control extends WP_Customize_Control {
       public $type = 'textarea';

       public function render_content() {
           ?>
               <label>
                   <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
                   <textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
               </label>
           <?php
       }
   }
   
   // manage the boxes/panels
    
    $wp_customize->add_section(
        'wota_customize_boxes',
        array(
            'title' => 'wota - boxes & panels',
            'description' => 'without the \'a\' theme settings.',
            'priority' => 10,
        )
    );
    
    // front page advertising boxes
    
    $wp_customize->add_setting('hide_boxes');
    
    $wp_customize->add_control(
        'hide_boxes',
        array(
            'type' => 'checkbox',
            'label' => 'Hide front page boxes?',
            'section' => 'wota_customize_boxes',
            'priority' => 10
        )
    );
    
    $wp_customize->add_setting(
        'wota_customize_boxes_textbox_1',
        array(
            'default' => 'Lorem ipsum ...',
            'sanitize_callback' => 'wota_sanitize_text'
        )
    );
    
    $wp_customize->add_setting(
        'wota_customize_boxes_textbox_2',
        array(
            'default' => 'Lorem ipsum ...',
            'sanitize_callback' => 'wota_sanitize_text'
        )
    );
    
    $wp_customize->add_setting(
        'wota_customize_boxes_textbox_3',
        array(
            'default' => 'Lorem ipsum ...',
            'sanitize_callback' => 'wota_sanitize_text'
        )
    );
    
    $wp_customize->add_control(
        new Wota_Customize_Textarea_Control(
            $wp_customize,
            'wota_customize_boxes_textbox_1',
            array(
                'label' => 'Box 1 Text',
                'section' => 'wota_customize_boxes',
                'type' => 'textarea',
                'priority' => 20
            )
        )
    );
    
    $wp_customize->add_control(
        new Wota_Customize_Textarea_Control(
            $wp_customize,
            'wota_customize_boxes_textbox_2',
            array(
                'label' => 'Box 2 Text',
                'section' => 'wota_customize_boxes',
                'type' => 'textarea',
                'priority' => 30
            )
        )
    );
    
    $wp_customize->add_control(
        new Wota_Customize_Textarea_Control(
            $wp_customize,
            'wota_customize_boxes_textbox_3',
            array(
                'label' => 'Box 3 Text',
                'section' => 'wota_customize_boxes',
                'type' => 'textarea',
                'priority' => 40
            )
        )
    );
    
    // the three text panels
    
    $wp_customize->add_setting('hide_panels');
    
    $wp_customize->add_control(
        'hide_panels',
        array(
            'type' => 'checkbox',
            'label' => 'Hide front page panels?',
            'section' => 'wota_customize_boxes',
            'priority' => 50
        )
    );
    
    $wp_customize->add_setting(
        'wota_customize_panels_textbox_1',
        array(
            'default' => 'Lorem ipsum ...',
            'sanitize_callback' => 'wota_sanitize_text'
        )
    );
    
    $wp_customize->add_setting(
        'wota_customize_panels_textbox_2',
        array(
            'default' => 'Lorem ipsum ...',
            'sanitize_callback' => 'wota_sanitize_text'
        )
    );
    
    $wp_customize->add_setting(
        'wota_customize_panels_textbox_3',
        array(
            'default' => 'Lorem ipsum ...',
            'sanitize_callback' => 'wota_sanitize_text'
        )
    );
    
    $wp_customize->add_control(
        new Wota_Customize_Textarea_Control(
            $wp_customize,
            'wota_customize_panels_textbox_1',
            array(
                'label' => 'Panel 1 Text',
                'section' => 'wota_customize_boxes',
                'type' => 'textarea',
                'priority' => 60
            )
        )
    );
    
    $wp_customize->add_control(
        new Wota_Customize_Textarea_Control(
            $wp_customize,
            'wota_customize_panels_textbox_2',
            array(
                'label' => 'Panel 2 Text',
                'section' => 'wota_customize_boxes',
                'type' => 'textarea',
                'priority' => 70
            )
        )
    );
    
    $wp_customize->add_control(
        new Wota_Customize_Textarea_Control(
            $wp_customize,
            'wota_customize_panels_textbox_3',
            array(
                'label' => 'Panel 3 Text',
                'section' => 'wota_customize_boxes',
                'type' => 'textarea',
                'priority' => 80
            )
        )
    );
    
    // manage the slider
    
    $wp_customize->add_section(
        'wota_customize_slider',
        array(
            'title' => 'wota - slider',
            'description' => 'without the \'a\' slider settings.',
            'priority' => 15,
        )
    );
    
    $wp_customize->add_setting('wota_customize_slider_img_1');
    //$wp_customize->add_setting('wota_customize_slider_img_2');
    //$wp_customize->add_setting('wota_customize_slider_img_3');
    //$wp_customize->add_setting('wota_customize_slider_img_4');
    //$wp_customize->add_setting('wota_customize_slider_img_5');
    
    $wp_customize->add_section(
        new WP_Customize_Image_Control(
            $wp_customize,
            'wota_customize_slider_img_1',
            array(
                'label' => '1st Image',
                'section' => 'wota_customize_slider',
                'type' => 'img_upload',
                'priority' => 10
            )
        )
    );
}

add_action( 'customize_register', 'wota_customizer' );

/**
 * Text sanitiztion ... using the default ...
 */

function wota_sanitize_text($input)
{
    return wp_kses_post(force_balance_tags($input));
}