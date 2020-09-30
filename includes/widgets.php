<?php
/**
 * Register widgetized area and update sidebar with default widgets.
 */
function autonomie_widgets_init() {
	register_sidebar(
		array(
			'name' => __( 'Sidebar 1', 'autonomie' ),
			'id' => 'sidebar-1',
			'description' => __( 'A sidebar area', 'autonomie' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name' => __( 'Sidebar 2', 'autonomie' ),
			'id' => 'sidebar-2',
			'description' => __( 'A second sidebar area', 'autonomie' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name' => __( 'Sidebar 3', 'autonomie' ),
			'id' => 'sidebar-3',
			'description' => __( 'A third sidebar area', 'autonomie' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name' => __( 'Entry-Meta', 'autonomie' ),
			'id' => 'entry-meta',
			'description' => __( 'Extend the Entry-Meta', 'autonomie' ),
			'before_widget' => '',
			'after_widget'  => '',
		)
	);

	require( get_template_directory() . '/widgets/class-autonomie-author-widget.php' );
	register_widget( 'Autonomie_Author_Widget' );

	require( get_template_directory() . '/widgets/class-autonomie-taxonomy-widget.php' );
	register_widget( 'Autonomie_Taxonomy_Widget' );

	$preset_widgets = array(
		'entry-meta' => array( 'autonomie-author-widget', 'autonomie-author-widget' ),
	);

	//update_option( 'sidebars_widgets', apply_filters( 'autonomie_preset_widgets', $preset_widgets ) );
}
add_action( 'widgets_init', 'autonomie_widgets_init' );
