<?php

class Post
{
	private $error = "";
<<<<<<< HEAD
	public function create_post($userid,$data, $files)
	{

		if(!empty($data['post']) || !empty($files['file']['name']))
		{
			$myimage = "";
			$has_image = 0;
			if(!empty($files['file']['name'])){

				$image_class =new Image();

				 // every this fine
				 $folder= "uploads/" . $userid."/";
				 //create folder
				 if (!file_exists($folder)) 
				 {
					 mkdir($folder,0777,true);
					 
				 }
				  $image_class = new Image();
				  $myimage = $folder . $image_class->generate_filename(15);
				 move_uploaded_file($_FILES['file']['tmp_name'], $myimage);

				 $image_class->resize_image($myimage,$myimage,1500,1500);

				$has_image = 1;
			}
			$post = addslashes($data['post']);
			$postid = $this->create_postid();
			$query = "insert into posts (userid,postid,post,image,has_image) values ('$userid','$postid','$post','$myimage','$has_image')";
=======
	public function create_post($userid,$data)
	{

		if(!empty($data['post']))
		{
			$post = addslashes($data['post']);
			$postid = $this->create_postid();
			$query = "insert into posts (userid,postid,post) values ('$userid','$postid','$post')";
>>>>>>> fa29536e1353ef1d4631eb07169bdf0396d838ae
			$DB = new Database();
			$DB->save($query);
		}
		else
		{
			$this->error = $this->error."Please type something to post!<br>";
		}

		return $this->error;
	} 

	public function get_posts($id)
	{
		$query = "select * from posts where userid = '$id'  order by id desc limit 10";
			$DB = new Database();
			$result = $DB->read($query);

			if ($result)
			{
				return $result;
			}
			else
			{
				return false;
			}


	}
	private function create_postid()
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