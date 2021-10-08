<?php

class Admin_login extends Controller
{
   
    

    function index()
    {
        $_SESSION['success'] = "";
        $_SESSION['error'] = "";
        $data['page_title'] ="Admin_login";

        
            $user = $this->loadModel("User_admin");
            $user-> login($_POST);
        


        $this->view("template/admin_login",$data);
    }




}