<?php
get_header();
?>
<?php
while (have_posts()):
    the_post();
    ?>
    <div class="inner_banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php the_post_thumbnail('banner', array('class' => 'img-responsive')); ?>
                </div> 
            </div>
        </div>
    </div>
    <div class="news_inner">
        <div class="container">
            <div class="row">
                <div class="col-md-8">

                    <h5><?php the_title(); ?></h5>
                    <?php the_content(); ?>

                </div>
                <div class="col-md-4">
                    <div class="news_section">
                        <h4> Campus news</h4>

                        <ul class="bxslider1 news_list">
                            <?php
                            $args = array(
                                'post_type' => 'news',
                            );
                            $events = new WP_Query($args);
                            $class = 'active';
                            while ($events->have_posts()):
                                $events->the_post();
                                ?>
                                <li> <a href="<?php the_permalink(); ?>"><div class="news"> <?php the_title(); ?></div></a></li>
                                    <?php
                                endwhile;
                                ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
endwhile;
get_footer();
?>



