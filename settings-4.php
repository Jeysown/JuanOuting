<div class="form-title-row edit-title">
      Payment
    <hr>
</div>

    <div class="notification-container" >
      <form action="">
        <div class="col-sm-12">
          <div class="notification-title">
            <p>Payment Methods</p>
          </div>
        </div>
        <div class="col-sm-6" style="padding-bottom:20px;">
          <div class="col-sm-12">
            <div class="notification-subtitle">
              <p><input type="radio" name="payment" value="Credit" id="Credit"> <label for="Credit">Credit / Debit / ATM Card</label></input></p>
            </div>
          </div>
          <div class="form-group">
           <center><label class="col-sm-12">Card Number:</label></center>
           <div class="col-sm-12">
             <input class="form-control form-settings input-content" type="text" required="" name="cardNumber" value="" placeholder="Valid Card Number">
           </div>
          </div>
          <div class="col-sm-7" style="padding-right:0px;">
            <div class="form-group">
             <label class="col-sm-12 no-padding">Expires On:</label>
             <div class="col-sm-6 no-padding" style="padding-right:10px;">
               <input class="form-control form-settings input-content" type="text" required="" name="MM" value="" placeholder="MM">
             </div>
              <div class="col-sm-6 no-padding" style="padding-right:10px;">
                <input class="form-control form-settings input-content" type="text" required="" name="YYYY" value="" placeholder="YYYY">
              </div>
            </div>
          </div>
          <div class="col-sm-5">
            <div class="form-group">
             <center><label class="col-sm-12 no-padding">Security Code:</label></center>
             <div class="col-sm-12 no-padding">
               <input class="form-control form-settings input-content" type="text" required="" name="securityCode" value="">
             </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
             <center><label class="col-sm-12 no-padding">First Name:</label></center>
             <div class="col-sm-12 no-padding">
               <input class="form-control form-settings input-content" type="text" required="" name="fName" value="" placeholder="Valid Card Number">
             </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
             <center><label class="col-sm-12 no-padding">Last Name:</label></center>
             <div class="col-sm-12 no-padding">
               <input class="form-control form-settings input-content" type="text" required="" name="lName" value="" placeholder="Valid Card Number">
             </div>
            </div>
          </div>
        </div>
        <!-- Dragon Pay -->
        <div class="col-sm-6">
          <div class="col-sm-12">
            <div class="notification-subtitle">
              <p><input type="radio" name="payment" value="DragonPay" id="DragonPay"> <label for="DragonPay">OTC / Bank Deposit / Online Banking / Bancnet</label></input></p>
            </div>
          </div>
          <div class="form-group">
           <div class="col-md-12">
             <img src="assets/images/payment.png" alt="" style="width:100%;padding-bottom:20px;">
           </div>
          </div>
          <div class="col-sm-12">
            <div class="notification-subtitle">
              <p><input type="radio" name="payment" value="Paypal" id="Paypal"> <label for="Paypal">Paypal</label></input></p>
            </div>
          </div>
          <div class="form-group">
           <div class="col-md-12">
             <img src="assets/images/paypal1.png" alt="" style="width:100%;height:110px;margin-top:-10px;">
           </div>
          </div>
          <div class="form-row col-lg-12" style="padding-top:20px;">
            <input type="submit" class="btn btn-primary btn-md edit-btn" value="Update Payment Options">
          </div>
        </div>
    </form>
    </div>

    <div class="notification-container" >
      <div class="col-sm-12">
        <div class="notification-title" style="padding-bottom:10px;">
          <p>Payment History
            <a href="download_csv_payment" class="btn btn-success" style="float:right;text-align:center;">Dowload <i class="fa fa-download" aria-hidden="true"></i></a>
          </p>
        </div>
      </div>
      <div class="col-xs-12">
        <table class="table table-bordered table-hover">
          <tr>
            <th>Date of Payment</th>
            <th>Resort Name</th>
            <td>Day</td>
            <th>Amount</th>
            <th>Check In</th>
            <th>Check Out</th>
            <th>Mode of Payment</th>
          </tr>
          <tr>
            <td>March 27, 2011</td>
            <td>Balinese Villa</td>
            <td>Morning</td>
            <td>₱6,000</td>
            <td>April 4, 2011</td>
            <td>April 5, 2011</td>
            <td>Cebuana Lhuillier</td>
          </tr>
          <tr>
            <td>March 27, 2011</td>
            <td>Balinese Villa</td>
            <td>Morning</td>
            <td>₱6,000</td>
            <td>April 4, 2011</td>
            <td>April 5, 2011</td>
            <td>Cebuana Lhuillier</td>
          </tr>
          <tr>
            <td>March 27, 2011</td>
            <td>Balinese Villa</td>
            <td>Morning</td>
            <td>₱6,000</td>
            <td>April 4, 2011</td>
            <td>April 5, 2011</td>
            <td>Cebuana Lhuillier</td>
          </tr>
        </table>
      </div>

    </div>
