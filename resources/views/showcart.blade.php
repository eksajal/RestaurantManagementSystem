<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <title>Klassy Cafe - Restaurant HTML Template</title>
    <!--
    
TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">


    <style>
        .table_deg {
            margin-left: 400px;
            margin-top: 150px;
            margin-bottom: 150px;
        }

        th,
        td {

            border-bottom: 3px solid rgb(101, 9, 9);
            font-weight: bold;
            padding: 15px;
            text-align: center;

        }

        table {
            border-collapse: collapse;
        }

        .table_deg img {

            height: 150px;
            width: 220px;

        }
    </style>

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="assets/images/klassy-logo.png" align="klassy cafe html template">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>

                            <!--
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
                            <li class="scroll-to-section"><a href="#menu">Menu</a></li>
                            <li class="scroll-to-section"><a href="#chefs">Chefs</a></li>
                            <li class="submenu">
                                <a href="javascript:;">Features</a>
                                <ul>
                                    <li><a href="#">Features Page 1</a></li>
                                    <li><a href="#">Features Page 2</a></li>
                                    <li><a href="#">Features Page 3</a></li>
                                    <li><a href="#">Features Page 4</a></li>
                                </ul>
                            </li>
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li>

                            <li class="scroll-to-section">

                                @auth

                                    <a href="{{ url('/showcart', Auth::user()->id) }}">

                                        Cart[{{ $count }}]

                                    </a>

                                @endauth

                                @guest

                                    <a href="#">Cart[0]</a>

                                @endguest

                            </li>


                            <li class="scroll-to-section">
                                @if (Route::has('login'))
                                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                        @auth
                                <li>

                                    <x-app-layout>

                                    </x-app-layout>

                                </li>
                            @else
                                <li class="scroll-to-section"><a href="{{ route('login') }}"
                                        class="text-sm text-gray-700 underline">Login</a>
                                </li>

                                @if (Route::has('register'))
                                    <li class="scroll-to-section"><a href="{{ route('register') }}"
                                            class="text-sm text-gray-700 underline">Register</a>
                                    </li>
                                @endif
                            @endauth
                </div>
                @endif
                </li>
                </ul>

                <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->





    <div class="table_deg">

        <h1
            style="

        color: red; 
        padding-bottom: 20px; 
        font-size: 50px;
        display: inline-block;
        text-align: center;

        ">
            Items Added:</h1>

        <table>

            <tr>

                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Image</th>
                <th>Action1</th>

            </tr>

    <form action="{{ url('orderconfirm') }}" method="POST">
        @csrf
            @foreach ($data as $item)
                <tr>
                    <td>
                        <input type="text" name="foodname[]" value="{{ $item->title }}" hidden>
                        {{ $item->title }}
                    </td>
                    <td>
                        <input type="text" name="price[]" value="{{ $item->price }}" hidden>
                        {{ $item->price }}$
                    </td>
                    <td>
                        <input type="text" name="quantity[]" value="{{ $item->quantity }}" hidden>
                        {{ $item->quantity }}
                    </td>
                    <td><img src="/foodimage/{{ $item->image }}"></td>
                    <td>
                        @foreach ($data2 as $cartItem)
                            @if ($cartItem->food_id == $item->food_id)
                                <a class="btn btn-danger" href="{{ url('/remove', $cartItem->id) }}">Remove</a>
                            @break
                        @endif
                    @endforeach
                </td>
            </tr>
        @endforeach
    </table>

    <div style="padding: 15px; position: relative; left: 25%;">
        <button type="button" class="btn btn-primary" id="order">Order Now</button>
    </div>

    <div id="appear" style="padding: 15px; position: relative; left: 20%; display: none;">
        <div>
            <label for="name">Name</label>
            <input style="height: 30px" width="65px" type="text" id="name" name="name"
                placeholder="Name">
        </div>
        <br>
        <div>
            <label for="phone">Phone Number</label>
            <input style="height: 30px" width="65px" type="number" id="phone" name="phone"
                placeholder="Number">
        </div>
        <br>
        <div>
            <label for="address">Address</label>
            <input style="height: 30px" width="65px" type="text" id="address" name="address"
                placeholder="Address">
        </div>
        <br>
        <div>
            <input class="btn btn-success" type="submit" value="Confirm Order">
            <button type="button" class="btn btn-danger" id="cancel" style="margin-left: 15px;">Cancel</button>
        </div>
    </div>
</form>
</div>










<!-- jQuery -->

<script>
    $("#order").click(function() {

        $("#appear").show();

    });

    $("#cancel").click(function() {

        $("#appear").hide();

    });
</script>


<script src="assets/js/jquery-2.1.0.min.js"></script>

<!-- Bootstrap -->
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- Plugins -->
<script src="assets/js/owl-carousel.js"></script>
<script src="assets/js/accordions.js"></script>
<script src="assets/js/datepicker.js"></script>
<script src="assets/js/scrollreveal.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/imgfix.min.js"></script>
<script src="assets/js/slick.js"></script>
<script src="assets/js/lightbox.js"></script>
<script src="assets/js/isotope.js"></script>

<!-- Global Init -->
<script src="assets/js/custom.js"></script>
<script>
    $(function() {
        var selectedClass = "";
        $("p").click(function() {
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
            $("#portfolio div").not("." + selectedClass).fadeOut();
            setTimeout(function() {
                $("." + selectedClass).fadeIn();
                $("#portfolio").fadeTo(50, 1);
            }, 500);

        });
    });
</script>
</body>

</html>
