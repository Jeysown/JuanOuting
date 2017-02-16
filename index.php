<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JuanOuting | Helping You Book a Private Resort</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="assets/fonts/css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="assets/css/style.css" media="screen" title="no title">
    <link rel="stylesheet" href="assets/css/jquery-ui.css" media="screen" title="no title">
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
  <div class="parent-header">
      <div class="child-header"></div>
      <div class="container search-container search-container-responsive">
        <div class="row">
        <div class="search-bar">
          <div class="search-content search-location-responsive ">
            <div class="search-title">
              Where do you want to go?
            </div>
            <input id="yey" onClick="openSearch()" class="input-content" placeholder="Enter a destination">
          </div>
          <div class="overlay overlay-search" id="mySearch">
            <div class="overlay-content overlay-content-search" id="content-search">
              <div class=" search-bar">
                <a href="javascript:void(0)" class="closebtn" onclick="closeSearch()">&times;</a>
                  <div class="search-content search-location ">
                    <div class="search-title">
                      Where do you want to go?
                    </div>
                    <input id="resort" onkeyup="AutoComplete()" class="input-content" placeholder="Enter a destination">
                  </div>
                  <div class="dropdown search-content search-day" id="dropdown">
                    <div class="search-title">
                      Day
                    </div>
                    <button class="btn btn-default dropdown-toggle input-content" type="button" data-toggle="dropdown">Halfday- Day
                      <span class="fa fa-chevron-circle-down search-dropdown"></span></button>
                      <ul class="dropdown-menu">
                        <li><a id = "halfday" href="#">Halfday- Day</a></li>
                        <li><a id = "halfday" href="#">Halfday - Night</a></li>
                        <li><a id = "whole" href="#">Wholeday</a></li>
                      </ul>
                    </div>
                    <div class="date search-content search-date">
                      <div class="search-title">
                        Check-in
                      </div>
                      <div class="has-feedback">
                        <input id="FromDate" class="input-content"/><i class="fa fa-calendar search-date-icon form-control-feedback"></i></input>
                      </div>
                    </div>
                    <div class="date search-content search-date">
                      <div class="search-title">
                        Check-out
                      </div>
                      <div class="has-feedback">
                        <input id="ToDate" class="input-content"/><i class="fa fa-calendar search-date-icon form-control-feedback"></i></input>
                      </div>
                    </div>
                    <div class="dropdown search-content search-day" >
                      <div class="search-title">
                        Guest
                      </div>
                      <button class="btn btn-default dropdown-toggle input-content" type="button" data-toggle="dropdown">1-15 persons
                        <span class="fa fa-chevron-circle-down search-dropdown"></span></button>
                        <ul class="dropdown-menu">
                          <li><a href="#">1-15 persons</a></li>
                          <li><a href="#">1-20 persons</a></li>
                          <li><a href="#">1-25 persons</a></li>
                          <li><a href="#">1-30 persons</a></li>
                          <li><a href="#">1-40 persons</a></li>
                          <li><a href="#">1-50 persons</a></li>
                        </ul>
                      </div>

                      <div class="submit-btn search-content search-submit" ><p>&nbsp;</p>
                        <button type="button" class="btn btn-default input-content search-button">Search</button>
                      </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row deck-row">
      <div class="featured-title">
        Featured Destinations
      </div>
      <div class="col-sm-4 card">
        <img src="assets/images/1.jpg" alt="" class="r-img">
        <p class="r-content"><b class="r-price">₱5000 </b><span class="indiv-rating">★★★★</span></p>
        <p class="r-name"> 88 Forest and Hotspring abcd asdsa Resort </p>
      </div>
      <div class="col-sm-4 card">
        <img src="assets/images/2.jpg" alt="" class="r-img">
        <p class="r-content"><b class="r-price">₱5000 </b><span class="indiv-rating">★★★★</span></p>
        <p class="r-name"> Pogi akoasdsa Resort </p>
      </div>
      <div class="col-sm-4 card">
        <img src="assets/images/3.jpg" alt="" class="r-img">
        <p class="r-content"><b class="r-price">₱5000 </b><span class="indiv-rating">★★★★</span></p>
        <p class="r-name"> Jason Patrick S Lopez Resort </p>
      </div>
    </div>
    <div class="row deck-row">
      <div class="featured-title">
        Calamba, Laguna
      </div>
      <div class="col-sm-4 card">
        <img src="assets/images/1.jpg" alt="" class="r-img">
        <p class="r-content"><b class="r-price">₱5000 </b><span class="indiv-rating">★★★★</span></p>
        <p class="r-name"> 88 Forest and Hotspring abcd asdsa Resort </p>
      </div>
      <div class="col-sm-4 card">
        <img src="assets/images/2.jpg" alt="" class="r-img">
        <p class="r-content"><b class="r-price">₱5000 </b><span class="indiv-rating">★★★★</span></p>
        <p class="r-name"> Pogi akoasdsa Resort </p>
      </div>
      <div class="col-sm-4 card">
        <img src="assets/images/3.jpg" alt="" class="r-img">
        <p class="r-content"><b class="r-price">₱5000 </b><span class="indiv-rating">★★★★</span></p>
        <p class="r-name"> Jason Patrick S Lopez Resort </p>
      </div>
    </div>
  </div>

<?php include 'footer.php' ?>
