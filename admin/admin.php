<?php
  session_start();
  include("../partials/admin_header.php");
  include("../config.php");
?>
  <div class="container">
  <?php
  echo "<h3>Hi "; 
  echo $_SESSION["name"];
  echo "!</h3>"; // Put account Name here
  ?>
    <div class="row">
      <div class="col-xs-9">
        <div>
          <?php
            if(!empty($_POST["members"])){
              include("members.php");
            }
            if(!empty($_POST["deleteMember"])){
              $_SESSION["member"] = unserialize(base64_decode($_POST["deleteMember"]));
              $connection = userConnection();
              $connection->query("drop user '".$_SESSION["member"][0]."'@".DB_SERVER);
              $connection->query("delete from customer where accountNum='".$_SESSION["member"][0]."'");
              include("members.php");
            }
            if(!empty($_POST["complexes"])){
              include("complexes.php");              
            }
            if(!empty($_POST["updateComplex"])){
              $_SESSION['complex'] = unserialize(base64_decode($_POST["updateComplex"]));
              if (!empty($_POST["name"])){
                userConnection()->query("update theatrecomplex set name = '".$_POST['name']."' where address = '".$_SESSION['complex'][1]."'");
              }
              if (!empty($_POST["address"])){
                userConnection()->query("update theatrecomplex set address = '".$_POST['address']."' where address = '".$_SESSION['complex'][1]."'");
              }
              if (!empty($_POST["phoneNumber"])){
                userConnection()->query("update theatrecomplex set phoneNumber = '".$_POST['phoneNumber']."' where address = '".$_SESSION['complex'][1]."'");
              }
              include("complexes.php");              
            }
            if(!empty($_POST["updateTheatre"])){
              include("theatres.php");
            }
            if(!empty($_POST["movies"])){
              include("movies.php");
            }
            if(!empty($_POST["createMovie"])){
               if(!empty($_POST["movieTitle"]) && !empty($_POST["director"]) && !empty($_POST["runningTime"]) && !empty($_POST["rating"]) && !empty($_POST["plotSynopsis"]) && !empty($_POST["mainActors"]) && !empty($_POST["prodCompany"]) && !empty($_POST["dateStart"]) && !empty($_POST["endDate"]) && !empty($_POST["supplier"])){
                userConnection()->query("insert into movie values ('".$_POST['movieTitle']."', '".$_POST['director']."', '".$_POST['runningTime']."', '".$_POST['rating']."', '".$_POST['plotSynopsis']."', '".$_POST['mainActors']."', '".$_POST['prodCompany']."', '".$_POST['dateStart']."', '".$_POST['endDate']."', '".$_POST['supplier']."')");
              }
                include("movies.php");
            }
            if(!empty($_POST["tickets"])){
              $_SESSION["member"] = unserialize(base64_decode($_POST["tickets"]));
              include("tickets.php");
            }
            if(!empty($_POST["theatres"])){
              include("theatres.php");
            }
            if(!empty($_POST["popularTicket"])){
              include("popularTicket.php");
            }
          ?>
        </div>
      </div>
      <div class="col-xs-3">
        <div>
          <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
            <p><input type="submit" name="members" class="btn btn-info btn-lg btn-block" value="View/Remove Members"></button></p>
            <p><input type="submit" name="complexes" class="btn btn-info btn-lg btn-block" value="Add/Update Theatre Complex"></button></p>
            <p><input type="submit" name="movies" class="btn btn-info btn-lg btn-block" value="Add Movies"></button></p>
            <p><input type="submit" name="popularTicket" class="btn btn-info btn-lg btn-block" value="Ticket Analytics"></button></p>
            <p><input type="submit" name="theatres" class="btn btn-info btn-lg btn-block" value="Theatre Analytics"></button></p>
          </form>
        </div>
      </div>
    </div>
  </div>

<?php
  include("../partials/footer.php");
?>
<!-- 
list all the members
remove a member
add or update the information for a theatre complex/theatre
add movies to the database
update where/when movies are showing
for a particular customer, show their rental history (including current tickets held)
find the movie that is the most popular (ie. has sold the most tickets across all theatres).
find the theatre complex that is most popular (ie. has sold the most tickets across all movies) -->