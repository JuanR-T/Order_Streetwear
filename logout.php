<?php
session_start();
unset($_SESSION['connected']);
// header('location : /projet_hetic/index.php');
include 'config/template/head.php';
?>
<header>
    <?php include 'config/template/header.php'; ?>
</header>
<section class="login">
    <h1>Déconnexion réussie, à bientôt !</h1>
    <div>

    </div>

</section>

<?php include 'config/template/footer.php'?>