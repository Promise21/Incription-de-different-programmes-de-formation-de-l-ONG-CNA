<?php
class User_bureautique
{
    function bureautique($POST)
    {
        $DB = new Database();

        $_SESSION['error'] = "";
        $_SESSION['success'] = "";

        $query = "select id from type_de_formation where formation = 'bureautique' limit 1";
        $id_result = $DB->read($query);
        if ($id_result) {
            foreach ($id_result as $a) {
                foreach ($a as $key) {
                    $arr['formation_id'] = $key;
                }
            }
            if (isset($POST['submit'])) {
                //$arr sont de variable qui rontre dans le tableau utilisateur
                $arr['nom'] = $POST['nom'];
                $arr['email'] = $POST['email'];
                $arr['sex'] = $POST['sex'];
                $arr['age'] = $POST['age'];
                $arr['tel'] = $POST['tel'];
                $arr['profession'] = $POST['profession'];

                $conn = $POST['connaissance'];
                $conn_r = @implode(",", $conn);

                $arr['partie_connaissance'] = $conn_r;
                $arr['connaissance'] = $POST['connaissances'];

                $arr['module'] = $POST['module'];
                $arr['tariffe'] = $POST['tariffe'];
                //$acc sont de variable qui rontre dans le tableau module
                $arr['date_demarrage'] = $POST['date_demarrage'];
                $arr['date_inscription'] = date("Y-m-d H:i:s");




                $query1 = "insert into utilisateur(nom,email,sex,age,tel,profession,connaissance,partie_connaissance,module,tariffe,date_demarrage,date_inscription,formation_id) 
                VALUES(:nom,:email,:sex,:age,:tel,:profession,:connaissance,:partie_connaissance,:module,:tariffe,:date_demarrage,:date_inscription,:formation_id) ";
                $result = $DB->write($query1, $arr);
                if ($result) {

                    $_SESSION['success'] = "votre inscription a été bien reçue";
                } else {
                    $_SESSION['error'] = "Veuillez recommencer s'il vous plait!";
                }
            } else {
                echo "Ooops error";
            }
        }
    }
}
