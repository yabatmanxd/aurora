<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! empty( $breadcrumb ) ) {

    echo $wrap_before;
    $breadcrumb_counter = 1;
	foreach ( $breadcrumb as $key => $crumb ) {

        echo $before;
        if($breadcrumb_counter == count($breadcrumb)) {
            $active = true;
        }
        else $active = false;

		if ( ! empty( $crumb[1] ) && sizeof( $breadcrumb ) !== $key + 1 ) {
            echo '<a href="' . esc_url( $crumb[1] ) . '">' . esc_html( $crumb[0] ) . '</a>';
		} else {
			echo '<span class="act">'.esc_html( $crumb[0] ).'</span>&nbsp;';
		}

		echo $after;

		if ( sizeof( $breadcrumb ) !== $key + 1 ) {
			echo $delimiter;
        }
        $breadcrumb_counter ++;
	}

	echo $wrap_after;

}
?>
    <div class="clearfix"></div>
</div>
