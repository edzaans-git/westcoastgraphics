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

    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12" id="about-us">
                <div class="row text-center">
                    <div class="col-md-8 px-0 align-items-center mx-auto px-5">
                        <h2 class="mt-5">Get a free Quote</h2>
                        <hr>
                        <p class="about-us">We offer a wide variety of products and services to meet all your digital printing needs.
                            Our main focus is custom clothing like T Shirts, Hoodies, Polo shirts and more. Every order is unique and there are no minumum order quantity.
                            We use the highest quality clothing from companies like Gildan, Fruit Of The Loom and AWS.
                            All of our products are done using heat transfer vinyl method for simple designs and garment printing
                            for complicated or photo realistic designs. We also offer custom decals for cars, vans, laptops, mugs, furniture and more.
                            For FREE Quote fill out our Quote form with your requirements.
                        </p>
                        <!--Contact page column here-->
                        <section class="page-section" id="contact">
                            <div class="contact_section">

                                <form action="quote-success.php" id="contactForm" name="sentMessage" novalidate="novalidate" method="post">
                                    <div class="row align-items-stretch">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input class="form-control" name="name" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name." />
                                                <p class="help-block text-danger"></p>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" name="email" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address." />
                                                <p class="help-block text-danger"></p>
                                            </div>
                                            <div class="form-group mb-md-0">
                                                <input class="form-control" name="phone" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number." />
                                                <p class="help-block text-danger"></p>
                                            </div>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-white px-4 border-md border-right-0 select">
                                                    <i class="fa fa-user text-muted" required>Please pick your service</i>
                                                </span>
                                                <select name="myselectbox" class="select-input" required>
                                                    <option name="default" value="Default">Default</option>
                                                    <option name="clothing" value="Clothing">Clothing</option>
                                                    <option name="stickers" value="Stickers">Stickers</option>
                                                    <option name="decals" value="Decals">Decals</option>
                                                    <option name="design" value="Design">Design</option>
                                                </select>
                                            </div>

                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-white px-4 border-md border-right-0 select">
                                                    <i class="fa fa-user text-muted" required>When you need it by</i>
                                                </span>
                                                <input class="form-control select-input" type="date" name="date" id="date" placeholder="Timeframe *" required="required" data-validation-required-message="Please enter date you need it by ." />
                                                <p class="help-block text-danger"></p>
                                            </div>

                                        </div>

















                                    </div>
                            </div>
                            <button type="submit" class="button primar">Get My Free Quote</button>
                            <p class="three">*Your details are kept confidential</p>
                            </form>
                    </div>
                    </section>
                    <!--Contact page column ends here-->

                </div>
            </div>
        </div>
    </div>

    </div>








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