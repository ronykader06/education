<section data-uk-scrollspy="{cls:'uk-animation-slide-left',delay:500}" class="action-area">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="action">
                    <?php if($aside_post = get_post()) { ?>

                       <h2><?php echo $aside_post->post_title; ?></h2>
                        <p><?php echo $aside_post->post_content; ?></p>

                        <?php } ?>
                    </div>
                </div>
                <!--END OF ACTION -->

                <div class="col-md-3">
                    <a href="<?php the_permalink(); ?>" type="button" class="btn action-btn">
                        Learn More
                        <i class="fa fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>
</section>