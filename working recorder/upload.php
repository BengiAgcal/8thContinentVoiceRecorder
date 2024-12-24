<?php
print_r($_FILES);

print_r($_FILES); //this will print out the received name, temp name, type, size, etc.
//echo("<script>console.log('PHP: " . $_FILES . "');</script>");

$dirpath = dirname(getcwd());
$size = $_FILES['audio_data']['size']; //the size in bytes
$input = $_FILES['audio_data']['tmp_name']; //temporary name that PHP gave to the uploaded file
$output = $_FILES['audio_data']['size'].".wav"; //letting the client control the filename is a rather bad idea
$output2 = 'fdfd'.".wav";
$location = "/upload/";
$current = getcwd();
echo getcwd();
$id1 = mt_rand(0, 9999999);
$id2 = mt_rand(0, 9999999);
$id3 = mt_rand(0, 9999999);
$id4 = mt_rand(0, 9999999);
$id5 = mt_rand(0, 9999999);
$id6 = mt_rand(0, 9999999);
$date = date("Y-m-d");
$datw = $date.$id1.$id2.$id3.$id4.$id5.$id6.".wav";



//move the file from temp name to local folder using $output name
move_uploaded_file($input, $current.'\uploads'.'\d'.$datw);


?>