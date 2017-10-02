<?php
session_start();
if (isset($_SESSION['id'])) {
    header('Location: index.php');
    exit;
}

$fail = FALSE;
if ('POST' == $_SERVER['REQUEST_METHOD']) {
    require('shared.php');

    $stmt = $bdd->prepare('SELECT * FROM utilisateurs WHERE login = :login');
    $stmt->execute(['login' => $_POST['login']]);
    if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        if (password_verify($_POST['password'], $row['mot_de_passe'])) {
            $_SESSION['id'] = $row['id'];
            if (password_needs_rehash($row['mot_de_passe'], $password_options['algo'], $password_options['options'])) {
                $stmt = $bdd->prepare('UPDATE utilisateurs SET mot_de_passe = :new_hash WHERE id = :id');
                $stmt->execute(['id' => $row['id'], 'new_hash' => password_hash($_POST['password'], $password_options['algo'], $password_options['options'])]);
            }
            header('Location: index.php');
            exit;
        } else {
            $fail = TRUE;
        }
    } else {
        $fail = TRUE;
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
    <title>IFA - Accueil Quiz</title>
 
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../scripts/materialize/js/materialize.min.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12"> 
    <img src="../images/logo-ifa.png" alt="Logo IFA" class="logo-ifa-home">
<?php
if ($fail) {
    echo '<p class="alert alert-info">Aucun utilisateur ne correspond à ce couple login/mot de passe.</p>';
}
?>
                    <form class="form-horizontal" method="POST">
                        <div class="form-group">
                            <label for="login" class="col-sm-2 control-label">Login</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="login" name="login">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-sm-2 control-label">Mot de passe</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">Se connecter</button>
                            </div>
                        </div>
                           
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>