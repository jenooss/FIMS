<?php

if (!function_exists('theme_setup')):

    function theme_setup() {
        add_theme_support('post-thumbnails');
        add_theme_support('title-tag');
        register_nav_menu('headermenu', __('Header menu', 'fims'));
        register_nav_menu('footermenu', __('footer menu', 'fims'));
        register_nav_menu('footermenusecond', __('footer menusecond', 'fims'));
        register_nav_menu('footermenuthird', __('footer menuthird', 'fims'));
        register_nav_menu('industryvisit_sidemenu', __('industryvisitsidemenu', 'fims'));
        register_nav_menu('about_sidemenu', __('aboutsidemenu', 'fims'));
        register_nav_menu('faculty_sidemenu', __('facultysidemenu', 'fims'));
        register_nav_menu('pedagogy_sidemenu', __('pedagogysidemenu', 'fims'));
        register_nav_menu('placement_sidemenu', __('placementsidemenu', 'fims'));
        register_nav_menu('visiting_sidemenu', __('visitingsidemenu', 'fims'));
        register_nav_menu('consulting_sidemenu', __('consultingsidemenu', 'fims'));
        register_nav_menu('fimsadvantages_sidemenu', __('fimsadvantagessidemenu', 'fims'));
        register_nav_menu('courses_sidemenu', __('coursessidemenu', 'fims'));
        register_nav_menu('admission_sidemenu', __('admissionsidemenu', 'fims'));
        register_nav_menu('sportsfacilities_sidemenu', __('sportsfacilitiessidemenu', 'fims'));
        register_nav_menu('programmes_sidemenu', __('programmessidemenu', 'fims'));
    }

endif;
add_action('after_setup_theme', 'theme_setup');
add_theme_support('title-tag');
if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
}

function custom_excerpt_length($length) {
    return 20;
}

add_filter('excerpt_length', 'custom_excerpt_length', 300);
add_action('after_setup_theme', 'theme_setup');

add_theme_support('post-thumbnails');
set_post_thumbnail_size(5000, 5000, true);
add_image_size('photogallery', 300, 200, TRUE);
add_image_size('imagegallery', 500, 300, TRUE);
add_image_size('homegallery', 173, 153, TRUE);
add_image_size('homefaculty', 85, 119, TRUE);
add_image_size('corefaculty', 165, 153, TRUE);
add_image_size('banner', 1140, 223, TRUE);
add_image_size('slider', 1171, 551, TRUE);
add_image_size('faculty', 132, 148, TRUE);
add_image_size('club', 218, 150, TRUE);
add_image_size('boardimage', 170, 153, TRUE);
add_image_size('instituteimage', 270, 204, TRUE);

function slider_custompost() {
    $args = array(
        'label' => 'slider',
        'public' => TRUE,
        'menu_icon' => 'dashicons-images-alt',
        'description' => 'This is just a place holder, so you can see what the site would look like.',
        'menu_position' => 20,
        'supports' => array('title', 'thumbnail', 'excerpt', 'editor', 'comments'),
        'hierarchical' => FALSE,
    );
    register_post_type('slider', $args);
}

add_action('init', 'slider_custompost');

function faculty_custompost() {
    $args = array(
        'label' => 'faculty',
        'public' => TRUE,
        'menu_icon' => 'dashicons-admin-users',
        'description' => 'This is just a place holder, so you can see what the site would look like.',
        'menu_position' => 20,
        'supports' => array('title', 'thumbnail', 'page-attributes', 'excerpt', 'editor', 'comments'),
        'hierarchical' => FALSE,
        'order' => 'ASC'
    );
    register_post_type('faculty', $args);
}

add_action('init', 'faculty_custompost');

//add_post_type_support('faculty', 'page-attributes');

function facilities_custompost() {
    $args = array(
        'label' => 'facility',
        'public' => TRUE,
        'menu_icon' => 'dashicons-images-alt',
        'description' => 'This is just a place holder, so you can see what the site would look like.',
        'menu_position' => 20,
        'supports' => array('title', 'thumbnail', 'excerpt', 'editor', 'comments'),
        'hierarchical' => FALSE,
    );
    register_post_type('facilities', $args);
}

