<?php
session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITEMS | Blest Fashion</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">    <link rel="icon" href="../img/logo-icon.png" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/items.css">
</head>
<body>
    
    <header>
        <nav>
            <div class="logo">
                <a href="../HTML/index.php">
                <img src="../img/logo.png" alt="logoja">
            </a>
            </div>


            <!--this is burger menu-->
            <label for="burger-menu">
                <span class="span"></span>
                <span  class="span"></span>
                <span  class="span"></span>
            </label>
            
            <input type="checkbox" name="burger-menu" id="burger-menu">
            <ul>
                <li><a href="index.php" >Home</a></li>
                <li><a href="items.php" class="active">Items</a></li>
                <li><a href="logout.php">Log out</a></li> </ul>
                <div class="shopping-bag">

                    <label for="added">
                        <img src="../img/shopping-bag.png" alt="">

                    </label>
                    <input type="checkbox" name="added" id="added">
                    <div class="cart" id="cart"> 
                        <div class="subtotal"> 
                            <h3>Product</h3> 
                            <h3>Name</h3>
                            <h3>Price</h3> 
                             <h3>Remove</h3>
                        </div>
                        <div id="title"></div> <!-- ketu hin elementet prej js-->
                    </div>
                    <div class="shopping-bag-number">0</div>
                </div>
           

            

        </nav>
    </header><br>   
 

    


<div class="square">

    <div class="heading">
    <h1><span>Our</span> Products</h1>
    <hr>
</div>


<div class="row">
    

    <div class="box" id="item1"> 
    <img src="../img/product1.png" class="products" alt="PRODUKTI1">
    <span>&#9733;&#9733;&#9733;&#9733;&#9733;</span>
    <h3>Nike</h3>
    <h1> $90.00</h1>
    <button onclick="addToCart(item1)">add to cart</button>
</div>


<div class="box" id="item2"> 
    <img src="../img/product2.png" class="products" alt="PRODUKTI1">
    <span>&#9733;&#9733;&#9733;&#9733;&#9733;</span>
    <h3>Gucci</h3>
    <h1>$58.89</h1>
    <button onclick="addToCart(item2)">add to cart</button>
</div>



<div class="box" id="item3"> 
    <img src="../img/product3.png" class="products" alt="PRODUKTI1">
    <span>&#9733;&#9733;&#9733;&#9733;&#9733;</span>
    <h3>Nike</h3>
    <h1>$125.99</h1>
    <button onclick="addToCart(item3)">add to cart</button>
</div>


<div class="box" id="item4"> 
    <img src="../img/product4.png" class="products" alt="PRODUKTI1">
    <span>&#9733;&#9733;&#9733;&#9733;&#9733;</span>
    <h3>Louis Vuitton</h3>
    <h1>$63.90</h1>
    <button onclick="addToCart(item4)">add to cart</button>
</div>

       

<div class="box" id="item5"> 
    <img src="../img/product1.png" class="products" alt="PRODUKTI1">
    <span>&#9733;&#9733;&#9733;&#9733;&#9733;</span>
    <h3>Nike</h3>
    <h1> $90.00</h1>
    <button onclick="addToCart(item5)">add to cart</button>
</div>


<div class="box" id="item6"> 
    <img src="../img/product2.png" class="products" alt="PRODUKTI1">
    <span>&#9733;&#9733;&#9733;&#9733;&#9733;</span>
    <h3>Gucci</h3>
    <h1>$58.89</h1>
    <button onclick="addToCart(item6)">add to cart</button>
</div>



<div class="box" id="item7"> 
    <img src="../img/product3.png" class="products" alt="PRODUKTI1">
    <span>&#9733;&#9733;&#9733;&#9733;&#9733;</span>
    <h3>Nike</h3>
    <h1>$125.99</h1>
    <button onclick="addToCart(item7)">add to cart</button>
</div>


