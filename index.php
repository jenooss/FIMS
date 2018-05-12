<?php
get_header();
?>
<div class="inner_slider">
    <div class="container">
        <div class="banner">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <?php
                    $args = array(
                        'post_type' => 'slider',
                    );
                    $events = new WP_Query($args);
                    $slide = 'active';
                    $i = 0;
                    while ($events->have_posts()):
                        $events->the_post();
                        ?>
                        <li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>" class=" <?php echo $slide; ?>"></li>
                        <?php
                        $slide = '';
                        $i++;
                        ?>
                        <?php
                    endwhile;
                    ?>

                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <?php
                    $args = array(
                        'post_type' => 'slider',
                    );
                    $events = new WP_Query($args);
                    $class = 'active';
                    while ($events->have_posts()):
                        $events->the_post();
                        ?>
                        <div class="item <?php echo $class; ?>">
                            <!--                            <div class="carousel-caption  slider_caption">
                                                            <span class="second_caption"><?php // the_content();  ?></span>
                                                        </div>-->
                            <?php the_post_thumbnail('slider', array('class' => 'img-responsive')); ?>
                            <?php $class = ''; ?>
                        </div>
                        <?php
                    endwhile;
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="inner_content">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-8 ">
                <div class="inner_desc">
                    <p>
                        <?php
                        $post_8 = get_post(8);
                        $content = wpautop($post_8->post_content);

                        echo substr($content, 0, 690);
                        ?>
                    </p>
                    <a href="<?php bloginfo('url'); ?>/about-us">Know More </a>
                </div>
            </div>

            <div class="col-md-4 col-sm-4 ">
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
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-8  fims_overview">
                <div class="row">
                    <div class="col-md-6  overview_section">
                        <div class="overview">
                            <h4><?php the_field('fims_heading', 6); ?></h4>

                            <div class="fims_activites">

                                <div class="row">
                                    <div class="col-md-3 col-sm-3">
                                        <div class="img_section">
                                            <a href="<?php bloginfo('url'); ?>/industry-interactions"><img src="<?php the_field('industryimage', 6); ?>"></a>
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-sm-9">
                                        <div class="club_activites">
                                            <a href="<?php bloginfo('url'); ?>/industry-interactions">
                                                <h4><?php the_field('industrylabel', 6); ?></h4>
                                                <p><?php the_field('industrycontent', 6); ?></p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="fims_activites">

                                <div class="row">
                                    <div class="col-md-3 col-sm-3">
                                        <div class="img_section">
                                            <a href="<?php bloginfo('url'); ?>/industry-visits"><img src="<?php the_field('visitimage', 6); ?>"></a>
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-sm-9">
                                        <div class="club_activites">
                                            <a href="<?php bloginfo('url'); ?>/industry-visits">
                                                <h4><?php the_field('visitlabel', 6); ?></h4>
                                                <p><?php the_field('visitcontent', 6); ?></p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="fims_activites">

                                <div class="row">
                                    <div class="col-md-3 col-sm-3">
                                        <div class="img_section">
                                            <a href="<?php bloginfo('url'); ?>/mentoring-system"><img src="<?php the_field('mentoringimage', 6); ?>"></a>
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-sm-9">
                                        <div class="club_activites">
                                            <a href="<?php bloginfo('url'); ?>/mentoring-system">
                                                <h4><?php the_field('mentoringheading', 6); ?></h4>
                                                <p><?php the_field('mentoringcontent', 6); ?></p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="fims_activites">

                                <div class="row">
                                    <div class="col-md-3 col-sm-3">
                                        <div class="img_section">
                                            <a href="<?php bloginfo('url'); ?>/msa-clubs"><img src="<?php the_field('clubimage', 6); ?>"></a>
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-sm-9">
                                        <div class="club_activites">
                                            <h4><?php the_field('clubheading', 6); ?></h4>
                                            <p><?php the_field('clubcontent', 6); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="message">
                                    <h4><?php the_field('message_title', 6); ?></h4>
                                </div>
                                <div class="message_part">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <a href="<?php bloginfo('url'); ?>/directors-message">
                                                <div class="message_section">
                                                    <p><?php the_field('message_content', 6); ?></p>
                                                    <div class="author_img"><img src="<?php the_field('author_image', 6); ?>"></div>
                                                    <span><?php the_field('author', 6); ?></span>

                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="download_section">
                                    <?php
                                    $file = get_field('upload_file', 6);

                                    if ($file):
                                        ?>

                                        <a target="_blank" href="<?php the_field('upload_file', 6); ?>">Download Brochure<i class="fa fa-file-pdf-o"></i></a>

                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="events">

                                    <h4><?php the_field('events_title', 6); ?></h4>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="updates">
                                    <div class="custom-container vertical">
                                        <div class="carousel">
                                            <ul>
                                                <?php
                                                $args = array(
                                                    'post_type' => 'events',
                                                );
                                                $events = new WP_Query($args);
                                                $class = 'active';
                                                while ($events->have_posts()):
                                                    $events->the_post();
                                                    ?>



                                                    <li> <a href="<?php the_permalink(); ?>"> 
                                                            <div class="update_events">
                                                                <div class="date">

                                                                    <?php
                                                                    $date1 = get_field('events_date');
                                                                    $date = get_field("events_date");