add_action('init', 'facilities_custompost');

function news_custompost() {
    $args = array(
        'label' => 'news',
        'public' => TRUE,
        'menu_icon' => 'dashicons-images-alt',
        'description' => 'This is just a place holder, so you can see what the site would look like.',
        'menu_position' => 20,
        'supports' => array('title', 'thumbnail', 'excerpt', 'editor', 'comments'),
        'hierarchical' => FALSE,
    );
    register_post_type('news', $args);
}

add_action('init', 'news_custompost');

function gallery_custompost() {
    $args = array(
        'label' => 'gallery',
        'public' => TRUE,
        'menu_icon' => 'dashicons-admin-users',
        'description' => 'This is just a place holder, so you can see what the site would look like.',
        'menu_position' => 20,
        'supports' => array('title', 'thumbnail'),
        'hierarchical' => FALSE,
        'has_archive' => true,
//'taxonomies' => array('category', 'post_tag')
    );
    register_post_type('gallery', $args);
}

add_action('init', 'gallery_custompost');

function photogallery_catg_taxonomy() {
    register_taxonomy('photogallery_cat', array('post', 'gallery'), array('label' => "categories", 'hierarchical' => TRUE));
}

//add_action('init', 'photogallery_catg_taxonomy');

function events_custompost() {
    $args = array(
        'label' => 'events',
        'public' => TRUE,
        'menu_icon' => 'dashicons-media-text',
        'description' => 'This is just a place holder, so you can see what the site would look like.',
        'menu_position' => 20,
        'supports' => array('title', 'thumbnail', 'excerpt', 'editor', 'comments'),
        'hierarchical' => FALSE,
    );
    register_post_type('events', $args);
}

add_action('init', 'events_custompost');

function theme_scripts_and_styles() {
    // Theme stylesheet.
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . "/css/bootstrap.min.css");
    //wp_enqueue_style('style', get_stylesheet_directory_uri() . "/css/style.css");
    wp_enqueue_style('extralayer', get_stylesheet_directory_uri() . "/css/extralayers.css");
    wp_enqueue_style('bxslider', get_stylesheet_directory_uri() . "/bxslider/jquery.bxslider.css");
    wp_enqueue_style('font-awsome', get_stylesheet_directory_uri() . "/css/font-awesome.min.css");
    wp_enqueue_style('fancybox', get_stylesheet_directory_uri() . "/css/jquery.fancybox.css");
        wp_enqueue_style('chosen-style', get_stylesheet_directory_uri() . '/chosen/chosen.css');

    wp_enqueue_style('main-style', get_stylesheet_uri());
// Load the Internet Explorer 8 specific stylesheet.
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), false, true);
    wp_enqueue_script('bx-slider', get_template_directory_uri() . '/bxslider/jquery.bxslider.min.js', array(), false, true);
    wp_enqueue_script('jcaruosel', get_template_directory_uri() . '/script/jquery.jcarousellite.js', array(), false, true);
    wp_enqueue_script('fancybox', get_template_directory_uri() . '/js/jquery.fancybox.js', array(), false, true);
        wp_enqueue_script('chose-script', get_stylesheet_directory_uri() . '/chosen/chosen.jquery.js', array(), false, TRUE);

}

add_action('wp_enqueue_scripts', 'theme_scripts_and_styles');
add_action('wp_footer', 'slidernews', 90);

