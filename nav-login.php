<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JuanderPool | Helping You Book a Private Resort</title>
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
  <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top nav-frontend" style="box-shadow: 1px 1px 5px 3px rgba(0,0,0,0.1);">
      <div class="header-container">
          <div class="navbar-header page-scroll">

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> <i class="fa fa-bars"></i>
            </button>

              <a class="navbar-brand page-scroll" href="index.php" style="color:#2196F3;font-family:Lobster;font-weight:600;">JuanderPool</a>

              <i class="fa fa-search search-show" aria-hidden="true"  onClick="openSearch();visibleSearch();"></i>
                <div id="searchOffset" style="position: fixed;">
                  <i class="fa fa-search search-header-icon" aria-hidden="true" id="yey"></i><input id="resort1" onkeyup="AutoComplete1()" class="ui-autocomplete-input search-header" placeholder="Search" autocomplete="off" >
                </div>
          </div>

          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">

                  <li class="hidden">
                      <a href="#page-top"></a>
                  </li>
                  <li>
                      <a href="#Maps" class="anchor-profile anchor-logged"><img src="assets/images/jason.jpg" class="img-circle profile-image" alt="" ><p class="profile-name">Jason Lopez</p></a>
                  </li>
                  <li class="dropdown hidden-xs">
                    <a class="dropdown-toggle anchor-logged" data-toggle="dropdown" href="#">Bookings
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-nav">
                      <li><a href="#">Current Booking</a></li>
                      <li><a href="#">Wishlist</a></li>
                      <li><a href="#">Booking History</a></li>
                    </ul>
                  </li>
                  <li class="visible-xs"><a href="#">Bookings</a></li>
                  <li>
                      <a href="#Maps" class="anchor-logged">Help</a>
                  </li>
                  <li class="visible-xs"><a href="#">Account Settings</a></li>
                  <li class="visible-xs"><a href="#">Edit Profile</a></li>
                  <li class="visible-xs"><a href="#">Log Out</a></li>
                  <li class="dropdown hidden-xs">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Settings
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-nav">
                      <li><a href="#">Account Settings</a></li>
                      <li><a href="#">Edit Profile</a></li>
                      <li><a href="#">Log Out</a></li>
                    </ul>
                  </li>


                      </ul>
          </div>
                  </div>

  </nav>