// assuming your return format is "Ymd"
                                                                    $dateTime = DateTime::createFromFormat("Ymd", $date);

                                                                    if (is_object($dateTime)) {
                                                                        $month = $dateTime->format('F');
                                                                        $year = $dateTime->format('Y');
                                                                        $date = $dateTime->format('j');
                                                                    }
                                                                    ?>
                                                                    <h4><?php echo $date ?></h4>
                                                                    <h5><?php echo $month ?></h5>
                                                                    <h5><?php echo $year ?></h5>
                                                                </div>

                                                                <p><?php the_title(); ?></p>
                                                        </a>
                                                        </div>
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
                    </div>
                    <div class="col-md-6 faculties_section">
                        <div class="faculties_details">
                            <a href="<?php bloginfo('url'); ?>/core-faculty"> <h4><?php the_field('faculty_title', 6); ?></h4></a>
                            <?php
                            $args = array(
                                'post_type' => 'faculty',
                                'posts_per_page' => 3,
                                'orderby' => 'menu_order',
                                'order' => 'DESC'
                            );
                            $events = new WP_Query($args);
                            while ($events->have_posts()):
                                $events->the_post();
                                ?>
                                <div class="boxes">

                                    <div class="photo_section">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail('homefaculty'); ?>
                                        </a>
                                    </div>
                                    <div class="box">
                                        <a href="<?php the_permalink(); ?>">
                                            <h5><?php the_title(); ?> </h5>
                                            <p><?php the_excerpt(); ?></p> 
                                        </a>

                                    </div>

                                </div>
                                <?php
                            endwhile;
                            ?>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="awards">
                                    <div class="awards_details">
                                        <div class="award_recognition">
                                            <a href="<?php bloginfo('url'); ?>/achievements"><?php the_field('award_title', 6); ?></a>
                                        </div>
                                        <div class="award_img">
                                            <a href="<?php bloginfo('url'); ?>/achievements"><img src="<?php the_field('award_image', 6); ?>"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="courses">
                                    <div class="courses_details">
                                        <div class="award_recognition">
                                            <a href="https://enfee.in/fims"><?php the_field('course_title', 6); ?>
                                                
                                            </a>
                                        </div>
                                        <div class="course_img">
                                            <a href="https://enfee.in/fims"> <img src="<?php the_field('course_image', 6); ?>"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="like_page">
                                    <?php // echo do_shortcode('[ws-facebook-likebox url="https://www.facebook.com/fimscalicutofficial" width="375" height="800" show_faces="true" show_Header="false" show_border="false"]'); ?>
                                    <?php echo do_shortcode('[ws-facebook-likebox page_id="fimscalicutofficial" width="375" height="225" show_faces="false" show_Header="false" show_border="false" ]'); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 ">
<!--                <div class="payfee_section">
                    <a href="https://enfee.in/fims"><img src="http://enfee.in/images/enfee_pay.png" style="border:0px"></a>
                </div>-->
                <div class="recruit_section">
                    <h4><?php the_field('recruit_title', 6); ?></h4>
                    <div class="row">
                        <div class="col-sm-12 recruit_first">
                            <ul>
                                <?php
                                $i = 0;
                                if (have_rows('recruit', 156)):
                                    while (have_rows('recruit', 156)):the_row();
                                        $i++;
                                        ?>
                                        <li class="<?php if ($i >= 11) echo 'no_border' ?>">  <a href="<?php bloginfo('url'); ?>/our-recruiters"><img src="<?php the_sub_field('recruit_image'); ?>"></li>
                                                <?php
                                            endwhile;
                                        else:
                                        endif;
                                        ?>
                                        </ul>
                                        </div>
                                        <div class="view_button">
                                            <a href="<?php bloginfo('url'); ?>/our-recruiters"> View More</a>
                                        </div>
                                        </div>
                                        <div class="gallery">
                                            <h4><a style="color:inherit;" href="http://fims.ac.in/gallery/"> Photo Gallery</a></h4>
                                            <?php
                                            ?>
                                            <div class="gallery_box">
                                                <?php
                                                $args = array('post_type' => 'gallery',
                                                    'posts_per_page' => 4,
                                                );
                                                $the_query = new WP_Query($args);
                                                while ($the_query->have_posts()):
                                                    $the_query->the_post();
                                                    ?>
                                                    <div  class="col-md-6 col-xs-6">
                                                        <a href="<?php the_permalink(); ?>" class="image_wraper" >
                                                            <div class="gallery_image">
                                                                <img src="<?php the_post_thumbnail_url('homegallery'); ?>">
                                                            </div>
                                                            <div class="gallery_desc"> 
                                                                <span><?php the_title(); ?> </span>
                                                            </div>
                                                        </a> 
                                                    </div>
                                                    <?php
                                                endwhile;
                                                ?>
                                            </div>


                                        </div>

                                        </div>
                                        </div>
                                        </div>
                                        <div class="facilities_section">
                                            <h4>Our Facilities</h4>
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
                                        </div>
                                        <?php
                                        get_footer();
                                        ?>