<?php
/**
 * Plugin Name: GatherPress "Happenings at spots" demo helper
 * Description: Renames GatherPress' core post types, "Event"->"Happening" and "Venue"->"Spot"
 * Version:     0.1.0
 * Author:      carstenbach
 */

/**
* Filters the labels of a specific post type.
*
* @param object $labels Object with labels for the post type as member variables.
* @return object Object with labels for the post type as member variables.
*/
add_filter('post_type_labels_gatherpress_event', function ( object $labels ) : object {

	$_labels = array(
		'name'                     => 'Happenings',
		'singular_name'            => 'Happening',
		'add_new'                  => 'Add New',
		'add_new_item'             => 'Add New Happening',
		'edit_item'                => 'Edit Happening',
		'new_item'                 => 'New Happening',
		'view_item'                => 'View Happening',
		'view_items'               => 'View Happenings',
		'search_items'             => 'Search Happenings',
		'not_found'                => 'No happenings found',
		'not_found_in_trash'       => 'No happenings found in Trash',
		'parent_item_colon'        => 'Parent Happening:',
		'all_items'                => 'All Happenings',
		'archives'                 => 'Happening Archives',
		'attributes'               => 'Happening Attributes',
		'insert_into_item'         => 'Insert into happening',
		'uploaded_to_this_item'    => 'Uploaded to this happening',
		'featured_image'           => 'Happening Image',
		'set_featured_image'       => 'Set happening image',
		'remove_featured_image'    => 'Remove happening image',
		'use_featured_image'       => 'Use as happening image',
		'menu_name'                => 'Happenings',
		'filter_items_list'        => 'Filter happenings list',
		'filter_by_date'           => 'Filter happenings by date',
		'items_list_navigation'    => 'Happenings list navigation',
		'items_list'               => 'Happenings list',
		'item_published'           => 'Happening published.',
		'item_published_privately' => 'Happening published privately.',
		'item_reverted_to_draft'   => 'Happening reverted to draft.',
		'item_trashed'             => 'Happening moved to Trash.',
		'item_scheduled'           => 'Happening scheduled.',
		'item_updated'             => 'Happening updated.',
		'item_link'                => 'Happening Link',
		'item_link_description'    => 'A link to a happening.',
	);

	foreach ($_labels as $key => $value) {
		$labels->{$key} = $value;
	}

	return $labels;
} );

/**
* Filters the labels of a specific post type.
*
* @param object $labels Object with labels for the post type as member variables.
* @return object Object with labels for the post type as member variables.
*/
add_filter('post_type_labels_gatherpress_venue', function ( object $labels ) : object {

	$_labels = array(
		'name'                     => 'Spots',
		'singular_name'            => 'Spot',
		'add_new'                  => 'Add New',
		'add_new_item'             => 'Add New Spot',
		'edit_item'                => 'Edit Spot',
		'new_item'                 => 'New Spot',
		'view_item'                => 'View Spot',
		'view_items'               => 'View Spots',
		'search_items'             => 'Search Spots',
		'not_found'                => 'No spots found',
		'not_found_in_trash'       => 'No spots found in Trash',
		'parent_item_colon'        => 'Parent Spot:',
		'all_items'                => 'Spots',
		'archives'                 => 'Spot Archives',
		'attributes'               => 'Spot Attributes',
		'insert_into_item'         => 'Insert into spot',
		'uploaded_to_this_item'    => 'Uploaded to this spot',
		'featured_image'           => 'Spot Image',
		'set_featured_image'       => 'Set spot image',
		'remove_featured_image'    => 'Remove spot image',
		'use_featured_image'       => 'Use as spot image',
		'menu_name'                => 'Spots',
		'filter_items_list'        => 'Filter spots list',
		'filter_by_date'           => 'Filter spots by date',
		'items_list_navigation'    => 'Spots list navigation',
		'items_list'               => 'Spots list',
		'item_published'           => 'Spot published.',
		'item_published_privately' => 'Spot published privately.',
		'item_reverted_to_draft'   => 'Spot reverted to draft.',
		'item_trashed'             => 'Spot moved to Trash.',
		'item_scheduled'           => 'Spot scheduled.',
		'item_updated'             => 'Spot updated.',
		'item_link'                => 'Spot Link',
		'item_link_description'    => 'A link to a spot.',
	);

	foreach ($_labels as $key => $value) {
		$labels->{$key} = $value;
	}

	return $labels;
} );

/**
* Filters the labels of a specific taxonomy.
*
* @param object $labels Object with labels for the taxonomy as member variables.
* @return object Object with labels for the taxonomy as member variables.
*/
add_filter('taxonomy_labels_gatherpress_topic', function ( object $labels ) : object {

	$_labels = array(
		'name'                       => 'Types',
		'singular_name'              => 'Type',
		'search_items'               => 'Search Types',
		'popular_items'              => 'Popular Types',
		'all_items'                  => 'All Types',
		'parent_item'                => 'Parent Type',
		'parent_item_colon'          => 'Parent Type:',
		'edit_item'                  => 'Edit Type',
		'view_item'                  => 'View Type',
		'update_item'                => 'Update Type',
		'add_new_item'               => 'Add Type',
		'new_item_name'              => 'New Type Name',
		'separate_items_with_commas' => 'Separate types with commas',
		'add_or_remove_items'        => 'Add or remove types',
		'choose_from_most_used'      => 'Choose from the most used types',
		'not_found'                  => 'No types found.',
		'no_terms'                   => 'No types',
		'filter_by_item'             => 'Filter by type',
		'items_list_navigation'      => 'Types list navigation',
		'items_list'                 => 'Types list',
		'most_used'                  => 'Most Used',
		'back_to_items'              => '&larr; Go to Types',
		'item_link'                  => 'Type Link',
		'item_link_description'      => 'A link to a type.',
	);

	foreach ($_labels as $key => $value) {
		$labels->{$key} = $value;
	}

	return $labels;
} );