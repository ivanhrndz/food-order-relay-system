<?php

$id =  $_POST['id'];
// Name of the message buffer file. You have to create it manually with read and write permissions for the webserver.
$messages_buffer_file = 'messages.json';

// Open, lock and read the message buffer file
$buffer = fopen($messages_buffer_file, 'r+b');
flock($buffer, LOCK_EX);
$buffer_data = stream_get_contents($buffer);
$json_array = json_decode( $buffer_data, true);

$i=0;
foreach($json_array as $element) {
   //check the property of every element
   if($id == $element['id']){
      unset($json_array[$i]);
   }
   $i++;
}
$json_array = array_values($json_array);


//Open, lock and read the message buffer file;

// Rewrite and unlock the message file
ftruncate($buffer, 0);
rewind($buffer);
fwrite($buffer, json_encode($json_array));
flock($buffer, LOCK_UN);
fclose($buffer);
  
    exit();

?>