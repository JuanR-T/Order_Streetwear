<?php include 'config/template/head.php'; ?>
<header>
    <?php include 'config/template/header.php'; ?>
</header>
<div class="container_login">
    <section class="login">
        <form>
            <h2>Bon retour</h2>
                <div class="external_login">
                    <button class="fb_login"><i class="fab fa-facebook-f"></i>&ensp;Se connecter avec facebook</button>
                    <button class="google_login"><i class="fab fa-google"></i>&ensp;Se connecter avec google</button>
                </div>
                <div class="saisielong">
                    <input type="text" id="mail" class="textbox">
                    <label>Adresse e-mail*</label>
                </div>

                <div class="saisielong">
                    <input type="text" id="subject" class="textbox">
                    <label>Mot de passe *</label>
                </div>
                <button class="rdv_button" type="button">SE CONNECTER</button>
        </form>
    </section>
</div>
<hr>
<?php include 'config/template/footer.php'; ?>