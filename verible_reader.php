<?php

$hhData = fopen("harlequinssitedesign.data", "r") or die("Unable to open file!");
$dataArray = array();
$dataLineArray = explode(PHP_EOL, fread($hhData,filesize("harlequinssitedesign.data")));

foreach ($dataLineArray as $line){$dataArray[] = explode(',', $line);}

print_r($dataArray);
echo "<br>";

function priceFor( $in )
{
	echo $dataArray[1][1];
	echo $in;
}

// echo count($dataArray);  // This works, counts the numbers of arrays collected from file.



fclose($hhData);

priceFor("BF_club");
?>