<?php
session_start();
if (!isset($_SESSION['id'])) {
    header('Location: connexion.php');
    exit;
} else {
    require('shared.php');

    $stmt = $bdd->prepare('SELECT * FROM utilisateurs WHERE id = :id');
    $stmt->bindParam('id', $_SESSION['id'], PDO::PARAM_INT);
    $stmt->execute();
    $user = $stmt->fetch();
}


?>


<!DOCTYPE html>
<html>
<head>
	<title>Page d'accueil admin</title>
	           <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../scripts/materialize/css/materialize.min.css">
    <script type="text/javascript" src="../scripts/js/script.js"></script>
    <link rel="stylesheet" href="../scripts/css/style.css">
    <title>IFA - Accueil Quiz</title>
 
    
</head>
<body>
  <!-- container -->
    <div class="container">
	<p><?php echo 'Bienvenue ', htmlspecialchars($user['login'], ENT_NOQUOTES); ?>

	<form action="deconnexion.php" method="post"><input type="submit" value="Déconnexion" />
    </form>

    </div>

<div class="table-responsive">

<br />
<table class="table table-hover table-bordered">

<br />
<thead>
        <thead>
          <tr><? while($row = $req->fetch()) { ?>
              <th>Nom Eleve</th> 
              <th>Prenom Eleve</th>
              <th>MAIL</th>
              <th>Formation</th>
              <th>Résultat Quiz</th>
              <th>Résultat Quiz 2</th>
              <th>Résultat Total</th>
              <th>Admis</th>


          </tr>
        </thead>

       <tbody>
  
          <tr>
            <td><? echo $row['nom']; ?></td>
            <td><? echo $row['prenom']; ?></td>
            <td><? echo $row['mail']; ?></td>
            <td><? echo $row['nom_formation']; ?></td>
            <td><? echo $row['resultat']; ?></td>
            <td><? echo $row['prenom']; ?></td>
            <td><? echo $row['prenom']; ?></td>
            <td><? echo $row['prenom']; ?></td>
          </tr>
        
        </tbody> 
      </table>

  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../scripts/materialize/js/materialize.min.js"></script>   
</body>
</html>