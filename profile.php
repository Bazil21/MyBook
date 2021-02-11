<?php

session_start();
print_r($_SESSION);

?>


<html>
    <head>
    <title>Profile | MyBook</title>
    </head>
    <style>
    	#blue_bar{
    		height: 50px;
    		background-color: #405d9b;
    		color: #d9dfeb;
    	}
    	#search_box{
    		width: 400px;
    		height: 30px;
    		border-radius: 5px;
    		border: none;
    		padding: 4px;
    		font-size: 14px;
    		background-image: url(search.png);
    		background-repeat: no-repeat;
    		background-position: right;
    	}
    	#profile_pics{
    		width: 150px;
    		margin-top: -140px;
    		border-radius: 50%;
    		border: solid 2px white;
    	}
    	#menu_buttons{
    		width: 100px;
    		display: inline-block;
    		margin: 2px;
    	}
    	#friends_img{
    		width: 75px;
    		float: left;
    		margin: 8px;
    	}

    	#friends_bar{
    		background-color: white;
    		min-height: 400px;
    		margin-top: 20px;
    		color: #aaa;
    		padding: 8px;
    	}
    	#friends{
    		clear: both;
    		font-size: 12px;
    		font-weight: bold;
    		color: #405d9b; 
    	}
    	textarea{
    		width: 100%;
    		height:60px;
    		border: none;
    		font-family: tahoma;
    		font-size: 14px: 
    	}
    	#post_button{
    		float: right;
    		background-color:#405d9b;
    		border: none;
    		color: white;
    		padding: 4px;
    		font-size: 14px;
    		border-radius: 2px;
    		width: 50px; 
    	}
    	#post_bar{
    		margin-top: 20px;
    		background-color: white;
    		padding: 10px;
    	}
    	#post{
    		padding: 4px;
    		font-size: 13px;
    		display: flex;
    		margin-bottom: 20px;
    	}
    </style>

    <body style="font-family: tahoma; background-color: #d0d8e4;">

    	<!-- top bar -->
    <div id="blue_bar">
 		<div style="width: 800px; margin: auto; font-size: 30px;">
 			MyBook &nbsp &nbsp <input type="text" id="search_box" placeholder="Search for people">
 			<img src="selfie.jpg" style="width: 50px; float: right;">
 		</div>
    </div>

    <!-- cover area -->
    <br>
    <div style="width: 800px; margin: auto; min-height: 400px;">

    	<div style="background-color: white; text-align: center; color: #405d9b;">
    		<img src="mountain.jpg" width="100%">
    		<img id="profile_pics" src="selfie.jpg"><br>
    			<div style="font-size: 20px;">Mary Banda</div>
    		<br><br>

    		<div id="menu_buttons">Timeline</div> 
		    <div id="menu_buttons">About</div>
		    <div id="menu_buttons">Friends</div>
		    <div id="menu_buttons">Photos</div>
		    <div id="menu_buttons">Settings</div>
    	</div>

    	<!-- below cover area -->
    		<div style="display: flex;">

    			<!-- friends area -->
	    		<div style="min-height: 400px; flex: 1;">
	    			<div id="friends_bar">
	    				Friends<br>

		    			<div id="friends">
		    				<img id="friends_img" src="user1.jpg"><br>
		    				First User
		    			</div>

		    			<div id="friends">
		    				<img id="friends_img" src="user2.jpg"><br>
		    				Second User
		    			</div>

		    			<div id="friends">
		    				<img id="friends_img" src="user3.jpg"><br>
		    				African Girl
		    			</div>

		    			<div id="friends">
		    				<img id="friends_img" src="user4.jpg"><br>
		    				African Dude
		    			</div>
	    			</div>
	    		</div>
	    		<!-- post area -->
	    		<div style=";flex:2.5;padding:20px;padding-right:0px;">
	    			<div style="border: solid thin #aaa; padding:10px; background-color: white;">
	    				<textarea placeholder="Whats on your mind?"></textarea>
	    				<input type="submit" id="post_button" value="Post">
	    				<br><br>
	    			</div>
	    			<!-- post -->
		    			<div id="post_bar">

		    				<!-- Post 1 -->
		    				<div id="post">
		    					<div>
		    						<img src="user1.jpg" style="width: 75px; margin-right: 4px;">
		    					</div>
		    					<div>
		    						<div  style="font-weight: bold;color:#405d9b ">First Guy</div>
		    						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
		    						<br><br>
		    						<a href="">Like </a>	<a href="">.Comment</a>	<span style="color: #999;">. April 23 2020</span>
		    					</div>

		    				</div>
		    				
		    				<!-- Post 2 -->
		    				<div id="post">
		    					<div>
		    						<img src="user2.jpg" style="width: 75px; margin-right: 4px;">
		    					</div>
		    					<div>
		    						<div  style="font-weight: bold;color:#405d9b ">African Dude</div>
		    						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
		    						<br><br>
		    						<a href="">Like </a>	<a href="">.Comment</a>	<span style="color: #999;">. April 23 2020</span>
		    					</div>

		    				</div>

		    				<!-- Post 3 -->
		    				<div id="post">
		    					<div>
		    						<img src="user1.jpg" style="width: 75px; margin-right: 4px;">
		    					</div>
		    					<div>
		    						<div  style="font-weight: bold;color:#405d9b ">First Guy</div>
		    						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
		    						<br><br>
		    						<a href="">Like </a>	<a href="">.Comment</a>	<span style="color: #999;">. April 23 2020</span>
		    					</div>

		    				</div>
		    			</div>

	    		</div>
    		</div>



    </div>



    </body>

</html>