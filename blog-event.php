<section class="blogand-eventarea">
        <div class="container">
            <div class="row">
                <!-- START OF BLOG AREA -->
                <div class="col-md-7">
                    <header>LATEST BLOG</header>

                        <?php if(have_posts()) : ?>

                            <?php while (have_posts()) : the_post(); ?>

                                <?php get_template_part( 'content',get_post_format()); ?>      

                            <?php endwhile; ?>    
                        <?php endif; wp_reset_query(); ?>


                </div>
                <!-- END OF BLOG AREA -->


        

   <?php get_template_part( 'event-content' ); ?>
                


            </div>
        </div>
    </section>
    <!-- END OF BLOG AND EVENT SECTION -->