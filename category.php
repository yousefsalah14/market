
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Drivin-category</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="./bootstrab.main.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="main1.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark text-light p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>Helwan</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>All Day</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>+012 345 6789</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center mx-n2">
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-square btn-link rounded-0" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="main1.php" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
            <h2 class="m-0"><i class="fa fa-car text-primary me-2" href="main1.php" ></i>Drivin</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a class="btn btn-link nav-item nav-link " href="main1.php">Home</a>
                <a href="contact.php" class="nav-item nav-link">Contact</a>  
                <a href="category.php" class="nav-item nav-link">Category</a>            
          
            </div>
            <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block"><h5> Log out<i class="fa fa-arrow-right ms-3"></i></h5></a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Our Categories</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="main1.php">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="contact.php">Contact</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Category</li>

                </ol>
            </nav>
        </div>
    </div><br><br><br><br><br><br>
    <!-- Page Header End -->

 <!-- category start -->
 <section class="foods section bd-container" id="foods">
                <h2 class="section-title" style="color: #092139;" >The best Dishes of the Week</h2>
        
                <div class="foods_container bd-grid" id="cart1">
                <div class="foods_content cart-item">
                <img src="./img/plate3.png" alt="" class="foods_img1" />
                <h4 class="foods_name1">Salad with Onion</h4>
                <span class="foods_detail1">ENGLAND<br></span>
                <span class="foods_detail1">$16.00</span>
                <button href="#" data-name="Orange" data-price="0.5" class="add-to-cart btn btn-primary CART" onclick="addToCart(cart1)">Add to cart</a>


            </div>
                  </div>
                <div class="foods_content cart-item" id=cart2>
                            <img src="./img/plate1.png" alt="" class="foods_img2" />
                            <h4 class="foods_name2">Salad & Barbecue</h4>
                            <span class="foods_detail2"> AUSTRALIA<br></span>
                            <span class="foods_detail2">$25.00</span>
                            <button href="#" data-name="Orange" data-price="0.5" class="add-to-cart btn btn-primary CART" onclick="addToCart(cart2)">Add to cart</a>

                        </div>
                        
                    <a href="#" class="button foods_button">
                      <i class="bx bx-cart"></i>
                    </a>
                  </div>
                  <div class="foods_content cart-item" id="cart3">
                    <img src="./img/plate2.png" alt="" class="foods_img3" />
                    <h4 class="foods_name3">Salad with Avocado</h4>
                    <span class="foods_detail3">ITALY<br></span>
                    <span class="foods_detail3">$20.00</span>
                    <button href="#" data-name="Orange" data-price="0.5" class="add-to-cart btn btn-primary CART" onclick="addToCart(cart3)">Add to cart</a>

              </section>


     <section class="category1">
<ul>
  <li><h5 class="list">Chicken</h5>
    <ul>
      <li class="li"><img src="./img/food1.png"class="catimg cart-item" alt="" id="cart4" />  <p> Padthai Ekkamai<br>MADRID<br>35$</p>
      <button href="#" data-name="Orange" data-price="0.5" class="add-to-cart btn btn-primary" onclick="addToCart(cart4)">Add to cart</a>
</li>
      <li class="li"><img src="./img/food2.jpg" class="catimg cart-item"alt="" id="cart5" />  <p> Inter Restaurant<br> UNITED STATES OF AMERICA<br>33$</p>
      <button href="#" data-name="Orange" data-price="0.5" class="add-to-cart btn btn-primary" onclick="addToCart(cart5)">Add to cart</a>
</li>
      <li class="li"><img src="./img/food3.jpg" class="catimg cart-item"alt=""id="cart6" />  <p> The Grilled Cheese Truck<BR> ITALY<br>25$</p>
      <button href="#" data-name="Orange" data-price="0.5" class="add-to-cart btn btn-primary" onclick="addToCart(cart6)">Add to cart</a>
</li>
      <li class="li"><img src="./img/food4.jpg"class="catimg cart-item" alt="" id="cart7"/>  <p> Churrascaria Palace<br>TURKIYE<br>40$</p>
      <button href="#" data-name="Orange" data-price="0.5" class="add-to-cart btn btn-primary" onclick="addToCart(cart7)">Add to cart</a>
