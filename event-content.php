<!-- START OF EVENT AREA -->
<div class="col-md-4 col-md-offset-1">
<div data-uk-scrollspy="{cls:'uk-animation-slide-right', delay:500}" class="event-area">
<header>EVENTS</header>

                       
<?php
global $post;
$args = array(  'posts_per_page'=> 3,'post_type'=> 'event-items','event_cat'=>'EVENT','order' => 'ASC');
$myposts = get_posts( $args );
foreach( $myposts as $post ) : setup_postdata($post); ?>
                


                        <!-- START OF SINGLE EVENT -->
                        <div class="single-event">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="date-area">
                                        <h2><?php the_time( $d = 'd' ); ?></h2>
                                        <p>
                                            <span><?php the_time( $d = 'M' ); ?></span> <?php the_time( $d = 'y' ); ?></p>
                                    </div>

                                    <!-- END OF DATE AREA -->
                                    <!-- START OF EVENT CONTENT -->

                                    <div class="event-content">
                                        <?php the_excerpt(); ?>
                                    </div>
                                </div>

                                <!-- END OF EVENT CONTENT -->
                            </div>
                        </div>
                        <!-- END OF SINGLE EVENT -->


                         <?php endforeach; wp_reset_query(); ?>




                        <h2><a href="#">SHOW ALL</a>
                        </h2>
                    </div>



                    <!-- START OF ADD AREA -->
<div class="row">
                <div data-uk-scrollspy="{cls:'uk-animation-fade', delay:900}" class="col-md-12 add">
                    <img src="<?php echo IMAGES;?>/add.jpg" alt="Advertisment">
                </div>
</div>
                <!-- END OF ADD AREA -->
                </div>
                <!-- END OF EVENT AREA -->