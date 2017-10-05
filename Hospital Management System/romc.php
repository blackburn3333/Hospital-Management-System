<?php
$sel_query="SELECT * FROM `hospi_room` WHERE `room_id` = '1' ";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
	<input id="" type="hidden" value="<?php echo $row["room_id"]; ?>"></input>
    <input id="ro1" type="hidden" value="<?php echo $row["room_avilabl"]; ?>"></input>
<?php
 } ?>

<?php
$sel_query="SELECT * FROM `hospi_room` WHERE `room_id` = '2' ";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
	<input id="" type="hidden" value="<?php echo $row["room_id"]; ?>"></input>
    <input id="ro2" type="hidden" value="<?php echo $row["room_avilabl"]; ?>"></input>
<?php
 } ?>

 <?php
 $sel_query="SELECT * FROM `hospi_room` WHERE `room_id` = '3' ";
 $result = mysqli_query($con,$sel_query);
 while($row = mysqli_fetch_assoc($result)) { ?>
 	<input id="" type="hidden" value="<?php echo $row["room_id"]; ?>"></input>
     <input id="ro3" type="hidden" value="<?php echo $row["room_avilabl"]; ?>"></input>
 <?php
  } ?>

	<?php
  $sel_query="SELECT * FROM `hospi_room` WHERE `room_id` = '4' ";
  $result = mysqli_query($con,$sel_query);
  while($row = mysqli_fetch_assoc($result)) { ?>
  	<input id="" type="hidden" value="<?php echo $row["room_id"]; ?>"></input>
      <input id="ro4" type="hidden" value="<?php echo $row["room_avilabl"]; ?>"></input>
  <?php
   } ?>

	 <?php
	 $sel_query="SELECT * FROM `hospi_room` WHERE `room_id` = '5' ";
	 $result = mysqli_query($con,$sel_query);
	 while($row = mysqli_fetch_assoc($result)) { ?>
		 <input id="" type="hidden" value="<?php echo $row["room_id"]; ?>"></input>
			 <input id="ro5" type="hidden" value="<?php echo $row["room_avilabl"]; ?>"></input>
	 <?php
		} ?>

		<?php
		$sel_query="SELECT * FROM `hospi_room` WHERE `room_id` = '6' ";
		$result = mysqli_query($con,$sel_query);
		while($row = mysqli_fetch_assoc($result)) { ?>
			<input id="" type="hidden" value="<?php echo $row["room_id"]; ?>"></input>
		    <input id="ro6" type="hidden" value="<?php echo $row["room_avilabl"]; ?>"></input>
		<?php
		 } ?>

		<?php
		$sel_query="SELECT * FROM `hospi_room` WHERE `room_id` = '7' ";
		$result = mysqli_query($con,$sel_query);
		while($row = mysqli_fetch_assoc($result)) { ?>
			<input id="" type="hidden" value="<?php echo $row["room_id"]; ?>"></input>
		    <input id="ro7" type="hidden" value="<?php echo $row["room_avilabl"]; ?>"></input>
		<?php
		 } ?>

		 <?php
		 $sel_query="SELECT * FROM `hospi_room` WHERE `room_id` = '8' ";
		 $result = mysqli_query($con,$sel_query);
		 while($row = mysqli_fetch_assoc($result)) { ?>
		 	<input id="" type="hidden" value="<?php echo $row["room_id"]; ?>"></input>
		     <input id="ro8" type="hidden" value="<?php echo $row["room_avilabl"]; ?>"></input>
		 <?php
		  } ?>

			<?php
		  $sel_query="SELECT * FROM `hospi_room` WHERE `room_id` = '9' ";
		  $result = mysqli_query($con,$sel_query);
		  while($row = mysqli_fetch_assoc($result)) { ?>
		  	<input id="" type="hidden" value="<?php echo $row["room_id"]; ?>"></input>
		      <input id="ro9" type="hidden" value="<?php echo $row["room_avilabl"]; ?>"></input>
		  <?php
		   } ?>

			 <?php
			 $sel_query="SELECT * FROM `hospi_room` WHERE `room_id` = '10' ";
			 $result = mysqli_query($con,$sel_query);
			 while($row = mysqli_fetch_assoc($result)) { ?>
				 <input id="" type="hidden" value="<?php echo $row["room_id"]; ?>"></input>
					 <input id="ro10" type="hidden" value="<?php echo $row["room_avilabl"]; ?>"></input>
			 <?php
				} ?>
