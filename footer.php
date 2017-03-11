<div class="footer">
  <div class="container" >
    <div class="row footer-container footer-hr">
      <div class="footer-content">
        <div class="footer-title">
          Book with us
        </div>
        <p><a href="#">Privacy Policy</a></p>
        <p><a href="#">Refund Policy</a></p>
        <p><a href="#">Terms and Conditions</a></p>
        <p><a href="#">Frequently Asked Questions</a></p>
      </div>
      <div class="footer-content">
        <div class="footer-title">
          JuanderPool
        </div>
        <p><a href="#">About</a></p>
        <p><a href="#">Careers</a></p>
        <p><a href="#">Policies</a></p>
        <p><a href="#">Customer Service</a></p>
        <p><a href="#">Partners</a></p>
      </div>
      <div class="footer-content">
        <div class="footer-title">
          Book with us
        </div>
        <p><a href="#">Privacy Policy</a></p>
        <p><a href="#">Refund Policy</a></p>
        <p><a href="#">Terms and Conditions</a></p>
        <p><a href="#">Frequently Asked Questions</a></p>
      </div>


      <div class="footer-content">
        <div class="footer-title">
          Partner with Us
        </div>
        <p><a href="#">Why Partner with Us</a></p>
        <p><a href="#">Properties</a></p>
        <p><a href="#">Affiliates</a></p>
      </div>
  </div>

    </div>
    <div class="row footer-container">
        <div class="footer2-title">
          Connect With Us
        </div>
        <div class="social-media">
          <a href="#"> <i class="fa fa-twitter-square" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-facebook-square" aria-hidden="true" col-md-4></i></a>
          <a href="#"><i class="fa fa-instagram" aria-hidden="true" col-md-4></i></a>
          <a href="#"><i class="fa fa-google-plus-square" aria-hidden="true" col-md-4></i></a>
        </div>
        <div class="footer2">
            <p> Copyright © 2017 NiceSwan. All Rights Reserved</p>
        </div>
    </div>
</div>
<?php include 'modal.php' ?>
</body>
</html>
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="assets/js/functions.js"></script>
<script type="text/javascript" src="assets/js/ease.js"></script>
<script type="text/javascript" src="assets/js/header.js"></script>
<script src="assets/js/search.js"></script>
<script src="assets/js/login.js"></script>

<script>

$( "#spinner" ).spinner();
$( "#spinner1" ).spinner();
$( "#spinner2" ).spinner();

$("#FromDate1").val($.datepicker.formatDate('mm/dd/yy', new Date(new Date())));
$("#ToDate1").val($.datepicker.formatDate('mm/dd/yy', new Date(new Date().getTime() + 1*24*60*60*1000)));

$(function DatePicker(){
$("#FromDate1").datepicker({
  minDate: 0,
  onSelect: function(dateText, inst) {
    $("#ToDate1").val($.datepicker.formatDate('mm/dd/yy', new Date(new Date(dateText).getTime() + 1*24*60*60*1000)));
      $("#FromDate1").val($.datepicker.formatDate('mm/dd/yy', new Date(new Date(dateText).getTime())));
    $.datepicker.setDefaults({"defaultDate":dateText});
  }
});

$("#ToDate1").datepicker({
  minDate:0,
  onSelect: function (dateText, inst) {
    $("#ToDate1").val($.datepicker.formatDate('mm/dd/yy', new Date(new Date(dateText).getTime())));
  }
});
});

    $(function AutoComplete1(){
      $( "#resort1" ).autocomplete({
        source: 'search.php',
        appendTo: '#yey'
      });
    });
</script>

<script type="text/javascript">
if (screen && screen.width < 768) {
  document.write('<script type="text/javascript" src="assets/js/search1.js"><\/script>');

}
else {
  document.write('<script type="text/javascript" src="assets/js/search2.js"><\/script>');

    document.getElementById("myFilter").style.height = "100%";
    $("#myFilter").removeAttr('class');
    $("#content-filter").removeAttr('class');

}
function visibleSearch(){
  $('.search-container-responsive').removeClass("search-bar-hide").addClass("search-bar-show");

}
function hideSearch(){
  $('.search-container-responsive').removeClass("search-bar-show").addClass("search-bar-hide");

}


</script>