function slidernews() {
    ?>
<script type="text/javascript">
        jQuery('.chosen-select').chosen();
document.addEventListener( 'wpcf7mailsent', function( event ) {
    location = 'http://fims.ac.in/thank-you/';
}, false );    
</script>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            jQuery('.bxslider').bxSlider({
                minSlides: 2,
                maxSlides: 6,
                slideWidth: 215,
                slideMargin: 10,
                speed: 20000,
                ticker: true,
                tickerHover: true,
                useCSS: false
            });

            jQuery('.bxslider1').bxSlider({
                mode: 'vertical',
                auto: true,
                maxSlides: 4,
                minSlides: 2,
                speed: 12000,
                autoHover: true
            });

            jQuery(".vertical .carousel").jCarouselLite({
                auto: 5000,
                speed: 3000,
                vertical: true
            });


            jQuery('.slider1').bxSlider({
                slideWidth: 1300,
                minSlides: 1,
                maxSlides: 3,
                slideMargin: 5,
                ticker: true,
                speed: 50000,
                pager: false,
                controls: false,
            });
            jQuery('.slider4').bxSlider({
                slideWidth: 270,
                minSlides: 2,
                maxSlides: 4,
                speed: 20000,
                ticker: true,
                pager: false,
                slideMargin: 17,
                tickerHover: true,
                useCSS: false
            });
            jQuery('.bxslider6').bxSlider({
                minSlides: 1,
                maxSlides: 2,
                slideWidth: 800,
                pager: false
            });
            jQuery('.bxslider2').bxSlider({
                minSlides: 1,
                maxSlides: 2,
                slideWidth: 800,
                pager: false
            });
            jQuery('.bxslider3').bxSlider({
                slideWidth: 150,
                slideMargin: 8,
                maxSlides: 10,
                minSlides: 5,
                nextText: '<i class="fa fa-angle-right"></i>',
                prevText: '<i class="fa fa-angle-left"></i>',
                nextSelector: '#slider-next',
                prevSelector: '#slider-prev',
                pager: false

            });
            jQuery('.collapse').on('shown.bs.collapse', function () {
                jQuery(this).parent().find(".glyphicon-plus").removeClass("glyphicon-plus").addClass("glyphicon-minus");
            }).on('hidden.bs.collapse', function () {
                jQuery(this).parent().find(".glyphicon-minus").removeClass("glyphicon-minus").addClass("glyphicon-plus");
            });
            jQuery(".fancybox").fancybox({
                openEffect: 'none',
                closeEffect: 'none'
            });

        });


    </script>

    <script type="text/javascript">
        jQuery(document).ready(function () {
            if (window.innerWidth >= 992) {
                jQuery('.brochure_leftblock').each(function () {
                    jQuery(this).height((jQuery(this).parent().parent().find('.brochure_rightblock').height()));
                });
            }

        });
    </script>
    <?php

}

//bootstrap menu walker
class BootstrapNavMenuWalker extends Walker_Nav_Menu {

    function start_lvl(&$output, $depth) {

        $indent = str_repeat("\t", $depth);
        $submenu = ($depth > 0) ? ' sub-menu' : '';
        $output .= "\n$indent<ul class=\"dropdown-content$submenu depth_$depth\">\n";
    }

    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {


        $indent = ( $depth ) ? str_repeat("\t", $depth) : '';

        $li_attributes = '';
        $class_names = $value = '';

        $classes = empty($item->classes) ? array() : (array) $item->classes;
// managing divider: add divider class to an element to get a divider before it.
        $divider_class_position = array_search('divider', $classes);
        if ($divider_class_position !== false) {
            $output .= "<li class=\"divider\"></li>\n";
            unset($classes[$divider_class_position]);
        }
        $classes[] = ($args->has_children) ? 'dropdown' : '';
        $classes[] = ($item->current || $item->current_item_ancestor) ? 'active' : '';
        $classes[] = 'menu-item-' . $item->ID;
        if ($depth && $args->has_children) {
            $classes[] = 'dropdown-submenu';
        }


        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = ' class="' . esc_attr($class_names) . '"';

        $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
        $id = strlen($id) ? ' id="' . esc_attr($id) . '"' : '';

        $output .= $indent . '<li' . $id . $value . $class_names . $li_attributes . '>';

        $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
        $attributes .=!empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .=!empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
        $attributes .=!empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';
        $attributes .= ($args->has_children) ? ' class="" data-toggle=""' : '';

        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
        $item_output .= ($depth == 0 && $args->has_children) ? ' </a>' : '</a>';
        $item_output .= $args->after;


        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }

