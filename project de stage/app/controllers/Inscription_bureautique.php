<?php

class inscription_bureautique extends Controller
{
    function index()
    {
        $_SESSION['success'] = "";
        $_SESSION['conn'] = "";
        $data['page_title'] = "inscription bureautique";


        if (isset($_POST['submit'])) {
            $user = $this->loadModel("User_bureautique");
            $user->bureautique($_POST);
        }

        $this->view("template/inscription_bureautique", $data);
    }
}
