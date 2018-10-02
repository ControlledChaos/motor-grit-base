<?php
/**
 * Register taxonomies.
 *
 * @package    Controlled_Chaos_Plugin
 * @subpackage Includes\Post_Types_Taxes
 *
 * @since      1.0.0
 * @author     Motor & Grit <dev@motorandgrit.com>
 *
 * @link       https://codex.wordpress.org/Function_Reference/register_taxonomy
 */

namespace CC_Plugin\Includes\Post_Types_Taxes;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Register taxonomies.
 *
 * @since  1.0.0
 * @access public
 */
final class Taxonomies_Register {

    /**
	 * Constructor magic method.
     *
     * @since  1.0.0
	 * @access public
	 * @return self
	 */
	public function __construct() {

        // Register custom taxonomies.
		add_action( 'init', [ $this, 'register' ] );

	}

    /**
     * Register custom taxonomies.
     *
     * @since  1.0.0
	 * @access public
	 * @return void
     */
    public function register() {

        /**
         * Taxonomy: Sample taxonomy (Taxonomy).
         *
         * Renaming:
         * Search case "Taxonomy" and replace with your post type singular name.
         * Search case "Taxonomies" and replace with your post type plural name.
         * Search case "mg_taxonomy" and replace with your taxonomy database name.
         * Search case "taxonomies" and replace with your taxonomy permalink slug.
         */

        $labels = [
            'name'                       => __( 'Taxonomies', 'motor-grit' ),
            'singular_name'              => __( 'Taxonomy', 'motor-grit' ),
            'menu_name'                  => __( 'Taxonomy', 'motor-grit' ),
            'all_items'                  => __( 'All Taxonomies', 'motor-grit' ),
            'edit_item'                  => __( 'Edit Taxonomy', 'motor-grit' ),
            'view_item'                  => __( 'View Taxonomy', 'motor-grit' ),
            'update_item'                => __( 'Update Taxonomy', 'motor-grit' ),
            'add_new_item'               => __( 'Add New Taxonomy', 'motor-grit' ),
            'new_item_name'              => __( 'New Taxonomy', 'motor-grit' ),
            'parent_item'                => __( 'Parent Taxonomy', 'motor-grit' ),
            'parent_item_colon'          => __( 'Parent Taxonomy', 'motor-grit' ),
            'popular_items'              => __( 'Popular Taxonomies', 'motor-grit' ),
            'separate_items_with_commas' => __( 'Separate Taxonomies with commas', 'motor-grit' ),
            'add_or_remove_items'        => __( 'Add or Remove Taxonomies', 'motor-grit' ),
            'choose_from_most_used'      => __( 'Choose from the most used Taxonomies', 'motor-grit' ),
            'not_found'                  => __( 'No Taxonomies Found', 'motor-grit' ),
            'no_terms'                   => __( 'No Taxonomies', 'motor-grit' ),
            'items_list_navigation'      => __( 'Taxonomies List Navigation', 'motor-grit' ),
            'items_list'                 => __( 'Taxonomies List', 'motor-grit' )
        ];

        $args = [
            'label'              => __( 'Taxonomies', 'motor-grit' ),
            'labels'             => $labels,
            'public'             => true,
            'hierarchical'       => false,
            'label'              => 'Taxonomies',
            'show_ui'            => true,
            'show_in_menu'       => true,
            'show_in_nav_menus'  => true,
            'query_var'          => true,
            'rewrite'            => [
                'slug'         => 'taxonomies',
                'with_front'   => true,
                'hierarchical' => false,
            ],
            'show_admin_column'  => true,
            'show_in_rest'       => true,
            'rest_base'          => 'taxonomies',
            'show_in_quick_edit' => true
        ];

        register_taxonomy(
            'mg_taxonomy',
            [
                'mg_post_type'
            ],
            $args
        );

    }

}

// Run the class.
new Taxonomies_Register;