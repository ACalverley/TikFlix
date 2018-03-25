<?php
  include("header.php");
?>
  <div class="container">
    <div class="row">
      <div class="col-xs-9">
        <div>
          <?php
            if(!empty($_POST["members"])){
              include("members.php");
            }
            if(!empty($_POST["complexes"])){
              include("complexes.php");              
            }
            if(!empty($_POST["movies"])){
              include("movies.php");
            }
            if(!empty($_POST["tickets"])){
              include("tickets.php");
            }
            if(!empty($_POST["theatres"])){
              include("theatres.php");
            }
          ?>
        </div>
      </div>
      <div class="col-xs-3">
        <div>
          <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
            <p><input type="submit" name="members" class="btn btn-info btn-lg btn-block" value="View/Remove Members"></button></p>
            <p><input type="submit" name="complexes" class="btn btn-info btn-lg btn-block" value="Add/Update Theatre Complex"></button></p>
            <p><input type="submit" name="movies" class="btn btn-info btn-lg btn-block" value="Add/Update Movies"></button></p>
            <p><input type="submit" name="tickets" class="btn btn-info btn-lg btn-block" value="Ticket Analytics"></button></p>
            <p><input type="submit" name="theatres" class="btn btn-info btn-lg btn-block" value="Theatre Analytics"></button></p>
          </form>
        </div>
      </div>
    </div>
  </div>

<?php
  include("footer.php");
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