



<div id="friends">
	<?php
				$image = "image/male_user.jpg";
		    	if($FRIEND_ROW['gender'] == "Female")
		    	{
		    		$image = "image/female_user.jpg";
		    	}
	?>
		<img id="friends_img" src="<?php echo $image ?>"><br>
		<?php echo $FRIEND_ROW['first_name'] . " ".  $FRIEND_ROW['last_name']; ?>
</div>