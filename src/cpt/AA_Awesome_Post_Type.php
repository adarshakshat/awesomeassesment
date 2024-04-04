<?php


namespace Awesome_Assesment\cpt;

    class AA_Awesome_Post_Type
    {

        public function __construct()
        {

        }

        public function register()
        {
            $args = array(
                'labels' => array(
                    'name'               => _x( 'Awesomes', 'post type general name', 'awesome-assesment' ),
                    'singular_name'      => _x( 'Awesome', 'post type singular name', 'awesome-assesment' ),
                    'menu_name'          => _x( 'Awesomes', 'admin menu', 'awesome-assesment' ),
                    'name_admin_bar'     => _x( 'Awesome', 'add new on admin bar', 'awesome-assesment' ),
                    'add_new'            => _x( 'Add New', 'awesome', 'awesome-assesment' ),
                    'add_new_item'       => __( 'Add New Awesome', 'awesome-assesment' ),
                    'new_item'           => __( 'New Awesome', 'awesome-assesment' ),
                    'edit_item'          => __( 'Edit Awesome', 'awesome-assesment' ),
                    'view_item'          => __( 'View Awesome', 'awesome-assesment' ),
                    'all_items'          => __( 'All Awesomes', 'awesome-assesment' ),
                    'search_items'       => __( 'Search Awesomes', 'awesome-assesment' ),
                    'not_found'          => __( 'No awesomes found.', 'awesome-assesment' ),
                    'not_found_in_trash' => __( 'No awesomes found in Trash.', 'awesome-assesment' )
                ),
                'public' => true,
                'description' => __( 'Description of Awesome custom post type', 'awesome-assesment' ),
                // Features the post type supports
                'supports' => array( 'title', 'editor', 'author', 'thumbnail' ),
            );
            register_post_type('awesome', $args);
        }
    }
