<?php
    function addServeur($nomserv, $adripserv){
        //$sql = "INSERT INTO serveur VALUES(NULL, 'IAM1', '192.168.125.120')";
        $sql = "INSERT INTO serveur VALUES(NULL, '$nomserv', '$adripserv')";

        return executeSQL($sql); 
    }

    function deleteServeur($idserv){
        $sql = "DELETE FROM serveur WHERE idserv = $idserv";
        return executeSQL($sql);
    }

    function updateServeur($idserv, $nomserv, $adripserv){
        $sql = "UPDATE serveur SET nomserv = '$nomserv', adripserv = '$adripserv' WHERE idserv = $idserv";
        return executeSQL($sql);
    }

    function listeServeur(){
        $sql = "SELECT * FROM serveur";
        return executeSQL($sql);
    }

    function listeServeurConfigure(){
        $sql = "SELECT serv.idserv , serv.nomserv, serv.adripserv FROM serveur serv, service s WHERE serv.idserv = s.idserv";
        return executeSQL($sql);
    } 

    function getServeurById($idserv){
        $sql = "SELECT * FROM serveur WHERE idserv = $idserv ";
        return executeSQL($sql);
    }

    function Rechercher($motcle){
        $sql = "SELECT * FROM serveur WHERE nomserv LIKE '%$motcle%'";
        return executeSQL($sql);
    }
?>