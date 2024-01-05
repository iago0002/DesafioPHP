<?php

function email_is_valid($email)
{
    if( !empty($email) )
    {
        $users = json_decode(file_get_contents(DATA_LOCATION));
        foreach( $users as $key => $value )
        {
            if( strcmp(strtolower($email), strtolower($value->email)) != 0 )
                return false;
        }

        return true;
    }
    else{
        return false;
    }
}


function password_is_valid( $password, $password_confirm )
{
    if( !empty($password) )
    {
        if( (strlen($password) > 10) && (empty(strcmp($password, $password_confirm))) )
            return true;
    }
    
    return false;
}