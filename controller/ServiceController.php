<?php
    require_once '../model/DB.php';
    require_once '../model/ServiceDao.php';

    // Pour l'ajout
    if(isset($_POST['ajoutservice'])){
        extract($_POST);
        addService($noms, $ports, $etats, $idserv);
        //$base_url = versListe();
        $base_url = "http://localhost/Mes_Projets_L3/ParcInformatique/";
        header("location:$base_url?page=listeservice");
        
    }
    // Pour la suppression
    if(isset($_GET['id'])){
        deleteService($_GET['id']);
        $base_url = "http://localhost/Mes_Projets_L3/ParcInformatique/";
        header("location:$base_url?page=listeservice");
    }
    
    // pour la modification
        if(isset($_POST['modifierservice'])){
        //pour la recuperation des données du formulaire
        $id = $_POST['ids'];
        $noms = $_POST['noms'];
        $ports = $_POST['ports'];
        //Pour la mise à jour
        updateService($ids, $noms, $ports);
        // retour vers la liste
        $base_url = "http://localhost/Mes_Projets_L3/ParcInformatique/";
        header("location:$base_url?page=listeservice");
    }  
    

?>