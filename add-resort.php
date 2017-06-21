<?php include 'nav-payment.php' ?>
<?php include 'search-content-frontend.php' ?>


<div id="input-container">

      <?php include 'add-1.php' ?>
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
<script>
var count = 1;
var step = 'add-';
var back = 0;

$("#input-container").on('click','.subscribe',function(){
        count++;
  $.ajax({url:  step+count+'.php', success: function(result){
    $("#input-container").html(result);
  }});

});
$("#input-container").on('click','.back',function(){
  count--;
  $.ajax({url:  step+count+'.php', success: function(result){
    $("#input-container").html(result);
  }});

});
</script>
