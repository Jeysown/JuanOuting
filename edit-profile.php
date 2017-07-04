<?php include 'nav-login.php' ?>

    <div class="container settings-container">
      <div class=" col-md-3 sidebar-container" >
        <div id="sidebar-wrapper" class="sidebar-toggle">

          <ul class="nav-settings nav">
            <li class="active">
              <a href="home" >
                <i class="fa fa-cogs" aria-hidden="true"></i>
                General
              </a>
            </li>
            <li>
              <a href="inquiries">
                <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                Password
              </a>
            </li>
            <li>
              <a href="inquiries">
                <i class="fa fa-user" aria-hidden="true"></i>
                Account Settings
              </a>
            </li>
            <li>
              <a href="inquiries">
                <i class="fa fa-bell" aria-hidden="true"></i>
                Notifications
              </a>
            </li>
            <li>
              <a href="inquiries">
                <i class="fa fa-phone" aria-hidden="true"></i>
                Mobile
              </a>
            </li>
            </ul>
          </div>
        </div>
      <div class="col-md-9 settings-container-content">
        <div class="form-title-row resort-name">
              General Account Settings
            <hr>
        </div>
        <center>

        <form method="post" action="{{ URL::to('editProfile') }}" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="col-md-4 col-xs-12">
            <div class="text-center">
              <img id="blah" src="assets/images/jason.jpg" class="edit-image img-circle" alt="avatar">
              <h6>Upload a different photo</h6>
              <center><input type="file" name="new_dp" class="text-center upload" id="imgInp" ></center>
            </div>
          </div>
        </center>
        <div class="col-md-8 col-xs-12">
          <div class="alert alert-info alert-small">
            <a class="panel-close close" data-dismiss="alert">×</a>
            <i class="glyphicon glyphicon-user"></i>
            Update your <strong>Personal Profile</strong> here.
          </div>
        <h2>Personal Info</h2>
        <center>
          <div class="form-group">
           <label class="col-lg-3 control-label">First name:</label>
           <div class="col-lg-9">
             <input class="form-control form-settings" type="text" required="" name="fname" value="" onkeydown="return alphaOnly(event);">
           </div>
          </div>
          <div class="form-group">
           <label class="col-lg-3 control-label">Last name:</label>
           <div class="col-lg-9">
             <input class="form-control form-settings" type="text" required="" name="lname" value="" onkeydown="return alphaOnly(event);">
           </div>
          </div>
          <div class="form-group">
           <label class="col-lg-3 control-label">Contact Number:</label>
           <div class="col-lg-9">
             <input class="form-control form-settings" type="text" name="contact" required="" pattern="[0][9][0-9]{9}" title="Valid is 09482468123" maxlength="11" value="">
           </div>
          </div>
          <div class="form-group">
           <label class="col-lg-3 control-label">Address:</label>
           <div class="col-lg-9">
             <input class="form-control form-settings" name="address" type="text" value="">
           </div>
          </div>
          <div class="form-group">
           <label class="col-lg-3 control-label">Email Address:</label>
           <div class="col-lg-9">
             <input class="form-control form-settings" name="email" type="email" required="" value="">
           </div>
          </div>
          <div class="form-group">
           <label class="col-lg-3 control-label">Old Password</label>
           <div class="col-lg-9">
             <input class="form-control form-settings" name="old_password" id="passwordField" type="password" oninput="checkOldPasswordInput(this);">
           </div>
          </div>
          <div class="form-group">
           <label class="col-lg-3 control-label">New Password</label>
           <div class="col-lg-9">
             <input class="form-control form-settings" name="new_password" id="newPasswordField" type="password" oninput="InvalidMsg(this);">
           </div>
          </div>
          <div class="form-group">
           <label class="col-lg-3 control-label">Confirm Password</label>
           <div class="col-lg-9">
             <input class="form-control form-settings" name="confirm_password" oninvalid="InvalidMsg(this);" id="confirmPasswordField" type="password" oninput="InvalidMsg(this);">
           </div>
          </div>
        <div class="form-row" style="margin-bottom:20px;">
          <center>
            <input type="submit" class="btn btn-primary btn-md edit-btn" value="Submit Form">
            <a href="back" class="btn btn-secondary btn-md edit-btn">Cancel</a>
          </center>
        </div>
      </div>
    </form>
      </center>
    </div>
  </div>

<?php include 'footer.php' ?>
