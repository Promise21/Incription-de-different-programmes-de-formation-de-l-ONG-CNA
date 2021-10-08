<?php

class Gratuite_releve extends Controller
{
    function index()
    {
        $_SESSION['success'] = "";
        $data['page_title'] = "Admin";

        $posts = $this->loadModel('Releve_gratuite');
        $result = $posts->get_all();

        $data['Releve'] = $result;


        $this->view("template/releve_gratuite", $data);
    }
}
