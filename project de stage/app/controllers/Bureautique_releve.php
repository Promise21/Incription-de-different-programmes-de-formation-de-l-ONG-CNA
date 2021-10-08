<?php

class Bureautique_releve extends Controller
{
    function index()
    {
        $_SESSION['success'] = "";
        $data['page_title'] = "Admin";

        $posts = $this->loadModel('Releve_bureautique');
        $result = $posts->get_all();

        $data['Releve'] = $result;


        $this->view("template/releve_bureautique", $data);
    }
}
