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
                                         <?php the_post_thumbnail( $size = 'blog-thum' ); ?>
                                       </a>
                                </div>

                                <div class="blog-content">
                                    <?php the_title( $before = '<h2>', $after = '</h2>', $echo = true ) ?>
                                    <?php the_excerpt('20'); ?>
                                    <ul class="list-unstyled list-inline pull-left">
                                        <li>
                                            <a href="<?php the_permalink(); ?>" class="btn blog-btn">
                                                    Read More
                                                    <i class="fa fa-chevron-right"></i>
                                            </a>
                                        </li>
                                    </ul>

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

