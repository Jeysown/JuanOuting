<?php include 'nav-payment.php' ?>
<?php include 'search-content-frontend.php' ?>

  <div class="container" style="padding-top:100px;">
    <div class="payment-methods col-sm-7 col-md-9 payment-container">

      <ul class="tabs">
        <div class="col-sm-6 col-md-3">

        <li class="active">
          <a href="#money_remittance" >
            <img src="assets/images/cebuana.png" class="payment-icon">
            <p >Cebuana Lhuillier</p>
          </a>
        </li>
      </div>
      <div class="col-sm-6 col-md-3">
        <li class="">
          <a href="#bank">
            <i class="fa fa-university fa-4x payment-icon" aria-hidden="true"></i>
            <p>Bank</p>
          </a>
        </li>
      </div>

        <div class="col-sm-6 col-md-3">

        <li class="">
          <a href="#credit-card">
            <i class="fa fa-credit-card fa-4x payment-icon" aria-hidden="true"></i>
            <p>Credit/debit Card</p>
          </a>
        </li>
      </div>

        <div class="col-sm-6 col-md-3">

        <li class="">
          <a href="#paypal">
            <img src="assets/images/paypal.png" class="payment-icon"   >
            <p>PayPal</p>
          </a>
        </li>
      </div>


      </ul>
      <div class="tab-content">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <div id="credit-card" class="tab">
            <form>
              <div class="form-row">
                <div class="col-xs-4 form-group">
                  <label for="name">Type of Card</label>
                  <select class="form-control">
                    <option value="">Credit Card</option>
                    <option value="">Debit Card</option>
                </div>
              </div>
              <div class="form-row">
                <div class="col-xs-4 form-group">
                  <label for="name">Name on Card</label>
                  <input type="text" id="name" class="form-control" name="" value="">
                </div>
              </div>
              <div class="form-row">
                <div class="col-xs-4 form-group">
                  <label for="card_no">Card number</label>
                  <input type="text" id="card_no" class="form-control" name="" value="">
                </div>
              </div>
              <div class="form-row">
                <div class="col-xs-4 form-group">
                  <label for="cvc">CVC</label>
                  <input type="text" id="cvc" class="form-control" name="" value="ex. 311">
                </div>
                <div class="col-xs-4 form-group" >
                  <label for="expiration">Expiration</label>
                  <input type="text" id="exp_month" class="form-control" name="" value="MM">
                </div>
                <div class="col-xs-4 form-group">
                  <input type="text" id="exp_year" class="form-control" name="" value="YYYY">
                </div>
              </div>
            </form>
          </div>

        <div id="bank" class="tab">
          <h3>Bank</h3><br>
          <h4>Options:</h4>
          <div class="form-row">
            <button type="button" class="bank-button btn btn-default" name="button"><img src="assets/images/bdo.jpg" alt=""></button>
            <button type="button" class="bank-button btn btn-default" name="button"><img src="assets/images/bpi.jpg" alt=""></button>
            <button type="button" class="bank-button btn btn-default" name="button"><img src="assets/images/metrobank.png" alt=""></button>

          </div>
          <div class="form-row">
            <form>
              <input type="text" name="" value="">
              <input type="text" name="" value="">
              <input type="text" name="" value="">
              <input type="text" name="" value="">
            </form>
          </div>
        </div>
        <div id="paypal" class="tab">
          <h3>PayPal</h3>
          <button type="button" class="btn btn-default" name="button">PayPal</button>
        </div>
        <div id="money_remittance" class="tab active">
          <div class="col-md-6">
            <h3>Over-the-Counter</h3>
            <div class="form-group">
              <input type="text" class="form-control" name="" value="">
              <input type="text" class="form-control" name="" value="">
            </div>
          </div>
          <div class="col-md-6">
            <h3 >e-Money</h3>
            <div class="form-group">
              <input type="text" class="form-control" name="" value="">
              <input type="text" class="form-control" name="" value="">
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-12">
        <center><button type="button" name="button" class="btn btn-primary submit-btn">Submit</button></center>
      </div>
      </div>
    </div>
    <div class="col-sm-5 col-md-3 deck" >

            <div class="fixedElement clearFixed" id="book-responsive">
                        <div>
                          <div class="container" id="book">
                            <div class="row">
                            <div class="search-bar">
                              <div class="search-content search-location-responsive sticky-button-book" >
                                  <button class="subscribe btn btn-primary btn-lg btn-block" type="button" onClick="openbooking()">Payment Overview</button>
                              </div>
                              <div class="overlay overlay-search" id="myBooking">
                                <div class="overlay-content overlay-content-book" id="content-booking">
                                  <div class=" search-bar">
                                    <a href="javascript:void(0)" class="closebtn" onclick="closebooking()">&times;</a>
                                    <div>
                                      <div class="panel panel-default" style="margin-left:10px;">
                                          <div class="panel-body">
                                              <form role="form" id="payment-form" method="POST" action="javascript:void(0);">
                                                  <div class="row">
                                                      <div class="col-xs-12">
                                                          <div class="form-group">
                                                              <label>Day</label>
                                                              <div class="input-group" style="width:100%;text-align:center;">
                                                                Half Day - Morning
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="row">
                                                      <div class="col-sm-6">
                                                          <div class="form-group">
                                                            <label>Check In</label>
                                                            <div class="has-feedback">
                                                                <center>03/12/2017</center>
                                                            </div>
                                                          </div>
                                                      </div>
                                                      <div class="col-sm-6">
                                                          <div class="form-group">
                                                            <label>Check Out</label>
                                                            <div class="has-feedback">
                                                                <center>03/15/2017</center>
                                                            </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="row">
                                                      <div class="col-xs-12">
                                                          <div class="form-group">
                                                              <label for="couponCode">Promo Code</label>
                                                              <div class="has-feedback">
                                                                  <center>0FBTW32daA</center>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="row">
                                                    <div class="col-xs-12">
                                                      <div class="input-group" style="width:100%;">
                                                        <div class="form-group">
                                                          <label for="couponCode">Guests</label>
                                                            <center>1-15 Persons</center>
                                                          </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="row">
                                                    <div class="col-xs-12">
                                                      <table class="table" style="margin-bottom:0px;">
                                                        <tbody class="table-content">
                                                            <tr style="border-top:none;">
                                                                <td style="border-top:none;">₱5,512 x 1 night </h4></td>
                                                                <td style="border-top:none;"></td>
                                                                <td style="border-top:none;"></td>
                                                                <td class="col-md-1 text-center" style="border-top:none;" >₱5,512</td>
                                                            </tr>
                                                            <tr>
                                                              <td>Tax and Service Fee</h4></td>
                                                              <td></td>
                                                              <td></td>
                                                              <td class="col-md-1 text-center">₱1,003</td>
                                                            </tr>
                                                            <tr>
                                                              <td>Total</h4></td>
                                                              <td></td>
                                                              <td></td>
                                                              <td class="col-md-1 text-center">₱6,515</td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                      </div>
                                                    </div>
                                                  <div class="row" style="display:none;">
                                                      <div class="col-xs-12">
                                                          <p class="payment-errors"></p>
                                                      </div>
                                                  </div>
                                              </form>
                                          </div>
                                      </div>
                                    </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
        </div>
      </div>
  </div>
<?php include 'footer-payment.php' ?>
