<?php
/**
 * Initialize the custom Meta Boxes. 
 */
add_action( 'admin_init', 'edu_meta_boxes' );

/**
 * Meta Boxes demo code.
 *
 * You can find all the available option types in demo-theme-options.php.
 *
 * @return    void
 * @since     2.0
 */
function edu_meta_boxes() {
  
  /**
   * Create a custom meta boxes array that we pass to 
   * the OptionTree Meta Box API Class.
   */
  $my_meta_box = array(
    'id'          => 'fetured_meta_box',
    'title'       => __( '<h2 style="color: #2c3e50; font-size:20px;">THIS SECTION ONLY FOR COURSE ICON / LOGO</h2> <span style="color:red; font-size:12px;">* You will Choice one Field Image Logo / Fontawesome Icon</span>', 'theme-text-domain' ),
    'desc'        => '',
    'pages'       => array( 'fetured-items' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
      array(
        'label'       => __( 'Slecte Your COURSE LOGO ', 'theme-text-domain' ),
        'id'          => 'course-icon',
        'type'        => 'upload',
        'desc'        => sprintf( __( 'Please Choice Your (59 x 47) size Image for Your Course Logo %s', 'theme-text-domain' ), '<code></code>' ),
      
      ), 
      array(
        'label'       => __( '<span style="color:red;">Or</span> Selecte Your COURSE ICON from FONTAWESOME', 'theme-text-domain' ),
        'id'          => 'awesome-icon',
        'type'        => 'text',
        'std'         => 'html5',  
        'desc'        => sprintf( __( 'Selecte your Icon From Here <a href="http://fontawesome.io/icons/" target="_blank">Fontawesome</a> %s', 'theme-text-domain' ), '<code></code>' ),
      
      ),     
      array(
        'label'       => __( '<h2 style="color: #2c3e50; font-size:20px;">THIS SECTION ONLY FOR CAMPUS ICON / LOGO</h2> <span style="color:red; font-size:12px;">* You will Choice one Field Image Logo / Fontawesome Icon</span>', 'theme-text-domain' ),
        'id'          => 'campus-thumb',
        'type'        => 'upload',
        'desc'        => sprintf( __( 'Please Choice Your (59 x 47) size Image for Your Campus Department Logo %s', 'theme-text-domain' ), '<code></code>' ),
      
      ), 
      array(
        'label'       => __( '<span style="color:red;">Or</span> Selecte Your COURSE ICON from FONTAWESOME', 'theme-text-domain' ),
        'id'          => 'campus-logo',
        'type'        => 'text',
        'std'         => 'html5',  
        'desc'        => sprintf( __( 'Selecte your Icon From Here <a href="http://fontawesome.io/icons/" target="_blank">Fontawesome</a> %s', 'theme-text-domain' ), '<code></code>' ),
      
      ),


    )
  );


    ot_register_meta_box( $my_meta_box );



  

$testimonial_meta_box = array(
    'id'          => 'testimonial_meta_box',
    'title'       => __( '<h2 style="color: #2c3e50; font-size:20px;">THIS SECTION FOR TESTIMONIAL SECTION</h2>', 'theme-text-domain' ),
    'desc'        => '',
    'pages'       => array( 'protfolio-items' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
      array(
        'label'       => __( 'PLEASE WRITE YOUR PROFESSION ', 'theme-text-domain' ),
        'id'          => 'profession',
        'type'        => 'text',
        'desc'        => sprintf( __( 'Please Write Your Profession %s', 'theme-text-domain' ), '<code></code>' ),
      
      ), 


    )
  );

 ot_register_meta_box( $testimonial_meta_box );
}