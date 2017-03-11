<div class="container search-container search-container-responsive search-bar-hide" >
  <div class="row">
  <div class="search-bar">
    <div class="overlay overlay-search" id="mySearch">
      <div class="overlay-content overlay-content-search" id="content-search">
        <div class=" search-bar">
          <a href="javascript:void(0)" class="closebtn" onclick="closeSearch();hideSearch();">&times;</a>
            <div class="search-content search-location ">
              <div class="search-title">
                Where do you want to go?
              </div>
              <input id="resort" onkeyup="AutoComplete()" class="input-content" placeholder="Enter a destination">
            </div>
            <div class="dropdown search-content search-day" id="dropdown">
              <div class="search-title">
                Day
              </div>
              <button class="btn btn-default dropdown-toggle input-content" type="button" data-toggle="dropdown">Halfday- Day
                <span class="fa fa-chevron-circle-down search-dropdown"></span></button>
                <ul class="dropdown-menu">
                  <li><a id = "halfday" href="#">Halfday- Day</a></li>
                  <li><a id = "halfday" href="#">Halfday - Night</a></li>
                  <li><a id = "whole" href="#">Wholeday</a></li>
                </ul>
              </div>
              <div class="date search-content search-date">
                <div class="search-title">
                  Check-in
                </div>
                <div class="has-feedback">
                  <input id="FromDate" class="input-content"/><i class="fa fa-calendar search-date-icon form-control-feedback"></i></input>
                </div>
              </div>
              <div class="date search-content search-date">
                <div class="search-title">
                  Check-out
                </div>
                <div class="has-feedback">
                  <input id="ToDate" class="input-content"/><i class="fa fa-calendar search-date-icon form-control-feedback"></i></input>
                </div>
              </div>
              <div class="dropdown search-content search-day" >
                <div class="search-title">
                  Guest
                </div>
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

                <div class="submit-btn search-content search-submit" ><p>&nbsp;</p>
                <a href="filter.php">  <button type="button" class="btn btn-default input-content search-button">Search</button></a>
                </div>
          </div>
      </div>
    </div>
  </div>
</div>
</div>
