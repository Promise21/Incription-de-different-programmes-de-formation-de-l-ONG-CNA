<?php
function auth_check()
{

    if (!isset($_SESSION['username'])) {
        header("Location:Admin_login");
    }
}
