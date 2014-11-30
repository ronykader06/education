<?php get_header(); ?>
    <!--START OF SLIDER AREA-->

    <?php 
    $Slider = get_option_tree( 'slider_action','',false ); 
    $last_post = get_option_tree( 'last_post','',false );   
    $featured_section = get_option_tree( 'featured_section','',false );
    $teacher_section = get_option_tree( 'teacher_section','',false );
    $campus_section = get_option_tree( 'campus_section','',false );
    $testimonial_section = get_option_tree( 'testimonial_section','',false );
    $blog_section = get_option_tree( 'blog_section','',false );
    $patner_section = get_option_tree( 'patner_section','',false );
    $protfolio_section = get_option_tree( 'protfolio_section','',false );
    $contact_section = get_option_tree( 'contact_section','',false );


     ?>
<!--START OF Slider AREA-->
<?php if ($Slider == 'no'): ?>
    <?php get_template_part( 'slider' ); ?>
<?php endif ?>   
<!--START OF ACTION / Last Post AREA-->
<?php if ($last_post == 'no'): ?>
   <?php get_template_part( 'content-latest' ); ?>
<?php endif ?>
    <!--END OF ACTION SECTION-->
    <!--START OF Featured / Course AREA-->
<?php if ($featured_section == 'no'): ?>
 <?php get_template_part( 'featured' ); ?>
<?php endif ?>

<!--START OF Teache Or Speaker AREA-->
<?php if ($teacher_section == 'no'): ?>
  <?php get_template_part( 'teachers' ); ?>
<?php endif ?>
    <!-- START OF Campus SECTION -->
<?php if ($campus_section == 'no'): ?>
  <?php get_template_part( 'campus' ); ?>
<?php endif ?>
    <!-- START OF TESTIMONIAL SECTION -->
<?php if ($testimonial_section == 'no'): ?>
  <?php get_template_part( 'testimonial-section' ); ?>
<?php endif ?>
    <!-- START OF BLOG AND EVENT AREA -->
<?php if ($blog_section == 'no'): ?>
  <?php get_template_part( 'blog-event' ); ?>
<?php endif ?>    
   <!-- START OF Patner AREA -->  
<?php if ($patner_section == 'no'): ?>
  <?php get_template_part( 'patner' ); ?>
<?php endif ?> 
<!-- START OF Protfolio AREA -->  
<?php if ($protfolio_section == 'no'): ?>
  <?php get_template_part( 'protfolio' ); ?>
<?php endif ?> 
<!-- START OF Contact AREA -->  
<?php if ($contact_section == 'no'): ?>
  <?php get_template_part( 'contact' ); ?>
<?php endif ?> 


<?php get_footer(); ?>

