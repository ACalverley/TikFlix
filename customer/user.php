<?php
  session_start();
  include("../partials/header.php");
  include("../config.php");
?>
  <div class="container">
    <div class="row">
      <div class="col-xs-9">
        <div> <!-- $_SESSION["accountNum"]  -->
          <?php
            if(!empty($_POST["confirmPurchase"])){
              $_SESSION["showing"] = unserialize(base64_decode($_POST["confirmPurchase"]));
              include("confirmPurchase.php");
            }
            if(!empty($_POST["browse"])){
              include("browse.php");
            }
            if(!empty($_POST["moreInfo"])){
              $_SESSION["movie"] = $_POST["moreInfo"];              
              include("moreInfo.php");
            } // Need Review in here as well and more info
            if(!empty($_POST["purchase"])){
              include("purchase.php"); //Show Viewings Button
            } // More info button
            if(!empty($_POST["purchases"])){
              if(!empty($_POST["numTix"])){
                $_SESSION["numTix"] = $_POST["numTix"];
                userConnection()->query("insert into reserved values ('".$_SESSION['accountNum']."','".$_SESSION['showing'][0]."','".$_SESSION['showing'][4]."', '".$_SESSION['showing'][5]."', '".$_SESSION['showing'][3]."', '".$_SESSION['showing'][2]."','".$_SESSION['numTix']."')");
              }
              include("viewPurchases.php");
            } // Review here also, these are current purchases uses reserved table
            if(!empty($_POST["profile"])){
              include("profile.php");
            }if(!empty($_POST["cancelPurchase"])){
                $_SESSION["deleteReserved"] = unserialize(base64_decode($_POST["cancelPurchase"]));                            
                userConnection()->query("delete from reserved where movieTitle = '".$_SESSION['deleteReserved'][2]."' and numTix = '".$_SESSION['deleteReserved'][6]."' and accountNum = '".$_SESSION['accountNum']."'");
              include("viewPurchases.php");
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
  include("../partials/footer.php");
?>
