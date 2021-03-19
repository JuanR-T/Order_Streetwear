<?php include 'config/template/head.php'; ?>
<header>
    <?php include 'config/template/header.php'; ?>
</header>


<!----- Tous les produits----->
<div class="small-container">

    
<!--- <h2 class="title">Tous nos produits</h2>--> 
<!-------products details-->
<div class="small-contenair single-product">
    <div class="row">
        <div class="col-1">
            <div class="main_img_container"></div>
            
            <div class="small_img_container">
                <div class="small_img1">
                    
                </div>

                <div class="small_img2">
                    
                </div>

                <div class="small_img3">
                    
                </div>
            </div>
        </div>
        <div class="col-2">
            <p>Home / Jacket</p>
            <h1>Veste en jean</h1>
            <h4>209,99 EUR <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </h4>
            
            <select>
                <option>Choisis ta taille</option>
                <option>XS</option>
                <option>S</option>
                <option>M</option>
                <option>L</option>
                <option>XL</option>
                <option>XXL</option>
            </select>
            <div class="cart_button">
                <input type="number" value="1">
                <button>Ajouter au panier</button>
            </div>
            <h3>Description </h3>
            <p>Si vous achetez cette veste modèle “Trop trop beau”, vous serez automatiquement beau et vous entrerez dans la streetwear $wagg.
                <br><br><strong>Composition</strong> : 100% coton 
                <br><strong>Fabrication</strong> : made in France
        </div>
    </div>
</div>
    <div class="row one"></div>
    <div class="row two">
        <div class="col-4">
           <img src="https://bit.ly/2NqyPB8" alt=""> 
        <h4>Nos sweats</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>49.99€</p>
        </div>

        <div class="col-4">
            <img src="https://bit.ly/2NqyPB8" alt=""> 
         <h4>Nos sweats</h4>
        <div class="rating">
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star-o"></i>
        </div>
            <p>49.99€</p>
        </div>

         <div class="col-4">
            <img src="https://bit.ly/2NqyPB8" alt=""> 
         <h4>Nos sweats</h4>
        <div class="rating">
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star-o"></i>
        </div>
            <p>49.99€</p>
        </div>

         <div class="col-4">
            <img src="https://bit.ly/2NqyPB8" alt=""> 
         <h4>Nos sweats</h4>
        <div class="rating">
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star-o"></i>
        </div>
            <p>49.99€</p>
        </div>
    </div>
</div>

<!---js 4 toogle menu-->
<script>
    var MenuItems = document.getElementById("MenuItems");

    MenuItems.style.maxHeight = "0px";

    function menutoggle(){
        if(MenuItems.style.maxHeight == "0px")
        {
            MenuItems.style.maxHeight = "200px";
        }
        else
        {
            MenuItems.style.maxHeight = "0px";
        }
    }
</script>


<hr>
<?php include 'config/template/footer.php'; ?>