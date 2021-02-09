<?php
/**
 * Example Widget Class
 */
class newsletter_widget extends WP_Widget {
 
 
    /** constructor -- name this the same as the class above */
    function newsletter_widget() {
        parent::WP_Widget(false, $name = 'Newsletter Widget');	
    }
 
    /** @see WP_Widget::widget -- do not rename this */
    function widget($args, $instance) {	
        extract( $args );
        $title 		= apply_filters('widget_title', $instance['title']);
        $message 	= $instance['message'];
        $email 		= $instance['email'];
        ?>
              <?php echo $before_widget; ?>
                  <?php if ( $title )
                        echo $before_title . $title . $after_title; ?>
							<p>
								<?php echo $message; ?>
							</p>
							<p><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
              <?php echo $after_widget; ?>
        <?php
    }
 
    /** @see WP_Widget::update -- do not rename this */
    function update($new_instance, $old_instance) {		
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['message'] = strip_tags($new_instance['message']);
		$instance['email'] = strip_tags($new_instance['email']);
        return $instance;
    }
 
    /** @see WP_Widget::form -- do not rename this */
    function form($instance) {	
 
        $title 		= esc_attr($instance['title']);
        $message	= esc_attr($instance['message']);
        $email	= esc_attr($instance['email']);
        ?>
         <p>
          <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label> 
          <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
        </p>
       
		<p>
          <label for="<?php echo $this->get_field_id('message'); ?>"><?php _e('Simple Message'); ?></label> 
          <input class="widefat" id="<?php echo $this->get_field_id('message'); ?>" name="<?php echo $this->get_field_name('message'); ?>" type="text" value="<?php echo $message; ?>" />
        </p>
        
		<p>
          <label for="<?php echo $this->get_field_id('email'); ?>"><?php _e('Email'); ?></label> 
          <input class="widefat" id="<?php echo $this->get_field_id('email'); ?>" name="<?php echo $this->get_field_name('email'); ?>" type="text" value="<?php echo $email; ?>" />
        </p> 
        
        <?php 
    }
 
 
} // end class newsletter_widget
add_action('widgets_init', create_function('', 'return register_widget("newsletter_widget");'));
