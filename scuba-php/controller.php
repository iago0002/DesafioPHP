<?php

function do_register()
{
    echo render_view('register');
}

function do_login()
{
    echo render_view('login');
}

function do_not_found()
{
    echo render_view('not_found');
}
