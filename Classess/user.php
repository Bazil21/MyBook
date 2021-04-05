<?php

/**
 * 
 */
class User
{
	
	public function get_data($id) 
	{
		$query = "select * from users where userid = '$id' limit 1";
		$DB = new Database();
		$result = $DB->read($query);

		if ($result) 
		{
			$row = $result[0];
			return $row;
		}
		else
		{
			return false;
		}
	}

	public function get_user($id)
	{
		$query = "select * from users where userid = '$id' limit 1";
		$DB = new Database();
		$result = $DB->read($query);

		if($result)
		{
			return $result[0];
		}
		else
		{
			return false;
		}
	}
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> ac9a81da7da5fa9b8719b7566b05d9698003e8c4

	public function get_friends($id)
	{
		$query = "select * from users where userid != '$id'";
		$DB = new Database();
		$result = $DB->read($query);

		if($result)
		{
			return $result;
		}
		else
		{
			return false;
		}
	}
<<<<<<< HEAD
=======
=======
>>>>>>> d75380e49c8a541285281940f4dad6e6d5cb3cbb
>>>>>>> ac9a81da7da5fa9b8719b7566b05d9698003e8c4
}







?>