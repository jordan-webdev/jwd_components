function cptui_register_my_cpts_faq() {
	$labels = array(
		"name" => __( 'FAQs', 'jwd' ),
		"singular_name" => __( 'FAQ', 'jwd' ),
		);

	$args = array(
		"label" => __( 'FAQs', 'jwd' ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
				"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "faq", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-format-status",
		"supports" => array( "title", "editor", "thumbnail" ),
		"taxonomies" => array( "category" ),
			);
	register_post_type( "faq", $args );

// End of cptui_register_my_cpts_faq()
}
add_action( 'init', 'cptui_register_my_cpts_faq' );