</li>
    </ul>
  </li>
  
</section>
<section class="category2">
  <li><h5 class="list">Dessert</h5>
  <!-- <img src="./img/desert1.jpg" alt=""class="catimag" alt="" /> -->
    <ul>
    <li class="li"><img src="./img/des.jpg" class="catimg cart-item" alt="" id="cart8"/><P> Sadaharu Aoki<br>PARIS<br>32$</p>
    <button href="#" data-name="Orange" data-price="0.5" class="add-to-cart btn btn-primary" onclick="addToCart(cart8)">Add to cart</a>
</li>
    <li class="li"><img src="./img/des1.jpg" class="catimg cart-item"alt="" id="cart9"/> <p>Granja M Viader<br>AUSTRALIA<br>30$</p>
    <button href="#" data-name="Orange" data-price="0.5" class="add-to-cart btn btn-primary" onclick="addToCart(cart9)">Add to cart</a>
</li>
    <li class="li"><img src="./img/des4.jpg" class="catimg cart-item"alt="" id="cart10"/> <p>Jacques Torres Chocolate<br>SWITZERLAND<br>45$</p>
    <button href="#" data-name="Orange" data-price="0.5" class="add-to-cart btn btn-primary" onclick="addToCart(cart10)">Add to cart</a>
</li>
    <li class="li"><img src="./img/desert1.jpg" class="catimg cart-item"alt="" id="cart11"/> <p>The Franklin Fountain<br>ENGLAND<br>25$</p>
    <button href="#" data-name="Orange" data-price="0.5" class="add-to-cart btn btn-primary" onclick="addToCart(cart11)">Add to cart</a>
</li>

    </ul>
  </li>
</ul>
</section>
<section class="category3">
  <li><h5 class="list">Meat</h5>
    <ul>
    <li class="li"><img src="./img/meat1.jpg" class="catimg cart-item" alt="" id="cart12"/><P> Lamb Shank Roganjosh<br> SWITZERLAND<br>55$</p>
    <button href="#" data-name="Orange" data-price="0.5" class="add-to-cart btn btn-primary" onclick="addToCart(cart12)">Add to cart</a>
</li>
    <li class="li"><img src="./img/meat2.jpg" class="catimg cart-item"alt="" id="cart13"/> <p>Military Mutton Curry<br> PARIS<br>60$</p>
    <button href="#" data-name="Orange" data-price="0.5" class="add-to-cart btn btn-primary" onclick="addToCart(cart13)">Add to cart</a>
</li>
    <li class="li"><img src="./img/meat3.jpg" class="catimg cart-item"alt="" id="cart14"/> <p>Lahori Mutton Karahi<br>AMIRICA<br>45$</p>
    <button href="#" data-name="Orange" data-price="0.5" class="add-to-cart btn btn-primary" onclick="addToCart(cart14)">Add to cart</a>
</li>
    <li class="li"><img src="./img/meat4.jpg" class="catimg cart-item"alt="" id="cart15"/> <p>Mutton Resha Gosht<br>Turkiye<br>35$</p>
    <button href="#" data-name="Orange" data-price="0.5" class="add-to-cart btn btn-primary" onclick="addToCart(cart15)">Add to cart</a>
</li>

    </ul>
  </li>
</ul>
</section>
<section class="category4">
  <li><h5 class="list">Pasta</h5>
    <ul>
    <li class="li"><img src="./img/pas1.jpg" class="catimg cart-item" alt="" id="cart16"/><P> Air Fryer Butternut Squash<br>ITALY<br>45$</p>
    <button href="#" data-name="Orange" data-price="0.5" class="add-to-cart btn btn-primary" onclick="addToCart(cart16)">Add to cart</a>
</li>
    <li class="li"><img src="./img/pas2.jpg" class="catimg cart-item"alt="" id="cart17"/> <p>Pasta Bolognese<br>Turkiye<br>50$</p>
    <button href="#" data-name="Orange" data-price="0.5" class="add-to-cart btn btn-primary" onclick="addToCart(cart17)">Add to cart</a>
