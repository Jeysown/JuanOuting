<?php include 'nav-login.php' ?>

    <div class="container settings-container">
      <div class=" col-md-3 sidebar-container" >
        <div id="sidebar-wrapper" class="sidebar-toggle">
          <ul class="nav-settings nav">
            <li class="sidebar-li">
              <a href="#" onclick="sidebar();">
                <i class="fa fa-cogs" aria-hidden="true"></i>
                General
              </a>
            </li>
            <li class="sidebar-li active">
              <a href="#">
                <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                Password
              </a>
            </li>
            <li class="sidebar-li">
              <a href="#">
                <i class="fa fa-bell" aria-hidden="true"></i>
                Notifications
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-credit-card-alt" aria-hidden="true"></i>
                Payment
              </a>
            </li>
            </ul>
        </div>
      </div>
      <div class="col-md-9 settings-container-content">
        <?php include 'password.php' ?>
    </div>
  </div>

<?php include 'footer.php' ?>
<script type="text/javascript">
function readURL(input) {
if (input.files && input.files[0]) {
  var reader = new FileReader();
  reader.onload = function (e) {
      $('#profile_pic').attr('src', e.target.result);
  }
  reader.readAsDataURL(input.files[0]);
}
}
$("#imgInp").change(function(){
readURL(this);
});
$('.nav-settings').on('click', 'li', function() {
    $('.nav-settings li.active').removeClass('active');
    $(this).addClass('active');
});
</script>
