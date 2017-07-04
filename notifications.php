<div class="form-title-row edit-title">
      Notifications
    <hr>
</div>

  <form method="post" action="{{ URL::to('editProfile') }}" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="notification-container" >
      <div class="col-lg-12">
        <div class="notification-title">
          <p>SMS Notification</p>
        </div>
      </div>
      <div class="col-md-4 col-xs-12 edit-image-container">
        <div class="text-center notification-overview">
          Receive mobile updates by regular SMS text message.
        </div>
      </div>
        <div class="col-md-7 col-xs-12">
          <div class="form-group">
           <div class="col-lg-12">
             <span class="checkbox filter-facilities"style="text-align:justify;padding-bottom:10px;">
                 <input type="checkbox" id="terms" style="margin-left:0px;">
                 <label for="terms" class="filter-label" style="display:inline;">
                  <b>Messages</b> <br>
                  From the Resorts Owner/ Manager/ Caretaker</label>
               </span>
           </div>
          </div>
          <div class="form-group">
           <div class="col-lg-12">
             <span class="checkbox filter-facilities"style="text-align:justify;padding-bottom:10px;">
                 <input type="checkbox" id="terms" style="margin-left:0px;">
                 <label for="terms" class="filter-label" style="display:inline;">
                  <b>Booking and Reservation Updates</b> <br>
                  Booking Confirmation, changes, updates, and more</label>
               </span>
           </div>
          </div>
          <div class="form-group">
           <div class="col-lg-12">
             <span class="checkbox filter-facilities"style="text-align:justify;padding-bottom:10px;">
                 <input type="checkbox" id="terms" style="margin-left:0px;">
                 <label for="terms" class="filter-label" style="display:inline;">
                  <b>Other</b> <br>
                  Promotions, Discounts, and Great Deals</label>
               </span>
           </div>
          </div>
        </div>
    </div>

    <div class="notification-container" >
      <div class="col-lg-12">
        <div class="notification-title">
          <p>Email Notification</p>
        </div>
      </div>
      <div class="col-md-4 col-xs-12">
        <div class="text-center notification-overview">
          Receive online updates via email.
         </div>
      </div>
        <div class="col-md-7 col-xs-12">
          <div class="form-group">
           <div class="col-lg-12">
             <span class="checkbox filter-facilities"style="text-align:justify;padding-bottom:10px;">
                 <input type="checkbox" id="terms" style="margin-left:0px;">
                 <label for="terms" class="filter-label" style="display:inline;">
                  <b>Promotional Emails</b> <br>
                  Promotions, Discounts, and Great Deals</label>
               </span>
           </div>
          </div>

          <div class="form-group">
           <div class="col-lg-12">
             <span class="checkbox filter-facilities"style="text-align:justify;padding-bottom:10px;">
                 <input type="checkbox" id="terms" style="margin-left:0px;">
                 <label for="terms" class="filter-label" style="display:inline;">
                  <b>Booking and Reservation Updates</b> <br>
                  Booking Confirmation, changes, updates, and more</label>
               </span>
           </div>
          </div>
          <div class="form-group">
           <div class="col-lg-12">
             <span class="checkbox filter-facilities"style="text-align:justify;padding-bottom:10px;">
                 <input type="checkbox" id="terms" style="margin-left:0px;">
                 <label for="terms" class="filter-label" style="display:inline;">
                  <b>Account activity </b> <br>
                  Notify you about your payment, reservation confirmation, and security alert.</label>
               </span>
           </div>
          </div>
        </div>
    </div>
    <div class="form-row col-lg-12" style="margin-bottom:20px;">
      <input type="submit" class="btn btn-primary btn-md edit-btn" value="Save">
    </div>
    </form>
