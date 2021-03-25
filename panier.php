<?php include 'config/template/head.php'; ?>
<header>
    <?php include 'config/template/header.php'; ?>
</header>

<!-----cart items details-->

<div class="small_container_cart">
    <h1>Panier</h1><br>
<table>
    <tr>
        <th>Produit</th>
        <th>Quantité</th>
        <th>Total</th>
    </tr>

    <tr>
        <td>
            <div class="cart-info">
                <div class="imagePanier_1"></div>
                <div class="product-info">
                    <p>Oversized sweatshirt</p>
                    <small>Prix: 129,99 EUR</small>
                    <br><a href="">Retirer</a>
                </div>
            </div>
        </td>
        <td><input type="number" value="1"></td>
        <td>129,99 EUR</td>
    </tr>
    <tr>
        <td>
            <div class="cart-info">
                <div class="imagePanier_2"></div>
                <div class="product-info">
                    <p>Chunky sneakers</p>
                    <small>Prix: 339,99 EUR</small>
                    <br><a href="">Retirer</a>
                </div>
            </div>
        </td>
        <td><input type="number" value="1"></td>
        <td>339,99 EUR</td>
    </tr>
    <tr>
        <td>
            <div class="cart-info">
                <div class="imagePanier_3"></div>
                <div class="product-info">
                    <p>Bomber jacket</p>
                    <small>Prix: 199,99 EUR</small>
                    <br><a href="">Retirer</a>
                </div>
            </div>
        </td>
        <td><input type="number" value="1"></td>
        <td>199,99 EUR</td>
    </tr>
</table>


<div class="total-price">
    <table>
        <tr>
            <td>Sous total</td>
            <td>535,98 EUR</td>
        </tr>
        <tr>
            <td>TVA</td>
            <td>133,99 EUR</td>
        </tr>
        <tr>
            <td>Total</td>
            <td>669,97 EUR</td>
        </tr>
    </table>
</div>

<a href="" class="btn-cart">Procéder au paiement</a>

</div>

<?php include 'suggestion.php'; ?>
<hr>
<?php include 'config/template/footer.php'; ?>