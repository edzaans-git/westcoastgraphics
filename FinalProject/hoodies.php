<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Gochi+Hand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

    <script type="text/javascript" src="js/jquery.shop.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles.css">
    <title>West Coast Graphics</title>
</head>

<body>


    <?php
    include 'nav.php';
    ?>

    <!--Main container-->




    <div id="site">
        <div id="content">

            <!--First row-->
            <div class="row mx-auto">

                <div class="col-lg-2">

                    <?php
                    include 'includes/categories.php';
                    ?>

                    <div class="col-lg-10 mt-4 mt-5">
                        <div class="row text-center">
                            <!--Product card-->
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card h-100">
                                    <a href="#"><img class="card-img-top img-fluid" src="img/Wheelie.png" alt="Wheelie Shirt"></a>
                                    <div class="card-body" data-name="Wheelie T Shirt" data-price="15">
                                        <h3 class="product-name">Wheelie T Shirt</h3>
                                        <h2 class="product-price">&euro; 15</h2>
                                        <form class="add-to-cart" action="cart.php" method="get">
                                            <div>
                                                <label for="qty-1">Quantity</label>
                                                <input type="text" name="qty-1" id="qty-1" class="qty" value="1" />
                                            </div>
                                            <p><input type="submit" value="Add to cart" class="btn btn-primary mt-3" /></p>
                                        </form>
                                    </div>
                                </div>

                            </div>
                            <!--Product card-->
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card h-100">
                                    <a href="#"><img class="card-img-top img-fluid" src="img/StraightLockdownShirt.jpg" alt="Custom Shirt"></a>
                                    <div class="card-body" data-name="Lockdown T Shirt" data-price="15">
                                        <h3 class="product-name">Lockdown T Shirt</h3>
                                        <h2 class="product-price">&euro; 15</h2>
                                        <form class="add-to-cart" action="cart.php" method="get">
                                            <div>
                                                <label for="qty-1">Quantity</label>
                                                <input type="text" name="qty-1" id="qty-1" class="qty" value="1" />
                                            </div>
                                            <p><input type="submit" value="Add to cart" class="btn btn-primary mt-3" /></p>
                                        </form>
                                    </div>
                                </div>

                            </div>
                            <!--Product card-->
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card h-100">
                                    <a href="#"><img class="card-img-top img-fluid" src="img/MonkiiWhite.png" alt="Custom Shirt"></a>
                                    <div class="card-body" data-name="Monkii T Shirt" data-price="15">
                                        <h3 class="product-name">Monkii T Shirt</h3>
                                        <h2 class="product-price">&euro; 15</h2>
                                        <form class="add-to-cart" action="cart.php" method="get">
                                            <div>
                                                <label for="qty-1">Quantity</label>
                                                <input type="text" name="qty-1" id="qty-1" class="qty" value="1" />
                                            </div>
                                            <p><input type="submit" value="Add to cart" class="btn btn-primary mt-3" /></p>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <!--First row ends here-->

                <!--Second row starts here-->

                <div class="row mt-5 mx-auto">

                    <div class="col-lg-2">

                    </div>

                    <div class="col-lg-10 mt-4">
                        <div class="row text-center">
                            <!--Product card-->
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card h-100">
                                    <a href="#"><img class="card-img-top img-fluid" src="img/430.jpg" alt=""></a>
                                    <div class="card-body" data-name="Tshirt-1" data-price="10">
                                        <h3 class="product-name">Tshirt 1</h3>
                                        <h2 class="product-price">&euro; 10</h2>
                                        <form class="add-to-cart" action="cart.php" method="get">
                                            <div>
                                                <label for="qty-1">Quantity</label>
                                                <input type="text" name="qty-1" id="qty-1" class="qty" value="1" />
                                            </div>
                                            <p><input type="submit" value="Add to cart" class="btn btn-primary mt-3" /></p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--Product card-->
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card h-100">
                                    <a href="#"><img class="card-img-top img-fluid" src="img/430.jpg" alt=""></a>
                                    <div class="card-body" data-name="Tshirt-2" data-price="20">
                                        <h3 class="product-name">Tshirt 2</h3>
                                        <h2 class="product-price">&euro; 20</h2>
                                        <form class="add-to-cart" action="cart.php" method="get">
                                            <div>
                                                <label for="qty-1">Quantity</label>
                                                <input type="text" name="qty-1" id="qty-1" class="qty" value="1" />
                                            </div>
                                            <p><input type="submit" value="Add to cart" class="btn btn-primary mt-3" /></p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--Product card-->
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card h-100">
                                    <a href="#"><img class="card-img-top img-fluid" src="img/430.jpg" alt=""></a>
                                    <div class="card-body" data-name="Tshirt 3" data-price="30">
                                        <h3 class="product-name">Tshirt 3</h3>
                                        <h2 class="product-price">&euro; 30</h2>
                                        <form class="add-to-cart" action="cart.php" method="get">
                                            <div>
                                                <label for="qty-1">Quantity</label>
                                                <input type="text" name="qty-1" id="qty-1" class="qty" value="1" />
                                            </div>
                                            <p><input type="submit" value="Add to cart" class="btn btn-primary mt-3" /></p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--Second row ends here-->

        </div>
    </div>

    <!--Main container ends here-->
    <footer>
        <?php
        include 'footer.php';
        ?>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $("h1").addClass("animated bounce");
        });
    </script>
</body>

</html>