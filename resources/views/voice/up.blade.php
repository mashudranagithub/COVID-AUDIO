<?php
//print_r($_FILES); //this will print out the received name, temp name, type, size, etc.


if(isset($_FILES)){
    foreach($_FILES as $file){
        $size = $file['size']; 
        $input = $file['tmp_name'];
        $output = "data/" . $file['name'];
        move_uploaded_file($input, $output); 
    }
}

/*
$size = $_FILES['audio_data']['size']; //the size in bytes
$input = $_FILES['audio_data']['tmp_name']; //temporary name that PHP gave to the uploaded file
$output = time() .".wav"; //letting the client control the filename is a rather bad idea

//move the file from temp name to local folder using $output name
move_uploaded_file($input, $output);

echo "<pre>";

print_r($_FILES);

echo "</pre>";
*/

?>