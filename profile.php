<?php

    session_start();
    
    
    
    include("classess/connect.php");
    include("classess/login.php");
    include("classess/user.php");
    include("classess/post.php");
<<<<<<< HEAD
	include("classess/image.php");
=======
<<<<<<< HEAD
	include("classess/image.php");
=======
>>>>>>> ac9a81da7da5fa9b8719b7566b05d9698003e8c4
>>>>>>> fa29536e1353ef1d4631eb07169bdf0396d838ae


    $login = new Login();
    $user_data = $login->check_login($_SESSION['mybook_userid']);

    //for posting
    if ($_SERVER['REQUEST_METHOD'] == "POST") 
    {
        # code...
        $post = new Post();
        $id = $_SESSION['mybook_userid'];
<<<<<<< HEAD
        $result = $post->create_post($id,$_POST,$_FILES);
=======
        $result = $post->create_post($id,$_POST);
>>>>>>> fa29536e1353ef1d4631eb07169bdf0396d838ae

        if ($result == "")
         {
            # code...
            header("Location: profile.php");
            die;
        }
        else
        {
            echo "<div style = 'text-align:center;font-size:12px; color:white;background-color:grey;'>";
        echo "<br>The following errors occured:<br><br>";
        echo $result;
        echo "</div>";
        }
    }
    //collect posts
        $post = new Post();
        $id = $_SESSION['mybook_userid'];
        $posts = $post->get_posts($id);

        //COLLECT FRIENDS
        $user = new User();
        $id = $_SESSION['mybook_userid'];
        $friends = $user->get_friends($id);

<<<<<<< HEAD
		$image_class = new Image();

=======
<<<<<<< HEAD
		$image_class = new Image();

=======
>>>>>>> ac9a81da7da5fa9b8719b7566b05d9698003e8c4
>>>>>>> fa29536e1353ef1d4631eb07169bdf0396d838ae
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

    	
    <!-- cover area -->
    <br>
    <?php include("header.php"); ?>
    <div style="width: 800px; margin: auto; min-height: 400px;">

    	<div style="background-color: white; text-align: center; color: #405d9b;">
            <?php 
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> fa29536e1353ef1d4631eb07169bdf0396d838ae
                $image = "image/cover_image.jpg";
                if(file_exists($user_data['cover_image']))
                {
                    $image = $image_class->get_thumb_cover($user_data['cover_image']);
<<<<<<< HEAD
=======
=======
                $image = "";
                if(file_exists($user_data['cover_image']))
                {
                    $image = $user_data['cover_image'];
>>>>>>> ac9a81da7da5fa9b8719b7566b05d9698003e8c4
>>>>>>> fa29536e1353ef1d4631eb07169bdf0396d838ae
                 
                }
                ?>
    		<img src="<?php echo $image?>" width="100%">
    		<span style="font-size: 11px;">
                <?php 
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> fa29536e1353ef1d4631eb07169bdf0396d838ae
                $image = "image/male_user.jpg";
                if($user_data['gender'] == "Female")
                {
                    $image = "image/female_user.jpg";
                }
                if(file_exists($user_data['profile_image']))
                {
                    $image = $image_class->get_thumb_profile($user_data['profile_image']);
<<<<<<< HEAD
=======
=======
                $image = "";
                // if($user_data['gender']== "Female")
                // {
                //     $image = "image/female_user.jpg";
                // }
                if(file_exists($user_data['profile_image']))
                {
                    $image = $user_data['profile_image'];
>>>>>>> ac9a81da7da5fa9b8719b7566b05d9698003e8c4
>>>>>>> fa29536e1353ef1d4631eb07169bdf0396d838ae
                 
                }
                ?>
                <img id="profile_pics" src="<?php echo $image ?>" alt ="Profile_Image"><br/>
                <a href="change_profile_image.php?change=profile" style="text-decoration: none; color: #f0f">Change Image</a>
                <a href="change_profile_image.php?change=cover" style="text-decoration: none; color: #f0f"> | Change Cover</a>
            </span>
            <br>
    			<div style="font-size: 20px;"><?php echo $user_data['first_name'] . " " . $user_data['last_name'] ?></div>
    		<br><br>

    		<a href="index.php"><div id="menu_buttons">Timeline</div></a> 
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

                        <?php
                            if ($friends) 
                            {
                                foreach ($friends as $FRIEND_ROW) 
                                {
                    
                                     include("USER.php");
                                }
                            }

                                

                            ?>

		    			
	    			</div>
	    		</div>
	    		<!-- post area -->
<<<<<<< HEAD
	    		<div style="min-height:400px; flex:2.5;padding:20px;padding-right:0px;">
	    			<div style="border: solid thin #aaa; padding:10px; background-color: white;">
                        <form method="post" enctype="multipart/form-data">
	    				<textarea name="post" placeholder="Whats on your mind?"></textarea>
						<input type="file" name="file">
=======
	    		<div style=";flex:2.5;padding:20px;padding-right:0px;">
	    			<div style="border: solid thin #aaa; padding:10px; background-color: white;">
                        <form method="post">
	    				<textarea name="post" placeholder="Whats on your mind?"></textarea>
>>>>>>> fa29536e1353ef1d4631eb07169bdf0396d838ae
	    				<input type="submit" id="post_button" value="Post">
	    				<br><br>
                        </form>
	    			</div>
	    			<!-- post -->
		    			<div id="post_bar">

		    				<?php
                            if ($posts) 
                            {
                                foreach ($posts as $ROW) 
                                {
                                    $user = new User();
                                    $ROW_USER = $user->get_user($ROW['userid']); 
                                     include("post.php");
                                }
                            }

                                

                            ?>
		    				
		    			</div>

	    		</div>
    		</div>



    </div>



    </body>

</html>