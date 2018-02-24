<?php
/*Create The Listing Post Type*/
add_filter('piklist_post_types', 'listing_post_type');
 function listing_post_type($post_types){
 $post_types['listing'] = array(
	  'labels' =>piklist('post_type_labels','Listings')
     ,'title' => __('Simple Business Listings','simple-dir')
 	 ,'public' => true
	 ,'admin_body_class' => array (
        'listing-admin'
             )
 	 ,'has_archive' => 'listings'
	 ,'can_export' => 'true'
	 ,'capability_type' => 'post'
	 ,'rewrite' => array(
		 'slug' => 'listing'
				 )
 	,'supports' => array(
 		'title',
		'author'
		,'revisions'
		,'editor'
		, 'excerpt'
		,'thumbnail'
		, 'comments'
		 		)
  );
return $post_types;
}

function my_rewrite_flush() {
    // First, we "add" the custom post type via the above written function.
    // Note: "add" is written with quotes, as CPTs don't get added to the DB,
    // They are only referenced in the post_type column with a post entry,
    // when you add a post of this CPT.
    listing_post_type();

    // ATTENTION: This is *only* done during plugin activation hook in this example!
    // You should *NEVER EVER* do this on every page load!!
    flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'my_rewrite_flush' );

foreach ( array( 'pre_term_description' ) as $filter ) {
 remove_filter( $filter, 'wp_filter_kses' );
}

foreach ( array( 'term_description' ) as $filter ) {
remove_filter( $filter, 'wp_kses_data' );
}
