<?php get_header(); ?>
    <!--START OF SLIDER AREA-->
    <section class="slider-area">
        <div class="slide"></div>
        <!--START OF SLIDE CONTENT-->
        <div class="slide-content">

            <h2>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet enean soll,
            </h2>
            <p>This is Photoshop's version of Lorem Ipsi Proingra vida nibh vel auctor quet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate . Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.
            </p>
            <a href="#" class="slider-btn pull-right">
                Learn More
                <i class="fa fa-chevron-right"></i>
            </a>
        </div>
        <!--END OF SLIDE CONTENT-->
    </section>

<!--END OF SLIDER SECTION-->



    <!-- START OF BLOG AND EVENT AREA -->
    <section class="blogand-eventarea">
        <div class="container">
            <div class="row">
                <!-- START OF BLOG AREA -->
                <div class="col-md-7">
                    <header>LATEST BLOG</header>

<?php if(have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>        
 <?php 
        $facebook = get_post_meta( $post->ID, 'facebook',true );
        $twitter = get_post_meta( $post->ID, 'twitter',true );
        $google = get_post_meta( $post->ID, 'google-plus',true );
       


  ?>

                    <!-- START OF SINGLE BLOG -->
                    <article data-uk-scrollspy="{cls:'uk-animation-slide-bottom', delay:400}" class="single-blog">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="blog_img">
                                        <a href="<?php the_permalink(); ?>">
                                                <?php the_post_thumbnail( $size = 'blog-larg',array('class'=>'sinlge-post') ); ?>
                                        </a>
                                </div>

                                <div class="blog-content">
                                    <?php the_title( $before = '<h2>', $after = '</h2>', $echo = true ) ?>
                                    <?php the_content(); ?>
                                  

                                    <ul class="list-unstyled list-inline pull-right social-list">
                                    <?php if ($facebook): ?>
                                        <?php echo $facebook; ?>
                                        <?php else: ?>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a>
                                                </li>
                                        <?php endif ?>
                                        <?php if ($twitter): ?>
                                                <?php echo $twitter; ?>
                                                <?php else: ?>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a>
                                                </li>
                                        <?php endif ?>

                                        
                                        <?php if ($google): ?>
                                                <?php echo $google; ?>
                                        <?php else: ?>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a>
                                        </li>  
                                        <?php endif ?>
                                        

                                        <li>
                                            <a href="#">
                                                <span>SHARE</span>
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </article>
                    <!-- END OF SINGLE BLOG -->
 
<?php endwhile; ?>    
<?php endif; wp_reset_query();?>


                </div>
                <!-- END OF BLOG AREA -->


        

                <!-- START OF EVENT AREA -->
                <?php get_template_part( 'event-content' ); ?>
                <!-- END OF EVENT AREA -->
                


            </div>
        </div>
    </section>
    <!-- END OF BLOG AND EVENT SECTION -->



<?php get_footer(); ?>
