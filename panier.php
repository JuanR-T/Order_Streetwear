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
                <img src="buy-1.jpg" alt="imagePanier">
                <div>
                    <p>Tee-shirt</p>
                    <small>Prince: 19,99 EUR</small>
                    <br><a href="">Retirer</a>
                </div>
            </div>
        </td>
        <td><input type="number" value="1"></td>
        <td>19,99 EUR</td>
    </tr>
    <tr>
        <td>
            <div class="cart-info">
                <img src="buy-2.jpg" alt="imagePanier">
                <div>
                    <p>Tee-shirt</p>
                    <small>Prince: 19,99 EUR</small>
                    <br><a href="">Retirer</a>
                </div>
            </div>
        </td>
        <td><input type="number" value="1"></td>
        <td>19,99 EUR</td>
    </tr>
    <tr>
        <td>
            <div class="cart-info">
                <img src="buy-3.jpg" alt="imagePanier">
                <div>
                    <p>Tee-shirt</p>
                    <small>Prince: 19,99 EUR</small>
                    <br><a href="">Retirer</a>
                </div>
            </div>
        </td>
        <td><input type="number" value="1"></td>
        <td>19,99 EUR</td>
    </tr>
</table>


<div class="total-price">
    <table>
        <tr>
            <td>Sous total</td>
            <td>60,00 EUR</td>
        </tr>
        <tr>
            <td>TVA</td>
            <td>20,00 EUR</td>
        </tr>
        <tr>
            <td>Total</td>
            <td>80,00 EUR</td>
        </tr>
    </table>
</div>

</div>


<hr>
<?php include 'config/template/footer.php'; ?>