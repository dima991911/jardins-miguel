<?php header('Access-Control-Allow-Origin: *'); header('Content-Type: text/html');

$email = file_get_contents('php://input');

mail('skochkovadym@gmail.com', 'Email Send', ''.$email.'');

echo 'Good';

?>