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
    <title>BLEST Fashion</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">  
      <link rel="icon" href="../img/logo-icon.png" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/index.css">
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
                <li><a href="index.php"  class="active">Home</a></li>
                <li><a href="items.php">Items</a></li>
                <li><a href="logout.php">Log out</a></li> 
            </ul>
                    
                    
                    
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
    </header>   


   <div class="square1 "> 
       <div class="shop-information">
           <h1><span>Best Price</span> This Year</h1>
           <p>BLEST fashion offers your very comfortable time on walking and exercises</p>
           <a href="#sec2">
           <button>Shop now</button>
       </a>
       </div>

       
       
    <div class="background-image">
        <img src="../img/backgroud.png" alt="">
    </div>

</div>



<!--------------------------------------------------------------------------------------------------PRODUKTET DHE KATERORI I DYTE/dizajnohet dhe pjesa e BEST WAtches ------------------- --------------------------------->




<div class="square2  ">

    <div class="heading reveal2">
    <h1><span>New</span> Arrivals</h1>
    <hr>
</div>



<div class="row reveal ">

   <div class="box" id="item1"> 
    <img src="../img/product1.png" class="products" alt="PRODUKTI1">
    <span>&#9733;&#9733;&#9733;&#9733;&#9733;</span>
    <h3 >Nike</h3>
    <h1> $90.00</h1>
    <button class="btn-for-shop" onclick="addToCart(item1)">add to cart</button>
</div>


<div class="box" id="item2"> 
    <img src="../img/product2.png" class="products" alt="PRODUKTI1">
    <span>&#9733;&#9733;&#9733;&#9733;&#9733;</span>
    <h3>Gucci</h3>
    <h1>$58.89</h1>
    <button class="btn-for-shop" onclick="addToCart(item2)">add to cart</button>
</div>



<div class="box" id="item3"> 
    <img src="../img/product3.png" class="products" alt="PRODUKTI1">
    <span>&#9733;&#9733;&#9733;&#9733;&#9733;</span>
    <h3>Nike</h3>
    <h1>$125.99</h1>
    <button class="btn-for-shop" onclick="addToCart(item3)">add to cart</button>
</div>


<div class="box" id="item4"> 
    <img src="../img/product4.png" class="products" alt="PRODUKTI1">
    <span>&#9733;&#9733;&#9733;&#9733;&#9733;</span>
    <h3>Louis Vuitton</h3>
    <h1>$63.90</h1>
    <button class="btn-for-shop" onclick="addToCart(item4)">add to cart</button>
</div>

        </div>
</div>



<!------------------------------------------------------------------------------------------Pjesa e autumn----------------------------------------------->

<div class="square3 ">

    <div class="spring-information">
        <h1 class=" reveal2">Spring Collection <br>UP TO 20% OFF</h1>
        <a href="items.php">
        <button class="btn-for-shop" class="btn reveal2">shop now</button>
    </a>
    </div>

</div>


<!------------------------------------------------------------------------------------------e dizajnuar me siper----------------------------------------------->

<section id="sec2">

<div class="square2 ">

    <div class="heading reveal">
        <h1> <span>Watches</span> </h1>
        <hr>
    </div>
    


<div class="row reveal2">

   <div class="box" id="item5"> 
    <img src="../img/product5.png"  class="products" alt="PRODUKTI5">
    <span>&#9733;&#9733;&#9733;&#9733;&#9733;</span>
    <h3>LmiStone</h3>
    <h1>$190.00</h1>
    <button class="btn-for-shop" onclick="addToCart(item5)">add to cart</button>
</div>


<div class="box" id="item6"> 
    <img src="../img/product6.png" class="products" alt="PRODUKTI6">
    <span>&#9733;&#9733;&#9733;&#9733;&#9733;</span>
    <h3>Calvin Klein</h3>
    <h1>$78.89</h1>
    <button class="btn-for-shop" onclick="addToCart(item6)">add to cart</button>
</div>



<div class="box" id="item7"> 
    <img src="../img/product7.png" class="products" alt="PRODUKTI7">
    <span>&#9733;&#9733;&#9733;&#9733;&#9733;</span>
    <h3>Fossil</h3>
    <h1>$189.99</h1>
    <button class="btn-for-shop" onclick="addToCart(item7)">add to cart</button>
</div>


