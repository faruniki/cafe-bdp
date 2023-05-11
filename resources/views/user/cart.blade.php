<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAFE BDP&#169; | Menu</title>
    <link rel="icon" href="{{asset('assets/images/logo.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('assets/css/order-menu.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
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


<!-- <div class="eaw">  
    <a href="{{ url('/menu') }}"></a><button class="button-30" role="button"><i class="apahayoo fa-solid fa-basket-shopping"></i><p>IDR sekian</p><p class="jikakalau">sekian</p></button>
</div> -->

<center>
    <div class="mantapyaw">
        <p class="rekomen2">Your</p><p class="rekomen">Carts</p>
    </div>
</center>

<div class="table-container">
    <table id="cart" class="table-order">
        <thead>
            <tr class="upper-order">
                <th class="desc-order-title">Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Remove</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
        <form action="{{route('checkout')}}" method="post">
        @csrf
        @php $total = 0 @endphp
        @if(session('cart'))
            @foreach(session('cart') as $id => $details)
                @php $total += $details['price'] * $details['quantity'] @endphp
                <tr data-id="{{ $id }}">
                    <td class="desc-order" data-th="Product">
                        <img src="{{ $details['image'] }}" alt="">
                        <p class="order-title">{{ $details['name'] }}</p>
                        <input type="hidden" name="id_product" value="{{ $id }}">
                    </td>
                    <td data-th="Price">Rp {{ $details['price'] }}</td>
                    <td data-th="Quantity">
                        <input type="number" name="total_pesanan" value="{{ $details['quantity'] }}" class="quantity cart_update" min="1" />
                    </td>
                    <td data-th="">
                        <button class="remove-button"><i class="fa-solid fa-xmark"></i></button>
                    </td>
                    <td data-th="Subtotal">
                        <input type="hidden" name="totalPrice" value="{{ $details['price'] * $details['quantity'] }}">
                        {{ $details['price'] * $details['quantity'] }}</td>
                </tr>
            @endforeach
        @endif
        </tbody>
        <tfoot>
            <div class="eaw">  
                <button class="button-30" role="button"><i class="apahayoo fa-solid fa-basket-shopping"></i><p>IDR {{ $total }}</p><p class="jikakalau">{{ count((array) session('cart')) }}</p></button>
            </div>
        </tfoot>
    </table>
    </form>
</div>


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

    <script type="text/javascript">
  
        $(".cart_update").change(function (e) {
            e.preventDefault();
      
            var ele = $(this);
      
            $.ajax({
                url: "{{ route('update_cart') }}",
                method: "patch",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.parents("tr").attr("data-id"), 
                    quantity: ele.parents("tr").find(".quantity").val()
                },
                success: function (response) {
                   window.location.reload();
                }
            });
        });
      
        $(".remove-button").click(function (e) {
            e.preventDefault();
      
            var ele = $(this);
      
            if(confirm("Do you really want to remove?")) {
                $.ajax({
                    url: "{{route('remove_from_cart') }}",
                    method: "DELETE",
                    data: {
                        _token: '{{ csrf_token() }}', 
                        id: ele.parents("tr").attr("data-id")
                    },
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });
      
    </script>

</body>
</html>