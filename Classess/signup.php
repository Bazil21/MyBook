<?php

class signup{
    private $error = "";
     public function evaluate($data)
     {

        foreach($data as $key => $value)
        {
            if(empty($value))
            {
                $this->error = $this->error. $key . " is empty!<br>";
            }
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 3e0985ce990743b636a1368b40b832bc088a5cd3
>>>>>>> d75380e49c8a541285281940f4dad6e6d5cb3cbb
>>>>>>> ac9a81da7da5fa9b8719b7566b05d9698003e8c4
            if($key == "email")
            {
                if(!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $value))
                $this->error = $this->error. "invalid email!<br>";
            }
             if($key == "first_name")
            {
                if(is_numeric($value))
                {
                $this->error = $this->error. "First name cannot be a number!<br>";
                }
                if(strstr($value, " "))
                {
                    $this->error = $this->error. "First name cant have spaces!<br>";
                }
            }
             if($key == "last_name")
            {
                 if(is_numeric($value))
                {
                    $this->error = $this->error. "Last name cannot be a number!<br>";
                } 
                if(strstr($value, " "))
                {
                     $this->error = $this->error. "last name cant have spaces!<br>";
                }
            }   

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 3e4c12f01edf2e06b6f1c62638ec289c28a92e4f
>>>>>>> 3e0985ce990743b636a1368b40b832bc088a5cd3
>>>>>>> d75380e49c8a541285281940f4dad6e6d5cb3cbb
>>>>>>> ac9a81da7da5fa9b8719b7566b05d9698003e8c4
        }
        if($this->error == "")
        {
            //no error
            $this->create_user($data);
        }
        else
        {
            return $this->error;
        }
    }

    public function create_user($data)
    {
<<<<<<< HEAD
        $first_name = ucfirst($data['first_name']);
        $last_name = ucfirst($data['last_name']);
=======
<<<<<<< HEAD
        $first_name = ucfirst($data['first_name']);
        $last_name = ucfirst($data['last_name']);
=======
<<<<<<< HEAD
        $first_name = ucfirst($data['first_name']);
        $last_name = ucfirst($data['last_name']);
=======
<<<<<<< HEAD
        $first_name = ucfirst($data['first_name']);
        $last_name = ucfirst($data['last_name']);
=======
        $first_name = $data['first_name'];
        $last_name = $data['last_name'];
>>>>>>> 3e4c12f01edf2e06b6f1c62638ec289c28a92e4f
>>>>>>> 3e0985ce990743b636a1368b40b832bc088a5cd3
>>>>>>> d75380e49c8a541285281940f4dad6e6d5cb3cbb
>>>>>>> ac9a81da7da5fa9b8719b7566b05d9698003e8c4
        $gender = $data['gender'];
        $email = $data['email'];
        $password = $data['password'];
        
        //create these
        $url_address = strtolower($first_name) . "." .strtolower ($last_name);
        $userid = $this->create_userid();
        $query = "insert into users 
        (userid,first_name,last_name,gender,email,password,url_address) 
        values
        ('$userid','$first_name','$last_name','$gender','$email','$password','$url_address')";
        
        $DB = new Database();
        $DB->save($query);

    }


    private function create_userid()
    {
        $length = rand(4,19);
        $number = "";
        for($i=0; $i< $length ; $i++)
        {
            $new_rand = rand(0,9);

            $number = $number . $new_rand;

        }
        return $number;
    }

}

?>