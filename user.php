<?php
  include("header.php");
?>
  <div class="container">
    <div class="row">
      <div class="col-xs-9">
        <div> <!-- $_SESSION["accountNum"]  -->
          <?php
            if(!empty($_POST["confirmPurchase"])){
              $_SESSION["showing"] = $_POST["confirmPurchase"];
              include("confirmPurchase.php");
            }
            if(!empty($_POST["browse"])){
              include("browse.php");
            }
            if(!empty($_POST["moreInfo"])){
              include("moreInfo.php");
            } // Need Review in here as well and more info
            if(!empty($_POST["purchase"])){
              include("purchase.php"); //Show Viewings Button
            } // More info button
            if(!empty($_POST["purchases"])){
              include("viewPurchases.php");
            } // Review here also, these are current purchases uses reserved table
            if(!empty($_POST["profile"])){
              include("profile.php");
            }
            if(!empty($_POST["rentals"])){
              include("rental.php");
            } // Need Review feature in here, past purchases
          ?>
        </div>
      </div>
      <div class="col-xs-3">
        <div>
          <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
            <p><input type="submit" name="purchase" class="btn btn-info btn-lg btn-block" value="Browse Showings"></button></p>
            <p><input type="submit" name="purchases" class="btn btn-info btn-lg btn-block" value="View/Cancel Purchases"></button></p>
            <p><input type="submit" name="profile" class="btn btn-info btn-lg btn-block" value="Profile"></button></p>
            <p><input type="submit" name="rentals" class="btn btn-info btn-lg btn-block" value="Rental History"></button></p>
            <p><input type="submit" name="browse" class="btn btn-info btn-lg btn-block" value="Browse Movies"></button></p>
          </form>
        </div>
      </div>
    </div>
  </div>
<?php
  include("footer.php");
?>

<!-- Browse Movies playing at VARIOUS theatre complexes
      Purchase SOME NUMBER of tickets for ONE OR MORE showings at ONE OR MORE theatres 
      View Purchases
      Cancel Purchases
      Update Personal Details
      Browse Past Rentals
      Add a Review
      -->