<?php

function crud_create( $user )
{
    if( !empty($user) && $_GET['page'] == 'register' )
    {
        $users      = json_decode( file_get_contents(DATA_LOCATION) );
        $users[]    = $user;
        $resp       = file_put_contents( DATA_LOCATION, json_encode($users) );

        if( empty($resp) )
            return false;

        return TRUE;
    }
    
    return false;
}