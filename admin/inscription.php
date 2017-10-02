<?php
session_start();
if (isset($_SESSION['id'])) {
    header('Location: index.php');
    exit;
}

const MIN_PSEUDO_LEN = 3;
const MAX_PSEUDO_LEN = 80;
const MIN_PASSWORD_LEN = 6;

$errors = [];
mb_internal_encoding('UTF-8');
if ('POST' == $_SERVER['REQUEST_METHOD']) {
    require('shared.php');

    if (array_key_exists('email', $_POST)) {
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "L'adresse email est invalide";
        } else {
            $stmt = $bdd->prepare('SELECT 1 FROM utilisateurs WHERE email = :email');
            $stmt->execute(['email' => $_POST['email']]);
            if (FALSE !== $stmt->fetchColumn()) {
                $errors['email'] = "Cette adresse email est déjà utilisée";
            }
        }
    } else {
        $errors['email'] = "L'adresse email est absente";
    }

    if (array_key_exists('login', $_POST)) {
        $login_length = mb_strlen($_POST['login']);
        if ($login_length < MIN_PSEUDO_LEN || $login_length > MAX_PSEUDO_LEN) {
            $errors['login'] = sprintf("La longueur du login doit être comprise entre %d et %d caractères", MIN_PSEUDO_LEN, MAX_PSEUDO_LEN);
        } else {
            $stmt = $bdd->prepare('SELECT 1 FROM utilisateurs WHERE login = :login');
            $stmt->execute(['login' => $_POST['login']]);
            if (FALSE !== $stmt->fetchColumn()) {
                $errors['login'] = "Ce pseudonyme est déjà utilisé";
            }
        }
    } else {
        $errors['login'] = "login est absent";
    }

    if (array_key_exists('mdp', $_POST)) {
        $mdp_length = mb_strlen($_POST['mdp']);
        if ($mdp_length < MIN_PASSWORD_LEN) {
            $errors['mdp'] = sprintf("La longueur du mot de passe doit être d'au moins %d caractères", MIN_PASSWORD_LEN);
        }
        if ($_POST['mdp'] != $_POST['mdpconfirm']) {
            $errors['mdpconfirm'] = "Le mot de passe et sa confirmation ne coïncident pas";
        }
    } else {
        $errors['mdp'] = "mot de passe est absent";
    }

    if (!$errors) {
        $insert = $bdd->prepare('INSERT INTO utilisateurs(login, email, mot_de_passe) VALUES(:login, :email, :mdp)');
        $insert->execute(['login' => $_POST['login'], 'email' => $_POST['email'], 'mdp' => password_hash($_POST['mdp'], $password_options['algo'], $password_options['options'])]);
        header('Location: connexion.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
             <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../scripts/materialize/css/materialize.min.css">
    <script type="text/javascript" src="../scripts/js/script.js"></script>
    <link rel="stylesheet" href="../scripts/css/style.css">
    <title>IFA - Inscription</title>
 
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../scripts/materialize/js/materialize.min.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12"> <img src="../images/logo-ifa.png" alt="Logo IFA" class="logo-ifa-home">
<?php
if ($errors) {
    echo '<div class="alert alert-warning"><p>Veuillez corriger les erreurs ci-dessous afin de réaliser votre inscription :</p><ul><li>', implode('</li><li>', $errors), '</li></ul></div>';
}
?> 
                    <form class="form-horizontal" method="post" action="">
                        <fieldset>
                            <legend >Inscription :</legend>
                            <div class="form-group <?php if (array_key_exists('login', $errors)) echo 'has-error'; ?>">
                                <label for="login">Login :</label>
                                <input type="text" id="login" name="login" class="form-control" value="<?php if (array_key_exists('login', $_POST)) echo htmlspecialchars($_POST['login']); ?>" />
                            </div>
                            <div class="form-group <?php if (array_key_exists('email', $errors)) echo 'has-error'; ?>">
                                <label for="email">Email :</label>
                                <input type="email" id="email" name="email" class="form-control" value="<?php if (array_key_exists('email', $_POST)) echo htmlspecialchars($_POST['email']); ?>" />
                            </div>
                            <div class="form-group <?php if (array_key_exists('mdp', $errors) || array_key_exists('mdpconfirm', $errors)) echo 'has-error'; ?>">
                                <label for="mdp">Mot de passe :</label>
                                <input type="password" id="mdp" name="mdp" class="form-control" value="" />
                            </div>
                            <div class="form-group <?php if (array_key_exists('mdpconfirm', $errors)) echo 'has-error'; ?>">
                                <label for="mdpconfirm">Confirmation du mot de passe :</label>
                                <input type="password" id="mdpconfirm" name="mdpconfirm" class="form-control" value="" />
                            </div>
                        </fieldset>
                        <input type="submit" class="btn btn-default" />
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>