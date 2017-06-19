
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

<div class="container" style="padding-bottom:50px;padding-top:20px;">
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
