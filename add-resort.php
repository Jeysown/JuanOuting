<?php include 'nav-payment.php' ?>
<?php include 'search-content-frontend.php' ?>
<div class="col-lg-12 progress-column">
  <div style="text-align: center">
    <div style="display: inline-block;">
      <ul class="progress-container">
        <li class="current add-first-step"><a href="#" title=""><em>Step 1: </em><span>Primary Information</span></a></li>
        <li><a href="#" title=""><em>Step 2: </em><span>Photos & Descriptions</span></a></li>
        <li><a href="#" title=""><em>Step 3: </em><span>Rules & Prices</span></a></li>
      </ul>
    </div>
  </div>
</div>

<div class="container">

  <div class="r-title">
    <div class="col-lg-12">
      <div class="resort-name">
        Primary Information
      </div>
      <hr class="hr-help" >
    </div>


  </div>
  <div class="col-md-7" id="input-container" style="padding-bottom:50px;">
    <?php include 'rules-1.php' ?>
  </div>
</div>

<?php include 'footer-payment.php' ?>


<script>
var count = 2;
var step = 'primary-';


$("#input-container").on('click','.subscribe',function(){

  $.ajax({url:  step+count+'.php', success: function(result){
    $("#input-container").html(result);
  }});

  console.log(count);
if(count == 3){
count = 0;
step = 'rules-'
}

  count++;
});

</script>

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
        return [false];
      }
    }
    return [true];
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
