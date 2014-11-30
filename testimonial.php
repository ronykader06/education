                <!-- START OF TESTIOMONIAL -->
                <div class="col-md-6">
                  <div id="testimonials" class="testiomonial"  data-uk-scrollspy="{cls:'uk-animation-slide-right', delay:500}">
                      <div class="flexslider">
                           <ul class="slides">

<?php
global $post;
$args = array(  'posts_per_page'=> -1,'post_type'=> 'protfolio-items','protfolio_cat'=>'Testimonial','order' => 'ASC');
$myposts = get_posts( $args );
foreach( $myposts as $post ) : setup_postdata($post); ?>
<?php 
  $profession = get_post_meta( $post->ID,'profession',true );
 ?>
                             <li>
                              <?php the_post_thumbnail( $size = 'testimonial' ); ?>
                              <?php the_content(); ?>
                              <?php the_title( $before = '<h2>', $after = '</h2>', $echo = true ) ?>
                                <span><?php echo $profession; ?></span>
                              </li>  
<?php endforeach; wp_reset_query();?>


                            </ul>
                        </div>
                    </div>
                </div>
                <!-- END OF TESTIMONIAL -->