</li>
    <li class="li"><img src="./img/pas3jpg.jpg" class="catimg cart-item"alt="" id="cart18"/> <p>Creamy Tomato Rigatoni<br>PARIS<br>35$</p>
    <button href="#" data-name="Orange" data-price="0.5" class="add-to-cart btn btn-primary" onclick="addToCart(cart18)">Add to cart</a>
</li>
    <li class="li"><img src="./img/pas4jpg.jpg" class="catimg cart-item"lt="" id="cart19"/> <p>Stovetop Mac and Cheese<br>AMIRICA<br>30$</p>
    <button href="#" data-name="Orange" data-price="0.5" class="add-to-cart btn btn-primary" onclick="addToCart(cart19)">Add to cart</a>
</li>

    </ul>
  </li>
</ul>
<div class="cartt" id ="cartt">
    <div class="li">CART</div><hr/>
    <div id ="li"></div>
</div>
</section>
<style>
.category2{
    margin-left:420px;
    margin-top:-1120px;
}
.category3{
    margin-left:810px;
    margin-top:-1115px;
}
.category4{
    margin-left:1200px;
    margin-top:-1120px;
}
.li{
     background-color:#0C2B4B;
    color: #F3BD00;
    width: 250px;
    text-align:center;
}
.catimg{
    width: 150px;
    height: 150px;
    border-radius:50%;
}
.list{
        color:#0C2B4B;
        background-color:#F3BD00;
        width:80px;
        text-align:center;
}
</style>

<?php
// session_start();

// Check if the product has been added to the cart
if(isset($_POST['add_to_cart'])) {
    if(isset($_SESSION['cart'])) {
        $item_array_id = array_column($_SESSION['cart'], "product_id");
        if(!in_array($_POST['product_id'], $item_array_id)) {
            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id'],
                'product_name' => $_POST['product_name'],
                'product_price' => $_POST['product_price'],
                'product_quantity' => $_POST['product_quantity']
            );
            $_SESSION['cart'][$count] = $item_array;
        } else {
            echo "<script>alert('Product is already added to the cart')</script>";
        }
    } else {
        $item_array = array(
            'product_id' => $_POST['product_id'],
            'product_name' => $_POST['product_name'],
            'product_price' => $_POST['product_price'],
            'product_quantity' => $_POST['product_quantity']
        );
        $_SESSION['cart'][0] = $item_array;
    }
}

// Remove item from the cart
if(isset($_GET['action'])) {
    if($_GET['action'] == 'delete') {
        foreach($_SESSION['cart'] as $key => $value) {
            if($value['product_id'] == $_GET['id']) {
                unset($_SESSION['cart'][$key]);
                echo "<script>alert('Product has been removed from the cart')</script>";
                echo "<script>window.location = 'cart.php'</script>";
            }
        }
    }
}

// Display items in the cart
function cart_display() {
    $total = 0;
    foreach($_SESSION['cart'] as $key => $value) {
        $subtotal = $value['product_price'] * $value['product_quantity'];
        $total += $subtotal;
        echo "<tr>";
        echo "<td>".$value['product_name']."</td>";
        echo "<td>".$value['product_price']."</td>";
        echo "<td>".$value['product_quantity']."</td>";
        echo "<td>".$subtotal."</td>";
        echo "<td><a href='cart.php?action=delete&id=".$value['product_id']."'>Remove</a></td>";
        echo "</tr>";
    }
    echo "<tr>";
    echo "<td colspan='3'>Total</td>";
    echo "<td>".$total."</td>";
    echo "<td></td>";
    echo "</tr>";
}
?>
    <!-- category End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer my-6 mb-0 py-6 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Get In Touch</h4>
                    <h2 class="text-primary mb-4"><i class="fa fa-car text-white me-2"></i>Drivin</h2>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Helwan</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Popular Links</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Newsletter</h4>
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control p-3 border-0" placeholder="Your Email Address">
                            <button class="btn btn-primary">Sign Up</button>
                        </div>
                    </form>
                    <h6 class="text-white mt-4 mb-3">Follow Us</h6>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-light me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright text-light py-4 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a href="#">Drivin</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/* This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. */-->
                    <br>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="./main1.js"></script>
</body>

</html>