<?php

class Releve_gratuite
{
    function get_all()
    {

        $query = " SELECT *
            FROM type_de_formation
            INNER JOIN utilisateur
            ON type_de_formation.id = utilisateur.formation_id
            where type_de_formation.formation ='gratuite'
            ";

        $DB = new Database();
        $data = $DB->read($query);
        if (is_array($data)) {
            //show($data) ;
            return $data;
        }
        return false;
    }
}
