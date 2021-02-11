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

=======
>>>>>>> 3e4c12f01edf2e06b6f1c62638ec289c28a92e4f
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
        $first_name = $data['first_name'];
        $last_name = $data['last_name'];
>>>>>>> 3e4c12f01edf2e06b6f1c62638ec289c28a92e4f
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