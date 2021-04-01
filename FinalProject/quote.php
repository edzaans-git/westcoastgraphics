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

    <div class="container">

        <div class="row">

            <!--Col start -->
            <div class="col-md-6 mb-5 main-content">
                <h2>Our business</h2>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deserunt neque tempore recusandae animi soluta quasi? Asperiores rem dolore eaque vel, porro, soluta unde debitis aliquam laboriosam. Repellat explicabo, maiores!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis optio neque consectetur consequatur magni in nisi, natus beatae quidem quam odit commodi ducimus totam eum, alias, adipisci nesciunt voluptate. Voluptatum.</p>
            </div>
            <!--Col end -->


            <!--Col start -->
            <div class="col-md-6 main-content">
                <div class="quote-body">
                    <div class="form-group">
                        <label class="form-label" for="name">Your Name :</label>
                        <input class="form-control" data-label="Name" required="" data-msg="Please enter name." type="text" name="name" id="name" placeholder="Enter your name" aria-required="true">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="name">Your Email :</label>
                        <input class="form-control" data-label="Name" required="" data-msg="Please enter name." type="text" name="name" id="name" placeholder="Enter your Email" aria-required="true">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="name">Your Phone Number :</label>
                        <input class="form-control" data-label="Name" required="" data-msg="Please enter name." type="text" name="name" id="name" placeholder="Enter Your Phone Number" aria-required="true">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="message">Your quote details :</label>
                        <textarea class="form-control" data-label="Message" required="" data-msg="Please enter your message." name="message" id="message" placeholder="Ener Any Additional Details" cols="30" rows="10" aria-required="true"></textarea>
                    </div>

                    <button type="submit" class="button primar">Get My Free Quote</button>
                    <p class="three">*Your details are kept confidential</p>
                </div>
            </div>
            <!--Col end-->




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