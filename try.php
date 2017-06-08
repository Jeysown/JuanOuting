<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JuanderPool | Helping You Book a Private Resort</title>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick-theme.css"/>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="assets/fonts/css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="assets/css/style.css" media="screen" title="no title">
     <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.css" media="screen" title="no title">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lobster" />
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/aleo" type="text/css"/>

  </head>
  <body id="page-top">
  <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
      <div class="header-container">
          <div class="navbar-header page-scroll">

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> <i class="fa fa-bars"></i>
            </button>

              <a class="navbar-brand page-scroll" href="index.php" style="color:#2196F3;font-family:Lobster;font-weight:600;">JuanderPool</a>

              <i class="fa fa-search search-show" aria-hidden="true"  onClick="openSearch();visibleSearch();"></i>
                <div id="searchOffset">
                  <i class="fa fa-search search-header-icon" aria-hidden="true" id="yey"></i><input id="resort1" onkeyup="AutoComplete1()" class="ui-autocomplete-input search-header" placeholder="Search" autocomplete="off" >
                </div>
          </div>

          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">

                  <li class="hidden">
                      <a href="#page-top"></a>
                  </li>
                  <li>
                      <a href="#Maps">Help</a>
                  </li>
                  <li>
                      <a href="#" data-toggle="modal" data-target="#registerModal">Sign Up</a>
                  </li>
                  <li>
                      <a href="#" data-toggle="modal" data-target="#loginModal">Log In</a>

                  </li>

                      </ul>
          </div>
                  </div>

  </nav>
  <div class="parent-header">
      <div class="child-header">
        <div class="col-sm-3">
          <center><img src="assets/images/juan.png" alt="" class="juan"></center>
        </div>
        <div class="col-sm-9">
          <center><h1 class="header-title"><img src="assets/images/duck.png" alt="" width="80px" class="hidden-sm hidden-xs">JuanderPool <img src="assets/images/duck.png" alt="" width="80px" style="margin-left:-15px;" class="hidden-sm hidden-xs"></h1></center>
          <center><h4 class="title-subheader" >Make Booking a Private Pool a Wonderful Experience for Every Filipino </h4></center>
        </div>
      </div>
      <?php include 'search-content.php' ?>
  </div>

  <div class="container">

    <div>
        <div>

              <div class="featured-title">
                Featured Destinations
              </div>
              <div class="slider responsive">
                <div>
                  <div class="col-lg-12 card card-responsive">
                    <img src="assets/images/1.jpg" alt="" class="r-img">
                    <p class="r-content"><b class="off-r-price">₱15000</b> <b class="r-price">₱12000 </b> <small class="r-discount">24% off</small><span class="indiv-rating"> <img src="assets/images/duck.png" alt="" width="22px"> <img src="assets/images/duck.png" alt="" width="22px"> <img src="assets/images/duck.png" alt="" width="22px"> <img src="assets/images/duck.png" alt="" width="22px"> <img src="assets/images/duck.png" alt="" width="22px"></span></p>
                    <p class="r-content"></p>
                    <p class="r-name"> 88 Forest and Hotspring Resort </p>
                  </div>

                </div>
                <div class="">
                  <div class="col-lg-12 card card-responsive">
                    <img src="assets/images/balinese/1.png" alt="" class="r-img">
                    <p class="r-content"><b class="r-price">₱5000 </b><span class="indiv-rating"> <img src="assets/images/duck.png" alt="" width="22px"> <img src="assets/images/duck.png" alt="" width="22px"> <img src="assets/images/duck.png" alt="" width="22px"> <img src="assets/images/duck.png" alt="" width="22px"> <img src="assets/images/duck.png" alt="" width="22px"></span></p>
                    <p class="r-name"> Balinese Resort </p>
                  </div>
                </div>
                <div class="">
                  <div class="col-lg-12 card card-responsive">
                    <img src="assets/images/3.jpg" alt="" class="r-img">
                    <p class="r-content"><b class="r-price">₱7000 </b><span class="indiv-rating"> <img src="assets/images/duck.png" alt="" width="22px"> <img src="assets/images/duck.png" alt="" width="22px"> <img src="assets/images/duck.png" alt="" width="22px"> <img src="assets/images/duck.png" alt="" width="22px"> <img src="assets/images/duck.png" alt="" width="22px"></span></p>
                    <p class="r-name"> Amore Mio Resort </p>
                  </div>
                </div>
                <div class="">
                  <div class="col-lg-12 card card-responsive">
                    <img src="assets/images/4.jpg" alt="" class="r-img">
                    <p class="r-content"><b class="r-price">₱7000 </b><span class="indiv-rating"> <img src="assets/images/duck.png" alt="" width="22px"> <img src="assets/images/duck.png" alt="" width="22px"> <img src="assets/images/duck.png" alt="" width="22px"> <img src="assets/images/duck.png" alt="" width="22px"> <img src="assets/images/duck.png" alt="" width="22px"></span></p>
                    <p class="r-name"> Amore Mio Resort </p>
                  </div>
                </div>
              </div>
            </div>
    </div>
    <div class="row deck-row">
      <div class="featured-title">
        Calamba, Laguna
      </div>
      <div class="col-sm-4 card">
        <img src="assets/images/2.jpg" alt="" class="r-img">
        <p class="r-content"><b class="r-price">₱27000</b><span class="indiv-rating"> <img src="assets/images/duck.png" alt="" width="22px"> <img src="assets/images/duck.png" alt="" width="22px"> <img src="assets/images/duck.png" alt="" width="22px"> <img src="assets/images/duck.png" alt="" width="22px"> <img src="assets/images/duck.png" alt="" width="22px"></span></p>
        <p class="r-name"> La Reprezza Resort </p>
      </div>
      <div class="col-sm-4 card">
        <img src="assets/images/4.jpg" alt="" class="r-img">
        <p class="r-content"><b class="r-price">₱8500 </b><span class="indiv-rating"> <img src="assets/images/duck.png" alt="" width="22px"> <img src="assets/images/duck.png" alt="" width="22px"> <img src="assets/images/duck.png" alt="" width="22px"> <img src="assets/images/duck.png" alt="" width="22px"> <img src="assets/images/duck.png" alt="" width="22px"></span></p>
        <p class="r-name"> Joremi Private Resort </p>
      </div>
      <div class="col-sm-4 card">
        <img src="assets/images/5.jpg" alt="" class="r-img">
        <p class="r-content"><b class="r-price">₱36000 </b><span class="indiv-rating"> <img src="assets/images/duck.png" alt="" width="22px"> <img src="assets/images/duck.png" alt="" width="22px"> <img src="assets/images/duck.png" alt="" width="22px"> <img src="assets/images/duck.png" alt="" width="22px"> <img src="assets/images/duck.png" alt="" width="22px"></span></p>
        <p class="r-name"> CJC Resort </p>
      </div>
    </div>
  </div>

<?php include 'footer.php' ?>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>

  <script type="text/javascript">
$('.responsive').slick({
  infinite: true,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1025,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        centerMode: true,
        arrows:false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        centerMode: true,
        arrows:false,
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode: true,
        arrows:false
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
  </script>
