$(document).ready(function(){

    $("#FromDate").val($.datepicker.formatDate('mm/dd/yy', new Date(new Date())));
    $("#ToDate").val($.datepicker.formatDate('mm/dd/yy', new Date(new Date().getTime() + 1*24*60*60*1000)));


      $(function DatePicker(){
        $("#FromDate").datepicker({
          minDate: 0,
          rangeSelect: true,
          beforeShow: customRange,
          onSelect: customRange,
          onSelect: function(dateText, inst) {
            $("#ToDate").val($.datepicker.formatDate('mm/dd/yy', new Date(new Date(dateText).getTime())));
              $("#FromDate").val($.datepicker.formatDate('mm/dd/yy', new Date(new Date(dateText).getTime())));
            $.datepicker.setDefaults({"defaultDate":dateText});
          },
          
        });

        $("#ToDate").datepicker({
          minDate: 0,
          rangeSelect: true,
          beforeShow: customRange,
          onSelect: customRange,
          onSelect: function (dateText, inst) {
            $("#ToDate").val($.datepicker.formatDate('mm/dd/yy', new Date(new Date(dateText).getTime())));
          }
        });
      });

      function customRange(input) {
        if (input.id == "FromDate") {

          $("#ui-datepicker-div td").die();
          if (selectedDate != null) {
            $('#ToDate').datepicker('option', 'minDate', selectedDate).datepicker('refresh');
          }

        }
        if (input.id == "ToDate") {

          $("#ui-datepicker-div td").live({
            mouseenter: function() {
              $(this).parent().addClass("finalRow");
              $(".finalRow").prevAll().find("td:not(.ui-datepicker-unselectable)").addClass("highlight");
                $(this).prevAll("td:not(.ui-datepicker-unselectable)").addClass("highlight");
            },
            mouseleave: function() {
              $(this).parent().removeClass("finalRow");
              $("#ui-datepicker-div td").removeClass("highlight");
            },
            click: function() {
              $(this).parent().addClass("finalRow");
              $(".finalRow").prevAll().find("td:not(.ui-datepicker-unselectable)").addClass("highlight");
                $(this).prevAll("td:not(.ui-datepicker-unselectable)").addClass("highlight");
            }
          });

          var selectedDate = $("#FromDate").datepicker("getDate");
          if (selectedDate != null) {
            $('#ToDate').datepicker('option', 'minDate', selectedDate).datepicker('refresh');
          }
        }
      }


});
