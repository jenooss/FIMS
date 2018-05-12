<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php wp_head(); ?>
    </head>
    <body <?php echo body_class(); ?>>
        <!-- header section-->
        <header>
            <div class="header_top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="logo">
                                <a href="<?php bloginfo('url'); ?>"> <img src="<?php the_field('logo', 'options'); ?>"></a>
                            </div>
                            <div class="logo_content">
                                <h4> <?php the_field('title', 'options'); ?></h4>
                                <span class="logo_subblock"><?php the_field('sub_title', 'options'); ?> </span>
                                <span class="logo_subblocktwo"><?php the_field('subtitlesecond', 'options'); ?> </span>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="col-md-5">
                            <div class="header_button">
                                <div class="header_buttonfirst">
                                    <a href="<?php bloginfo('url'); ?>/Procedures">ADMISSION 2018</a>
                                </div>
                                <div class="header_buttonsecond">
                                    <?php
                                    $file = get_field('upload_form', 'option');

                                    if ($file):
                                        ?>
                                        <a target="_blank" href="<?php the_field('upload_form', 'option'); ?>">APPLICATION FORM</a> 
                                    <?php endif; ?>
                                </div>
                                <div class="iso_symbol">
                                    <img src="<?php the_field('symbol', 'options'); ?>">
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header_bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="menu_section">
                                <div role="navigation" class="navbar-default">
                                    <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                                        <i class="fa fa-bars"></i> Menu
                                    </button>
                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                        <?php
                                        $defaults = array(
                                            'theme_location' => 'headermenu',
                                            'menu' => '',
                                            'container' => FALSE,
                                            'menu_class' => 'menu nav navbar-nav',
                                            'menu_id' => '',
                                            'echo' => true,
                                            'fallback_cb' => 'wp_page_menu',
                                            'before' => '',
                                            'after' => '',
                                            'link_before' => '',
                                            'link_after' => '',
                                            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                            'depth' => 0,
                                            'walker' => new BootstrapNavMenuWalker()
                                        );

                                        wp_nav_menu($defaults);
                                        ?>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right_float">
                <a href="https://fims.ac.in/kmat-kerala-examination-2018/" target="_blank" class="float_inner_link">KMAT Kerala Examination 2018 </a>

                <!-- a href="http://fimscanvas.in/" class="float_inner_link" target="_blank" >CANVAS 2K17</a -->
                <!--                <a href="http://fims.ac.in/mega-career-fair/" class="float_inner_link" target="_blank" >MEGA CAREER FAIR</a>-->
                <a href="https://fims.ac.in/Procedures/" target="_blank" class="float_inner_link">SCHOLARSHIP WORTH  RS. 50 LAKHS</a>
                <a href="https://www.youtube.com/watch?v=ULk7_5rM-VI" target="_blank" class="float_inner_link">Save Water Campaign by FIMSIANS goes viral</a>
            </div>
        </header>

