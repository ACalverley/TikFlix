<?php
  include("header.php");
?>

        <h1>Movie Page!</h1>

<form action="movies.php" method="post">
  <p>Title:</p>
  <input type="text" name="title">
  <br>
  <p>Director:</p>
  <input type="text" name="director"><br>
  <input type="submit">
</form> 

<?php
  include("footer.php");
?>

