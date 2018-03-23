<?php
  include("header.php");
?>
  <div class="container">
    <div class="row">
      <div class="col-xs-9">
        <div>
          
        </div>
      </div>
      <div class="col-xs-3">
        <div>
          <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
            <p><input type="submit" class="btn btn-info btn-lg btn-block" value="Browse Movies"></button></p>
            <p><input type="submit" class="btn btn-info btn-lg btn-block" value="Purchase Tickets"></button></p>
            <p><input type="submit" class="btn btn-info btn-lg btn-block" value="View/Cancel Purchases"></button></p>
            <p><input type="submit" class="btn btn-info btn-lg btn-block" value="Profile"></button></p>
            <p><input type="submit" class="btn btn-info btn-lg btn-block" value="Rental History"></button></p>
            <p><input type="submit" class="btn btn-info btn-lg btn-block" value="Add Review"></button></p>
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