<?php include 'nav-frontend.php' ?>
<?php include 'search-content-frontend.php' ?>

<!-- Log In -->
<!-- BEGIN # MODAL LOGIN -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="vertical-alignment-helper">

    	<div class="modal-dialog modal-sm modal-lg vertical-align-center">
			<div class="modal-content">
				<div class="modal-header" align="center">

					<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closeButtonLogin()">
						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
					</button>
				</div>

                <div id="div-forms">
                    <form id="login-form">
		                <div class="modal-body">
                      <div class="col-md-5 login-column">
                         <div class="row">
                             <div class="col-xs-12">
                                 <div class="form-group">
                                     <center><label class="header-modal-row">Log In into your account</label></center>
                                     <div class="has-feedback">
                                       <input type="text" id="login_username" class="input-content" placeholder="Username" required/></input>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-xs-12">
                                 <div class="form-group">
                                     <div class="has-feedback">
                                       <input type="text" id="login_password" class="input-content" placeholder="Password" required/></input>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-xs-12">
                                 <button class="btn btn-primary btn-lg btn-block login-button pull-right" type="button" style="padding:0px;">Log In</button>
                             </div>
                         </div>


                        <div class="checkbox col-md-6 modal-spaces">
                            <label>
                                <input type="checkbox"> Remember me
                            </label>
                        </div>
                        <div class="col-md-6 modal-spaces">
                          <button onclick="lostPassword()" id="login_lost_btn" type="button" class="btn btn-link pull-right"  style="padding:6px 0px;">Lost Password?</button>
                        </div>
                      </div>
                      <div class="col-md-1 modal-spaces" style="top:82px;">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <center><label>OR</label><center>
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="col-md-5 login-column">
                         <div class="row">
                             <div class="col-xs-12">
                                 <div class="form-group">
                                     <center><button onclick="signupButtonLogin()" id="login_register_btn" type="button" class="btn-link header-modal-row" >Don't have an account yet?</button></center>
                                     <a class="btn btn-primary social-facebook login-button" href="/auth/facebook">&emsp;&emsp;<i class="fa fa-facebook"></i> &emsp;Log In with Facebook</a>
                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-xs-12">
                                 <div class="form-group">
                                     <div class="has-feedback">
                                       <a class="btn btn-primary social-twitter login-button" href="/auth/twitter"><i class="fa fa-twitter"></i>&emsp;Log In with Twitter</a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-xs-12">
                                <a class="btn btn-primary social-google login-button" href="/auth/google"><i class="fa fa-google-plus"></i>&emsp;Log In with Gmail</a>
                             </div>
                         </div>

                      </div>

        		    	</div>
				        <div class="modal-footer">

				        </div>
                    </form>
                    <!-- End # Login Form -->


                    <!-- Begin | Lost Password Form -->
                    <form id="lost-form" style="display:none;">
    	    		    <div class="modal-body">
		    				<input id="lost_email" class="form-control" type="text" placeholder="Email Address" required>
            			</div>
		    		    <div class="modal-footer">
                            <div>
                              <button class="btn btn-primary btn-lg btn-block login-button pull-right" type="button" style="padding:0px;">Send</button>

                            </div>
                            <div>
                                <button onclick="loginButtonPassword()" id="lost_login_btn" type="button" class="btn btn-link">Log In</button>
                                <button onclick="signupButtonPassword()" id="lost_register_btn" type="button" class="btn btn-link">Register</button>
                            </div>
		    		    </div>
                    </form>
                    <!-- End | Lost Password Form -->

                    <!-- Begin | Register Form -->
                    <form id="register-form" style="display:none;">
                		    <div class="modal-body">
                          <div class="row">
                              <div class="col-xs-12">
                                  <div class="form-group">
                                      <center><label class="header-modal-row">Sign up for new account</label></center>
                                  </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group">
                                <div class="has-feedback">
                                  <input type="text" id="login_fname" class="input-content" placeholder="First Name" required/></input>
                                </div>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group">
                                <div class="has-feedback">
                                  <input type="text" id="login_lname" class="input-content" placeholder="Last Name" required/></input>
                                </div>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group">
                                <div class="has-feedback">
                                  <input type="email" id="login_username" class="input-content" placeholder="Email Address" required/></input>
                                </div>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group">
                                <div class="has-feedback">
                                  <input type="password" id="login_password" class="input-content" placeholder="Password" required/></input>
                                </div>
                                </div>
                              </div>

                              <div class="col-md-12">
                                <div class="col-md-4 modal-spaces">
                                  <div class="form-group">
                                  <div class="has-feedback">
                                    <button class="btn btn-default dropdown-toggle input-content" type="button" data-toggle="dropdown">Month
                                      <span class="caret"></span></button>
                                      <ul class="dropdown-menu">
                                        <li value="1">January</li>
                                        <li value="2">February</li>
                                        <li value="3">March</li>
                                        <li value="4">April</li>
                                        <li value="5">May</li>
                                        <li value="6">June</li>
                                        <li value="7">July</li>
                                        <li value="8">August</li>
                                        <li value="9">September</li>
                                        <li value="10">October</li>
                                        <li value="11">November</li>
                                        <li value="12">December</li>
                                      </ul>
                                  </div>
                                  </div>
                                </div>
                                <div class="col-md-4 modal-spaces">
                                  <div class="form-group">
                                  <div class="has-feedback">
                                    <button class="btn btn-default dropdown-toggle input-content" type="button" data-toggle="dropdown">Day
                                      <span class="caret"></span></button>
                                      <ul class="dropdown-menu">
                                        <li value="1">1</li>
                                        <li value="2">2</li>
                                        <li value="3">3</li>
                                        <li value="4">4</li>
                                        <li value="5">5</li>
                                        <li value="6">6</li>
                                        <li value="7">7</li>
                                        <li value="8">8</li>
                                        <li value="9">9</li>
                                        <li value="10">10</li>
                                        <li value="11">11</li>
                                        <li value="12">12</li>
                                        <li value="13">13</li>
                                        <li value="14">14</li>
                                        <li value="15">15</li>
                                        <li value="16">16</li>
                                        <li value="17">17</li>
                                        <li value="18">18</li>
                                        <li value="19">19</li>
                                        <li value="20">20</li>
                                        <li value="21">21</li>
                                        <li value="22">22</li>
                                        <li value="23">23</li>
                                        <li value="24">24</li>
                                        <li value="25">25</li>
                                        <li value="26">26</li>
                                        <li value="27">27</li>
                                        <li value="28">28</li>
                                        <li value="29">29</li>
                                        <li value="30">30</li>
                                        <li value="31">31</li>
                                      </ul>
                                  </div>
                                  </div>
                                </div>
                                <div class="col-md-4 modal-spaces">
                                  <div class="form-group">
                                  <div class="has-feedback">
                                    <button class="btn btn-default dropdown-toggle input-content" type="button" data-toggle="dropdown">Year
                                      <span class="caret"></span></button>
                                      <ul class="dropdown-menu">
                                        <li value="2017">2017</li>
                                        <li value="2016">2016</li>
                                        <li value="2015">2015</li>
                                        <li value="2014">2014</li>
                                        <li value="2013">2013</li>
                                        <li value="2012">2012</li>
                                        <li value="2011">2011</li>
                                        <li value="2010">2010</li>
                                        <li value="2009">2009</li>
                                        <li value="2008">2008</li>
                                        <li value="2007">2007</li>
                                        <li value="2006">2006</li>
                                        <li value="2005">2005</li>
                                        <li value="2004">2004</li>
                                        <li value="2003">2003</li>
                                        <li value="2002">2002</li>
                                        <li value="2001">2001</li>
                                        <li value="2000">2000</li>
                                        <li value="1999">1999</li>
                                        <li value="1998">1998</li>
                                        <li value="1997">1997</li>
                                        <li value="1996">1996</li>
                                        <li value="1995">1995</li>
                                        <li value="1994">1994</li>
                                        <li value="1993">1993</li>
                                        <li value="1992">1992</li>
                                        <li value="1991">1991</li>
                                        <li value="1990">1990</li>
                                        <li value="1989">1989</li>
                                        <li value="1988">1988</li>
                                        <li value="1987">1987</li>
                                        <li value="1986">1986</li>
                                        <li value="1985">1985</li>
                                        <li value="1984">1984</li>
                                        <li value="1983">1983</li>
                                        <li value="1982">1982</li>
                                        <li value="1981">1981</li>
                                        <li value="1980">1980</li>
                                        <li value="1979">1979</li>
                                        <li value="1978">1978</li>
                                        <li value="1977">1977</li>
                                        <li value="1976">1976</li>
                                        <li value="1975">1975</li>
                                        <li value="1974">1974</li>
                                        <li value="1973">1973</li>
                                        <li value="1972">1972</li>
                                        <li value="1971">1971</li>
                                        <li value="1970">1970</li>
                                        <li value="1969">1969</li>
                                        <li value="1968">1968</li>
                                        <li value="1967">1967</li>
                                        <li value="1966">1966</li>
                                        <li value="1965">1965</li>
                                        <li value="1964">1964</li>
                                        <li value="1963">1963</li>
                                        <li value="1962">1962</li>
                                        <li value="1961">1961</li>
                                        <li value="1960">1960</li>
                                        <li value="1959">1959</li>
                                        <li value="1958">1958</li>
                                        <li value="1957">1957</li>
                                        <li value="1956">1956</li>
                                        <li value="1955">1955</li>
                                        <li value="1954">1954</li>
                                        <li value="1953">1953</li>
                                        <li value="1952">1952</li>
                                        <li value="1951">1951</li>
                                        <li value="1950">1950</li>
                                        <li value="1949">1949</li>
                                        <li value="1948">1948</li>
                                        <li value="1947">1947</li>
                                        <li value="1946">1946</li>
                                        <li value="1945">1945</li>
                                        <li value="1944">1944</li>
                                        <li value="1943">1943</li>
                                        <li value="1942">1942</li>
                                        <li value="1941">1941</li>
                                        <li value="1940">1940</li>
                                        <li value="1939">1939</li>
                                        <li value="1938">1938</li>
                                        <li value="1937">1937</li>
                                        <li value="1936">1936</li>
                                        <li value="1935">1935</li>
                                        <li value="1934">1934</li>
                                        <li value="1933">1933</li>
                                        <li value="1932">1932</li>
                                        <li value="1931">1931</li>
                                        <li value="1930">1930</li>
                                        <li value="1929">1929</li>
                                        <li value="1928">1928</li>
                                        <li value="1927">1927</li>
                                        <li value="1926">1926</li>
                                        <li value="1925">1925</li>
                                        <li value="1924">1924</li>
                                        <li value="1923">1923</li>
                                        <li value="1922">1922</li>
                                        <li value="1921">1921</li>
                                        <li value="1920">1920</li>
                                        <li value="1919">1919</li>
                                        <li value="1918">1918</li>
                                        <li value="1917">1917</li>
                                        <li value="1916">1916</li>
                                        <li value="1915">1915</li>
                                        <li value="1914">1914</li>
                                        <li value="1913">1913</li>
                                        <li value="1912">1912</li>
                                        <li value="1911">1911</li>
                                        <li value="1910">1910</li>
                                        <li value="1909">1909</li>
                                        <li value="1908">1908</li>
                                        <li value="1907">1907</li>
                                        <li value="1906">1906</li>
                                        <li value="1905">1905</li>
                                        <li value="1904">1904</li>
                                        <li value="1903">1903</li>
                                        <li value="1902">1902</li>
                                        <li value="1901">1901</li>
                                        <li value="1900">1900</li>
                                        <li value="1899">1899</li>
                                        <li value="1898">1898</li>
                                        <li value="1897">1897</li>
                                      </ul>
                                  </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                          <div>
                            <button class="btn btn-primary btn-lg btn-block login-button" type="button" style="padding:0px;width:100%;">Sign Up</button>

                          </div>
                			</div>
    		    		    <div class="modal-footer">

                                <div>
                                    <button onclick="loginButtonSignup()" id="register_login_btn" type="button" class="btn btn-link" >Log In</button>

                                </div>
    		    		    </div>
                    </form>
                    <!-- End | Register Form -->

                </div>
                <!-- End # DIV Form -->

              </div>
			</div>
		</div>
	</div>
    <!-- END # MODAL LOGIN -->
