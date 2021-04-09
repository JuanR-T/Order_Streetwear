<?php 

require_once 'config/authentification.php';

if (!connected()) {
    header('Location:/projet_hetic/login.php');
    exit();
}

include 'config/template/head.php'; 

?>
<header>
    <?php include 'config/template/header.php'; ?>
</header>
<div class="container_profile">
    <section class="profile">
        <article class="account_categories">
            <h4>Aperçu du compte</h4>
            <ul>
                <li>Profil</li>
                <li>Mes commandes</li>
                <li>Mes adresses</li>
                <li>Moyens de paiement</li>
                <li>Favoris</li>
                <li>Newsletter</li>
                <li><a href="logout.php">Se déconnecter</a></li>
            </ul>
        </article>
        <aside>
            <h3 class="aside_msg">Salut utilisateur_11 ! Content de te revoir !</h3>
            <div class="account_overview">
                <div class="wishlist_overview">
                    <h3>Favoris</h3>
                    <div class="wishlist_content"></div>
                    <button>Voir mes favoris</button> 
                </div>
                <div class="orders_overview">
                    <h3>Commandes en cours</h3>
                    <div class="orders_content"></div>
                    <button>Voir mes commandes</button>  
                </div>
            </div>
        </aside>
    </section>
</div>
<hr>
<?php include 'config/template/footer.php'; ?>