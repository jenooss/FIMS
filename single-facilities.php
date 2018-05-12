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
    <div class="inner">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="content_section">
                        <h4><?php the_title(); ?></h4>
                        <?php the_content(); ?>
                    </div>

                </div>
                <?php get_sidebar('facility') ?>
            </div>
            <div class="row">
                <div class="col-md-12">

                    <div class="placement_slider">

                        <ul class="bxslider">
                            <?php
                            $args = array(
                                'post_type' => 'facilities',
                            );
                            $events = new WP_Query($args);
                            while ($events->have_posts()):
                                $events->the_post();
                                ?> 
                                <li>

                                    <div class="facility_img"> <a href="<?php the_permalink(); ?>"><img src="<?php the_field('image'); ?>"></a></div>
                                    <div class="facility_name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                                </li>
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