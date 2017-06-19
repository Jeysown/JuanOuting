
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
  <style media="screen">
  .ui-widget.ui-widget-content{
    width: 100%;
  }
    @media(min-width:600px){
      .ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default, .ui-button, html .ui-button.ui-state-disabled:hover, html .ui-button.ui-state-disabled:active{
        text-align: center;
        background: none;
        font-weight: bold;
        color: inherit;
        border: none;
        font-size: 24px;
        padding: 15px;
        color: #696969;
      }

      .ui-datepicker table{
        font-size: 1.4em;
      }
      .ui-datepicker .ui-datepicker-title{
        font-size: 1.7em;
      }
      table#selectdays th{width:50px;}
    }
  </style>
  <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top nav-frontend" style="    box-shadow: 1px 1px 5px 3px rgba(0,0,0,0.1);">
      <div class="header-container">
          <div class="navbar-header page-scroll">

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> <i class="fa fa-bars"></i>
            </button>
  <a class="navbar-brand page-scroll" href="index.php" style="color:#2196F3;font-family:Lobster;font-weight:600;">JuanderPool</a>
              <i class="fa fa-search search-show" aria-hidden="true"  onClick="openSearch();visibleSearch();"></i>
              <i class="fa fa-search search-header-icon" aria-hidden="true" id="yey"></i><input id="resort1" onkeyup="AutoComplete1()" class="ui-autocomplete-input search-header" placeholder="Search" autocomplete="off" >
          </div>

          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">

                  <li class="hidden">
                      <a href="#page-top"></a>
                  </li>
                  <li>
                      <a href="#">Help</a>
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

<div class="col-lg-12 progress-column">
  <div style="text-align: center">
  <div style="display: inline-block;">
      <ul class="progress-container">
        <li><a href="#" title=""><em>Step 1: </em><span>Primary Information</span></a></li>
        <li><a href="#" title=""><em>Step 2: </em><span>Photos & Descriptions</span></a></li>
        <li class="current"><a href="#" title=""><em>Step 3: </em><span>Rules & Prices</span></a></li>
      </ul>
    </div>
    </div>
</div>
<div class="container" style="padding-bottom:50px;">
  <div class="r-title">
    <div class="col-lg-12">
      <div class="resort-name">
        Rules & Prices
      </div>
      <hr class="hr-help"  style="padding-bottom:20px;">
    </div>


  </div>
  <div class="col-lg-4">

    <div class="row">
      <center><h3 style="margin-top: 10px;margin-bottom: 40px;">Select the Day that the Private Pool is Available</h3></center>
        <div class="col-xs-12">

          <div class="filter-box-content">
            <span class="filter-facilities col-xs-6 add-facilities">
                <input type="checkbox" name="select-all" id="select-all" />
                <label for="select-all" class="filter-label">All</label>
              </span>
            <span class="filter-facilities col-xs-6 add-facilities">
                <input type="checkbox"  id="Sunday" name="Sunday" onclick="selectDay();unchecked_all()"  class="workout_days_option" value="0">
                <label for="Sunday" class="filter-label">Sunday</label>
            </span>
            <span class="filter-facilities col-xs-6 add-facilities">
              <input type="checkbox" name="Monday" id="Monday" onclick="selectDay();unchecked_all()"  class="workout_days_option" value="1"/>
              <label for="Monday" class="filter-label">Monday</label>
              </span>
              <span class="filter-facilities col-xs-6 add-facilities">
                  <input type="checkbox"  id="Tuesday" name="Tuesday" onclick="selectDay();unchecked_all()"  class="workout_days_option" value="2">
                  <label for="Tuesday" class="filter-label">Tuesday</label>
                </span>
                <span class="filter-facilities col-xs-6 add-facilities">
                    <input type="checkbox"  id="Wednesday" name="Wednesday" onclick="selectDay();unchecked_all()"  class="workout_days_option" value="3">
                    <label for="Wednesday" class="filter-label">Wednesday</label>
                  </span>
            <span class="filter-facilities col-xs-6 add-facilities">
                <input type="checkbox"  id="Thursday" name="Thursday" onclick="selectDay();unchecked_all()"  class="workout_days_option" value="4">
                <label for="Thursday" class="filter-label">Thursday</label>
              </span>
            <span class="filter-facilities col-xs-6 add-facilities">
                <input type="checkbox"  id="Friday" name="Friday" onclick="selectDay();unchecked_all()"  class="workout_days_option" value="5">
                <label for="Friday" class="filter-label">Friday</label>
            </span>
            <span class="filter-facilities col-xs-6 add-facilities">
                <input type="checkbox"  id="Saturday" name="Saturday" onclick="selectDay();unchecked_all()"  class="workout_days_option" value="6">
                <label for="Saturday" class="filter-label">Saturday</label>
            </span>


            </div>
        </div>
    </div>
</div>

    <div class="col-lg-8">
      <center>
        <div id="content_calendar">
          <div class="datepicker">

          </div>
        </div>
      </center>
      <div class="row">
          <div class="col-sm-4 col-xs-5" style="float:right;padding-top:20px;">
            <a href="add-resort.php">  <button class="subscribe input-content btn btn-lg" type="button">Continue</button></a>
          </div>
      </div>
    </div>

</div>


<?php include 'footer.php' ?>
<script type="text/javascript">

function unchecked_all(){
  $("#select-all").prop("checked", false);
}

  $("#select-all").change(function(){
    if(this.checked){
      $(".workout_days_option").each(function(){
        this.checked=true;
      })
    }else{
      $(".workout_days_option").each(function(){
        this.checked=false;
      })
    }
    callThis();
  });
  $(".datepicker").datepicker({
      dateFormat: 'DD, MM d, yy',
      beforeShowDay : availableDays
  });
  function temporaryNotAvailable(date){
    var day = date.getDay();
    var temporary = [0,1,2,3,4,5,6];
    for(var i=0;i<temporary.length;i++){
      if(day == temporary[i]){
        return [false];
      }
    }
    return [true];
  }
  function availableDays(date){
    var day = date.getDay();
    var available = [];
    $("input:checkbox[class=workout_days_option]").each(function(){
      if($(this).is(':checked'))
        available.push($(this).val());
    });
    for(var i=0;i<available.length;i++){
      if(day == available[i]){
        return [true];
      }
    }
    return [false];
  }

function selectDay(){
  callThis();
}
function callThis(){
  $(".datepicker").datepicker("refresh",{
      dateFormat: 'DD, MM d, yy',
      beforeShowDay : availableDays
  });
}
// $(".datepicker").datepicker({
//   minDate: 0,
//   rangeSelect: true,
//   beforeShow: customRange,
//   onSelect: customRange
//
// });
//
// function customRange(input) {
//   if (input.class == "datepicker") {
//     $("#ui-datepicker-div td").die();
//     if (selectedDate != null) {
//       $('.datepicker').datepicker('option', 'minDate', selectedDate).datepicker('refresh');
//     }
//
//   }
// }
</script>
