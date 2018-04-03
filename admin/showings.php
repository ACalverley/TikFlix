<?php
	$showings = userConnection()->query("select * from showing");
?>
	<div class="container">
			<div class="row">
				<div class="col-xs-6">
					<?php
		            	echo "<h2>All Movies:</h2>";
			            echo "<p></p>";
						foreach($showings as $showing){
					?>
		              		<form action="admin.php" class="form-inline" method="post">
			        <?php
					    		echo "<h4>";
					    		echo "$showing[4] | $showing[0] PM | Theatre Number: $showing[3] | $showing[1] Seats Available | At $showing[2]";
					?>
								<button name="updateShowing" class="btn btn-sm btn-info" value="<?php echo base64_encode(serialize($showing)); ?>">Update Showing</button>
							</form>
					<?php
							echo "</h4>";
						}
						try {
					?>
						<form action="admin.php" class="form" method="post">
			            	<h2>Create a New Showing</h2>
				            <p></p>
							<form action="admin.php" class="form" method="post"> 
							<span><h4>Start Time: </h4></span><input type="text" name="movieTitle"> <span> Enter in the format H:MM</span>
							<span><h4>Seats Available: </h4></span><input type="text" name="director">
							<span><h4>Complex Address: </h4></span><input type="text" name="runningTime">
							<span><h4>Theatre Number: </h4></span><input type="text" name="rating">
							<span><h4>Movie Title: </h4></span><textarea rows="3" cols="30" name="plotSynopsis"></textarea>
							<span><h4>Director: </h4></span><input type="text" name="mainActors">		
							<p></p>	
							<button name="createMovie" class="btn btn btn-info" value="1">Add Showing!</button>
						</form>
					<?php
						} catch (PDOException $e) {
          					echo "Connection failed: " . $e->getMessage();
          					echo "Check the parameters of the showing and try again";
      					}
					?>
				</div>
			</div>
	</div>