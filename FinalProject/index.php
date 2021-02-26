<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Shirt Factory</title>
</head>

<body>


    <!--Navbar starts here-->
    <div class="container-fluid">
        <nav class="navbar navbar-dark bg-dark navbar-expand-md py-0 sticky-top" id="mainNav">
            <a href="#" class="navbar-brand">
                SHIRTS
            </a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navLinks" aria-label="toggle navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse  justify-content-end" id="navLinks">
                <ul class="navbar-nav  justify-content-end">
                    <li class="nav-item">
                        <a href="" class="nav-link">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">STORE</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">QUOTE</a>
                    </li>

                    <li class="nav-item">
                    <a href="signup.php" class="nav-link link-small">Sign Up
                            <img src="https://img.icons8.com/dusk/32/000000/add-user-male.png" />
                        </a>
                    </li>
                    <li class="nav-item ">
                    <a href="login.php" class="nav-link link-small">Log In
                        <img src="https://img.icons8.com/nolan/32/login-rounded-right.png" />
                            <!--Change icon size in the link(64px is default)-->
                        </a>
                  
                    </li>
                    <li class="nav-item ">
                        <a href="" class="nav-link link-small">Your Cart
                            <img src="https://img.icons8.com/fluent/32/000000/fast-cart.png" />
                        </a>

                    </li>
                </ul>
            </div>
        </nav>

        <!--Navbar ends here-->


        <!--Main container-->
        <section class="header">
            <img src="https://novationmusic.com/sites/novation/files/TShirtsheader-2560-1000.png" class="img-fluid"
                alt="Responsive image">
</section>
        <!-- Remove the container if you want to extend the Footer to full width. -->
        <div class="my-5">

            <!-- Footer -->
            <footer class="text-center text-lg-start text-white" style="background-color: #929fba">
                <!-- Grid container -->
                <div class="container p-4 pb-0">
                    <!-- Section: Links -->
                    <section class="">
                        <!--Grid row-->
                        <div class="row">
                            <!-- Grid column -->
                            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                                <h6 class="text-uppercase mb-4 font-weight-bold">
                                    Company name
                                </h6>
                                <p>
                                    Here you can use rows and columns to organize your footer
                                    content. Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit.
                                </p>
                            </div>
                            <!-- Grid column -->

                            <hr class="w-100 clearfix d-md-none" />

                            <!-- Grid column -->
                            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                                <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
                                <p>
                                    <a class="text-white">T-Shirts</a>
                                </p>
                                <p>
                                    <a class="text-white">Hoodies</a>
                                </p>
                                <p>
                                    <a class="text-white">Decals</a>
                                </p>
                                <p>
                                    <a class="text-white">Custom</a>
                                </p>
                            </div>
                            <!-- Grid column -->

                            <hr class="w-100 clearfix d-md-none" />

                            <!-- Grid column -->
                            <hr class="w-100 clearfix d-md-none" />

                            <!-- Grid column -->
                            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                                <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                                <p><i class="fas fa-home mr-3"></i> Galway, Ireland</p>
                                <p><i class="fas fa-envelope mr-3"></i> info@westcoastvinyl.com</p>
                                <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                                <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                                <h6 class="text-uppercase mb-4 font-weight-bold">Follow us</h6>

                                <!-- Facebook -->
                                <a href="#!" role="button">
                                    <img src="https://img.icons8.com/nolan/64/facebook-new.png" />
                                </a>

                                <!-- Twitter -->
                                <a href="#!">
                                    <img src="https://img.icons8.com/cute-clipart/64/000000/instagram-new.png" />
                                </a>
                            </div>
                        </div>
                        <!--Grid row-->
                    </section>
                    <!-- Section: Links -->
                </div>
                <!-- Grid container -->

                <!-- Copyright -->
                <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
                    © 2020 Copyright:
                    <a class="text-white" href="https://www.westcoastvinyl.com">WestCoastVinylGraphics</a>
                </div>
                <!-- Copyright -->
            </footer>
            <!-- Footer -->
        </div>
    </div>








    <!--Bootstrap JS,jQuery and Popper here-->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
        crossorigin="anonymous"></script>

    <script>
        $(function () {
            $(document).scroll(function () {
                var $nav = $("#mainNav");
                $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
            });
        });
    </script>

</body>


</html>