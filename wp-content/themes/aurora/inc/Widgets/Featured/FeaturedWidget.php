<?php

class FeaturedWidget extends WP_Widget
{
    function __construct()
    {
        $widget_ops = [
            'classname' => 'featured-collection',
            'description' => 'Описание'
        ];
        $control_ops = [
            'width' => 350,
            'height' => 350
        ];

        parent::__construct(
            'featured_widget', //id
            'Избранные товары', //заголовок
            $widget_ops,
            $control_ops
        );
    }
    function form( $instance ) 
    {
        $defaults = [
            'title' => 'Заголовок по умолчанию',
            'pcount' => 9
        ];
        $instance = wp_parse_args((array)$instance, $defaults);
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php $instance['title'] ?></label> 
			<input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $instance['title'] ); ?>">
		</p>
        <p>
			<label for="<?php echo $this->get_field_id( 'pcount' ); ?>"><?php $instance['pcount'] ?></label> 
			<input id="<?php echo $this->get_field_id( 'pcount' ); ?>" name="<?php echo $this->get_field_name( 'pcount' ); ?>" type="number" value="<?php echo esc_attr( $instance['pcount'] ); ?>">
		</p>
		<?php 
    }
    function update( $new_instance, $old_instance )
    {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['pcount'] = ( ! empty( $new_instance['pcount'] ) && $new_instance['pcount'] >=0 ) ? strip_tags( $new_instance['pcount'] ) : '';
		return $instance;
    }
    function widget($args, $instance)
    {
        $title = apply_filters( 'widget_title', $instance['title'] );
        $pcount = $instance['pcount'];
        include_once 'FeaturedTemplate.php';
    }
}

?>