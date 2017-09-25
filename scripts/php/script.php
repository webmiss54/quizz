<?php
// Connexion à la BDD et affichage de la liste des formations avec la méthode PDO
$serveur ='localhost';
$login = 'eleve';
$mdp = '';
$nom_bdd = 'quiz_ifa';

try {
        $bdd = new PDO('mysql:host='.$serveur.';dbname='.$nom_bdd.'', $login, $mdp);
        echo "connexion pdo";
        echo "<pre>";
        $donnees=$bdd->prepare('SELECT * FROM formations');
        $donnees->execute();
        $result=$donnees->fetchAll();
        function getAllFormations($bdd){
            $sql='SELECT * FROM formations';
            $stmt = $bdd->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        }

    $getAllFormations=getAllFormations($bdd);
        foreach ($getAllFormations as $formation_choisie) {
            echo'<option value="'.$formation_choisie['id_formation'].'">'.$formation_choisie['nom_formation'].'</option>';
        }

}
catch (Exception $e) {
exit('Erreur : ' . $e->getMessage());
}


// Connexion à la BDD et affichage de la liste des quiz avec la méthode PDO
try{
$donnees=$bdd->prepare('SELECT * FROM quiz');
$donnees->execute();
$result=$donnees->fetchAll();
function getAllQuiz($bdd){
$sql='SELECT * FROM quiz';
$stmt = $bdd->prepare($sql);
$stmt->execute();
return $stmt->fetchAll();
}

$getAllQuiz=getAllQuiz($bdd);
foreach ($getAllQuiz as $quiz_choisi) {
    echo'<option value="'.$quiz_choisi['id_quiz'].'">'.$quiz_choisi['name'].'</option>';
}
}
catch (Exception $e)
{
    exit('Erreur : ' . $e->getMessage());
}

?>