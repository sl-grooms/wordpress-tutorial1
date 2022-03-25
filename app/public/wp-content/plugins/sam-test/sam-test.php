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

defined (' ABSPATH ') or die ('You cannot access this');

//if ( ! function_exists( 'add_action' ) ) {
//    echo 'You cannot access this file';
//    exit;
//}

//The code above is here for security

class samTest
{
    function __construct($string)
    {
        echo $string;
    }
}

//if ( class_exists ( 'samTest') ) {
//    $sam_test = new samTest('sam test is working');
//}
//
//function customFunction($arg) {
//    echo $arg;
//}

//customFunction('this is an argument to echo');

