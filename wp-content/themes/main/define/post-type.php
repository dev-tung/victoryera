<?php



add_theme_support('post-thumbnails');
function register_product_post_types()
{
    register_taxonomy('product_category', 
        array('product'), 
        array(
        'labels'            => array(
            'name'              => __('Category', 'moxxie'),
            'singular_name'     => __('Category', 'moxxie'),
            'search_items'      => __('Search categories', 'moxxie'),
            'all_items'         => __('All categories', 'moxxie'),
            'parent_item'       => __('Parent Category', 'moxxie'),
            'parent_item_colon' => __('Parent Category:', 'moxxie'),
            'edit_item'         => __('Edit Category', 'moxxie'), 
            'update_item'       => __('Update Category', 'moxxie'),
            'add_new_item'      => __('Add new Category', 'moxxie'),
            'new_item_name'     => __('New Category name', 'moxxie'),
            'menu_name'         => __('Categories', 'moxxie')
        ),
        'show_ui'           => true,
        'query_var'         => true,
        'show_in_rest'      => true,
        'hierarchical'      => true,
        'show_admin_column' => true,
        'rewrite'           => array('slug' => 'product'),

    ));

    register_post_type('product', 
        array(  
            'taxonomies'        => array('product_category'),
            'labels'            => array(
                                            'name'               => __( 'product', 'product' ),
                                            'singular_name'      => __( 'product', 'product' ),
                                            'add_new'            => _x( 'Add New product', 'product' ),
                                            'add_new_item'       => __( 'Add New product', 'product' ),
                                            'edit_item'          => __( 'Edit product', 'product' ),
                                            'new_item'           => __( 'New product', 'product' ),
                                            'view_item'          => __( 'View product', 'product' ),
                                            'search_items'       => __( 'Search product', 'product' ),
                                            'not_found'          => __( 'Not found product', 'product' ),
                                            'not_found_in_trash' => __( 'Not found product', 'product' ),
                                            'parent_item_colon'  => __( '', 'product' ),
                                            'menu_name'          => __( 'product', 'product' )
                                        ),
            'has_archive'      => true,
            'show_in_rest'     => true,
            'hierarchical'     => true,
            'public'           => true,
            'menu_icon'        => 'dashicons-admin-post',
            'capability_type'  => 'post',
            'rewrite'          => array('slug' => 'product'),
            'supports'         => array(
                                    'title',
                                    'editor',
                                    'author',
                                    'thumbnail',
                                    'excerpt',
                                    'custom-fields',
                                    'trackbacks',
                                    'comments',
                                    'revisions',
                                    'page-attributes',
                                    'post-formats',
                                )
        ));
}
add_action('init', 'register_product_post_types', 1); 
?>