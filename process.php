<?php
$comment = $_post["comment"];

$file = "log.txt";

file_put_contents ($file, $comment);

header ('location:http://localhost/');

?>
