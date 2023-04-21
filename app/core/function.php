<?php



function show($stuff)
{
    echo '<pre>';
    print_r($stuff);
    echo '</pre>';
}

function error_message()
{

    if (isset($_SESSION['error']) && $_SESSION['error'] != "") {
        echo $_SESSION['error'];
        unset($_SESSION['error']);
    }
}
function success_message()
{


    if (isset($_SESSION['success']) && $_SESSION['success'] != "") {
        echo $_SESSION['success'] ;
        unset($_SESSION['success']);
    }
}
