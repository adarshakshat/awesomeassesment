<?php


namespace Awesome_Assesment\Cpt;

    class AA_Awesome_Post_Type
    {

        public function __construct()
        {

        }

        public function register() :void
        {
            //use the lib provided in requirement to register custom post type
            register_extended_post_type( 'awesome' );
        }
    }
