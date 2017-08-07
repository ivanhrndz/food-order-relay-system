<?php


// Name of the message buffer file. You have to create it manually with read and write permissions for the webserver.
$messages_buffer_file = 'messages.json';


// Open, lock and read the message buffer file
$buffer = fopen($messages_buffer_file, 'r+b');
flock($buffer, LOCK_EX);
$buffer_data = stream_get_contents($buffer);
    
// Append new message to the buffer data or start with a message id of 0 if the buffer is empty
$messages = $buffer_data ? json_decode($buffer_data, true) : array();
//$next_id = (count($messages) > 0) ? $messages[count($messages) - 1]['id'] + 1 : 0;
$messages[] = array('id' => $_POST['id'],'ordername' => $_POST['ordername'], 'time' => time(), 'content' => $_POST['content']);
    
// Rewrite and unlock the message file
ftruncate($buffer, 0);
rewind($buffer);
fwrite($buffer, json_encode($messages));
flock($buffer, LOCK_UN);
fclose($buffer);
    
// Optional: Append message to log file (file appends are atomic)
//file_put_contents('chatlog.txt', strftime('%F %T') . "\t" . strtr($_POST['name'], "\t", ' ') . "\t" . strtr($_POST['content'], "\t", ' ') . "\n", FILE_APPEND);
    
    exit();


?>