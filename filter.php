<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JuanOuting | Helping You Book a Private Resort</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="assets/fonts/css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="assets/css/style.css" media="screen" title="no title">
            <link rel="stylesheet" type="text/css" href="assets/css/jquery-ui.css">
  </head>
  <body id="page-top">
  <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
      <div class="header-container" >
          <div class="navbar-header page-scroll">
              <div class="navbar-toggle" id="navbar-toggle" data-toggle="collapse" onclick="openNav();">
                  <i class="fa fa-bars"></i>
              </div>
              <a class="navbar-brand page-scroll" href="#page-top">JuanOuting</a>
          </div>
          <div class="collapse navbar-collapse">
              <ul class="nav navbar-nav navbar-right">
                  <li class="hidden">
                      <a href="#page-top"></a>
                  </li>
                  <li>
                      <a href="#Maps">Help</a>
                  </li>
                  <li>
                      <a href="#Maps">Sign Up</a>
                  </li>
                  <li>
                      <a href="#Maps">Log In</a>
                  </li>

                      </ul>
          </div>
                  </div>
          <div id="myNav" class="overlay">

            <div class="overlay-content">
              <a href="#">Help</a>
              <a href="#">Sign Up</a>
              <a href="#">Log In</a>
            </div>
          </div>

  </nav>
  <div class="" style="height:500px;">

  </div>
  <div class="container">
    <div class="col-sm-3 filter-row">
    <div class="row deck-row">
      <div class="filter-list">
        <div class="filter-header filter-box">
          <div class="filtered-title">
            Filter Search Results
          </div>
        </div>
        <div class="filter-box">
          <input type="hidden" name="stars" value="" id="filterByStars">
          <input type="hidden" name="stars" value="1,50000" id="priceRange">
          <div class="filtered-subtitle">
            Star rating
          </div>
          <div class="rating">
            <div class="stars-filter">
            <span onclick="updateTable(5)" id="fiveStar">☆</span>
            <span onclick="updateTable(4)" >☆</span>
            <span onclick="updateTable(3)" >☆</span>
            <span onclick="updateTable(2)" >☆</span>
            <span onclick="updateTable(1)" >☆</span>
            </div>
          </div>
        </div>
        <div class="filter-box">
          <div class="filtered-subtitle">
            Price
          </div>
          <div class="filter-box-content">
          <div id="slider-container">
          </div>
          <p>
            <input type="text" id="amount" class="filter-price" disabled=""/>
          </p>
          </div>
          </div>
          <div class="filter-box">
            <div class="filtered-subtitle">
              Neighborhood
            </div>
            <div class="filter-box-content">
              <span class="filter-facilities">
                  <input type="checkbox"  id="kitchen" name="kitchen" onclick="kitchen()" value="0">
                  <label for="kitchen" class="filter-label">Pansol</label>
                </span>
              <span class="filter-facilities">
                  <input type="checkbox"  id="billiard" name="kitchen" onclick="kitchen()" value="1">
                  <label for="billiard" class="filter-label">Bagong Kalsada</label>
              </span>
              </div>
            </div>
        <div class="filter-box">
          <div class="filtered-subtitle">
            Facilities
          </div>
          <div class="filter-box-content">
            <span class="filter-facilities">
                <input type="checkbox"  id="kitchen" name="kitchen" onclick="kitchen()" value="0">
                <label for="kitchen" class="filter-label">Kitchen</label>
              </span>
            <span class="filter-facilities">
                <input type="checkbox"  id="billiard" name="kitchen" onclick="kitchen()" value="1">
                <label for="billiard" class="filter-label">Billiard</label>
            </span>
            <span class="filter-facilities">
                <input type="checkbox"  id="wifi" name="kitchen" onclick="kitchen()" value="2">
                <label for="wifi" class="filter-label">Wifi</label>
            </span>
            </div>
          </div>
      </div>
    </div>
    </div>
    <div class="col-sm-9 filtered-resort">

    <div class="row deck-row">
      <div class="featured-title">
        Calamba, Laguna
      </div>
      <div class="col-sm-6 card">
        <img src="assets/images/1.jpg" alt="" class="r-img">
        <p class="r-name"><b class="r-price">₱5000 </b> 88 Forest and Hotspring Resort</p>
        <div class="deck-rating">
          <span>★★★★</span>
        </div>
      </div>
      <div class="col-sm-6 card">
        <img src="assets/images/2.jpg" alt="" class="r-img">
        <p class="r-name"><b class="r-price">₱23230 </b> Joyce Resort</p>
        <div class="deck-rating">
          <span>★★★★</span>
        </div>
      </div>
      <div class="col-sm-6 card">
        <img src="assets/images/3.jpg" alt="" class="r-img">
        <p class="r-name"><b class="r-price">₱33233 </b> Jason Patrick S Lopez Resort</p>
        <div class="deck-rating">
          <span>★★★★</span>
        </div>
      </div>
    </div>
        </div>
  </div>

<?php include 'footer.php' ?>
