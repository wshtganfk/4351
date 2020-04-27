<!DOCTYPE html>
<html>
    <head>
        <title>The eCommerce</title>
        <link rel="stylesheet" href="style.css" />
        <script src="script.js" async></script>
    </head>
    <body>
        <header class="main-header">
            <!--<button class="btn btn-primary shop-item-button" type="button" style="float: right;"></button>login</button>-->
            <div>
                <form class="brr-group" action = "login.php">
                    <button>Login</button>
                </form>
            </div>
            <h1 class="title">Uniq Pen-Shop
            </h1>
        </header>
        <section class="container content-section">
            <h2 class="section-header">Featured Products</h2>
            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">Color pen+</span>
                    <img class="shop-item-image" src="ipen.jfif">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$14.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">bring me home</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Paper Mate+</span>
                    <img class="shop-item-image" src="ipen2.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$9.99</span>
                        <button class="btn btn-primary shop-item-button"type="button">bring me home</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Paper mate</span>
                    <img class="shop-item-image" src="ipencil.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$14.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">bring me home</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">classic pen</span>
                    <img class="shop-item-image" src="ipencil2.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$9.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">bring me home</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="container content-section">
            <h2 class="section-header">CART</h2>
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">ITEM</span>
                <span class="cart-price cart-header cart-column">PRICE</span>
                <span class="cart-quantity cart-header cart-column">QUANTITY</span>
            </div>
            <div class="cart-items">
            </div>
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price">$0</span>
            </div>
            <a href="checkout.php">
            <button class="btn btn-primary btn-purchase" type="button">PURCHASE</button>
            </a>
        </section>
        <body style = "background: url('xx.jfif'); background-size: 100% 100%;">
    </body>
</html>