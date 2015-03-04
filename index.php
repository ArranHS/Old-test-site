//This is sketchy at all, Sciz.
<html>
<?php
$file = "ipaddresses.txt"; //turns the text file into a variable
$f=fopen($file, 'a+'); //opens up the text file for reading and writing
fwrite($f,$_SERVER['REMOTE_ADDR']."\n"); //writes the IP address to ipaddresses.txt
fclose($f); //closes ipaddresses.txt for reading and writing
?>
<h1>File Not Found</h1>
</body>
</html> 
