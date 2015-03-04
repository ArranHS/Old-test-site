
<html>
<?php
$file = "ipaddresses.txt"; 
$f=fopen($file, 'a+'); 
fwrite($f,$_SERVER['REMOTE_ADDR']."\n"); 
fclose($f); 
?>
<h1>File Not Found</h1>
</body>
</html> 
