<?php

class User
{




    function bureautique($POST)
    {


        $DB = new Database();

        $_SESSION['error'] = "";
        $_SESSION['success'] = "";

        if (isset($POST['submit'])) {

            if (isset($POST['sex']) && isset($POST['connaissances'])) {

                $conn = $POST['connaissance'];
                $conn_r = @implode(",", $conn);
                $arr['partie_conn'] = $conn_r;

                $arr['nom'] = $POST['nom'];
                $arr['email'] = $POST['email'];
                $arr['sex'] = $POST['sex'];
                $arr['age'] = $POST['age'];
                $arr['tel'] = $POST['tel'];
                $arr['profession'] = $POST['profession'];
                $arr['connaissances'] = $POST['connaissances'];
                $arr['module'] = $POST['module'];
                $arr['formation_et_cout'] = $POST['formation_et_cout'];
                $arr['date_demarrage'] = $POST['date_demarrage'];
                $arr['date_inscription'] = date("Y-m-d H:i:s");

                $query = "insert into inscription_bureautique(nom,email,sex,age,tel,profession,connaissances,partie_conn,module,formation_et_cout,date_demarrage,date_inscription) VALUES(:nom,:email,:sex,:age,:tel,:profession,:connaissances,:partie_conn,:module,:formation_et_cout,:date_demarrage,:date_inscription) ";
                $data = $DB->write($query, $arr);

                if ($data) {
                    $_SESSION['success'] = "votre inscription a été bien reçue";
                } else {
                    $_SESSION['error'] = "Veuillez recommencer s'il vous plait!";
                }
            } else {
                $_SESSION['error'] = "Veuillez remplir tout les champs s'il vous plait !";
            }
        } else {
            $_SESSION['error'] = "access denied!";
        }
    }






    function gratuite($POST)
    {


        $DB = new Database();

        $_SESSION['error'] = "";
        $_SESSION['success'] = "";
        if (isset($POST['submit'])) {


            if (isset($POST['sex'])) {

                $arr['sex'] = $POST['sex'];
                $arr['nom'] = $POST['nom'];
                $arr['email'] = $POST['email'];
                $arr['age'] = $POST['age'];
                $arr['tel'] = $POST['tel'];
                $arr['profession'] = $POST['profession'];
                $arr['formation'] = $POST['formation'];
                $arr['date_demarrage'] = $POST['date_demarrage'];
                $arr['date_inscription'] = date("Y-m-d H:i:s");

                $query = "insert into inscription_gratuite(nom,email,sex,age,tel,profession,formation,date_demarrage,date_inscription) VALUES(:nom,:email,:sex,:age,:tel,:profession,:formation,:date_demarrage,:date_inscription)";
                $data = $DB->write($query, $arr);
                if ($data) {
                    $_SESSION['success'] = " Votre inscription a été valider ";
                } else {
                    $_SESSION['error'] = "Veuillez remplir tout les champs s'il vous plait !";
                }
            } else {
                $_SESSION['error'] = "Veuillez remplir tout les champs s'il vous plait !";
            }
        } else {
            $_SESSION['error'] = "Erreur veuillez recommencer s'il vous plait !";
        }
    }
}
