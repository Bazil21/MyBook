<?php

 session_start();
    
    
    
    include("classess/connect.php");
    include("classess/login.php");
    include("classess/user.php");
    include("classess/post.php");
    include("classess/image.php");


    $login = new Login();
    $user_data = $login->check_login($_SESSION['mybook_userid']);
     
     //posting starts here 
     if ($_SERVER['REQUEST_METHOD'] == "POST") 
    {
       
        if(isset($_FILES['file']['name']) && $_FILES['file']['name'] != "")
        {    
            if($_FILES['file']['type'] == "image/jpeg")
            {
                $allowed_size = (1024 * 1024) * 7;
                if($_FILES['file']['size'] < $allowed_size)
                {
                    // every this fine
                    $folder= "uploads/" . $user_data['userid']."/";
                    //create folder
                    if (!file_exists($folder)) 
                    {
                        mkdir($folder,0777,true);
                        
                    }
                     $image = new Image();
                     $filename = $folder . $image->generate_filename(15);
                    move_uploaded_file($_FILES['file']['tmp_name'], $filename);
                $change = "profile";
                // check for mode
                if(isset($_GET['change']))
                {
                    $change = $_GET['change'];
                }
                   

                if($change == "cover")
                {
<<<<<<< HEAD
                            $image->resize_image($filename,$filename,1500,1500);
                }
                else
                {
                     $image->resize_image($filename,$filename,1500,1500);
=======
                            $image->crop_image($filename,$filename,1366,488);
                }
                else
                {
                     $image->crop_image($filename,$filename,800,800);
>>>>>>> ac9a81da7da5fa9b8719b7566b05d9698003e8c4
                }
                
                 if(file_exists($filename))
                {
                    $userid = $user_data['userid'];
                   
                if($change == "cover")
                {
                
                            $query ="update users set cover_image = '$filename' where userid = '$userid' limit 1";
                }
                else
                {
                     $query ="update users set profile_image = '$filename' where userid = '$userid' limit 1";
                }
               
                $DB = new Database();
                $DB->save($query);

                header("Location: profile.php");
                die;
            }
        }
            else
                {
                         echo "<div style = 'text-align:center;font-size:12px; color:white;background-color:grey;'>";
                        echo "<br>The following errors occured:<br><br>";
                        echo "Only image of size 3mb or lower are allowed!";
                        echo "</div>";
                }

        }
        else
            {
                echo "<div style = 'text-align:center;font-size:12px; color:white;background-color:grey;'>";
                echo "<br>The following errors occured:<br><br>";
                echo "Only image jpeg type are allowed!";
                echo "</div>";
            }
                

            }
            
           else
            {
            echo "<div style = 'text-align:center;font-size:12px; color:white;background-color:grey;'>";
            echo "<br>The following errors occured:<br><br>";
            echo "Please upload a valid Image!";
            echo "</div>";
            }
        }
        
    
?>

<!DOCTYPE html>
<html>
    <head>
    <title>Change Profile Image | MyBook</title>
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
    	
    	#post_button{
    		float: right;
    		background-color:#405d9b;
    		border: none;
    		color: white;
    		padding: 4px;
    		font-size: 14px;
    		border-radius: 2px;
    		width: 100px; 
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
   <?php include("header.php"); ?>

    <!-- cover area -->
    <br>
    <div style="width: 800px; margin: auto; min-height: 400px;">
    	<!-- below cover area -->
    		<div style="display: flex;">
	    		
	    		<!-- post area -->
	    		<div style=";flex:2.5;padding:20px;padding-right:0px;">
                <form method="post" enctype="multipart/form-data">
	    			<div style="border: solid thin #aaa; padding:10px; background-color: white;">
                        <input type="file" name="file">
	    				<input type="submit" id="post_button" value="Change">
	    				<br><br>
<<<<<<< HEAD
                        <div style="text-align:center;">
                        <br><br>
                        <?php 

                        // check for mode
                        if(isset($_GET['change']) && $_GET['change']=="cover")
                        {
                            $change = "cover";
                            echo "<img src='$user_data[cover_image]' style='max-width:500px;'>";
                        }else{
                            echo "<img src='$user_data[profile_image]' style='max-width:500px;'>";
                        }
                       


                        ?>
                        </div>
=======
>>>>>>> ac9a81da7da5fa9b8719b7566b05d9698003e8c4
	    			</div>
	    		</form>

	    		</div>
    		</div>
        </div>
    </body>

</html>