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
        		$_SESSION['userid'] = $row['userid'];
>>>>>>> 3e0985ce990743b636a1368b40b832bc088a5cd3
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
}



?>