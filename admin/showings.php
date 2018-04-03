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
					?>
				</div>
			</div>
	</div>