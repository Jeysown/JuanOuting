
    <link rel="stylesheet" href="assets/css/jquery-ui.css" media="screen" title="no title">


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
  <div class="col-lg-12 progress-column">
    <div style="text-align: center">
      <div style="display: inline-block;">
        <ul class="progress-container">
          <li><a href="#" title=""><em>Step 1: </em><span>Primary Information</span></a></li>
          <li><a href="#" title=""><em>Step 2: </em><span>Photos & Descriptions</span></a></li>
          <li class="current add-first-step"><a href="#" title=""><em>Step 3: </em><span>Rules & Prices</span></a></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="container">

    <div class="r-title">
      <div class="col-lg-12">
        <div class="resort-name">
          Rules & Prices
        </div>
        <hr class="hr-help" >
      </div>


    </div>
    <div class="col-md-7"style="padding-bottom:50px;">
<div class="container" style="padding-top:20px;">
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
      <div class="row" style="padding-top:20px;">
        <div class="col-sm-4 col-xs-5">
        <button class="back input-content btn btn-lg" type="button">Back</button>
        </div>
        <div class="col-sm-4 col-xs-5" style="float:right;">
        <button class="subscribe input-content btn btn-lg" type="button">Continue</button>
        </div>
      </div>
    </div>

</div>

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
</script>
