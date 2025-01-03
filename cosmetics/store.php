<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="store.css">
    <!--for title logo-->
    <link rel="shortcut icon" href="cosmetic_icon.ico" /> 
</head>

    <body id="store-body">
        <!-- header -->
        <header>
            <div class="container">
                <div id="store-name">
                    <h1 style="font-family: 'Times New Roman', Times, serif">Lady Me</h1>
                </div>
                <nav>
                    <ul>
                        <li><a href="Home.php">Home</a></li>
                        <li class="current"><a href="store.php">Store</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <!-- end of header -->

        <!-- cover image of the store -->
        <div class="cover">
            <img src="Img/cosmetics.avif" alt="">
            <div class="text1">
                <h1>Get upto 20% discount for new arrivals</h1>
            </div>  
        </div>
    
        <!-- Album section of the store -->
        <section class="content-section1">
            <h2 class="section-header">ITEMS IN STORE</h2>
            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">20 pcs Brush Set</span>
                    <img class="shop-item-image" src="Img/20pcsbrushset.png" alt="">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$12.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">14 pcs Brush Set</span>
                    <img class="shop-item-image" src="Img/14pcsbrushset.webp" alt="">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$14.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Liquid foundation</span>
                    <img class="shop-item-image" src="Img/foundation.jpg" alt="">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$9.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Skin Tint Foundation</span>
                    <img class="shop-item-image" src="Img/skinTint.webp" alt="">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$12.00</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">Compact Powder</span>
                    <img class="shop-item-image" src="Img/powder.webp" alt="">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$19.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Black Eye Liner</span>
                    <img class="shop-item-image" src="Img/eyeLiner.webp" alt="">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$6.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Dramat Eye Liner Pen</span>
                    <img class="shop-item-image" src="Img/Dramateyes.png" alt="">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$6.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">7 Color Lipstick Pack</span>
                    <img class="shop-item-image" src="Img/7colorLipstickPack.jpg" alt="">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$6.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Customer bill information with the item selected quantity and the total price -->
        <section class="content-section1">
            <h2 class="section-header" style="margin-top: 120%;">Your Bill Information</h2>
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

            <button class="btn btn-primary btn-purchase" type="button" id="purchaseButton" onclick="connectPriceToConfirmation()">PURCHASE</button>
        </section>


        <!-- footer -->
    <footer>
        <div class="row">
            <div class="column">
                <!-- <img class="logo" src="Img/cold2.jpg " alt=""> -->
                <p>We are the best cosmetic brand.</p>
            </div>
            <div class="column">
                <h3>Office</h3>
                <p>Cosmetics</p>
                <p>Cosmetic Company</p>
                <p>1901 Main Street 3rd Floor,</p>
                <p>Battaramulla, Sri Lanka</p>
                <br>
            </div>
            <div class="column">
                <h3>Useful Links</h3>
                <ul>
                    <li><a href="main.php">Home</a></li>
                    <li><a href="store_coldplay.php">Store</a></li>
                </ul>
            </div>
            <div class="column">
                <h3>Newsletter</h3>
                <form>
                    <label>Subscribe to our Newsletter</label>
                    <input type="email" name="email" id="email-footer" placeholder="Enter your email" required>
                    <button type="submit"><h5>Submit</h5></button>
                </form>
            </div>
        </div>
        <hr>
        <div class="credentials">
            <p class="copyright">©Code 4x 2022 - All credits goes to <a href="https://www.cosmetics.com/homepage/"><span style="color: yellow;">Cosmetics.</span></a></p>
            <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
        </div>

    </footer>

    <!-- linking main.js -->
    <script src="main.js"></script>
    <script src="store.js"></script>

    </body>
</html>