<div class="box" id="item8"> 
    <img src="../img/product8.png" class="products" alt="PRODUKTI8">
    <span>&#9733;&#9733;&#9733;&#9733;&#9733;</span>
    <h3>Rolex</h3>
    <h1>$248.90</h1>
    <button class="btn-for-shop" onclick="addToCart(item8)">add to cart</button>
</div>

    </div>
</div>
</section>

<!--------------------------------------------------------------------------------------------------------eshte e dizajnuar te square2 ------------------------------------------------------------------------------------------->

<div class="square4  ">

    <div class="heading reveal2">
        <h1>Best <span>Sales</span>  </h1>
        <hr>
    </div>
    


<div class="row reveal">

   <div class="box" id="item9"> 
    <img src="../img/product9.png" class="products" alt="PRODUKTI9">
    <span>&#9733;&#9733;&#9733;&#9733;&#9733;</span>
    <h3>Adidas</h3>
    <h1>$85.00</h1>
    <button class="btn-for-shop" onclick="addToCart(item9)">add to cart</button>
</div>


<div class="box" id="item10"> 
    <img src="../img/product10.png" class="products" alt="PRODUKTI10">
    <span>&#9733;&#9733;&#9733;&#9733;&#9733;</span>
    <h3>Calvin Klein</h3>
    <h1>$258.39</h1>
    <button class="btn-for-shop" onclick="addToCart(item10)">add to cart</button>
</div>



<div class="box" id="item11"> 
    <img src="../img/product11.png" class="products" alt="PRODUKTi11">
    <span>&#9733;&#9733;&#9733;&#9733;&#9733;</span>
    <h3>Lacoste</h3>
    <h1>$129.49</h1>
    <button class="btn-for-shop" onclick="addToCart(item11)">add to cart</button>
</div>


<div class="box" id="item12"> 
    <img src="../img/product12.png" class="products" alt="PRODUKTI12">
    <span>&#9733;&#9733;&#9733;&#9733;&#9733;</span>
    <h3>Puma</h3>
    <h1>$58.99</h1>
    <button  class="btn-for-shop" onclick="addToCart(item12)">add to cart</button>
</div>

    </div>
</div><br>




<!-- -----------------------------------------------------------------------------------------------------FOOTERIII *---------------------------- --------- - -->

<footer>
    <div class="footer-logo reveal2">
        <img src="../img/footer-logo.jpeg" alt="FOOTER logo">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident reprehenderit earum maxime quas. Nostrum, eos saepe laudantium aspernatur aliquam reiciendis, libero repellat delectus dolorem eaque sit illo esse repudiandae minima!</p>
    </div>

    <div class="footer-featured ">
        <h1 class="reveal2">FEATURED</h1>
        <h3 class="reveal2">Men</h3>
        <h3 class="reveal2">Women</h3>
        <h3 class="reveal2">Boys</h3>
        <h3 class="reveal2">Girls</h3>
        <h3 class="reveal2">Shoes</h3>
        <h3 class="reveal2">New Arrivals</h3>
        <h3 class="reveal2">Watches</h3>
        <h3 class="reveal2">Best Sales</h3>
    </div>

 <div class="footer-contact">
        <h1 class="reveal2">contact US</h1>
        <h3 class="reveal2">address</h3>
        <h4 class="reveal2">Prishtnë , Kosovo</h4>

        <h3 class="reveal2">phone</h3>
        <h4 class="reveal2">(+383) 49-674-727</h4>

        <h3 class="reveal2">email</h3>
        <h4 class="reveal2">blendstatovci2@gmail.com</h4>

        <h3 class="reveal2">Follow</h3>
  <ul class="social-media reveal2" >
     <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true" style="color: rgb(255, 229, 229);"></i></a></li>
     <li><a href="#"><i class="fa fa-instagram" aria-hidden="true" style="color: rgb(255, 229, 229);"></i></a></li>
     <li><a href="#"><i class="fa fa-twitter" aria-hidden="true" style="color: rgb(255, 229, 229);"></i></a></li>
 </ul>
 </div>


    <div class="footer-copyrights">
        Copyrights 	&copy;2022   All rights reserverd
    </div>
</footer>




    <!-- FILET E JAVASCRIPTIT -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="../JS/spinner.js"></script>
<script src="../JS/shopping-cart.js"></script>
<script src="../JS/scrolling-show-content.js"></script>
<script src="../JS/localStorage.js"></script>

</body>
</html>