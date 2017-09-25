<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="scripts/materialize/css/materialize.min.css">
    <link rel="stylesheet" href="scripts/css/style.css">
    <title>Niveau IV - Test de Culture générale</title>
</head>

<body>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="scripts/materialize/js/materialize.min.js"></script>
    <img src="images/logo-ifa.png" alt="Logo IFA" class="logo-ifa">
        <p class="home-quiz home-quiz1">Test de Culture générale (Durée : 30min)</p>
        <p class="home-quiz">Bonjour, merci d'apporter toute votre attention au test qui va suivre.</p>
        <p class="home-quiz">Les résultats vous seront communiqués lors de votre entretien d'admission. En cliquant sur Commencer le test, le compte à rebours va débuter.</p>
        <p class="home-quiz">Faites de votre mieux, et bonne chance !</p>
        <p class="home-quiz">Merci de noter vos nom, prénom, adresse mail et la formation à laquelle vous postulez :</p>
    <form action="cible.php" method="post">
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
                <select name="formation">
                  <!--<optgroup label="Commerce - Marketing - Communication">
                    <option>Responsable Commercial Marketing Digital</option>
                    <option>BTS Communication</option>
                    <option>BTS Management des Unités Commerciales</option>
                    <option>Responsable Commercial - Marketing</option>
                    <option>Chef de projets événementiels</option>
                    <option>Manager des stratégies communication marketing</option>
                  </optgroup> 
                  <optgroup label="Achats - Logistique">
                    <option>Acheteur France et International</option>
                  </optgroup>
                  <optgroup label="Ressources Humaines">
                    <option>Chargé de gestion des Ressources Humaines</option>
                    <option>Manager en Ressources Humaines</option>
                  </optgroup>
                  <optgroup label="Comptabilité - Gestion - Administratif">
                    <option>BTS Comptabilité et Gestion</option>
                    <option>Diplôme de Comptabilité et de Gestion</option>
                    <option>Responsable opérationnel de gestion</option>
                  </optgroup>
                  <optgroup label="Banque - Finance">
                    <option>Diplôme Européen d’Etudes Supérieures Banque Option Place Financière Luxembourgeoise</option>
                    <option>Manager Administratif & Financier</option>
                  </optgroup> -->
                    <option value="">---</option>
                  <?php
                    $connection=mysql_connect("localhost", "root", ""); 

                            $connection_bdd = mysql_select_db("quiz_ifa", $connection);
                            if($connection && $connection_bdd)
                    {
                    echo "Connexion OK";
                    echo "<pre>";
                    $sql = 'SELECT * FROM formations';
                    echo $sql;

                    $reponse=mysql_query($sql);
                    while($donnees=mysql_fetch_array($reponse))
                    {
                        echo'
                            <option value="'.$donnees['id_formation'].'">'.$donnees['nom_formation'].'</option>
                        ';
                    }
                    mysql_close($connection);
                    }else{
                        echo "Connexion échouée";
                    }
                  ?>
                </select>
                <a class="waves-effect waves-light btn" id="btn-coordonnees">Commencer le test</a>
        </fieldset>
        <fieldset class="section_1">
            <legend>Section 1 : Culture générale</legend>
            <fieldset class="quiz1_q1">
            <p>
                Question 1 sur 19<br />
                <label for="quiz1_q1">La Tour Eiffel fut construite à l'occasion de :</label><br />
                <input type="radio" name="quiz1_q1" value="quiz1_q1_r1" id="quiz1_q1_r1">
                <label for="quiz1_q1_r1">La victoire de Napoléon sur les Russes à Iéna en 1806</label>
                <input type="radio" name="quiz1_q1" value="L'exposition universelle de Paris en 1889" id="quiz1_q1_r2">
                <label for="quiz1_q1_r2">L'exposition universelle de Paris en 1889</label>
                <input type="radio" name="quiz1_q1" value="quiz1_q1_r3" id="quiz1_q1_r3">
                <label for="quiz1_q1_r3">La fin de la révolution française en 1795</label>
            </p>
                <a class="waves-effect waves-light btn">Suivant</a>
            </fieldset>
            </fieldset>
            <fieldset class="section_2">
                <legend>Section 2 : Français</legend>
                <fieldset class="quiz1_q7">
                <p>
                    Question 7 sur 19<br />
                    <label for="quiz1_q7[]">Cochez le ou les mot(s) correctement orthographié(s) :</label><br />
                    <input type="checkbox" name="quiz1_q7[]" value="quiz1_q7_r1" id="quiz1_q7_r1">
                    <label for="quiz1_q7_r1">Render-vous</label>
                    <input type="checkbox" name="quiz1_q7[]" value="quiz1_q7_r2" id="quiz1_q7_r2">
                    <label for="quiz1_q7_r2">Accueillir</label>
                    <input type="checkbox" name="quiz1_q7[]" value="quiz1_q7_r3" id="quiz1_q7_r3">
                    <label for="quiz1_q7_r3">Discréssion</label>
                    <input type="checkbox" name="quiz1_q7[]" value="quiz1_q7_r4" id="quiz1_q7_r4">
                    <label for="quiz1_q7_r4">Metting</label>
                    <input type="checkbox" name="quiz1_q7[]" value="quiz1_q7_r5" id="quiz1_q7_r5">
                    <label for="quiz1_q7_r5">Discipline</label>
                    <input type="checkbox" name="quiz1_q7[]" value="quiz1_q7_r6" id="quiz1_q7_r6">
                    <label for="quiz1_q7_r6">Infformation</label>
                </p>
                <a class="waves-effect waves-light btn">Suivant</a>
                </fieldset>
                <fieldset class="quiz1_q8">
                <p>
                    Question 8 sur 19<br />
                    <label for="quiz1_q8[]">Cocher la ou les expression(s) correctement orthographié(s)</label><br />
                    <input type="checkbox" name="quiz1_q8[]" value="quiz1_q8_r1" id="quiz1_q8_r1">
                    <label for="quiz1_q8_r1">L'entreprise pour laquelle il travaille est-elle rantable ?</label>
                    <input type="checkbox" name="quiz1_q8[]" value="quiz1_q8_r2" id="quiz1_q8_r2">
                    <label for="quiz1_q8_r2">Notre développement à l'international est assuré avec ce nouveau partenariat !</label>
                    <input type="checkbox" name="quiz1_q8[]" value="quiz1_q8_r3" id="quiz1_q8_r3">
                    <label for="quiz1_q8_r3">Cette borne d'accueil va être entièrement réaménagée</label>
                </p>
                <a class="waves-effect waves-light btn">Suivant</a>
                </fieldset>
            <button class="btn waves-effect waves-light" type="submit" name="action">Envoyer
                <i class="material-icons right"></i>
            </button>
        </fieldset>
    </form>
</body>

</html>