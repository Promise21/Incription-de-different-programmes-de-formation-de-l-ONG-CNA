<?php

class inscription_gratuite extends Controller
{
    function index()
    {
        $data['page_title'] = "inscription gratuite";

        if (isset($_POST['submit'])) {

            $gratuite = $this->loadModel("User_gratuite");
            $gratuite->gratuite($_POST);
        }

        $this->view("template/inscription_gratuite", $data);
    }
}
