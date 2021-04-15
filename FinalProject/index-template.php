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


  <div class="row">
    <div class="col-md-12">
      <!-- Header -->
      <header class="mx-auto">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner" style="height: 300px">
            <div class="carousel-item active">
              <img class="d-block w-100" src="img/office.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100 img-fluid" src="img/banner.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100 img-fluid" src="img/office.jpg" alt="Third slide">
            </div>
          </div>
        </div>
      </header>
    </div>
  </div>


  <!-- Page Content -->

  <!-- /.row -->

  <div class="row">
    <div class="col-md-12" id="about-us">
      <div class="row text-center">
        <div class="col-md-8 align-items-center mx-auto">
          <h2 class="mt-5">What We Do</h2>
          <hr>
          <p class="about-us">We offer a wide variety of products and services to meet all your digital printing needs.
            Our main focus is custom clothing like T Shirts, Hoodies, Polo shirts and more. Every order is unique and there are no minumum order quantity.
            We use the highest quality clothing from companies like Gildan, Fruit Of The Loom and AWS.
            All of our products are done using heat transfer vinyl method for simple designs and garment printing
            for complicated or photo realistic designs. We also offer custom decals for cars, vans, laptops, mugs, furniture and more.
            For FREE Quote fill out our Quote form with your requirements.
          </p>

          <a href="quote.php" class="btn btn-quote mb-5 mt-3">Free quote</a>
        </div>
      </div>
    </div>
  </div>

  <div class="container">

    <div class="row text-center">
      <div class="col-md-12 mb-2">
        <h2 class="mt-3 mb-3">Shop product range</h2>
        <hr>
      </div>
    </div>


    <!-- /.row -->

    <div class="row">
      <!--Col-->
      <div class="col-md-4 mb-5">
        <div class="card">
          <img class="card-img-top" src="img/FrontBlue.png" alt="Custom T Shirt">
          <div class="card-img-overlay d-flex align-items-end justify-content-center">
            <a href="shirts.php" class="btn btn-success">Shop T Shirts</a>
          </div>
        </div>
      </div>

      <!--Col-->
      <div class="col-md-4 mb-5">
        <div class="card">
          <img class="card-img-top" src="img/polo_shirt.png" alt="Custom Polos">
          <div class="card-img-overlay d-flex align-items-end justify-content-center">
            <a href="shirts.php" class="btn btn-success">Shop Polos</a>
          </div>
        </div>
      </div>


      <!--Col-->
      <div class="col-md-4 mb-5">
        <div class="card">
          <img class="card-img-top" src="img/StraightOutOfHoodie.jpg" alt="Custom Hoodies">
          <div class="card-img-overlay d-flex align-items-end justify-content-center">
            <a href="shirts.php" class="btn btn-success">Shop Hoodies</a>
          </div>
        </div>
      </div>
    </div>

    <!--Row-->
    <div class="row">

      <!--Col-->
      <div class="col-md-4 mb-5">
        <div class="card">
          <img class="card-img-top" src="img/custom_stickers.jpg" alt="Custom Stickers">
          <div class="card-img-overlay d-flex align-items-end justify-content-center">
            <a href="shirts.php" class="btn btn-success">Shop Stickers</a>
          </div>
        </div>
      </div>

      <!--Col-->
      <div class="col-md-4 mb-5">
        <div class="card">
          <img class="card-img-top" src="img/stickers2.jpg" alt="Custom Stickers">
          <div class="card-img-overlay d-flex align-items-end justify-content-center">
            <a href="shirts.php" class="btn btn-success">Shop Decals</a>
          </div>
        </div>
      </div>


      <!--Col-->
      <div class="col-md-4 mb-5">
        <div class="card">
          <img class="card-img-top img-fluid" src="img/graphic_design.jpg" alt="Graphic Design">
          <div class="card-img-overlay d-flex align-items-end justify-content-center">
            <a href="shirts.php" class="btn btn-success">Graphic Design</a>
          </div>
        </div>
      </div>

    </div>


    <div class="row text-center mb-3">
      <dov class="col-md-12">
        <h2>Featured products</h2>
        <hr>
      </dov>
    </div>

    <!--Featured section starts here-->

    <div id="site">
      <div id="content">
        <!--First row-->
        <div class="row text-center">
          <!--Product card-->
          <div class="col-md-4  mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top img-fluid" src="img/Wheelie.png" alt="Custom T Shirt"></a>
              <div class="card-body" data-name="Wheelie Tshirt" data-price="15">
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
          <div class="col-md-4  mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top img-fluid" src="img/StraightOutOfHoodie.jpg" alt="Custom Hoodie"></a>
              <div class="card-body" data-name="Valhalla Hoodie" data-price="30">
                <h3 class="product-name">Valhalla Hoodie</h3>
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
          <!--Product card-->
          <div class="col-md-4  mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top img-fluid" src="img/MonkiiWhite.png" alt="Custom T Shirt"></a>
              <div class="card-body" data-name="Monki T Shirt" data-price="15">
                <h3 class="product-name">Monki T Shirt</h3>
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
        </div>
        <!--First row ends here-->

        <!--Second row-->
        <div class="row text-center">
          <!--Product card-->
          <div class="col-md-4  mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top img-fluid" src="img/Wheelie.png" alt=""></a>
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
          <div class="col-md-4  mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top img-fluid" src="img/Valhalla2.jpg" alt=""></a>
              <div class="card-body" data-name="Valhalla T Shirt" data-price="15">
                <h3 class="product-name">Valhalla Tshirt</h3>
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
          <div class="col-md-4  mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top img-fluid" src="img/rick&morty.jpg" alt="Rick and Morty sticker"></a>
              <div class="card-body" data-name="Rick and Morty" data-price="5">
                <h3 class="product-name">Rick and Morty sticker</h3>
                <h2 class="product-price">&euro; 5</h2>
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
        </div>
        <!--Second row ends here-->

      </div>
    </div>


  </div>
  <!-- /.container -->


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