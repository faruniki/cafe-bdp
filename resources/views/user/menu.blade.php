<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAFE BDP&#169; | Menu</title>
    <link rel="icon" href="{{asset('assets/images/logo.png')}}" type="image/x-icon">
    <link rel="stylesheet" href={{asset("assets/css/order.css")}}>
    <script src="https://kit.fontawesome.com/96dcb92c2c.js" crossorigin="anonymous"></script>
</head>
<body>

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
            <a href="/" class="menu-nav"><li>Home</li></a>
            <a href="/menu" class="order-nav"><li>Menu</li></a>
            <a href="/reviews" class="reviews-nav"><li>Review</li></a>
            <a href="/contact" class="contact-nav"><li>Contact</li></a>
        </nav>
    </div>
</div>
<!-- 
<div class="form-order">
    <form action="" class="form-order-child">
        <center>
            <p class="order-here">Order Here</p>
            <p class="check">Please, check your order again before order</p>
        <select name="menu" id="menu">
            <option value="title">Select Menu</option>
            <option>Chicken Turkey with Special Dressing</option>
            <option>Healthy Seblak with Knoblauch</option>
            <option>Vanilla Whipped Waffle</option>
            <option>Modern Rissole</option>
            <option>Mac n Beef Teriyaki</option>
        </select><br>
        <select name="portion" id="portion">
            <option value="much">How Much?</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <br>
        <button class="order">ORDER</button>
        </center>
    </form>
</div> -->

<div class="eaw">  
    <a href="/cart" class="button-30" role="button"><i class="apahayoo fa-solid fa-cart-shopping"></i>Check Out <p class="jikakalau">{{ count((array) session('cart')) }}</p></a>
</div>

<center>
    <div class="mantapyaw">
        <p class="rekomen2">Our</p><p class="rekomen">Menus</p>
    </div>
</center>

@foreach($products as $product)
<div class="isi-menu">
    <div class="kiri-menu">
        <p class="subjudul-menu">IDR {{ $product->price }}</p>
        <p class="judul-menu">{{ $product->name }}</p>
        <p class="desk-menu">{{ $product->description }}</p>
        <a href="{{ route('add_to_cart', $product->id) }}"><p class="order-now">Add To Cart</p></a>
        <a href="/reviews" class="review-this">Review This Food</a>
    </div>
    <div class="kanan-menu">
        <img src="{{ $product->image }}" alt="">
    </div>
</div>
@endforeach

    <footer>
        <div class="footercoi">
            <div class="footlogo">
                <div class="ea">
                    <div class="anak-ea">
                        <p class="wikbooksfoot">CAFE BDP&#169;</p>
                        <p class="wikbooksfoot2">Good Food<br>Good Mood.</p>
                    </div>
                    <div class="anak2-ea">
                        
                    </div>
                </div>
                <div class="eaa">
                    <p class="judul2-ea">About Us</p>
                        <p class="desk2-ea">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero cum iste doloribus architecto placeat facilis error debitis aut molestiae quam, id, quod, voluptates dolorum dicta corporis fugiat nostrum beatae officia.</p>

                </div>
            </div>
            <div class="foot1">
                <ul>
                    <p class="special-1"><b>Menus</b></p>
                    <li><a href="/books">Main Courses</a></li>
                    <li><a href="/books">Appetizers</a></li>
                    <li><a href="/books">Desserts</a></li>
                    <li><a href="/books">Drinks</a></li>
                    <li><a href="/books">Snacks</a></li>
                </ul>
            </div>
            <div class="foot2">
                <ul>
                    <p class="special-2"><b>Pages</b></p>
                    <li><a href="/menu">Menu</a></li>
                    <li><a href="/order">Order</a></li>
                    <li><a href="/reviews">Review</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </div>
            <div class="foot3">
                <ul>
                    <p class="special-3"><b>Action</b></p>
                    <li><a href="/home">Home</a></li>
                </ul>
            </div>
        </div>
    </footer>

</body>
</html>