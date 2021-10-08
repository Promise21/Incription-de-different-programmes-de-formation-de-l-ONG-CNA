<?php

class inscription_technique extends Controller
{
    function index()
    {
        $_SESSION['success'] = "";
        $data['page_title'] = "inscription technique";

        if (isset($_POST['submit'])) {

            $gratuite = $this->loadModel("User_technique");
            $gratuite->technique($_POST);
        }


        $this->view("template/inscription_technique", $data);
    }
}
