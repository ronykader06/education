<?php
/**
 * Initialize the custom Theme Options.
 */
add_action( 'admin_init', 'custom_theme_options' );

/**
 * Build the custom settings & update OptionTree.
 *
 * @return    void
 * @since     2.0
 */
function custom_theme_options() {
  
  /**
   * Get a copy of the saved settings array. 
   */
  $saved_settings = get_option( ot_settings_id(), array() );
  
  /**
   * Custom settings array that will eventually be 
   * passes to the OptionTree Settings API Class.
   */
  $custom_settings = array( 
    'sections'        => array( 
      array(
        'id'          => 'header_section',
        'title'       => __( 'Header Social', 'theme-text-domain' )
      ),
      // TEMPLATE PART SECTION
       array(
        'id'          => 'template_part',
        'title'       => __( 'Template Section', 'theme-text-domain' )
      )
    ),

    'settings'        => array( 

    
         array(
        'id'          => 'facebook',
        'label'       => __( '<h1>Header Social Area</h1><span>Facebook Social Link</span>', 'theme-text-domain' ),
        'std'         => 'Please Write your Facebook Link',
        'type'        => 'text',
        'section'     => 'header_section',
      ),
      array(
        'id'          => 'twitter',
        'label'       => __( 'Twitter Social Link', 'theme-text-domain' ),
        'std'         => 'Please Write your Twitter Link',
        'type'        => 'text',
        'section'     => 'header_section',
      ),
      array(
        'id'          => 'googleplus',
        'label'       => __( 'Google Pluse Social Link', 'theme-text-domain' ),
        'std'         => 'Please Write your Google Link',
        'type'        => 'text',
        'section'     => 'header_section',
      ),
      array(
        'id'          => 'youtube',
        'label'       => __( 'Youtube Social Link', 'theme-text-domain' ),
        'std'         => 'Please Write your Youtube Link',
        'type'        => 'text',
        'section'     => 'header_section',
      ),
      array(
        'id'          => 'flicker',
        'label'       => __( 'Flicker Link', 'theme-text-domain' ),
        'std'         => 'Please Write your Flicker Link',
        'type'        => 'text',
        'section'     => 'header_section',
      ),
      array(
        'id'          => 'rss',
        'label'       => __( 'RSS Link', 'theme-text-domain' ),
        'std'         => 'Please Write your RSS Link',
        'type'        => 'text',
        'section'     => 'header_section',
      ),
      array(
        'id'          => 'apple',
        'label'       => __( 'Apple Link', 'theme-text-domain' ),
        'std'         => 'Please Write your Apple Link',
        'type'        => 'text',
        'section'     => 'header_section',
      ),
      array(
        'id'          => 'windows',
        'label'       => __( 'Windows Social Link', 'theme-text-domain' ),
        'std'         => 'Please Write your Windows Link',
        'type'        => 'text',
        'section'     => 'header_section',
      ),
       array(
            'id'          => 'android',
            'label'       => __( 'Android Social Link', 'theme-text-domain' ),
            'std'         => 'Please Write your Android Link',
            'type'        => 'text',
            'section'     => 'header_section',
          ),

 // Slider Section 
   array(
        'id'          => 'slider_action',
        'label'       => __( 'If you want then you can off your slider Section.', 'theme-text-domain' ),
        'desc'        => __( 'The Select option type displays a group of choices. It allows the user to check multiple choices and will return that value as an array for use in a custom function or loop.', 'theme-text-domain' ),
        'std'         => 'yes',
        'type'        => 'select',
        'section'     => 'template_part',
        'choices'     => array( 
          array(
            'value'       => 'no',
            'label'       => __( 'No', 'theme-text-domain' ),
            'src'         => ''
          ),
          array(
            'value'       => 'yes',
            'label'       => __( 'Yes', 'theme-text-domain' ),
            'src'         => ''
          )
        )
      ),


   // Last Post Section On/off 

   array(
        'id'          => 'last_post',
        'label'       => __( 'If you want then you can off your Last Post Section / Call to Action Section.', 'theme-text-domain' ),
        'std'         => 'yes',
        'desc'        => __('The Select option type displays a group of choices. It allows the user to check multiple choices and will return that value as an array for use in a custom function or loop.'),  
        'type'        => 'select',
        'section'     => 'template_part',
        'choices'     => array( 
          array(
            'value'       => 'no',
            'label'       => __( 'No', 'theme-text-domain' ),
            'src'         => ''
          ),
          array(
            'value'       => 'yes',
            'label'       => __( 'Yes', 'theme-text-domain' ),
            'src'         => ''
          )
        )
      ),
// Featured Section Title 

   array(
        'id'          => 'featured_title',
        'label'       => __( "Please Write Your Featured / Course Section's Title", 'theme-text-domain' ),
        'std'         => 'Find Your Course',
        'desc'        => __('If you Want You can Write Your Featured or Course Section Title Like ( Find Your Course) '),  
        'type'        => 'text',
        'section'     => 'template_part',
      ),
// Featured Section On / off

   array(
        'id'          => 'featured_section',
        'label'       => __( 'If you want then you can off your Featured Section / Course Section.', 'theme-text-domain' ),
        'std'         => 'yes',
        'desc'        => __('The Select option type displays a group of choices. It allows the user to check multiple choices and will return that value as an array for use in a custom function or loop.'),  
        'type'        => 'select',
        'section'     => 'template_part',
        'choices'     => array( 
          array(
            'value'       => 'no',
            'label'       => __( 'No', 'theme-text-domain' ),
            'src'         => ''
          ),
          array(
            'value'       => 'yes',
            'label'       => __( 'Yes', 'theme-text-domain' ),
            'src'         => ''
          )
        )
      ),


// Teacher or Speaker Section Title 
   array(
        'id'          => 'teacher_title',
        'label'       => __( "Please Write Your Teacher  /  Speaker Section's Title", 'theme-text-domain' ),
        'std'         => 'The Teachers',
        'desc'        => __('If you Want You can Write Your Teacher / Speaker Section Title Like ( The Teachers ) '),  
        'type'        => 'text',
        'section'     => 'template_part',
      ),
// Teacher or Speaker Section On / off

   array(
        'id'          => 'teacher_section',
        'label'       => __( 'If you want then you can off your Teacher Section / Speaker Section.', 'theme-text-domain' ),
        'std'         => 'yes',
        'desc'        => __('The Select option type displays a group of choices. It allows the user to check multiple choices and will return that value as an array for use in a custom function or loop.'),  
        'type'        => 'select',
        'section'     => 'template_part',
        'choices'     => array( 
          array(
            'value'       => 'no',
            'label'       => __( 'No', 'theme-text-domain' ),
            'src'         => ''
          ),
          array(
            'value'       => 'yes',
            'label'       => __( 'Yes', 'theme-text-domain' ),
            'src'         => ''
          )
        )
      ),

// Campus Section On / off

   array(
        'id'          => 'campus_section',
        'label'       => __( 'If you want then you can off your Campus Section.', 'theme-text-domain' ),
        'std'         => 'yes',
        'desc'        => __('The Select option type displays a group of choices. It allows the user to check multiple choices and will return that value as an array for use in a custom function or loop.'),  
        'type'        => 'select',
        'section'     => 'template_part',
        'choices'     => array( 
          array(
            'value'       => 'no',
            'label'       => __( 'No', 'theme-text-domain' ),
            'src'         => ''
          ),
          array(
            'value'       => 'yes',
            'label'       => __( 'Yes', 'theme-text-domain' ),
            'src'         => ''
          )
        )
      ),   

   // Testimonial Section On / off

   array(
        'id'          => 'testimonial_section',
        'label'       => __( 'If you want then you can off your Testimonial Section.', 'theme-text-domain' ),
        'std'         => 'yes',
        'desc'        => __('The Select option type displays a group of choices. It allows the user to check multiple choices and will return that value as an array for use in a custom function or loop.'),  
        'type'        => 'select',
        'section'     => 'template_part',
        'choices'     => array( 
          array(
            'value'       => 'no',
            'label'       => __( 'No', 'theme-text-domain' ),
            'src'         => ''
          ),
          array(
            'value'       => 'yes',
            'label'       => __( 'Yes', 'theme-text-domain' ),
            'src'         => ''
          )
        )
      ), 
// Intro Video Section
   array(
        'id'          => 'video_title',
        'label'       => __( "Please Write Your Teacher  /  Speaker Section's Title", 'theme-text-domain' ),
        'std'         => 'The standard chunk of Lorem Ipsum used since the 1500s is',
        'desc'        => __('If you Want You can Write Your Video Title Like ( This is Video Title ) '),  
        'type'        => 'text',
        'section'     => 'template_part',
      ),

   // Intro Vimeo Video Link ID
   array(
        'id'          => 'video_link',
        'label'       => __( "Please Write Vimeo Video ID", 'theme-text-domain' ),
        'std'         => '49856737',
        'desc'        => __('If you Want You can Write Your Video Title Like ( This is Video Title ) '),  
        'type'        => 'text',
        'section'     => 'template_part',
      ),
// Blog Event Section On / off

   array(
        'id'          => 'blog_section',
        'label'       => __( 'If you want then you can off your Blog Event Section.', 'theme-text-domain' ),
        'std'         => 'yes',
        'desc'        => __('The Select option type displays a group of choices. It allows the user to check multiple choices and will return that value as an array for use in a custom function or loop.'),  
        'type'        => 'select',
        'section'     => 'template_part',
        'choices'     => array( 
          array(
            'value'       => 'no',
            'label'       => __( 'No', 'theme-text-domain' ),
            'src'         => ''
          ),
          array(
            'value'       => 'yes',
            'label'       => __( 'Yes', 'theme-text-domain' ),
            'src'         => ''
          )
        )
      ), 

   // Patner Logo Section Title
    array(
        'id'          => 'patner_title',
        'label'       => __( "Please Write Patner Section's Title", 'theme-text-domain' ),
        'std'         => ' OUR PARTNERS & SPONSORS',
        'desc'        => __('If you Want You can Patner Title Like ( OUR PARTNERS & SPONSORS  ) '),  
        'type'        => 'text',
        'section'     => 'template_part',
      ),
// Patner Logo Section On / off

   array(
        'id'          => 'patner_section',
        'label'       => __( 'If you want then you can off your Patner Section.', 'theme-text-domain' ),
        'std'         => 'yes',
        'desc'        => __('The Select option type displays a group of choices. It allows the user to check multiple choices and will return that value as an array for use in a custom function or loop.'),  
        'type'        => 'select',
        'section'     => 'template_part',
        'choices'     => array( 
          array(
            'value'       => 'no',
            'label'       => __( 'No', 'theme-text-domain' ),
            'src'         => ''
          ),
          array(
            'value'       => 'yes',
            'label'       => __( 'Yes', 'theme-text-domain' ),
            'src'         => ''
          )
        )
      ),


   // Protfolio  Section On / off

   array(
        'id'          => 'protfolio_section',
        'label'       => __( 'If you want then you can off your Protfolio Section.', 'theme-text-domain' ),
        'std'         => 'yes',
        'desc'        => __('The Select option type displays a group of choices. It allows the user to check multiple choices and will return that value as an array for use in a custom function or loop.'),  
        'type'        => 'select',
        'section'     => 'template_part',
        'choices'     => array( 
          array(
            'value'       => 'no',
            'label'       => __( 'No', 'theme-text-domain' ),
            'src'         => ''
          ),
          array(
            'value'       => 'yes',
            'label'       => __( 'Yes', 'theme-text-domain' ),
            'src'         => ''
          )
        )
      ),

      // Contact  Section On / off

   array(
        'id'          => 'contact_section',
        'label'       => __( 'If you want then you can off your contact Section.', 'theme-text-domain' ),
        'std'         => 'yes',
        'desc'        => __('The Select option type displays a group of choices. It allows the user to check multiple choices and will return that value as an array for use in a custom function or loop.'),  
        'type'        => 'select',
        'section'     => 'template_part',
        'choices'     => array( 
          array(
            'value'       => 'no',
            'label'       => __( 'No', 'theme-text-domain' ),
            'src'         => ''
          ),
          array(
            'value'       => 'yes',
            'label'       => __( 'Yes', 'theme-text-domain' ),
            'src'         => ''
          )
        )
      ),



    ) //end of settings 



  );
  
  /* allow settings to be filtered before saving */
  $custom_settings = apply_filters( ot_settings_id() . '_args', $custom_settings );
  
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( ot_settings_id(), $custom_settings ); 
  }
  
}