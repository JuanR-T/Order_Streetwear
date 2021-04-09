<!-- <?php
session_start();

if (isset($_POST['envoyer'])) {
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    extract($_POST);

    $pseudoValid ='Dakross1309';
    $mdpValid ='Dakross1309';

    if (($pseudoValid == $pseudo) && ($mdpValid == $mdp)) {

        $_SESSION['user']['pseudo'] = $pseudo;
        $_SESSION['user']['mdp'] = $mdp;
        
        header('location:page2.php');
        exit();
    }else{
        $content .= '<div
        style="background:red;padding:1%;
        ">Erreur identification</div>';
    }
}
?>

<form action="" method="post">
    
    <label for="pseudo">pseudo</label>
    <input type="text" name="pseudo"
    id="pseudo"><br>
    <label for="mdp">mot de passe</label>
    <input type="text" name="mdp"
    id="mdp"><br>
    <input type="submit" value="Envoyer" name="envoyer">
</form> -->