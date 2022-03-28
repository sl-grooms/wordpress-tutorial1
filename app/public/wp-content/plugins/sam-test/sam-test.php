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
    function activate() {
        //generate a custom post type (CPT)
        //flush rewrite rules
        }
    function deactivate() {
        //flush rewrite rules
        }
    function uninstall() {
        //delete CPT
        //delete all the plugin data from the DB
    }
}

if ( class_exists ( 'samTest') ) {
    $sam_test = new samTest();
}

// activation
register_activation_hook( __FILE__, array( $sam_test, 'activate') ); // only in this file. pass function name into array activate method inside sam_test
//deactivation

register_deactivation_hook( __FILE__, array( $sam_test, 'activate') ); // same thing as above but deactivates hook
//uninstall


//function customFunction($arg) {
//    echo $arg;
//}
//
//customFunction('this is an argument to echo');

