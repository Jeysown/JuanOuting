
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
        font-size: 27px;
        padding: 19px;
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
        <li ><a href="#" title=""><em>Step 1: </em><span>Primary Information</span></a></li>
        <li class="current"><a href="#" title=""><em>Step 2: </em><span>Photos & Descriptions</span></a></li>
        <li><a href="#" title=""><em>Step 3: </em><span>Rules & Prices</span></a></li>
      </ul>
    </div>
    </div>
</div>
<div class="container" style="padding-bottom:50px;">
  <div class="r-title">
    <div class="col-lg-12">
      <div class="resort-name">
        Primary Information
      </div>
      <hr class="hr-help"  style="padding-bottom:20px;">
    </div>


  </div>
  <div class="col-lg-4">

    <div class="row">
      <center><h3 style="margin-top: 10px;margin-bottom: 20px;">Select the Day that the Private Pool is Available</h3></center>
        <div class="col-xs-12">

          <div class="filter-box-content">
            <span class="filter-facilities col-md-6 add-facilities">
                <input type="checkbox" name="select-all" id="select-all" />
                <label for="select-all" class="filter-label">All</label>
              </span>
            <span class="filter-facilities col-md-6 add-facilities">
                <input type="checkbox"  id="Sunday" name="Sunday" onclick="unchecked_all()" value="0">
                <label for="Sunday" class="filter-label">Sunday</label>
            </span>
            <span class="filter-facilities col-md-6 add-facilities">
              <input type="checkbox" name="Monday" id="Monday" onclick="unchecked_all()" value="1"/>
              <label for="Monday" class="filter-label">Monday</label>
              </span>
              <span class="filter-facilities col-md-6 add-facilities">
                  <input type="checkbox"  id="Tuesday" name="Tuesday" onclick="unchecked_all()" value="2">
                  <label for="Tuesday" class="filter-label">Tuesday</label>
                </span>
                <span class="filter-facilities col-md-6 add-facilities">
                    <input type="checkbox"  id="Wednesday" name="Wednesday" onclick="unchecked_all()" value="3">
                    <label for="Wednesday" class="filter-label">Wednesday</label>
                  </span>
            <span class="filter-facilities col-md-6 add-facilities">
                <input type="checkbox"  id="Thursday" name="Thursday" onclick="unchecked_all()" value="4">
                <label for="Thursday" class="filter-label">Thursday</label>
              </span>
            <span class="filter-facilities col-md-6 add-facilities">
                <input type="checkbox"  id="Friday" name="Friday" onclick="unchecked_all()" value="5">
                <label for="Friday" class="filter-label">Friday</label>
            </span>
            <span class="filter-facilities col-md-6 add-facilities">
                <input type="checkbox"  id="Saturday" name="Saturday" onclick="unchecked_all()" value="6">
                <label for="Saturday" class="filter-label">Saturday</label>
            </span>
            </div>
        </div>
    </div>
</div>

    <div class="col-lg-8">
      <center>
        <div id="content_calendar">
        <div class="calendar-yey"></div>
        </div>
      </center>
    </div>
</div>


<?php include 'footer.php' ?>
<script type="text/javascript">

$('.calendar-yey').datepicker({
  minDate: 0,
  rangeSelect: true
});
// Listen for click on toggle checkbox
$('#select-all').click(function(event) {
    if(this.checked) {
        // Iterate each checkbox
        $(':checkbox').each(function() {
            this.checked = true;
        });
    }
});
function unchecked_all(){
  $("#select-all").prop("checked", false);
}

</script>
<script type='text/javascript'>//<![CDATA[

var _selectedDays = new Array();
$(function() {
    $("#datepicker").datepicker({
        showOn: "button",
        buttonImage: "http://www.insead.edu/events/leadershipsummitasia2010/images/calendar_icon.jpg",
        buttonImageOnly: true,
        dateFormat: 'DD, MM d, yy',
        minDate: 0,
        beforeShowDay: nonWorkingDates
    });
    $("#selectdays input:checkbox").change(function(){
        var v=$(this).attr("value")*1;
        var f=$.inArray(v,_selectedDays);
        if($(this).is(":checked")){
            if(f<0){
                _selectedDays.push(v);
            }
        }else{
            if(f>=0){
                _selectedDays.splice(f,1);
            }
        }
    });
});

function nonWorkingDates(date){
    var day = date.getDay();
    for(var i=0;i<_selectedDays.length;i++){
       if(day==_selectedDays[i]){
           return [false];
       }
    }
    return [true];
}

//]]>

</script>
