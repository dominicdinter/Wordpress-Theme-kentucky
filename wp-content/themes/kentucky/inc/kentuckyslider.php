<?php
/*
	Plugin Name: Kentucky Slider
	Description: This is a simple Image-Slider based on the Bootstrap Carousel
	Author: Dominic Dinter
	Version: 1.0
*/


// Slider Widget
class ks_Widget extends WP_Widget {

    public function __construct() {
        parent::__construct('ks_Widget', 'Kentucky Slideshow', array('description' => __('You can integrate the Slideshow into a widget field. Notice: You can have only one Slider on a Page!', 'text_domain')));
    }

    public function form($instance) {
        if (isset($instance['title'])) {
            $title = $instance['title'];
        } else {
            $title = __('Widget Slideshow', 'text_domain');
        }
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>
        <?php
    }

    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = strip_tags($new_instance['title']);

        return $instance;
    }
    public function widget($args, $instance) {
        extract($args);
        //the title	
        $title = apply_filters('widget_title', $instance['title']);
        echo $before_widget;
        if (!empty($title))
            echo $before_title . $title . $after_title;
        echo ks_function('ks_widget');
        echo $after_widget;
    }

}

function ks_widgets_init() {  
    register_widget('ks_Widget');  
}



// Big Slider

function ks_function($type='ks_function') {
	
    $args = array('post_type' => 'ks_images', 'posts_per_page' => 5);
	$result = '<div id="carousel" class="carousel slide">';
    $result .= '<ol class="carousel-indicators">';
    $result .= '</ol>';
    $result .= '<div class="carousel-inner">';
    
    //the loop
    $loop = new WP_Query($args);
    while ($loop->have_posts()) {
        $loop->the_post();

        $the_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), $type);

        $result .= '<div class="item">';
        $result .= '<img title="'.get_the_title().'" src="' . $the_url[0] . '" data-thumb="' . $the_url[0] . '" alt=""/>';
        $result .= '</div>';
    }
    $result .= '</div>';
    $result .='<a class="left carousel-control" href="#carousel" data-slide="prev">';
    $result .='<span class="icon-prev"></span>';
    $result .='</a>';
    $result .='<a class="right carousel-control" href="#carousel" data-slide="next">';
    $result .='<span class="icon-next"></span>';
    $result .='</a>';
	$result .='</div>';
    return $result;
}

function ks_init() {
    add_shortcode('kentuckyslider', 'ks_function');
    
    add_image_size('ks_widget', 180, 100, true);
    add_image_size('ks_function', 600, 280, true);
    
    $args = array('public' => true, 'label' => 'Slider Images', 'supports' => array('title', 'thumbnail'));
    register_post_type('ks_images', $args);
}

// hooks
add_theme_support( 'post-thumbnails' );
add_action('init', 'ks_init');
add_action('widgets_init', 'ks_widgets_init');



?>