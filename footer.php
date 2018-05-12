<footer>
    <div class="upper_footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h4 class="footer_title"> QUICK LINKS</h4>

                    <?php
                    $defaults = array(
                        'theme_location' => 'footermenu',
                        'menu' => '',
                        'container' => FALSE,
                        'menu_class' => ' ',
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
                <div class="col-md-3">
                    <h4 class="footer_title">PROGRAMS</h4>

                    <?php
                    $defaults = array(
                        'theme_location' => 'footermenusecond',
                        'menu' => '',
                        'container' => FALSE,
                        'menu_class' => ' ',
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
                    <div class="link_icons">
                        <a href="<?php the_field('facebook', 'option'); ?>"><i class="fa fa-facebook"></i></a>
                        <a href="<?php the_field('twitter', 'option'); ?>"><i class="fa fa-twitter"></i></a>
                        <a href="<?php the_field('google', 'option'); ?>"><i class="fa fa-google-plus"></i></a>
                        <a href="<?php the_field('rss', 'option'); ?>"><i class="fa fa-rss" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-2">
                    <h4 class="footer_title">FACILITIES</h4>
                    <?php
                    $defaults = array(
                        'theme_location' => 'footermenuthird',
                        'menu' => '',
                        'container' => FALSE,
                        'menu_class' => ' ',
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
                <div class="col-md-4">
                    <h4 class="footer_title"><?php the_field('contact_title', "option"); ?></h4>
                    <div class="contact_details">
                        <p><?php the_field('contact_details', "option"); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom_footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="copyright">
                        <a href="#"> &copy;Copyright 2017 Farook Institute of Management. All rights reserved</a>
                        <span> Powered by <a href="https://www.cazablaze.com"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cazablaze.png"> cazablaze Technologies</a></span></div>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
<!-- script src="<?php echo get_template_directory_uri(); ?>/https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script -->
<!-- script src="<?php echo get_template_directory_uri(); ?>/http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script -->
<!-- script async="" src="<?php echo get_template_directory_uri(); ?>//www.google-analytics.com/analytics.js"></script -->
<!-- script src="<?php echo get_template_directory_uri(); ?>//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script -->

<script type="text/javascript">

    jQuery("[rel='tooltip']").tooltip();

    jQuery('.faculty_effects').hover(
            function () {
                jQuery(this).find('.caption').slideDown(250); //.fadeIn(250)
            },
            function () {
                jQuery(this).find('.caption').slideUp(250); //.fadeOut(205)
            }
    );

</script>
</body>
</html>