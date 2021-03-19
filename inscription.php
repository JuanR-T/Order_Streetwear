<?php include 'config/template/head.php'; ?>
<header>
    <?php include 'config/template/header.php'; ?>
</header>

<div class="container_inscription">
    <section class="inscription">
        <form>
            <h2>Entrez dans la légende...</h2>
            <div class="external_login">
                <button class="fb_login"><i class="fab fa-facebook-f"></i>&ensp;S'inscrire avec facebook</button>
                <button class="google_login"><i class="fab fa-google"></i>&ensp;S'inscrire avec google</button>
            </div>
            <div class="saisie">
                <input type="text" required name="firstname" id="firstname" class="textbox" autofocus>
                <label>Prénom *</label>
            </div>
                
            <div class="saisie">
                <input type="text" id="name" class="textbox">
                <label>Nom *</label>
            </div>
                    
            <div class="saisie">
                <input type="tel" id="number" class="textbox">
                <label>Numéro de téléphone</label>
            </div>

            <div class="saisie">
                <input type="text" id="company" class="textbox">
                <label>Société *</label>
            </div>
                    
            <div class="saisielong">
                <input type="text" id="mail" class="textbox">
                <label>Adresse e-mail*</label>
            </div>

            <div class="saisielong">
                <input type="text" id="subject" class="textbox">
                <label>Mot de passe *</label>
            </div>

            <div class="checkbox">
                <input type="checkbox" id="data" name="data">
                <p>S'abonner à la newsletter</p>
            </div>

            <button class="rdv_button" type="button">S'INSCRIRE</button>
        </form>
    </section>
</div>
<hr>
<?php include 'config/template/footer.php'; ?>