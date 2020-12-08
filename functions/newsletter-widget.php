<?php
class newsletter_widget extends WP_Widget {

    function __construct() {
        parent::__construct(
            'newsletter_widget',
            __('Newsletter Widget', 'newsletter_widget_domain'),
            array( 'description' => __( 'Newsletter Signup', 'newsletter_widget_domain' ), )
        );
    }

    public function widget( $args, $instance ) {
        $title = apply_filters( 'widget_title', $instance['title'] );
        $text_two = apply_filters( 'widget_title', $instance['text_two'] );

        echo $args['before_widget'];
        echo '<div class="widget-wrapper">';
        if ( ! empty( $title ) )
            echo $args['before_title'] . $title . $args['after_title'];
        if ( ! empty( $text_two ) )
            echo '<p>' . $text_two . '</p>';
            
			echo '<form action="">';
			echo '<input type="text" id="email" name="email" placeholder="Email address">';
			echo '<input type="submit" value="Submit">';
			echo '</form>';

        echo '</div>';
        echo $args['after_widget'];
    }

    // Widget Backend
    public function form( $instance ) {
        if ( isset( $instance[ 'title' ] ) ) {
            $title = $instance[ 'title' ];
        }
        else {
            $title = __( 'Executive Search', 'newsletter_widget_domain' );
        }

        if ( isset( $instance[ 'text_two' ] ) ) {
            $text_two = $instance[ 'text_two' ];
        }
        else {
            $text_two = __( '', 'newsletter_widget_domain' );
        }

        // Widget admin form
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
            <br /><br />
            <label for="<?php echo $this->get_field_id( 'text_two' ); ?>"><?php _e( 'Main text:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'text_two' ); ?>" name="<?php echo $this->get_field_name( 'text_two' ); ?>" type="text" value="<?php echo esc_attr( $text_two ); ?>" />
        </p>
    <?php
    }

    // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['text_two'] = ( ! empty( $new_instance['text_two'] ) ) ? strip_tags( $new_instance['text_two'] ) : '';
        return $instance;
    }
}

function executive_load_widget() {
    register_widget( 'newsletter_widget' );
}
add_action( 'widgets_init', 'executive_load_widget' );