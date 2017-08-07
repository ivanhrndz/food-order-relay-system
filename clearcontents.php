<?php


// Name of the message buffer file. You have to create it manually with read and write permissions for the webserver.
$messages_buffer_file = 'messages.json';


// Open, lock and read the message buffer file
$buffer = fopen($messages_buffer_file, 'w+b');
fclose($buffer);
    
exit();


?>