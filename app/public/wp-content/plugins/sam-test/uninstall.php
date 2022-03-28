<?php

/**
 * Trigger this file on uninstall plugin
 *
 * @package SamTest
 */

if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
    die;
} // if not triggered by wordpress, stop

// Clear Database stored data

// delete everything related to specific custom post type
//
$books = get_posts( array( 'post_type' => 'book', 'numberposts' => -1 ) );

foreach( $books as $book ) {
    wp_delete_post( $book->ID, false); //if in trash, don't delete. If true, trash regardless of status
}
//global $wpdb; //access database via SQL
//$wpdb->query( "DELETE FROM wp_posts WHERE post_type = 'book' " ); //deletes via sql query more disruptive but faster
//$wpdb->query( "DELETE FROM wp_postmeta WHERE post_id NOT IN (SELECT id FROM wp_posts)" ); //if post id doesnt match wp_posts or wp_postmeta, delete
//$wpdb->query( "DELETE FROM wp_term_relationships WHERE object_id NOT IN (SELECT id FROM wp_posts)" ); //another way of the above

