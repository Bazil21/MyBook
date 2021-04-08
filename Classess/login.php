<?php

class Login
{
	private $error = "";

	public function evaluate($data)
    {
        $email = addslashes($data['email']);
        $password = addslashes($data['password']);
        $query = "select * from users where email = '$email' limit 1";
        
        $DB = new Database();
        $result = $DB->read($query);

        if ($result) 
        {
        	$row = $result[0];

        	if ($password == $row['password'])
        	{
        		//create a session data
<<<<<<< HEAD
        		$_SESSION['mybook_userid'] = $row['userid'];
=======
<<<<<<< HEAD
        		$_SESSION['mybook_userid'] = $row['userid'];
=======
<<<<<<< HEAD
        		$_SESSION['mybook_userid'] = $row['userid'];
=======
<<<<<<< HEAD
        		$_SESSION['mybook_userid'] = $row['userid'];
=======
        		$_SESSION['userid'] = $row['userid'];
>>>>>>> 3e0985ce990743b636a1368b40b832bc088a5cd3
>>>>>>> d75380e49c8a541285281940f4dad6e6d5cb3cbb
>>>>>>> ac9a81da7da5fa9b8719b7566b05d9698003e8c4
>>>>>>> fa29536e1353ef1d4631eb07169bdf0396d838ae
			}
			else
	        {
	        	$this->error .= "wrong password<br>";
	        }	
        }
        else
        {
        	$this->error .= "No such email was found<br>";
        }
        
        return $this->error;

    }
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> ac9a81da7da5fa9b8719b7566b05d9698003e8c4
>>>>>>> fa29536e1353ef1d4631eb07169bdf0396d838ae

    public function check_login($id)
    {
         if (is_numeric($id)) 
        {
        	 $query = "select * from users where userid = '$id' limit 1";
            
            $DB = new Database();
            $result = $DB->read($query);

                    if ($result) 
                    {
                        $user_data =$result[0];
                        return $user_data;
                    }
                    else
                    {
                        header("Location: Login.php");
                        die;
                    }
                }
	
                else
                {
                    header("Location: Login.php");
                    die;
                }


    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD

    public function check_login($id)
    {
    	 $query = "select userid from users where userid = '$id' limit 1";
        
        $DB = new Database();
        $result = $DB->read($query);

        if ($result) 
        {

        	return true;

        }


        	return false;	


  }
















=======
>>>>>>> 3e0985ce990743b636a1368b40b832bc088a5cd3
>>>>>>> d75380e49c8a541285281940f4dad6e6d5cb3cbb
>>>>>>> ac9a81da7da5fa9b8719b7566b05d9698003e8c4
>>>>>>> fa29536e1353ef1d4631eb07169bdf0396d838ae
}



?>