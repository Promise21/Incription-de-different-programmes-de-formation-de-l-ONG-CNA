<?php

class Home extends Controller
{



    function index()
    {
        $_SESSION['success'] = "";
        $data['page_title'] = "Accueil";

        $this->view("template/home", $data);
    }
}
