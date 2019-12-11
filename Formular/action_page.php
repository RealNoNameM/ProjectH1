<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = $_POST["time_tght"];
fwrite($myfile, $txt);
$txt = $_POST["love_most"];
fwrite($myfile, $txt);
fclose($myfile);
echo
?>

<html>
<body>

Welcome 
Your email address is: <

</body>
</html>
