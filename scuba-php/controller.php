<?php

function do_register()
{
    if( isset($_POST['person']) && !empty($_POST['person']) )
    {
        $resp = crud_create( $_POST['person'] );

        if( !empty($resp) )
            header("Location: /?page=login");
        else
            echo render_view('register');
    }
    else
    {    
        echo render_view('register');
    }
}

function do_login()
{
    echo render_view('login');
}

function do_not_found()
{
    echo render_view('not_found');
}
