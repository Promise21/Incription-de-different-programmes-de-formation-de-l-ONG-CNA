<?php

class subreleve_controller extends Controller
{
    function index()
    {
        $_SESSION['success'] = "";
        $data['page_title'] = "Admin";

        // // $posts = $this->loadModel('Releve');
        // // $result = $posts->get_all();

        // $data['Releve'] = $result;


        $this->view("template/sub_releve", $data);
    }
}
