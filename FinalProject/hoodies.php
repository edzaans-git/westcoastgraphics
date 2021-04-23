<?php

session_start();

require 'database.php';

if (isset($_SESSION['user_id'])) {

    $records = $conn->prepare('SELECT id,email,password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = NULL;

    if (count($results) > 0) {
        $user = $results;
    }
}

?>

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

                    <div class="col-lg-10 mt-4">
                        <div class="row text-center">
                            <!--Product card-->
                            <div class="col-sm-6 col-lg-4 col-md-4 mb-4">
                                <div class="card h-100">
                                    <a href="#"><img class="card-img-top img-fluid" src="img/custom-hoodie10.jpg" alt="Custom Hoodie"></a>
                                    <a href="" onclick="window.open('img/custom-hoodie10.jpg','targetWindow', 'toolbar=no, location=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1090px, height=550px, top=25px left=120px'); return false;">Click here to expand</a>
                                    <div class="card-body" data-name="Custom text hoodie" data-price="40">
                                        <h3 class="product-name">Custom text hoodie</h3>
                                        <h2 class="product-price">&euro; 40</h2>
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
                            <div class="col-sm-6 col-lg-4 col-md-4 mb-4">
                                <div class="card h-100">
                                    <a href="#"><img class="card-img-top img-fluid" src="img/custom-hoodie8.jpg" alt="Custom Hoodie"></a>
                                    <a href="" onclick="window.open('img/custom-hoodie8.jpg','targetWindow', 'toolbar=no, location=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1090px, height=550px, top=25px left=120px'); return false;">Click here to expand</a>
                                    <div class="card-body" data-name="Custom text hoodie" data-price="40">
                                        <h3 class="product-name">Custom text hoodie</h3>
                                        <h2 class="product-price">&euro; 40</h2>
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
                            <div class="col-sm-6 col-lg-4 col-md-4 mb-4 d-none d-md-block">
                                <!--d-md-block HIDES item at given viewport-->
                                <div class="card h-100">
                                    <a href="#"><img class="card-img-top img-fluid" src="img/custom-hoodie11.jpg" alt="Custom Hoodie"></a>
                                    <a href="" onclick="window.open('img/custom-hoodie11.jpg','targetWindow', 'toolbar=no, location=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1090px, height=550px, top=25px left=120px'); return false;">Click here to expand</a>
                                    <div class="card-body" data-name="Custom text hoodie" data-price="40">
                                        <h3 class="product-name">Custom text hoodie</h3>
                                        <h2 class="product-price">&euro; 40</h2>
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
                            <div class="col-sm-6 col-lg-4 col-md-4 mb-4">
                                <div class="card h-100">
                                    <a href="#"><img class="card-img-top img-fluid" src="img/custom-hoodie11.jpg" alt="Custom Hoodie"></a>
                                    <a href="" onclick="window.open('img/img/custom-hoodie11.jpg','targetWindow', 'toolbar=no, location=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1090px, height=550px, top=25px left=120px'); return false;">Click here to expand</a>
                                    <div class="card-body" data-name="Custom text hoodie" data-price="40">
                                        <h3 class="product-name">Custom text hoodie</h3>
                                        <h2 class="product-price">&euro; 40</h2>
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
                            <div class="col-sm-6 col-lg-4 col-md-4 mb-4">
                                <div class="card h-100">
                                    <a href="#"><img class="card-img-top img-fluid" src="img/custom-hoodie12.jpg" alt="Custom Hoodie"></a>
                                    <a href="" onclick="window.open('img/custom-hoodie12.jpg','targetWindow', 'toolbar=no, location=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1090px, height=550px, top=25px left=120px'); return false;">Click here to expand</a>
                                    <div class="card-body" data-name="Custom text hoodie" data-price="40">
                                        <h3 class="product-name">Custom text hoodie</h3>
                                        <h2 class="product-price">&euro; 40</h2>
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
                            <div class="col-sm-6 col-lg-4 col-md-4 mb-4 d-none d-md-block">
                                <!--d-md-block HIDES item at given viewport-->
                                <div class="card h-100">
                                    <a href="#"><img class="card-img-top img-fluid" src="img/custom-hoodie10.jpg" alt="Custom Hoodie"></a>
                                    <a href="" onclick="window.open('img/custom-hoodie10.jpg','targetWindow', 'toolbar=no, location=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1090px, height=550px, top=25px left=120px'); return false;">Click here to expand</a>
                                    <div class="card-body" data-name="Custom text hoodie" data-price="40">
                                        <h3 class="product-name">Custom text hoodie</h3>
                                        <h2 class="product-price">&euro; 40</h2>
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