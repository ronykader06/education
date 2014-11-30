<section class="campus-area">
        <div class="container">
            <div class="row">
<?php
global $post;
$args = array(  'posts_per_page'=> 8,'post_type'=> 'fetured-items','fetured_cat'=>'about-campus','order' => 'ASC');
$myposts = get_posts( $args );
$i = 1;
foreach( $myposts as $post ) : setup_postdata($post); ?>
<?php 
$i > 3? $i = 1 :$i = $i;
$animat = "cls:'uk-animation-slide-left', delay:500";
switch ($i) {
	case '1':
		$animat = "cls:'uk-animation-slide-left', delay:500";
		break;
		case '2':
			$animat = "cls:'uk-animation-slide-bottom', delay:600";
			break;
			case '3':
				$animat = "cls:'uk-animation-slide-bottom', delay:800";
				break;
	
}
$campus_thumb = get_post_meta( $post->ID,'campus-thumb',true );
$campus_logo = get_post_meta( $post->ID,'campus-logo',true );

 ?>

                <!--
                START OF SINGLE CAMPUS -->
                <div data-uk-scrollspy="{<?php echo $animat; ?>}" class="col-md-4 col-sm-4 col-xs-12">
                    <div class="campus">
                <?php if ($campus_thumb): ?>
                    <img src="<?php echo $campus; ?>"  alt="Radio">
                    <?php elseif ($campus_logo) : ?>
                       <i class="fa fa-<?php echo $campus_logo; ?>"></i>
                    <?php else: ?>
                      <img src="<?php echo IMAGES;?>/radio.png"  alt="Radio">
                <?php endif ?>               


                        <?php the_title( $before = '<h2>', $after = '</h2>', $echo = true ) ?>
                    </div>
                </div>
                <!--END OF SINGLE CAMPUS -->             

                     <?php $i++; ?>
<?php endforeach; wp_reset_query();?>

            </div>
        </div>
    </section>
    <!-- END OF CAMPUS SECTION -->