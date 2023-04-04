<?php
    require_once '../model/DB.php';
    require_once '../model/ServeurDao.php';
   /*  function versListe(){
        $base_url = "http://localhost/Mes_Projets_L3/ParcInformatique/";
        header("location:$base_url?page=listeserveur");
    } */
    // Pour l'ajout
    if(isset($_POST['ajoutserveur'])){
        $nomserveur = $_POST['nom'];
        $adripserveur = $_POST['adrip'];
        //echo $nomserveur;
        addServeur($nomserveur, $adripserveur);
        //$base_url = versListe();
        $base_url = "http://localhost/Mes_Projets_L3/ParcInformatique/";
        header("location:$base_url?page=listeserveur");
        
    }
    // Pour la suppression
    if(isset($_GET['id'])){
        deleteServeur($_GET['id']);
        $base_url = "http://localhost/Mes_Projets_L3/ParcInformatique/";
        header("location:$base_url?page=listeserveur");
    }
    
    // pour la modification
    if(isset($_POST['modifierserveur'])){
        //pour la recuperation des données du formulaire
        $id = $_POST['id'];
        $nom = $_POST['nom'];
        $adrip = $_POST['adrip'];
        //Pour la mise à jour
        updateServeur($id, $nom, $adrip);
        // retour vers la liste
        $base_url = "http://localhost/Mes_Projets_L3/ParcInformatique/";
        header("location:$base_url?page=listeserveur");
    }

?>