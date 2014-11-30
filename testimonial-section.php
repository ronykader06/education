 <?php 
    $video_title = get_option_tree( 'video_title','',false );
    $video_link = get_option_tree( 'video_link','',false );
 
  ?>
 <section class="testimonial-area">
        <div class="container">
            <div class="row">
                <!-- START OF VIDEO AREA -->
                <div class="col-md-6" data-uk-scrollspy="{cls:'uk-animation-slide-left', delay:500}">
                    <div id="video" class="video-area">
                        <div class="video-container">
                        <iframe src="//player.vimeo.com/video/<?php echo $video_link ?>" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                        
                        <?php if ($video_title): ?>
                        <div class="video-title">
                            <h2><?php echo $video_title; ?></h2>
                            <i class="fa fa-chevron-right"></i>
                        </div>
                    <?php else: ?>
                        <div class="video-title">
                            <h2><?php _e( 'The standard chunk of Lorem Ipsum used since the 1500s' ); ?></h2>
                            <i class="fa fa-chevron-right"></i>
                        </div>
                    <?php endif ?>
                    </div>
                </div>
                <!-- END OF VIDEO AREA -->
<?php get_template_part( 'testimonial' ); ?>

            </div>
        </div>
    </section>