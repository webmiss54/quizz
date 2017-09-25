<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="scripts/materialize/css/materialize.min.css">
    <script type="text/javascript" src="scripts/js/script.js"></script>
    <link rel="stylesheet" href="scripts/css/style.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="scripts/materialize/js/materialize.min.js"></script>
    <title>IFA - Accueil Quiz</title>
</head>

<body>
    <div class="homepage">
    <img src="images/logo-ifa.png" alt="Logo IFA" class="logo-ifa-home">
        <p class="home-quiz">Bonjour, merci d'apporter toute votre attention au test qui va suivre.
        <br />
        Les résultats vous seront communiqués lors de votre entretien d'admission.
        <br />
        En cliquant sur Commencer le test, le compte à rebours va débuter.
        <br />
        Faites de votre mieux, et bonne chance !
        <br />
        Merci de noter vos nom, prénom, adresse mail et la formation à laquelle vous postulez :</p>
        <!-- Formulaire coordonnées -->
    <form action="cible.php" method="post" class="home-form">
        <fieldset class="coordonnees">
          <div class="input-field">
                <i class="material-icons prefix">account_circle</i>
                <label for="nom"></label>
                <input placeholder="Nom" type="text" name="nom" id="nom" required autofocus>
            </div>
            <div class="input-field">
                <i class="material-icons prefix">account_circle</i>
                <label for="prenom"></label>
                <input placeholder="Prénom" type="text" name="prenom" id="prenom" required>
            </div>
            <div class="input-field">
                <i class="material-icons prefix">email</i>
                <label for="mail"></label>
                <input placeholder="Adresse mail" type="email" name="mail" id="mail" required>
            </div>
                <label for="formation" class="formation">Formation candidatée</label>
                <select name="formation" required>
                   <option value="">---</option>
                   <?php
                    // Connexion à la BDD avec la méthode PDO
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
                  ?>
                </select>
                <select name="quiz">
                    <option value="">---</option>
                    <?php
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
                </select>
                <input class="waves-effect waves-light btn" type="submit" name="submit" id="submit" value="Commencer le test" />
                <!-- Formulaire coordonnées -->

                <!-- Compte à rebours -->
           <!-- <div id="countDiv"></div> -->

            <!-- <script>
                function countDown (count) {
                  if (count > 0) {
                   var d = document.getElementById("countDiv");
                   d.innerHTML = count;
                   setTimeout (function() { countDown(count-1); }, 1000);
                   }
                  else
                    alert("Temps dépassé ! Merci de passer à la question suivante");
                   // document.location = "cible.php";
                }
                countDown(10);
                            clearTimeout(timer);

                </script> -->
                <!-- Compte à rebours -->
        </fieldset>
        </form>
        </div>
        </body>
        </html>
