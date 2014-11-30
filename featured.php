
    <!--START OF FEATURED AREA-->
    <section class="featured-area">
        <div class="container">
            <div class="row">
            <?php 
                $fetaured_title = get_option_tree('featured_title','',false);
             ?>
                <header data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:500}"><?php echo $fetaured_title; ?></header>
                

<?php
global $post;
$args = array(  'posts_per_page'=> 8,'post_type'=> 'fetured-items','fetured_cat'=>'course','order' => 'ASC');
$myposts = get_posts( $args );
$i = 1;
foreach( $myposts as $post ) : setup_postdata($post); ?>
   <?php 
   $course_icon = get_post_meta( $post->ID,'course-icon',true );
   $awesome_icon = get_post_meta( $post->ID,'awesome-icon',true );     

        $i > 8 ? $i = 1 : $i = $i;

        $fetured_animate = "cls:'uk-animation-slide-left', delay:500";
switch ($i) {
            case '1':
            $fetured_animate = "cls:'uk-animation-slide-left', delay:500";
            break;
            case '2':
            $fetured_animate = "cls:'uk-animation-slide-bottom', delay:600";
            break;
            case '3':
            $fetured_animate = "cls:'uk-animation-slide-bottom', delay:1000";
            break;
            case '4':
            $fetured_animate = "cls:'uk-animation-slide-bottom', delay:1200";
            break;
            case '5':
            $fetured_animate = "cls:'uk-animation-slide-bottom', delay:1300";
            break;
            case '6':
            $fetured_animate = "cls:'uk-animation-slide-bottom', delay:1400";
            break;                                                                                                           
            case '7':
            $fetured_animate = "cls:'uk-animation-slide-bottom', delay:1600";
            break;
            case '8':
            $fetured_animate = "cls:'uk-animation-slide-bottom', delay:1800";
            break;
    
}

    ?>             
                <!-- START OF SINGLE FEATURED AREA -->
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div id="course_animate_4" class="single-featured" data-uk-scrollspy="{<?php  echo $fetured_animate; ?>}">
                        <ul class="list-unstyled featured-list">               


        
                        <?php if ($course_icon): ?>                            
                            <li>
                                <img src="<?php echo $course_icon;?>" width="59" height="47" alt="Course">
                            </li>

                        <?php elseif ($awesome_icon) : ?>
                                <li>                                   
                                     <i class="fa fa-<?php echo $awesome_icon; ?>"></i>  
                                </li>
                        <?php else: ?>

                                <li>
                                    <img src="<?php echo IMAGES;?>/ruby.png" alt="Course">
                                </li>
                        <?php endif ?>

                           
                            <li>
                                <?php the_title( $before = '<h2>', $after = '</h2>', $echo = true ) ?>
                            </li>
                        </ul>
                        <?php the_excerpt(); ?>

                        <div class="feature-title">
                            <a href="<?php the_permalink(); ?>">Learn More</a>
                            <ul class="list-unstyled list-inline pull-right">
                                <li><a href="<?php the_permalink(); ?>"><i class="fa fa-chevron-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- END OF SINGLE FEATURED -->
                            <?php $i++; ?>
<?php endforeach; wp_reset_query();?>





                <div class="clearfix"></div>

                <div class="col-md-12">
                    <div data-uk-scrollspy="{cls:'uk-animation-fade', delay:700}" class="allcourse-button">
                        <button type="button" class="btn course-btn">
                            Browse More
                            <i class="fa fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
            <!--END OF COURSE AREA-->
        </div>
    </section>
    <!-- END OF COURSE SECTION -->