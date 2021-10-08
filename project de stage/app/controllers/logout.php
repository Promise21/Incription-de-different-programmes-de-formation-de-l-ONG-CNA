<?php

class Logout extends Controller
{
    function index()
    {

        $user = $this->loadModel("User_admin");
        $user->logout();
    }
}
