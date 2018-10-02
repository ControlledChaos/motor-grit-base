<?php
/**
 * Register post types.
 *
 * @package    Controlled_Chaos_Plugin
 * @subpackage Includes\Post_Types_Taxes
 *
 * @since      1.0.0
 * @author     Motor & Grit <dev@motorandgrit.com>
 *
 * @link       https://codex.wordpress.org/Function_Reference/register_post_type
 */

namespace CC_Plugin\Includes\Post_Types_Taxes;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Register post types.
 *
 * @since  1.0.0
 * @access public
 */
final class Post_Types_Register {

    /**
	 * Constructor magic method.
     *
     * @since  1.0.0
	 * @access public
	 * @return self
	 */
	public function __construct() {

        // Register custom post types.
		add_action( 'init', [ $this, 'register' ] );

	}

    /**
     * Register custom post types.
     *
     * @since  1.0.0
	 * @access public
	 * @return void
     */
    public function register() {

        /**
         * Post Type: Sample custom post (Custom Posts).
         *
         * Renaming:
         * Search case "Custom Post" and replace with your post type capitalized name.
         * Search case "custom post" and replace with your post type lowercase name.
         * Search case "mg_post_type" and replace with your post type database name.
         * Search case "custom-posts" and replace with your post type archive permalink slug.
         */

        $labels = [
            'name'                  => __( 'Custom Posts', 'motor-grit' ),
            'singular_name'         => __( 'Custom Post', 'motor-grit' ),
            'menu_name'             => __( 'Custom Posts', 'motor-grit' ),
            'all_items'             => __( 'All Custom Posts', 'motor-grit' ),
            'add_new'               => __( 'Add New', 'motor-grit' ),
            'add_new_item'          => __( 'Add New Custom Post', 'motor-grit' ),
            'edit_item'             => __( 'Edit Custom Post', 'motor-grit' ),
            'new_item'              => __( 'New Custom Post', 'motor-grit' ),
            'view_item'             => __( 'View Custom Post', 'motor-grit' ),
            'view_items'            => __( 'View Custom Posts', 'motor-grit' ),
            'search_items'          => __( 'Search Custom Posts', 'motor-grit' ),
            'not_found'             => __( 'No Custom Posts Found', 'motor-grit' ),
            'not_found_in_trash'    => __( 'No Custom Posts Found in Trash', 'motor-grit' ),
            'parent_item_colon'     => __( 'Parent Custom Post', 'motor-grit' ),
            'featured_image'        => __( 'Featured image for this custom post', 'motor-grit' ),
            'set_featured_image'    => __( 'Set featured image for this custom post', 'motor-grit' ),
            'remove_featured_image' => __( 'Remove featured image for this custom post', 'motor-grit' ),
            'use_featured_image'    => __( 'Use as featured image for this custom post', 'motor-grit' ),
            'archives'              => __( 'Custom Post archives', 'motor-grit' ),
            'insert_into_item'      => __( 'Insert into Custom Post', 'motor-grit' ),
            'uploaded_to_this_item' => __( 'Uploaded to this Custom Post', 'motor-grit' ),
            'filter_items_list'     => __( 'Filter Custom Posts', 'motor-grit' ),
            'items_list_navigation' => __( 'Custom Posts list navigation', 'motor-grit' ),
            'items_list'            => __( 'Custom Posts List', 'motor-grit' ),
            'attributes'            => __( 'Custom Post Attributes', 'motor-grit' ),
            'parent_item_colon'     => __( 'Parent Custom Post', 'motor-grit' ),
        ];

        // Apply a filter to labels for customization.
        $labels = apply_filters( 'mg_custom_posts_labels', $labels );

        $args = [
            'label'               => __( 'Custom Posts', 'motor-grit' ),
            'labels'              => $labels,
            'description'         => __( 'Custom post type description.', 'motor-grit' ),
            'public'              => true,
            'publicly_queryable'  => true,
            'show_ui'             => true,
            'show_in_rest'        => false,
            'rest_base'           => 'mg_post_type_rest_api',
            'has_archive'         => true,
            'show_in_menu'        => true,
            'exclude_from_search' => false,
            'capability_type'     => 'post',
            'map_meta_cap'        => true,
            'hierarchical'        => false,
            'rewrite'             => [
                'slug'       => 'custom-posts',
                'with_front' => true
            ],
            'query_var'           => 'mg_post_type',
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-admin-post',
            'supports'            => [
                'title',
                'editor',
                'thumbnail',
                'excerpt',
                'trackbacks',
                'custom-fields',
                'comments',
                'revisions',
                'author',
                'page-attributes',
                'post-formats'
            ],
            'taxonomies'          => [
                'category',
                'post_tag',
                'mg_taxonomy' // Change to your custom taxonomy name.
            ],
        ];

        // Apply a filter to arguments for customization.
        $args = apply_filters( 'mg_custom_posts_args', $args );

        register_post_type(
            'mg_post_type',
            $args
        );

    }

}

// Run the class.
new Post_Types_Register;