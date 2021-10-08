<?php
class User_admin
{
    function login($POST)
    {
        $DB = new Database();

        $_SESSION['success'] = "";
        $_SESSION['error'] = "";
        if (isset($POST['submit'])) {
            $arr['user'] = $POST['username'];
            $arr['mot_de_passe'] = $POST['pwd'];

            $query = "select * from admin where user = :user && mot_de_passe = :mot_de_passe limit 1";
            $data = $DB->read($query, $arr);
            if (is_array($data)) {
                //logged in
                $_SESSION['username'] = $data[0]->user;
                header("Location:Releve_controller");
                die;
            } else {
                $_SESSION['error'] = "Wrong Username or Password !!";
            }
        }
    }



    function logout()
    {
        //logged in
        unset($_SESSION['username']);

        header("Location:Admin_login");
        die;
    }
}
