<?php

class Technique_releve extends Controller
{
    function index()
    {
        $_SESSION['success'] = "";
        $data['page_title'] = "Admin";

        $posts = $this->loadModel('Releve_technique');
        $result = $posts->get_all();

        $data['Releve'] = $result;


        $this->view("template/releve_technique", $data);
    }
}
