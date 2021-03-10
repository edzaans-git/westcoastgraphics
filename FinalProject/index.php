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


        <?php
            include 'nav.php';
        ?>

        <!--Header-->
        <section class="header">
            <img src="https://novationmusic.com/sites/novation/files/TShirtsheader-2560-1000.png" class="img-fluid"
                alt="Responsive image">
        </section>
        <!--Header end-->

        <!-- Main section -->

  <div class="container">
<!--row -->
<div class="row main-content">
  <div class="col-md-8 mb-5">
    <h2>Our business</h2>
    <hr>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deserunt neque tempore recusandae animi soluta quasi? Asperiores rem dolore eaque vel, porro, soluta unde debitis aliquam laboriosam. Repellat explicabo, maiores!</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis optio neque consectetur consequatur magni in nisi, natus beatae quidem quam odit commodi ducimus totam eum, alias, adipisci nesciunt voluptate. Voluptatum.</p>
    <a class="btn btn-primary btn-lg" href="quote.php">Get Quote &raquo;</a>
  </div>
  <div class="col-md-4 mb-5">
    <h2>Get in touch</h2>
    <hr>
    <address>
      <strong>West Coast Vinyl Graphics</strong>
      <br>Galway
      <br>Galway
      <br>
    </address>
    <address>
      <abbr title="Phone">P:</abbr>
      086-1111111
      <br>
      <abbr title="Email">E:</abbr>
      <a href="mailto:info@westcoastgraphics.com">info@westcoastgraphics.com</a>
    </address>
  </div>
</div>
<!--row -->

<!--Product section 1-->
<!--row 1-->
<div class="row">
<div class="col-md-8 col-lg-8 mb-5">
<h2>Customised T Shirts</h2>
    <hr>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deserunt neque tempore recusandae animi soluta quasi? Asperiores rem dolore eaque vel, porro, soluta unde debitis aliquam laboriosam. Repellat explicabo, maiores!</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis optio neque consectetur consequatur magni in nisi, natus beatae quidem quam odit commodi ducimus totam eum, alias, adipisci nesciunt voluptate. Voluptatum.</p>
</div>
  <div class="col-md-4 col-lg-4 mb-5">
  <img src="img/wheelie.png" class="img-fluid" alt="Responsive image">
</div>
<!--Product section 1 end-->
</div>
<!--row end -->

<!--Product section 2-->
<!--row 2 -->
<div class="row">
<div class="col-md-8 col-lg-8 order-2 mb-5">
<h2>Customised Hoodies</h2>
    <hr>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deserunt neque tempore recusandae animi soluta quasi? Asperiores rem dolore eaque vel, porro, soluta unde debitis aliquam laboriosam. Repellat explicabo, maiores!</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis optio neque consectetur consequatur magni in nisi, natus beatae quidem quam odit commodi ducimus totam eum, alias, adipisci nesciunt voluptate. Voluptatum.</p>
</div>
  <div class="col-md-4 col-lg-4 order-1 mb-5">
  <img src="img/Gocku-hoodie.jpg" class="img-fluid" alt="Responsive image">
</div>
<!--Product section 2 end-->
</div>
<!--row end -->

<!--row 3-->
<div class="row">
<div class="col-md-8 col-lg-8 mb-5">
<h2>Customised signs</h2>
    <hr>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deserunt neque tempore recusandae animi soluta quasi? Asperiores rem dolore eaque vel, porro, soluta unde debitis aliquam laboriosam. Repellat explicabo, maiores!</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis optio neque consectetur consequatur magni in nisi, natus beatae quidem quam odit commodi ducimus totam eum, alias, adipisci nesciunt voluptate. Voluptatum.</p>
</div>
  <div class="col-md-4 col-lg-4 mb-5">
  <img src="img/wheelie.png" class="img-fluid" alt="Responsive image">
</div>
<!--Product section 1 end-->
</div>
<!--row end -->

</div>
<!--container -->


        <?php
            include 'footer.php';
        ?>
    

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