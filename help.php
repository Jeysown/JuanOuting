<?php include 'nav-payment.php' ?>
<?php include 'search-content-frontend.php' ?>
<div class="parent-header-help" style="padding-top: 60px;">
    <div class="child-header-help"></div>
  <div class="header-text-help">
  <center><p class="header-jumbotron-help ">We are here to help you.</p>
      <i class="fa fa-search search-header-icon-help" aria-hidden="true" id="yey"></i><input id="resort1" onkeyup="AutoComplete1()" class="ui-autocomplete-input search-header-help" placeholder="Search" autocomplete="off" >
  </center>
  </div>
</div>
  <div class="container" style="padding-top:50px;">

    <div class="r-title">
      <div class="col-lg-12">
        <div class="resort-name">
          Help
        </div>
        <hr class="hr-help" >
      </div>
      <div class="col-md-3 hidden-sm hidden-xs deck" style="padding-top:25px;padding-bottom:50px;">
        <div class="help-sidebar">
          <p> <a href="#">Getting Started</a></p>
          <p> <a href="#">Account & Profile</a></p>
          <p> <a href="#">Private Pool Owners</a></p>
          <p> <a href="#">Customers</a></p>
          <p> <a href="#">Payments</a></p>
          <p> <a href="#">Reviews</a></p>
          <p> <a href="#">Taxes</a></p>
          <p> <a href="#">Policies</a></p>
          <p> <a href="#">Contact Us</a></p>
        </div>
      </div>
      <div class="col-md-9 deck" >
        <h2 style="padding-bottom:15px;font-weight:bold">Frequently Asked Questions</h2>
        <div class="">
            <ul class="ul-help">
              <li><h4><div id="flip"> <i class="fa fa-chevron-circle-down" aria-hidden="true"></i> How to Log In?</div></h4></li>
                <div id="panel">
                <br><b>1. Go to the Main Page</b>
                <br>You can see there the Log In form.<p>
                <br><img src="images/help/login.jpg" style="width:600px;height:300px;"><p>
                <br><b>2. Sign In on a computer</b>
                <br>Filled up the correct username and password, it is required. Click stay sign in if you want to remember your account then click "Log In" button to successfully login.<p>
                <br><img src="images/help/loginexample.jpg" style="width:600px;height:300px;"><p>
                </div>

                <li><h4><div id="flip1"><i class="fa fa-chevron-circle-down" aria-hidden="true"></i> How to Log Out?</div></h4></li>
                <div id="panel1">When using public computers like in a library or cybercafe, remember that you may still be signed in to any services you’ve been using even after you close the browser. So when using a public computer, be sure to sign out.
                <br><br><b>Sign out on a computer</b>
                <br>In the upper right of the navigation bar, you can see there your name. Just click it then you will see the "Log Out" link to sign out. <p>
                <br><img src="images/help/logout.jpg" style="width:600px;height:300px;">
                </div>

                <li><h4><div id="flip3"><i class="fa fa-chevron-circle-down" aria-hidden="true"></i> How to Register?</div></h4></li>
                <div id="panel3">
                <br><b>1. Go to the Main Page</b>
                <br>In the lower part of the Log In form, you can see there the "Register" link. Click it it to go to the registration page. <p>
                <br><img src="images/help/login.jpg" style="width:600px;height:300px;"><p>
                <br><b>2. Registration Form</b>
                <br>Fill up the registration form according to the requirements. <p>
                <br><img src="images/help/register.jpg" style="width:600px;height:300px;">
                </div>

              <li><h4><div id="flip2"><i class="fa fa-chevron-circle-down" aria-hidden="true"></i> How to view a Report?</div></h4></li>
                <div id="panel2">
                <br><b>*For the librarian</b>
                <br>1. In the navigation bar, find "Transaction" then look for "Borrow", click it.
                <br><img src="help/borrow.png" style="width:220px;height:150px;"><p>
                <br>2. Record the transaction, select the name of the borrower from the members.
                <br><img src="help/b_name.png" style="width:200px;height:80px;">
                <br><b>Note: Be sure they are member to borrow books</b><p>
                <br>3. Select the name of the book to be check.
                <br><img src="help/add_books.png" style="width:500px;height:300px;"><p>
                <br>3. Select the due date to return the book. Then click "Borrow".
                <br><img src="help/date.png" style="width:500px;height:300px;"><p>
                </div>

              <li><h4><div id="flip4"><i class="fa fa-chevron-circle-down" aria-hidden="true"></i> How to Dowload the Mobile Application?</div></h4></li>
                <div id="panel4">
                <br><b>*For the librarian</b>
                <br>1. In the navigation bar, find "Transaction" then look for "Borrow", click it.<p>
                <br><img src="help/view_borrowed.png" style="width:220px;height:150px;"><p>
                <br>2. Select the borrower's name and click return, it will display an option<p>
                <br><img src="help/add_returned.png" style="width:400px;height:200px;"><p>
                <br>*It will redirect you to all records with the date and time of the returned books.
                <br><img src="help/status.png" style="width:600px;height:75px;"><p>
                </div>

                <li><h4><div id="flip5"><i class="fa fa-chevron-circle-down" aria-hidden="true"></i> How to Convert Points?</div></h4></li>
                  <div id="panel5">
                  <br><b>*For the librarian</b>
                  <br>1. In the navigation bar, find "Transaction" then look for "Borrow", click it.
                  <br><img src="help/borrow.png" style="width:220px;height:150px;"><p>
                  <br>2. Record the transaction, select the name of the borrower from the members.
                  <br><img src="help/b_name.png" style="width:200px;height:80px;">
                  <br><b>Note: Be sure they are member to borrow books</b><p>
                  <br>3. Select the name of the book to be check.
                  <br><img src="help/add_books.png" style="width:500px;height:300px;"><p>
                  <br>3. Select the due date to return the book. Then click "Borrow".
                  <br><img src="help/date.png" style="width:500px;height:300px;"><p>
                  </div>
              </ul>

        </div>
      </div>
    </div>

  </div>
        <?php include 'footer-payment.php' ?>
        <script>
        $(document).ready(function(){
            $("#flip").click(function(){
                $("#panel").slideToggle("slow");

            });
        });
        $(document).ready(function(){
            $("#flip1").click(function(){
                $("#panel1").slideToggle("slow");

            });
        });
        $(document).ready(function(){
            $("#flip2").click(function(){
                $("#panel2").slideToggle("slow");

            });
        });
        $(document).ready(function(){
            $("#flip3").click(function(){
                $("#panel3").slideToggle("slow");

            });
        });
        $(document).ready(function(){
            $("#flip4").click(function(){
                $("#panel4").slideToggle("slow");

            });
        });
        $(document).ready(function(){
            $("#flip5").click(function(){
                $("#panel5").slideToggle("slow");

            });
        });
        </script>