    function display_element($element, &$children_elements, $max_depth, $depth = 0, $args, &$output) {
//v($element);
        if (!$element)
            return;

        $id_field = $this->db_fields['id'];

//display this element
        if (is_array($args[0]))
            $args[0]['has_children'] = !empty($children_elements[$element->$id_field]);
        else if (is_object($args[0]))
            $args[0]->has_children = !empty($children_elements[$element->$id_field]);
        $cb_args = array_merge(array(&$output, $element, $depth), $args);
        call_user_func_array(array(&$this, 'start_el'), $cb_args);

        $id = $element->$id_field;

// descend only when the depth is right and there are childrens for this element
        if (($max_depth == 0 || $max_depth > $depth + 1 ) && isset($children_elements[$id])) {

            foreach ($children_elements[$id] as $child) {

                if (!isset($newlevel)) {
                    $newlevel = true;
//start the child delimiter
                    $cb_args = array_merge(array(&$output, $depth), $args);
                    call_user_func_array(array(&$this, 'start_lvl'), $cb_args);
                }
                $this->display_element($child, $children_elements, $max_depth, $depth + 1, $args, $output);
            }
            unset($children_elements[$id]);
        }

        if (isset($newlevel) && $newlevel) {
//end the child delimiter
            $cb_args = array_merge(array(&$output, $depth), $args);
            call_user_func_array(array(&$this, 'end_lvl'), $cb_args);
        }

//end this element
        $cb_args = array_merge(array(&$output, $element, $depth), $args);
        call_user_func_array(array(&$this, 'end_el'), $cb_args);
    }

}

function meida_post_type() {

    $labels = array(
        'name' => _x('Medias', 'Post Type General Name', 'fimstheme'),
        'singular_name' => _x('Media', 'Post Type Singular Name', 'fimstheme'),
        'menu_name' => __('Media', 'fimstheme'),
        'name_admin_bar' => __('Media', 'fimstheme'),
        'archives' => __('Media Archives', 'fimstheme'),
        'parent_item_colon' => __('Parent Media:', 'fimstheme'),
        'all_items' => __('All Medias', 'fimstheme'),
        'add_new_item' => __('Add New Media', 'fimstheme'),
        'add_new' => __('Add New', 'fimstheme'),
        'new_item' => __('New Media', 'fimstheme'),
        'edit_item' => __('Edit Media', 'fimstheme'),
        'update_item' => __('Update Media', 'fimstheme'),
        'view_item' => __('View Media', 'fimstheme'),
        'search_items' => __('Search Media', 'fimstheme'),
        'not_found' => __('Not found', 'fimstheme'),
        'not_found_in_trash' => __('Not found in Trash', 'fimstheme'),
        'featured_image' => __('Featured Image', 'fimstheme'),
        'set_featured_image' => __('Set featured image', 'fimstheme'),
        'remove_featured_image' => __('Remove featured image', 'fimstheme'),
        'use_featured_image' => __('Use as featured image', 'fimstheme'),
        'insert_into_item' => __('Insert into item', 'fimstheme'),
        'uploaded_to_this_item' => __('Uploaded to this item', 'fimstheme'),
        'items_list' => __('Medias list', 'fimstheme'),
        'items_list_navigation' => __('Medias list navigation', 'fimstheme'),
        'filter_items_list' => __('Filter items list', 'fimstheme'),
    );
    $args = array(
        'label' => __('Media', 'fimstheme'),
        'description' => __('All News Media Come here', 'fimstheme'),
        'labels' => $labels,
        'supports' => array('title', 'thumbnail'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-admin-media',
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
    );
    register_post_type('media', $args);
}

add_action('init', 'meida_post_type', 0);

function custom_menu_page_removing() {
    remove_menu_page( 'upload.php' );
}
add_action( 'admin_menu', 'custom_menu_page_removing' );