<?php include 'nav-frontend.php' ?>
<?php include 'search-content-frontend.php' ?>

<!-- Log In -->

  <div class="parent-resort">
      <div class="resort-img">
              </div>
        <div class="header-text">
        <center><p class="header-jumbotron">Balinese Villa</p>
        <hr class="header-hr">
          <a class="page-scroll header-result" href="#" onclick="openModal();currentSlide(1);">View Gallery</a>
        </center>
        </div>

    </div>


    <div id="myModal" class="modal1 " style="z-index:5000;">

      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>

      <span class="close cursor close1" onclick="closeModal()" style="opacity:1;">&times;</span>
      <div class="modal-content1 yey">

        <div class="mySlides">
          <div class="numbertext">1 / 4</div>
          <img src="assets/images/frontend/1.png" style="width:100%">
        </div>

        <div class="mySlides">
          <div class="numbertext">2 / 4</div>
          <img src="assets/images/frontend/2.png" style="width:100%">
        </div>

        <div class="mySlides">
          <div class="numbertext">3 / 4</div>
          <img src="assets/images/frontend/3.png" style="width:100%">
        </div>


        <div class="thumbnail-wrapper">
          <div class="thumbnail1">

            <div class="column">
              <img class="demo" src="assets/images/frontend/1.png" onclick="currentSlide(1)" alt="Nature">
            </div>

            <div class="column">
              <img class="demo" src="assets/images/frontend/2.png" onclick="currentSlide(2)" alt="Trolltunga">
            </div>

            <div class="column">
              <img class="demo" src="assets/images/frontend/3.png" onclick="currentSlide(3)" alt="Mountains">
            </div>

          </div>
        </div>


      </div>

    </div>
  <div class="container">
    <div class="row">
      <div class="r-title">
        <div class="col-sm-6 deck" >
          <div class="resort-name">
            Balinese Villa
          </div>
          <div class="resort-address">
            <p class="r-p"> Calamba, Calabarzon, Philippines</p>
            <a href="#">View on Map</a>
          </div>
        </div>
        <div class="col-sm-6 deck" >
          <p class="r-p"><span class="r-rating"> <img src="assets/images/duck.png" alt="" width="22px"><img src="assets/images/duck.png" alt="" width="22px"><img src="assets/images/duck.png" alt="" width="22px"><img src="assets/images/duck.png" alt="" width="22px"><img src="assets/images/duck.png" alt="" width="22px"></span></p>
          <p class="r-p"><span class="r-review">Based on 3 reviews</span></p>
        </div>
      </div>
      <div class="col-sm-7 col-md-9 deck r-overall">
        <!-- Overview of contents -->
        <div class="r-title-description">
          <p>About Us</p>
        </div>
        <p>Our Cozy four bed room private villa and social hall has a true filipino feeling.
            We can only accommodate around 16 persons, 24 can be manageable to sleep and less than 100 to party
            at the social hall Or swimming and stargazing on a late evening.</p>
            <!-- Prices -->
            <div>
              <div class="r-title-description">
                  <p>Prices</p>
              </div>
              <div class="col-xs-6 r-content-description">
                <p>Half Day - Morning: <b>₱5,000</b></p>
              </div>
              <div class="col-xs-6 r-content-description">
                <p>Half Day - Evening: <b>₱5,000</b></p>
              </div>
              <div class="col-xs-6 r-content-description">
                <p>Whole Day: <b>₱10,000</b></p>
              </div>
            </div>
            <!-- Check in Check out -->
        <div>
          <div class="r-title-description">
              <p>Check In / Check Out</p>
          </div>
          <div class="col-xs-6 r-content-description">
            <p>Check In: <b>8AM</b></p>
          </div>
          <div class="col-xs-6 r-content-description">
            <p>Check Out: <b>6AM</b></p>
          </div>
        </div>
        <!-- Check in Check out -->
        <!-- Bathrooms, Bedrooms, and Beds -->
        <div>
          <div class="r-title-description">
              <p>Bathrooms, Bedrooms, and Beds</p>
          </div>
          <div class="col-xs-6 col-sm-4 r-content-description">
            <p><img src="assets/images/icons/bathroom.png" alt=""  class="icon-filter">Bathrooms: <b>4</b></p>
          </div>
          <div class="col-xs-6 col-sm-4 r-content-description">
            <p><img src="assets/images/icons/bedroom.png" alt=""  class="icon-filter">Bedrooms: <b>4</b></p>
          </div>
          <div class="col-xs-6 col-sm-4 r-content-description">
            <p><img src="assets/images/icons/bed.png" alt=""  class="icon-filter">Beds: <b>4</b></p>
          </div>
        </div>
        <!-- Bathrooms, Bedrooms, and Beds -->
        <!--What they have  -->
      <div>
          <div class="r-title-description">
              <p>What we offer</p>
          </div>
          <div class="col-xs-6 col-sm-4 r-content-description">
            <p><img src="assets/images/icons/kiddie.jpg" alt=""  class="icon-filter">Kiddie Pool:<b> 3ft</b></p>
          </div>
          <div class="col-xs-6 col-sm-4 r-content-description">
            <p><img src="assets/images/icons/adult_pool.png" alt="" class="icon-filter">Adult Pool:<b> 6ft</b></p>
          </div>
          <div class="col-xs-6 col-sm-4 r-content-description">
            <p><img src="assets/images/icons/jacuzzi.png" alt=""  class="icon-filter">Jacuzzi</p>
          </div>
          <div class="col-xs-6 col-sm-4 r-content-description">
            <p><img src="assets/images/icons/billiard.png" alt=""  class="icon-filter">Billiards</p>
          </div>
          <div class="col-xs-6 col-sm-4 r-content-description">
            <p><img src="assets/images/icons/videoke.png" alt=""  class="icon-filter">Videoke</p>
          </div>
          <div class="col-xs-6 col-sm-4 r-content-description">
            <p><img src="assets/images/icons/kitchen.png" alt=""  class="icon-filter">Kitchen</p>
          </div>
          <div class="col-xs-6 col-sm-4 r-content-description">
            <p><img src="assets/images/icons/griller2.png" alt=""  class="icon-filter">Griller</p>
          </div>
          <div class="col-xs-6 col-sm-4 r-content-description">
            <p><img src="assets/images/icons/hall.png" alt=""  class="icon-filter">Function Hall</p>
          </div>
          <div class="col-xs-6 col-sm-4 r-content-description">
            <p><img src="assets/images/icons/wifi.png" alt=""  class="icon-filter">Wifi</p>
          </div>
        </div>
        <!--What they have  -->
        <!-- Description -->
        <div>
          <div class="r-title-description" >
              <p>Know more about us</p>
          </div>
          <div class="col-xs-12 r-content-description">
            <p>Clean and open space good for party, wedding reception, baptismal, debut, team building or just plain family gathering or friends get together. As listed 16 pax to comfortably sleep on the listed price in the excess of 16 pax shall be subject to additional fee, we can also accommodate less 100 people to party at the social hall but subject to confirmation and additional fee. The spacious pavillion with good air circulation will give you a relaxing feeling.</p>
          </div>
        </div>
        <!-- Description -->
        <!-- House Rules -->
        <div>
          <div class="r-title-description" >
              <p>House Rules</p>
          </div>
          <div class="col-xs-12 r-content-description">
            <p>We request a non smoking on the bedroom and toilet and bathrooms. As much as possible please keep our place clean so others can also enjoy our place.
              Smoking is allowed only at the social hall provided that the cigarette buts will only end up at the ash tray.</p>
            <p>No drinking or eating inside the swimming pool.</p>
            <p>We have provide beautiful ceramic vases to contemplate the resort and tropical feel in our rest house please do take good care of them any damage will be charge accordingly, we do not provide towels,blankets and toiletries please do bring your own.</p>
            <p>A care taker will always be present to assist you but please do respect that he is there to check if everthing is in good condition nothing more nothing less</p>
            <p>Please keep in mind that the karaoke machine is provided free of charge but if the microphone is damage by you or your group you will be charge to the security deposit</p>
          </div>
        </div>
        <!-- House Rules -->
        <!-- Other Charges -->
        <div>
          <div class="r-title-description" >
              <p>Other Charges</p>
          </div>
          <div class="col-xs-12 col-sm-6 r-content-description">
            <p>LPG: <b>Php300.00/22hr ; Php150.00/day or night </b></p>
          </div>
        </div>
        <!-- Other Charges -->

      </div>
  <div class="col-sm-5 col-md-3 deck r-overall " >

          <div class="fixedElement clearFixed" id="book-responsive">
                      <div>
                        <div class="container" id="book">
                          <div class="row">
                          <div class="search-bar">
                            <div class="search-content search-location-responsive sticky-button-book" >
                                <button class="subscribe input-content btn btn-lg" type="button" onClick="openbooking()">Book Now</button>
                            </div>
                            <div class="overlay overlay-search" id="myBooking">
                              <div class="overlay-content overlay-content-book" id="content-booking">
                                <div class=" search-bar">
                                  <a href="javascript:void(0)" class="closebtn" onclick="closebooking()">&times;</a>
                                  <div>
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <form role="form" id="payment-form" method="POST" action="javascript:void(0);">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <div class="form-group">
                                                            <label>Day</label>
                                                            <div class="input-group" style="width:100%;">
                                                              <button class="btn btn-default dropdown-toggle input-content" type="button" data-toggle="dropdown">Halfday- Day
                                                                <span class="fa fa-chevron-circle-down search-dropdown"></span></button>
                                                                <ul class="dropdown-menu">
                                                                  <li><a id = "halfday" href="#">Halfday- Day</a></li>
                                                                  <li><a id = "halfday" href="#">Halfday - Night</a></li>
                                                                  <li><a id = "whole" href="#">Wholeday</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                          <label>Check In</label>
                                                          <div class="has-feedback">
                                                            <input id="FromDate1" class="input-content"/><i class="fa fa-calendar search-date-icon form-control-feedback"></i></input>
                                                          </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                          <label>Check Out</label>
                                                          <div class="has-feedback">
                                                            <input id="ToDate1" class="input-content"/><i class="fa fa-calendar search-date-icon form-control-feedback"></i></input>
                                                          </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <div class="form-group">
                                                            <label for="couponCode">Promo Code</label>
                                                            <div class="has-feedback">
                                                              <input type="text" class="input-content" placeholder="Promo Code"/></input>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                  <div class="col-xs-12">
                                                    <div class="input-group" style="width:100%;">
                                                      <div class="form-group">
                                                        <label for="couponCode">Guests</label>
                                                        <button class="btn btn-default dropdown-toggle input-content" type="button" data-toggle="dropdown">1-15 persons
                                                          <span class="fa fa-chevron-circle-down search-dropdown"></span></button>
                                                          <ul class="dropdown-menu">
                                                            <li><a href="#">1-15 persons</a></li>
                                                            <li><a href="#">1-20 persons</a></li>
                                                            <li><a href="#">1-25 persons</a></li>
                                                            <li><a href="#">1-30 persons</a></li>
                                                            <li><a href="#">1-40 persons</a></li>
                                                            <li><a href="#">1-50 persons</a></li>
                                                          </ul>
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
                                                <div class="row" style="padding-top:20px;">
                                                    <div class="col-xs-12">
                                                      <a href="payment.php">  <button class="subscribe input-content btn btn-lg " type="button">Book Now</button></a>
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

          <!-- Reviews -->
          <div class="col-sm-12 deck overlay-fixed">
            <div class="r-title-description" >
                <p>Reviews</p>
            </div>
              <div class="review-content">
                <div class="col-sm-3 r-content-description">
                  <center><img src="assets/images/jason.jpg" class="img-responsive img-circle" alt="">
                  <p class="review-name">Jason Lopez</p>
                  <p>Manila, Philippines</p>
                  </center>
                </div>
                <div class="col-sm-9 r-content-description r-review-comment" style="">
                  <p class="r-comment-header"><b>Best Resort Ever</b> <span class="r-review-rating"><img src="assets/images/duck.png" alt="" width="22px"><img src="assets/images/duck.png" alt="" width="22px"><img src="assets/images/duck.png" alt="" width="22px"><img src="assets/images/duck.png" alt="" width="22px"></span></p>
                  <p>Vonn was an excellent host in all aspects, especially in terms of communication. He really is a Superhost. I enjoyed my week-long stay at Vonn's place in Manila. Everything was exactly as advertised. The place was very clean, comfortable and cozy. Arrival and departure was a breeze. This condo is close to everything, from malls, tourist spots, and restaurants. It is very much accessible to public transit, LRT train station is just a stone-throw away. and Overall, I had a great and wonderful experience.</p>
                  <p>Reviewed February 26, 2017</p>
                </div>
                <div class="col-lg-12 review-hr">
                </div>
            </div>
            <div class="review-content">
              <div class="col-sm-3 r-content-description">
                <center><img src="assets/images/joyce.jpg" class="img-responsive img-circle" alt="">
                <p class="review-name">Joyce Ann Potestades</p>
                <p>Manila, Philippines</p>
                </center>
              </div>
              <div class="col-sm-9 r-content-description r-review-comment" style="">
                <p class="r-comment-header"><b>Not very satisfied</b> <span class="r-review-rating"><img src="assets/images/duck.png" alt="" width="22px"><img src="assets/images/duck.png" alt="" width="22px"><img src="assets/images/duck.png" alt="" width="22px"></span></p>
                <p>The flat is cozy and clean. Although the bedroom can be a bit tight-spaced when using all of the three beds. Nevertheless, the beds are quite comfortable! There are some restaurants in walking distance and two convenience stores next door. The place is quite convenience and easy to find by (online) taxi. Overall we had an amazing stays here and definitely would like to go back if we happen to visit Manila again in the future.</p>
                <p>Reviewed January 2, 2017</p>
              </div>
              <div class="col-lg-12 review-hr">
              </div>
            </div>
            <div class="review-content">
              <div class="col-sm-3 r-content-description">
                <center><img src="assets/images/glen.jpg" class="img-responsive img-circle" alt="">
                <p class="review-name">Glenwin Bernabe</p>
                <p>Manila, Philippines</p>
                </center>
              </div>
              <div class="col-sm-9 r-content-description r-review-comment" style="">
                <p class="r-comment-header"><b>Great Place</b> <span class="r-review-rating"><img src="assets/images/duck.png" alt="" width="22px"><img src="assets/images/duck.png" alt="" width="22px"><img src="assets/images/duck.png" alt="" width="22px"><img src="assets/images/duck.png" alt="" width="22px"></span></p>
                <p>Place is beautifully designed and practical. Just make sure to bring blankets, toilet paper and prepare for cold showers. Only a single electric stove available and no microwave. It is great place for close families, but i wouldnt recommend it for more than 7 couples. ( Max Bed sharing)</p>
                <p>Reviewed December 1, 2016</p>
              </div>
              <div class="col-lg-12 review-hr">
              </div>
            </div>
          </div>
            <!-- Reviews -->
            <!-- Location -->
            <div class="col-sm-12 deck r-location overlay-fixed">
              <div class="r-title-description" >
                  <p>Location</p>
              </div>
                <iframe src="https://www.google.com/maps/embed/v1/place?q=Technological%20Institute%20of%20the%20Philippines&zoom=17 &key=AIzaSyBVPZIWcBs6SVr5uECLmrhe8c-9DD8dGe0" style="height:500px;width:100%;border:none"></iframe>
            </div>
              <!-- Location -->
      </div>

    </div>
<?php include 'footer-frontend.php' ?>
