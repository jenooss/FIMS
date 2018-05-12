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
                <div class="col-md-8 col-sm-8">
                    <div class="content_section">
                        <h4><?php the_title(); ?></h4>
                        <?php the_content(); ?>
                    </div>

                </div>
                     <div class="col-md-4 col-sm-4">
                    <div class="sidebar">
                        <h4>Admission</h4>
                        <?php
                        $defaults = array(
                            'theme_location' => 'admission_sidemenu',
                            'menu' => '',
                            'container' => FALSE,
                            'menu_class' => '',
                            'menu_id' => '',
                            'echo' => true,
                            'fallback_cb' => 'wp_page_menu',
                            'before' => '',
                            'after' => '',
                            'link_before' => '',
                            'link_after' => '',
                            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            'depth' => 0,
                            'walker' => ''
                        );

                        wp_nav_menu($defaults);
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
   <?php
endwhile;
get_footer();
?>


