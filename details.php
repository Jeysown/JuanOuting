<?php include 'nav-payment.php' ?>
<?php include 'search-content-frontend.php' ?>

<div class="container" style="padding-top:100px;">
  <div class="payment-methods col-sm-7 col-md-9 details-container">
          <div class="payment-methods col-sm-12 payment-container" style="padding-bottom:20px;margin-bottom:20px;">
          <div class="r-title-description col-lg-12 details-container">
              <p>Booking Details</p>
          </div>
          <div class="col-lg-12 details-container r-title-description" style="padding-top:0px;">
            <div class="col-lg-6 details-container" >
              <p style="font-size:14px;"><span> <b>Booking ID:</b> 106460816</span></p>

            </div>
            <div class="col-lg-6 details-container" >
                <p><span class="booking-overview"><b>Status:</b> Departed on September 28, 2016</span></p>

            </div>

          </div>
            <div class="col-md-4 details-container" style="padding-bottom:20px;">
              <img src="assets/images/balinese/1.png" alt="" width="100%;">
            </div>
            <div class="col-md-8 details-container " >
              <div class="col-sm-6 deck r-title" >
                <div class="resort-name" style="font-size:18px;line-height:15px;">
                  Balinese Villa
                </div>
                <div class="resort-address">
                  <p class="r-p" style="font-size:14px;"> Calamba, Calabarzon, Philippines</p>
                  <a class="r-map-button" href="#" style="font-size:12px;">View on Map</a>
                </div>
              </div>
              <div class="col-sm-6 deck r-title" >
                <p class="r-p"><span class="r-rating" style="font-size:0px;"> <img src="assets/images/duck.png" alt="" width="20px"><img src="assets/images/duck.png" alt="" width="20px"><img src="assets/images/duck.png" alt="" width="20px"><img src="assets/images/duck.png" alt="" width="20px"><img src="assets/images/duck.png" alt="" width="20px"></span></p>
                <p class="r-p"><span class="r-review" style="font-size:14px;">Based on 3 reviews</span></p>
              </div>

            </div>
            <div class="booking-primary-header">
              <div class="col-sm-12 details-container">
                <div class="booking-primary">
                  <label>Lead Guest:</label>
                    <p>ALLAN MALIG</p>
                </div>
              </div>
              <div class="col-sm-12 details-container">
                <div class="booking-primary">
                  <label>Reservation:</label>
                    <p>3 Nights</p>
                </div>
              </div>
              <div class="col-sm-12 details-container">
                <div class="booking-primary">
                  <label>Number of guests:</label>
                    <p>15 Guests</p>
                </div>
              </div>
            </div>
        </div>
        <div class="payment-methods col-sm-12 payment-container">
        <div class="r-title-description col-lg-12 details-container">
            <p>Records</p>
        </div>
        <div class="col-lg-12 details-container r-title-description" style="padding-top:0px;">
          <div class="col-lg-6 details-container" >
            <p style="font-size:14px;"><span> <b>Booking ID:</b> 106460816</span></p>

          </div>
          <div class="col-lg-6 details-container" >
              <p><span class="booking-overview"><b>Status:</b> Departed on September 28, 2016</span></p>

          </div>

        </div>
          <div class="col-md-4 details-container" style="padding-bottom:20px;">
            <img src="assets/images/balinese/1.png" alt="" width="100%;">
          </div>
          <div class="col-md-8 details-container " >
            <div class="col-sm-6 deck r-title" >
              <div class="resort-name" style="font-size:18px;line-height:15px;">
                Balinese Villa
              </div>
              <div class="resort-address">
                <p class="r-p" style="font-size:14px;"> Calamba, Calabarzon, Philippines</p>
                <a class="r-map-button" href="#" style="font-size:12px;">View on Map</a>
              </div>
            </div>
            <div class="col-sm-6 deck r-title" >
              <p class="r-p"><span class="r-rating" style="font-size:0px;"> <img src="assets/images/duck.png" alt="" width="20px"><img src="assets/images/duck.png" alt="" width="20px"><img src="assets/images/duck.png" alt="" width="20px"><img src="assets/images/duck.png" alt="" width="20px"><img src="assets/images/duck.png" alt="" width="20px"></span></p>
              <p class="r-p"><span class="r-review" style="font-size:14px;">Based on 3 reviews</span></p>
            </div>

          </div>
          <div class="booking-primary-header">
            <div class="col-sm-12 details-container">
              <div class="booking-primary">
                <label>Lead Guest:</label>
                  <p>ALLAN MALIG</p>
              </div>
            </div>
            <div class="col-sm-12 details-container">
              <div class="booking-primary">
                <label>Reservation:</label>
                  <p>3 Nights</p>
              </div>
            </div>
            <div class="col-sm-12 details-container">
              <div class="booking-primary">
                <label>Number of guests:</label>
                  <p>15 Guests</p>
              </div>
            </div>
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
                          <div class="r-title-description" style="margin-left:10px;">
                            <p>Booking Summary</p>
                          </div>
                          <div class="panel-body">
                            <form role="form" id="payment-form" method="POST" action="javascript:void(0);">
                              <div class="row">
                                <div class="col-xs-12" >
                                  <div class="">
                                    <label style="display:inline-block;">Day:  </label>
                                     <p style="float:right;"> Half Day - Morning</p>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-sm-12">
                                  <div class="">
                                    <label style="display:inline-block">Check In: </label>
                                      <p  style="float:right;">03/12/2017</p>
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <div class="">
                                    <label style="display:inline-block;">Check Out:</label>
                                      <p style="float:right">03/15/2017</p>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-xs-12">
                                  <div class="">
                                    <label for="couponCode" style="display:inline-block;">Promo Code: </label>
                                    <p style="float:right">0FBTW32daA</p>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-xs-12">
                                    <div class="">
                                      <label for="couponCode" style="display:inline-block;">Guests: </label>
                                      <p style="float:right;">1-15 Persons</p>
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
                                        <div class="" style="display:inline-block">
                                          <label>Day: </label>
                                          <p style="float:right"> Half Day - Morning</p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-sm-12">
                                        <div class="">
                                          <label>Check In: </label>
                                          <p  style="display:inline-block">03/12/2017</p>
                                        </div>
                                      </div>
                                      <div class="col-sm-12">
                                        <div class="">
                                          <label>Check Out:</label>
                                          <p style="display:inline-block">03/15/2017</p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-xs-12">
                                        <div class="">
                                          <label for="couponCode">Promo Code: </label>
                                          <p style="display:inline-block">0FBTW32daA</p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-xs-12">
                                        <div class="">
                                          <label for="couponCode">Guests: </label>
                                          <p style="display:inline-block">1-15 Persons</p>
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
