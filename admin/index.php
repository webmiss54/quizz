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
 
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../scripts/materialize/js/materialize.min.js"></script>
</head>
<body>

	<p><?php echo 'Bienvenue ', htmlspecialchars($user['login'], ENT_NOQUOTES); ?>

	<form action="deconnexion.php" method="post">
    	<input type="submit" value="Déconnexion" />
    </form>

</body>
</html>