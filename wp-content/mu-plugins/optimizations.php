<?php

// Optimize the heartbeat function to reduce load.
add_filter( 'heartbeat_send', 'my_heartbeat_settings' );
    function my_heartbeat_settings( $response ) {
            if ( $_POST['interval'] != 60 ) {
                    $response['heartbeat_interval'] = 60;
            }
            return $response;
    }