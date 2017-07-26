<?php include 'nav-login.php' ?>
<style media="screen">

#content{
    position:relative;
    z-index:0;
}

.close{
    position:absolute;
    right:-10px; top:-10px; /* Will place the close image in the top right edge of the image */
    display:none;
    z-index:1;
}
#close{
  color:#696969;
  opacity: 1;
  filter:brightness(1) !important;
  outline: none;   
}
#content:hover .close{
    display:block;
}
.card-hover>#content>.r-img{
  filter:brightness(.8);
}

</style>


  <div class="container" style="padding-top:200px;">
    <div class="row deck-row">
      <div class="featured-title">
        Calamba, Laguna
      </div>
      <div class="col-sm-4 card">
        <div id="content" >
            <img id="Image1" src="assets/images/2.jpg" alt="" class="r-img" />
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="close">
              <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
            </button>
          </div>
      </div>
      <div class="col-sm-4 card">
        <div id="content" >
            <img id="Image1" src="assets/images/1.jpg" alt="" class="r-img" />
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="close">
              <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
            </button>
          </div>
      </div>
      <div class="col-sm-4 card">
        <div id="content" >
            <img id="Image1" src="assets/images/3.jpg" alt="" class="r-img" />
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="close">
              <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
            </button>
          </div>
      </div>
      <div class="col-sm-4 card">
        <div id="content" >
            <img id="Image1" src="assets/images/4.jpg" alt="" class="r-img" />
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="close">
              <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
            </button>
          </div>
      </div>
    </div>
  </div>

<?php include 'footer.php' ?>
<script type="text/javascript">
$('#content,#content').hover(
  function() {
      $(this).parent().addClass('card-hover');
      $(this).children('#close').show();
  }, function() {
      $(this).parent().removeClass('card-hover');
      $(this).children('#close').hide();
  }
);

$('#close,#close1').on('click', function() {
  $('.card-hover').remove();
});


</script>
