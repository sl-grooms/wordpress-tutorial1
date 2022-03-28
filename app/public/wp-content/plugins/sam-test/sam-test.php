<?php
/**
 * @package Sam-test
 */
/*
 Plugin Name: Sam Test
 Plugin URI: http://
 Description: This is my first attempt at creating a custom plugin
 Version: 1.0.0
 Author: Samantha Grooms
 Author URI: http://
 License: (open source license)
 Text Domain: sam-text
 */
//if ( ! defined( ' ABSPATH ') ) {
//    die;
//}

//This is denying me access to the site
//defined (' ABSPATH ') or die ('You cannot access this');

//if ( ! function_exists( 'add_action' ) ) {
//    echo 'You cannot access this file';
//    exit;
//}

//The code above is here for security

class samTest
{
    function __construct() {
        add_action ( 'init', array( $this, 'custom_post_type') ); //searches for this function inside this class. adds action on initialization
    }
    function register() {
        add_action( 'admin_enqueue_scripts', array( $this, 'enqueue') ); //triggers enqueue on admin end
    }
    function activate() {
        //generate a custom post type (CPT)
        $this->custom_post_type(); //find these methods only inside samTest class (method inside method)
        //flush rewrite rules
        flush_rewrite_rules(); //global procedural code
        }
    function deactivate() {
        //flush rewrite rules
        flush_rewrite_rules();
    }

    function custom_post_type() {
        register_post_type( 'book', ['public' => true, 'label' => 'Books']); // added books to dashboard
    }
    function enqueue() {
        //enqueue all scripts
        wp_enqueue_style( 'mypluginstyle', plugins_url( '/assets/mystyle.css', __FILE__ ) );
        wp_enqueue_script( 'myscript', plugins_url( '/assets/myscript.js', __FILE__ ) );
    }
}

if ( class_exists ( 'samTest') ) {
    $sam_test = new samTest();
    $sam_test->register();
}

// activation
register_activation_hook( __FILE__, array( $sam_test, 'activate') ); // only in this file. pass function name into array activate method inside sam_test
//deactivation

register_deactivation_hook( __FILE__, array( $sam_test, 'activate') ); // same thing as above but deactivates hook
//uninstall
register_uninstall_hook( __FILE__, array( $sam_test, 'uninstall') );



//function customFunction($arg) {
//    echo $arg;
//}
//
//customFunction('this is an argument to echo');

