<html>
    <head>
    <title>Timeline | MyBook</title>
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
    		min-height: 400px;
    		margin-top: 20px;
    		color:#405d9b;
    		padding: 8px;
    		text-align: center;
    		font-size: 20px;
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
    	<!-- below cover area -->
    		<div style="display: flex;">

    			<!-- friends area -->
	    		<div style="min-height: 400px; flex: 1;">
	    			<div id="friends_bar">
	    				<img src="selfie.jpg" id="profile_pics"><br>
	    				Mary Banda
	    				
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
		    			</div>

	    		</div>
    		</div>



    </div>



    </body>

</html>