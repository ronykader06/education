
    <!-- START OF PROTFOLIO SECTION -->
    <section class="protfolio-area">
        <div class="protfolio-hove"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <header>
                        <ul class="list-unstyled list-inline radio-title">
                            <li><span class="filter" data-filter="all"><i class="fa fa-circle-thin "></i> All</span>
                            </li>
                            <li><span class="filter" data-filter=".category-wordpress"><i class="fa fa-circle-thin "></i> Wordpress</span>
                            </li>
                            <li><span class="filter" data-filter=".category-joomla"><i class="fa fa-circle-thin "></i> Joomla</span>
                            </li>
                            <li><span class="filter" data-filter=".category-bootstrap"><i class="fa fa-circle-thin "></i> Bootstrap</span>
                            </li>
                        </ul>
                    </header>
                </div>
                <!-- START OF SINGLE ITEM -->
               
                <div  id="Container" class="col-md-12 col-sm-12 col-xs-12 edu-mix">
                
                    <ul class="list-unstyled list-inline protfolio-list">


<?php
global $post;
$args = array(  'posts_per_page'=> -1,'post_type'=> 'protfolio-items','protfolio_cat'=>'protfolio','order' => 'ASC/DESC',);
$myposts = get_posts( $args );
$i = 1;
foreach( $myposts as $post ) : setup_postdata($post); ?>
<?php 
    $protfolio_categorey = get_post_meta( $post->ID,'protfolio-category',true );
    $i > 8 ? $i = 1: $i = $i;
    $prot_animate = "cls:'uk-animation-scale-up', delay:400";
    switch ($i) {
        case '1':
            $prot_animate = "cls:'uk-animation-scale-up', delay:400";
            break;
        case '2':
            $prot_animate = "cls:'uk-animation-scale-up', delay:600";
            break;
        case '3':
            $prot_animate = "cls:'uk-animation-scale-up', delay:800";
            break;
        case '4':
            $prot_animate = "cls:'uk-animation-scale-up', delay:1000";
            break;
        case '5':
            $prot_animate = "cls:'uk-animation-scale-up', delay:1200";
            break;
        case '6':
            $prot_animate = "cls:'uk-animation-scale-up', delay:1400";
            break;
        case '7':
            $prot_animate = "cls:'uk-animation-scale-up', delay:1600";
            break;
        case '8':
            $prot_animate = "cls:'uk-animation-scale-up', delay:1800";
            break;
        
        default:
            # code...
            break;
    }
 ?>
                
                        <li id="portfolio_anim_1">
                            <div data-uk-scrollspy="{<?php echo $prot_animate; ?>}" class="mix category-<?php echo $protfolio_categorey; ?> single-item" data-myorder="1">
                            <div class="single-hover"></div>
                           
                            <div class="icon">
                                 <i class="fa fa-search-plus"></i>
                            </div>
                            <?php the_post_thumbnail( $size = 'protfolio' ); ?>
                            <?php the_title( $before = '<h2>', $after = '</h2>', $echo = true ) ?>
                            </div>
                        </li>

         <?php $i++; ?>   
<?php endforeach; wp_reset_query();?>

                    </ul>
         

       </div>

            </div>
        </div>
    </section>
    <!-- END OF PROTFOLIO SECTION -->
