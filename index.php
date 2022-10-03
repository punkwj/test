<?php 
$d = @file ("data.txt") or die ("файл не найден!");
$c = count ($d);
for ($i=0; $i<$c; $i++)
{
	$t = explode ("|", $d[$i]);
	if (stristr($t[2], "vk.com"))
	{
		echo $t[0]." ".$t[1]." электронная почта:".$t[2]."<br />\r\n"; 
	}
}



?>