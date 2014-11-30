<?php 
    $patner_title = get_option_tree( 'patner_title','',false );
 ?>
    <!-- START OF PARTNER AREA -->
    <section class="partner-area">
        <div class="container">
            <div class="row">
                <header>
                <?php echo $patner_title; ?>
                   
                </header>

                <div class="col-md-12">
                    <ul class="list-unstyled list-inline partner-list">
<?php
global $post;
$args = array(  'posts_per_page'=> 6,'post_type'=> 'protfolio-items','protfolio_cat'=>'Sponsor-Logo','order' => 'ASC');

$myposts = get_posts( $args );
foreach( $myposts as $post ) : setup_postdata($post); ?>
                

                        <li>
                            <a href="#">
                                <?php the_post_thumbnail( $size = 'sponsor-logo' ); ?>
                            </a>
                        </li>
            
<?php endforeach; wp_reset_query();?>



                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- END OF PARTNER AREA -->