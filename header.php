<!-- top bar -->
<?php 
    $corner_image = "image/male_user.jpg";
    if(isset($user_data))
    {
        $corner_image = $user_data['profile_image'];
    }

?>
    <div id="blue_bar">
 		<div style="width: 800px; margin: auto; font-size: 30px;">

 			<a href="index.php" style="color: white; text-decoration: none;"> MyBook </a>
            &nbsp &nbsp <input type="text" id="search_box" placeholder="Search for people">
            <a href="profile.php">
            <img src="<?php echo $corner_image ?>" style="width: 50px; float: right;">
        	</a>
            <a href="Logout.php">
             <span style="font-size: 11px;float: right;margin: 10px; color: white;">Logout</span>
            </a>
 		</div>
    </div>
