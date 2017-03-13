<?php include 'nav-payment.php' ?>
<?php include 'search-content-frontend.php' ?>

  <div class="container" style="padding-top:100px;">
    <div class="payment-methods col-sm-7 col-md-9 payment-container">
      <div class="r-title-description">
          <p>Payment Options</p>
      </div>
      <ul class="tabs col-lg-12">
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
            <p>Credit/Debit Card</p>
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
      <div class="col-md-12">
      <div class="tab-content">

          <div id="credit-card" class="tab">
            <form>
              <div class="col-xs-6 ">
                <div class="credit">
                  <label for="name">Type of Card</label>
                  <select class="form-control">
                    <option value="">Credit Card</option>
                    <option value="">Debit Card</option>
                  </select>
                </div>
              </div>
              <div class="col-xs-6 ">
                <div class="credit">
                  <label for="name">Card No. :</label>
                  <input type="text" id="name" class="form-control" name="" value="">
                </div>
              </div>
              <div class="col-xs-6 ">
                <div class="credit">
                  <label for="name">Name on Card:</label>
                  <input type="text" id="name" class="form-control" name="" value="">
                </div>
              </div>
              <div class="col-xs-6 ">
                <div class="credit">
                  <label for="name">Valid Thru:</label>
                  <input type="text" id="name" class="form-control" name="" value="">
                </div>
              </div>
              <div class="col-xs-6 ">
                <div class="credit">
                  <label for="name">Bank Name:</label>
                  <input type="text" id="name" class="form-control" name="" value="">
                </div>
              </div>

            </form>
          </div>
      </div>

      </div>
      <div>
        <center><p style="margin:10px 0px 0px 0px;font-size:11px;clear:both;display:block;">By booking using JuanderPool, you agree to it's <a href="#">privacy notice</a> and <a href="#">conditions of use</a></p>
          <button type="button" name="button" class="btn btn-primary submit-btn">Submit</button></center>
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
                                        <div class="r-title-description" style="margin-left:10px;">
                                            <p>Booking Summary</p>
                                        </div>
                                          <div class="panel-body">
                                              <form role="form" id="payment-form" method="POST" action="javascript:void(0);">
                                                  <div class="row">
                                                      <div class="col-xs-12">
                                                          <div class="">
                                                              <label>Day</label>
                                                              <div class="input-group" style="width:100%;text-align:center;">
                                                                Half Day - Morning
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="row">
                                                      <div class="col-sm-6">
                                                          <div class="">
                                                            <label>Check In</label>
                                                            <div class="has-feedback">
                                                                <center>03/12/2017</center>
                                                            </div>
                                                          </div>
                                                      </div>
                                                      <div class="col-sm-6">
                                                          <div class="">
                                                            <label>Check Out</label>
                                                            <div class="has-feedback">
                                                                <center>03/15/2017</center>
                                                            </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="row">
                                                      <div class="col-xs-12">
                                                          <div class="">
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
                                                        <div class="">
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