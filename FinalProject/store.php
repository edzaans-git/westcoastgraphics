
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
            include_once 'nav.php';
        ?>

        <!--Header-->
        <section class="header">
            <img src="https://novationmusic.com/sites/novation/files/TShirtsheader-2560-1000.png" class="img-fluid"
                alt="Responsive image">
        </section>

<!--Products cards section start-->
<div class="container">
<!--row -->
<div class="row">
  <div class="col-md-3 col-lg-3 mb-5">
    <div class="card h-100">
      <img class="card-img-top" src="https://placehold.it/300x200" alt="">
      <div class="card-body">
        <h4 class="card-title">T Shirts</h4>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus.</p>
      </div>
      <div class="card-footer">
        <a href="#" class="btn btn-primary">Find Out More!</a>
      </div>
    </div>
  </div>
  <div class="col-md-3 col-lg-3 mb-5">
    <div class="card h-100">
      <img class="card-img-top" src="https://placehold.it/300x200" alt="">
      <div class="card-body">
        <h4 class="card-title">Polo Shirts</h4>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus totam ut praesentium aut.</p>
      </div>
      <div class="card-footer">
        <a href="#" class="btn btn-primary">Find Out More!</a>
      </div>
    </div>
  </div>
  <div class="col-md-3 col-lg-3 mb-5">
    <div class="card h-100">
      <img class="card-img-top" src="https://placehold.it/300x200" alt="">
      <div class="card-body">
        <h4 class="card-title">Hoodies</h4>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
      </div>
      <div class="card-footer">
        <a href="#" class="btn btn-primary">Find Out More!</a>
      </div>
    </div>
  </div>
  <div class="col-md-3 col-lg-3 mb-5">
    <div class="card h-100">
      <img class="card-img-top" src="https://placehold.it/300x200" alt="">
      <div class="card-body">
        <h4 class="card-title">Custom work</h4>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus.</p>
      </div>
      <div class="card-footer">
        <a href="#" class="btn btn-primary">Find Out More!</a>
      </div>
    </div>
  </div>
</div>
<!-- row -->
</div>
<!--Products cards section end-->


        <?php
            include_once 'footer.php';
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




