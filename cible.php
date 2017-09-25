<?php
// ------Récupération des données------
$coordonnees=array('Nom' => $_POST['nom'],'Prénom' => $_POST['prenom'], 'Email' => $_POST['mail'],'Formation candidatée' => $_POST['formation']);
$quiz_1_culture_generale=array('Réponse 1' => $_POST['quiz1_q1'], 'Réponse 2' => $_POST['quiz1_q2'], 'Réponse 3' => $_POST['quiz1_q3'], 'Réponse 4' => $_POST['quiz1_q4'], 'Réponse 5' => $_POST['quiz1_q5'], 'Réponse 6' => $_POST['quiz1_q6'], 'Réponse 7' => $_POST['quiz1_q7'], 'Réponse 8' => $_POST['quiz1_q8'], 'Réponse 9' => $_POST['quiz1_q9'], 'Réponse 10' => $_POST['quiz1_q10'], 'Réponse 11' => $_POST['quiz1_q11'], 'Réponse 12' => $_POST['quiz1_q12'], 'Réponse 13' => $_POST['quiz1_q13'], 'Réponse 14' => $_POST['quiz1_q14'], 'Réponse 15' => $_POST['quiz1_q15'], 'Réponse 16' => $_POST['quiz1_q16'], 'Réponse 17' => $_POST['quiz1_q17'], 'Réponse 18' => $_POST['quiz1_q18'], 'Réponse 19' => $_POST['quiz1_q19'], );

		echo "<pre>";
		print_r($coordonnees);
		echo "</pre>";
		echo "<pre>";
		print_r($quiz_1_culture_generale);
		echo "</pre>";
// ------Récupération des données------



// ------Envoi des données vers la BDD avec PDO------
$serveur ='localhost';
$login = 'eleve';
$mdp = '';
$nom_bdd = 'quiz_ifa';

try
{
    $bdd = new PDO('mysql:host='.$serveur.';dbname='.$nom_bdd.'', $login, $mdp);
 
}
catch (Exception $e)
{
    exit('Erreur : ' . $e->getMessage());
}
$req = $bdd->prepare('INSERT INTO user(id_user, nom, prenom, mail, formation, id_role) 
	VALUES(:id_user, :nom, :prenom, :mail, :formation, :id_role)')
or exit(print_r($bdd->errorInfo()));

$req->execute(array(
':id_user' => '',
':nom' => $_POST['nom'],
':prenom' => $_POST['prenom'],
':mail' => $_POST['mail'],
':formation' => $_POST['formation'],
':id_role' => 1
));

echo 'Nom, prénom, mail et formation enregistrés !';
// ------Envoi des données vers la BDD avec PDO------
?>