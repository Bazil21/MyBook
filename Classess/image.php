<?php 


class Image 
{
	public function crop_image($original_filename,$cropped_filename,$max_width,$max_height)
	{
		if(file_exists($original_filename))
		{
			$original_image = imagecreatefromjpeg($original_filename);
			$original_width = imagesx($original_image);
			$original_height = imagesy($original_image);

			if($original_height > $original_width)
			{
				//make width equal to the max width
				$ratio = $max_width / $original_width;
				$new_width = $max_width;
				$new_height = $original_height * $ratio;

			}
			else
			{
				//make width equal to the max width
				$ratio = $max_width / $original_width;
				$new_height = $max_height;
				$new_width = $original_width * $ratio;

			}
		}

		$new_image = imagecreatetruecolor($new_width, $new_height);

		imagecopyresampled($new_image, $original_image, 0, 0, 0, 0, $new_width, $new_height, $original_width, $original_height);
		imagejpeg($new_image,$cropped_filename,90);


	}
}
?>