<div class="box" id="item8"> 
    <img src="../img/product4.png" class="products" alt="PRODUKTI1">
    <span>&#9733;&#9733;&#9733;&#9733;&#9733;</span>
    <h3>Louis Vuitton</h3>
    <h1>$63.90</h1>
    <button onclick="addToCart(item8)">add to cart</button>
    </div>

    <div class="box" id="item9"> 
        <img src="../img/product1.png" class="products" alt="PRODUKTI1">
        <span>&#9733;&#9733;&#9733;&#9733;&#9733;</span>
        <h3>Nike</h3>
        <h1> $90.00</h1>
        <button onclick="addToCart(item9)">add to cart</button>
    </div>
    
    
    <div class="box" id="item10"> 
        <img src="../img/product2.png" class="products" alt="PRODUKTI1">
        <span>&#9733;&#9733;&#9733;&#9733;&#9733;</span>
        <h3>Gucci</h3>
        <h1>$58.89</h1>
        <button onclick="addToCart(item10)">add to cart</button>
    </div>
    
    
    
    <div class="box" id="item11"> 
        <img src="../img/product3.png" class="products" alt="PRODUKTI1">
        <span>&#9733;&#9733;&#9733;&#9733;&#9733;</span>
        <h3>Nike</h3>
        <h1>$125.99</h1>
        <button onclick="addToCart(item11)">add to cart</button>
    </div>
    
    
    <div class="box" id="item12"> 
        <img src="../img/product4.png" class="products" alt="PRODUKTI1">
        <span>&#9733;&#9733;&#9733;&#9733;&#9733;</span>
        <h3>Louis Vuitton</h3>
        <h1>$63.90</h1>
        <button onclick="addToCart(item12)">add to cart</button>
    </div>

    <div class="box" id="item13"> 
        <img src="../img/product1.png" class="products" alt="PRODUKTI1">
        <span>&#9733;&#9733;&#9733;&#9733;&#9733;</span>
        <h3>Nike</h3>
        <h1> $90.00</h1>
        <button onclick="addToCart(item13)">add to cart</button>
    </div>
    
    
    <div class="box" id="item14"> 
        <img src="../img/product2.png" class="products" alt="PRODUKTI1">
        <span>&#9733;&#9733;&#9733;&#9733;&#9733;</span>
        <h3>Gucci</h3>
        <h1>$58.89</h1>
        <button onclick="addToCart(item14)">add to cart</button>
    </div>
    
    
    
    <div class="box" id="item15"> 
        <img src="../img/product3.png" class="products" alt="PRODUKTI1">
        <span>&#9733;&#9733;&#9733;&#9733;&#9733;</span>
        <h3>Nike</h3>
        <h1>$125.99</h1>
        <button onclick="addToCart(item15)">add to cart</button>
    </div>
    
    
    <div class="box" id="item16"> 
        <img src="../img/product4.png" class="products" alt="PRODUKTI1">
        <span>&#9733;&#9733;&#9733;&#9733;&#9733;</span>
        <h3>Louis Vuitton</h3>
        <h1>$63.90</h1>
        <button onclick="addToCart(item16)">add to cart</button>
    </div>
</div>

        </div>
</div>



<div class="nextPages">
   <a href="items3.php" ><span>Prev</span></a>
   <a href="items2.php"><span>2</span></a>
   <a href="items3.php"><span>3</span></a>
   <a href="items4.php"><span class="active">4</span></a>
   <a href="#"><span>Next</span></a>
   
</div>



<!-- -----------------------------------------------------------------------------------------------------FOOTERIII *---------------------------- --------- - -->

<footer>
    <div class="footer-logo">
        <img src="../img/footer-logo.jpeg" alt="FOOTER logo">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident reprehenderit earum maxime quas. Nostrum, eos saepe laudantium aspernatur aliquam reiciendis, libero repellat delectus dolorem eaque sit illo esse repudiandae minima!</p>
    </div>

    <div class="footer-featured">
        <h1>FEATURED</h1>
        <h3>Men</h3>
        <h3>Women</h3>
        <h3>Boys</h3>
        <h3>Girls</h3>
        <h3>Shoes</h3>
        <h3>New Arrivals</h3>
        <h3>Watches</h3>
        <h3>Best Sales</h3>
    </div>

 <div class="footer-contact">
        <h1>contact US</h1>
        <h3>address</h3>
        <h4>Prishtnë , Kosovo</h4>

        <h3>phone</h3>
        <h4>(+383) 49-674-727</h4>

        <h3>email</h3>
        <h4>blendstatovci2@gmail.com</h4>

        <h3>Follow</h3>
  <ul class="social-media" >
     <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true" style="color: rgb(255, 229, 229);"></i></a></li>
     <li><a href="#"><i class="fa fa-instagram" aria-hidden="true" style="color: rgb(255, 229, 229);"></i></a></li>
     <li><a href="#"><i class="fa fa-twitter" aria-hidden="true" style="color: rgb(255, 229, 229);"></i></a></li>
 </ul>
 </div>

    <div class="footer-copyrights">
        Copyrights 	&copy;2022   All rights reserverd
    </div>
</footer>



<script src="../JS/shopping-cart.js"></script>
</body>
</html>