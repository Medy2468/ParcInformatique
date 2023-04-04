<?php
    function getConnexion(){
        $host='127.0.0.1';
        $user='root';
        $password='';
        $dbname='parcinformatique';

        $connexion = mysqli_connect($host, $user, $password, $dbname);
        return $connexion;
    }

    function executeSQL($sql){
        $execution = mysqli_query(getConnexion(), $sql);
        return $execution;// 0 ou 1 INSERT UPDATE DELETE
                        // Collection d'objets SELECT 

    }
?>