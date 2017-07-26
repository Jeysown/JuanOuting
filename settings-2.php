<div class="form-title-row edit-title">
      Change Password
    <hr>
</div>
<div class="notification-container">


    <form method="post" action="{{ URL::to('editProfile') }}" enctype="multipart/form-data">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="col-md-7 col-xs-12">
        <center>
          <div class="form-group">
           <label class="col-lg-4 control-label">Old Password</label>
           <div class="col-lg-8">
             <input class="form-control form-settings" name="old_password" id="passwordField" type="password" oninput="checkOldPasswordInput(this);">
           </div>
          </div>
          <div class="form-group">
           <label class="col-lg-4 control-label">New Password</label>
           <div class="col-lg-8">
             <input class="form-control form-settings" name="new_password" id="newPasswordField" type="password" oninput="InvalidMsg(this);">
           </div>
          </div>
          <div class="form-group">
           <label class="col-lg-4 control-label">Confirm Password</label>
           <div class="col-lg-8">
             <input class="form-control form-settings" name="confirm_password" oninvalid="InvalidMsg(this);" id="confirmPasswordField" type="password" oninput="InvalidMsg(this);">
           </div>
          </div>

          <div class="form-row col-lg-12" style="margin-bottom:20px;">
            <input type="submit" class="btn btn-primary btn-md edit-btn" value="Update Password">
          </div>
        </div>
      </form>
        </center>

</div>
