<?php
class User_technique
{
    function technique($POST)
    {
        $DB = new Database();

        $_SESSION['error'] = "";
        $_SESSION['success'] = "";
        $query = "select id from type_de_formation where formation = 'technique' limit 1";
        $id_result = $DB->read($query);
        if ($id_result) {
            foreach ($id_result as $a) {
                foreach ($a as $key) {
                    $arr['formation_id'] = $key;
                }
            }

            if (isset($POST['submit'])) {
                if (isset($POST['sex'])) {


                    $arr['nom'] = $POST['nom'];
                    $arr['email'] = $POST['email'];
                    $arr['sex'] = $POST['sex'];
                    $arr['age'] = $POST['age'];
                    $arr['tel'] = $POST['tel'];
                    $arr['profession'] = $POST['profession'];
                    $arr['module'] = $POST['module'];
                    $arr['tariffe'] = $POST['tarif_et_lieux'];

                    $arr['date_demarrage'] = $POST['date_demarrage'];
                    $arr['date_inscription'] = date("Y-m-d H:i:s");




                    $query1 = "insert into utilisateur(nom,email,sex,age,tel,profession,module,tariffe,date_demarrage,date_inscription,formation_id) 
                        VALUES(:nom,:email,:sex,:age,:tel,:profession,:module,:tariffe,:date_demarrage,:date_inscription,:formation_id) ";
                    $result = $DB->write($query1, $arr);
                    if ($result) {

                        $_SESSION['success'] = "votre inscription a été bien reçue";
                    } else {
                        $_SESSION['error'] = "Failed to insert into the database!!";
                    }
                } else {
                    echo "Ooops error";
                }
            } else {
                $_SESSION['error'] = "Erreur veuillez recommencer s'il vous plait !";
            }
        } else {
            $_SESSION['error'] = "access denied!";
        }
    }
}
