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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Gochi+Hand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

    <script type="text/javascript" src="js/jquery.shop.js"></script>
    <script type="text/javascript" src="js/custom_js.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles.css">
    <title>West Coast Graphics</title>
</head>

<body>

    <?php
    include 'nav.php';
    ?>


    <section class="container-fluid bg-light">



        <div class="row align-items-center">
            <div class="col-md-12 px-0">
                <img src="img/banner_bg2.jpg" class="img-fluid" alt="Banner Picture">
            </div>
        </div>


        <!-- Page Content -->

        <!-- /.row -->

        <div class="row">
            <div class="col-md-12" id="about-us">
                <div class="row text-center">
                    <div class="col-md-10 align-items-center mx-auto">
                        <h2 class="mt-5">What We Do</h2>
                        <hr>
                        <p class="about-us">We offer a wide variety of products and services to meet all your digital printing needs.
                            Our main focus is custom clothing like T Shirts, Hoodies, Polo shirts and more. Every order is unique and there are no minumum order quantity.
                            We use the highest quality clothing from companies like Gildan, Fruit Of The Loom and AWS.
                            All of our products are done using heat transfer vinyl method for simple designs and garment printing
                            for complicated or photo realistic designs.
                            We also offer custom car decal and custom stickers in all colors and sizes. All out decals and stickers are made from DPP waterproof
                            vinyl and are suitable for use indoors or outdoors.
                            For customers that don't have designs or have an only design idea we offer Graphic Design services.
                            You can email or call us with your query or a design idea and we will be able to do
                            a mockup and show it off to you before you place an order.

                        </p>
                        <h2 class="my-5">Our Services</h2>

                    </div>
                </div>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-md-6 order-2 order-md-1 pr-0">
                <img src="img/FrontBlue.png" class="img-fluid" alt="Picture 2">
            </div>
            <div class=" col-md-6 text-center order-1 order-md-2">
                <h2 class="text-uppercase">Heat transfers</h2>
                <img class="d-lg-inline d-none my-3" src="https://img.icons8.com/ios/452/t-shirt--v1.png" alt="" width="50" height="50">
                <div class="row justify-content-center">
                    <div class="col-10 col-lg-8">
                        <p class="about-us">Our heat transfers are done using Siser HTV Vinyl. It is a material that can be cut and applied to other materials using heat.
                            Heat activates adhesive material and melts the vinyl making it to adhere to materials like cotton, cotton-pily blends and many others.
                            We mostly work with 100% cotton materials that gurantees longevity that can outlast even the material it is printed on.
                        </p>

                    </div>
                </div>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-md-6 order-2 order-md-2 pl-0">
                <img src="img/custom_stickers.jpg" class="img-fluid" alt="Picture 2">
            </div>
            <div class="col-md-6 text-center order-1 order-md-1">
                <h2 class="text-uppercase">Custom Stickers</h2>
                <img class="d-lg-inline d-none my-3" src="https://img.icons8.com/ios/50/000000/sticker.png" alt="" width="50" height="50">
                <div class="row justify-content-center">

                    <div class="col-10 col-lg-8">
                        <p class="about-us">Our die cut stickers are one of the most popular products we sell!
                            They are printed and cut out to die-cut individual stickers which are great for handing out at events or including in packages.
                            All of our stickers are printed on PPD Vinyl that guarantees print quality and longevity.
                            These can be printed on Gloss, Matte or Transparent sheets.
                            We can cut your die cut stickers to any custom shape you require!
                        </p>

                    </div>
                </div>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-md-6 order-2 order-md-1 pr-0">
                <img src="img/stickers2.jpg" class="img-fluid" alt="Custom_stickers">
            </div>
            <div class="col-md-6 text-center order-1 order-md-2">
                <h2 class="text-uppercase">Custom vehicle decals</h2>
                <img class="d-lg-inline d-none my-3" src="https://img.icons8.com/pastel-glyph/64/000000/van.png" alt="" width="50" height="50">
                <div class="row justify-content-center">

                    <div class="col-10 col-lg-8">
                        <p class="about-us">Are you looking for personalised car decal for your car, van , truck or bicycle?
                            We provide custom decal service at West Coast Graphics too.
                            Our decals are made to order and cut using Oracal Vinyl, that ensures longevity and easy application of decal.
                            Have a design ready or an idea? Send it in to us with required size, color and vehicle picture and we will provide a mockup for you
                            before making it.
                            We have wide variety of vinyl in different colors and sizes, all thats left is leting us know what youre looking for :)
                        </p>

                    </div>
                </div>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-md-6 order-2 order-md-2 pl-0">
                <img src="img/graphic_design.jpg" class="img-fluid" alt="Graphic design">
            </div>
            <div class="col-md-6 text-center order-1 order-md-1">
                <h2 class="text-uppercase">Graphic Design</h2>
                <img class="d-lg-inline d-none my-3" src="https://img.icons8.com/wired/64/000000/design.png" alt="" width="50" height="50">
                <div class="row justify-content-center">

                    <div class="col-10 col-lg-8">
                        <p class="about-us">We also provide graphical design services at West Coast Graphics. Looking for custom work done to clothing or other products?
                            Let us know what you have in mind and we can provide you with samples and mockups on your product.
                            Have your design thats need to be freshened up or converted to different format? Yes, we do that too :)
                        </p>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12" id="about-us">
                <div class="row text-center">
                    <div class="col-md-8 px-0 align-items-center mx-auto px-5">
                        <h2 class="mt-5">Drop Us A Line</h2>
                        <hr>
                        <!--Contact page column here-->
                        <section class="page-section" id="contact">
                            <div class="contact_section">
                                <form id="contactForm" name="sentMessage" novalidate="novalidate">
                                    <div class="row align-items-stretch">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name." />
                                                <p class="help-block text-danger"></p>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address." />
                                                <p class="help-block text-danger"></p>
                                            </div>
                                            <div class="form-group mb-md-0">
                                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number." />
                                                <p class="help-block text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-group-textarea mb-md-0">
                                                <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                                                <p class="help-block text-danger"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="quote.php" class="btn btn-quote mb-5 mt-3">Send Message</a>
                                </form>
                            </div>
                        </section>
                        <!--Contact page column ends here-->

                    </div>
                </div>
            </div>
        </div>

    </section>

    <?php
    include 'footer.php';
    ?>




    <!--Bootstrap JS,jQuery and Popper here-->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

    <script>
        $(function() {
            $(document).scroll(function() {
                var $nav = $("#mainNav");
                $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
            });
        });
    </script>



</body>


</html>