<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAFE BDP&#169; | @yield('title')</title>
    <link rel="stylesheet" href={{asset("assets/css/style.css")}}>
</head>
<body>
    <!-- <div class="container">
        <header class="headernav">
            <nav class="navbar">
                <a href="#"><li>MENU</li></a>
                <a href="#"><li>ORDER</li></a>
                <a href="#"><li>CONTACT</li></a>
                <a href="#"><li>REVIEWS</li></a>
            </nav>
        </header>
        <div class="garis"></div>
        @yield('content')
    </div> -->

<div class="container-nav">
    <div class="navlogo">
        <div class="logo-image">
            <img class="logoyaw" src="assets/images/logo-b.png" alt="">
        </div>
        <div class="logo-name">
            <p>Cafe BDP</p>
        </div>
    </div>
    <div class="navbar">
        <nav class="navbar">
            <a href="/menu" class="menu-nav"><li>Menu</li></a>
            <a href="/order" class="order-nav"><li>Order</li></a>
            <a href="/reviews" class="reviews-nav"><li>Reviews</li></a>
            <a href="/contact" class="contact-nav"><li>Contact</li></a>
        </nav>
    </div>
</div>

</body>
</html>