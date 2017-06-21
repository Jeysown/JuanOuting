<?php include 'nav-payment.php' ?>
<?php include 'search-content-frontend.php' ?>
<div id="input-container">

      <?php include 'add-1.php' ?>
    </div>
  </div>
</div>

<?php include 'footer-payment.php' ?>


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
