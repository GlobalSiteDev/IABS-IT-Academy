<?php
$filename = "../BSsite/schedule/from-bogdana.csv";
$f = fopen($filename,'r');
$csv = fgetcsv($f);
for($a = []; $r = fgetcsv($f); $a[] = array_combine($csv,$r));
fclose($f);
$csv = array_map('str_getcsv', file($filename));
foreach ($csv as $val) 
   $times[] = $val;
$hour = date('H');
foreach ($times as $time) {
	if ($hour < intval($time[0])) {
		echo $time[0] ." o'clock.";
		break;
	}
	elseif ($hour >= 21) {
		echo "07.00 o`clock.";
		break;
	}
}