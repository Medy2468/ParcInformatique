<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
	<title>Editer</title>
    <!-- <link rel="stylesheet" type="text/css" href=".(racine)/style/font-awesome.min.css"> -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    
    <div class="container col-md-6 col-lg-6 col-sm-6 col-xs-6 col-md-offset-3 col-xs-offset-3">
		<div class="panel panel-primary">
			<div class="panel-heading">Formulaire de modification des serveurs</div>
			<div class="panel-body">
                <form method="POST" action="controller/ServeurController.php">
                    <div class="form-group">
                        <label class="control-label">Nom du service</label>
                        <input class="form-control" type="text" name="nom" value="<?php echo $ligne[1]; ?>"/>
                        <input class="form-control" type="hidden" name="id" value="<?php echo $ligne[0]; ?>"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Adresse ip du service</label>
                        <input class="form-control" type="text" name="adrip" value="<?php echo $ligne[2]; ?>"/>
                    </div>
                    <div>
                        <input class="btn btn-success"  type="submit" value="Modifier" name="modifierservice"/>
                        <input class="btn btn-danger"  type="reset" value="Annuler" name="annuler"/>
                    </div>
                </form>
            </div>
		</div>
	</div> 
</body>
</html>