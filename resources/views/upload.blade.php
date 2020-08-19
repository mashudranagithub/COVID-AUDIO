<?php
 //this will print out the received name, temp name, type, size, etc.


$uploads_dir = 'uploads';

$size = $_FILES['audio_data']['size']; //the size in bytes
$input = $_FILES['audio_data']['tmp_name']; //temporary name that PHP gave to the uploaded file
$output = basename($_FILES['audio_data']['name'].'.wav'); //letting the client control the filename is a rather bad idea
// echo"<pre>";
print_r($_FILES);
print_r($size);
print_r($input);
print_r($output);
// echo"</pre>";
//move the file from temp name to local folder using $output name
// move_uploaded_file($input, $uploads_dir.'/'.$output);

?>