<!-- Log In -->

  <div class="parent-resort">
      <div class="resort-img"></div>
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
          <p class="r-p"><span class="r-rating">★★★★</span></p>
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
            <p>Bathrooms: <b>4</b></p>
          </div>
          <div class="col-xs-6 col-sm-4 r-content-description">
            <p>Bedrooms: <b>4</b></p>
          </div>
          <div class="col-xs-6 col-sm-4 r-content-description">
            <p>Beds: <b>4</b></p>
          </div>
        </div>
        <!-- Bathrooms, Bedrooms, and Beds -->
        <!--What they have  -->
      <div>
          <div class="r-title-description">
              <p>What we offer</p>
          </div>
          <div class="col-xs-6 col-sm-4 r-content-description">
            <p><b>Kiddie Pool: 3ft</b></p>
          </div>
          <div class="col-xs-6 col-sm-4 r-content-description">
            <p><b>Adult Pool: 6ft</b></p>
          </div>
          <div class="col-xs-6 col-sm-4 r-content-description">
            <p><b>Jacuzzi</b></p>
          </div>
          <div class="col-xs-6 col-sm-4 r-content-description">
            <p><b>Billiards</b></p>
          </div>
          <div class="col-xs-6 col-sm-4 r-content-description">
            <p><b>Videoke</b></p>
          </div>
          <div class="col-xs-6 col-sm-4 r-content-description">
            <p><b>Kitchen</b></p>
          </div>
          <div class="col-xs-6 col-sm-4 r-content-description">
            <p><b>Griller</b></p>
          </div>
          <div class="col-xs-6 col-sm-4 r-content-description">
            <p><b>Function Hall</b></p>
          </div>
          <div class="col-xs-6 col-sm-4 r-content-description">
            <p><b>Wifi</b></p>
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
                                <button class="subscribe btn btn-primary btn-lg btn-block" type="button" onClick="openbooking()">Book Now</button>
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
                                                        <button class="subscribe btn btn-primary btn-lg btn-block" type="button">Book Now</button>
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
                  <p class="r-comment-header"><b>Best Resort Ever</b> <span class="r-review-rating">★★★★</span></p>
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
                <p class="r-comment-header"><b>Not very satisfied</b> <span class="r-review-rating">★★★</span></p>
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
                <p class="r-comment-header"><b>Great Place</b> <span class="r-review-rating">★★★★</span></p>
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
<?php include 'footer.php' ?>
