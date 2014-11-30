    <section class="teacher-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <?php 
                    $teacher_title = get_option_tree('teacher_title','',false);

                 ?>
                    <header data-uk-scrollspy="{cls:'uk-animation-scale-up', delay:500}"><?php echo $teacher_title; ?></header>
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="list-unstyled list-inline single-list">

<?php
global $post;
$args = array(  'posts_per_page'=> 8,'post_type'=> 'fetured-items','fetured_cat'=>'teachers','order' => 'ASC');
$myposts = get_posts( $args );
$i = 1;
foreach( $myposts as $post ) : setup_postdata($post); ?>
<?php 
    $i > 8 ? $i = 1: $i = $i;
    $teacher = "cls:'uk-animation-slide-left', delay:400";
    switch ($i) {
        case '1':
             $teacher = "cls:'uk-animation-slide-left', delay:400";
            break;
            case '2':
             $teacher = "cls:'uk-animation-slide-left', delay:600";
            break;
            case '3':
             $teacher = "cls:'uk-animation-slide-left', delay:800";
            break;
            case '4':
             $teacher = "cls:'uk-animation-slide-left', delay:1000";
            break;
            case '5':
             $teacher = "cls:'uk-animation-slide-left', delay:1100";
            break;
            case '6':
             $teacher = "cls:'uk-animation-slide-left', delay:1200";
            break;
            case '7':
             $teacher = "cls:'uk-animation-slide-left', delay:1400";
            break;
            case '8':
             $teacher = "cls:'uk-animation-slide-left', delay:1600";
            break;
   
    }
 ?>
             <li>
                <!--START OF SINGLE TEACHER -->
                <div id="teacher_show_5" data-uk-scrollspy="{<?php echo $teacher; ?>}" class="single-teacher">
                    <?php the_post_thumbnail( $size = 'teacher' ); ?>
                    <?php the_title( $before = '<h2>', $after = '</h2>', $echo = true ); ?>
                    <?php the_content(); ?>
                </div>
                <!--END OF SINGLE TEACHER -->
            </li>               

               <?php $i++; ?>             
<?php endforeach; wp_reset_query();?>



                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END OF TEACHER SECTION -->