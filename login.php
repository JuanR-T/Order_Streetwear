<?php

$error = null;
if (isset($_POST['envoyer'])) {
   
    extract($_POST);

    $pseudoValid ='John';
    $mdpValid ='Doe';

    if (($pseudoValid == $pseudo) && ($mdpValid == $mdp)) {

        $_SESSION['user']['pseudo'] = $pseudo;
        $_SESSION['user']['mdp'] = $mdp;

        session_start();
        $_SESSION['connected'] = 1;

        header('location:/projet_hetic/profil.php');
        exit();
    }else{
        $error = "Identifiants incorrects";
    }
}
// require_once 'config/authentification.php';
// if(connected()){
//     header('location : /projet_hetic/panier.php');
//     exit();
// }
?>


<?php include 'config/template/head.php'; ?>
<header>
    <?php include 'config/template/header.php'; ?>
</header>
<div class="container_login">
<?php if ($error): ?>
    <div class="alert-error">
        <?= $error ?>
    </div>
<?php endif ?>
    <section class="login">
        <form action="" method="post">
            <h2>Bon retour</h2>
                <div class="external_login">
                    <button class="fb_login"><i class="fab fa-facebook-f"></i>&ensp;Se connecter avec facebook</button>
                    <button class="google_login"><i class="fab fa-google"></i>&ensp;Se connecter avec google</button>
                </div>
                <div class="saisielong">
                    <input type="text" id="mail" class="textbox" name="pseudo">
                    <label for="pseudo">Adresse e-mail*</label>
                </div>

                <div class="saisielong">
                    <input type="password" id="subject" class="textbox" name="mdp">
                    <label for="mdp">Mot de passe *</label>
                </div>
                <input type="submit" value="Envoyer" name="envoyer">
                <!-- <button class="rdv_button" type="button">SE CONNECTER</button> -->
                <a href="inscription.php" class="white_link">Vous n'avez pas de compte ?</a>
        </form>
    </section>
</div>
<hr>
<?php include 'config/template/footer.php'; ?>