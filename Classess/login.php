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
        		$_SESSION['userid'] = $row['userid'];
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
}



?>