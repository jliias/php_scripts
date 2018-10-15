<?php 
header('Access-Control-Allow-Origin: *');

$ready = 0; 
$rndnumber = rand(1,100);
$filename = 'data'.$rndnumber.'.csv';

// echo $filename . chr(0x0D) . chr(0x0A) ;

while( $ready == 0 ) {
	
	if (file_exists($filename)) {
		$rndnumber = rndnumber + 1;
		$filename = 'data'.$rndnumber.'.csv';
		// echo "file found!" . chr(0x0D) . chr(0x0A) ;
	} else {
		$ready = 1;
		// echo "file not found! Creating..." . chr(0x0D) . chr(0x0A) ;
	}
}

file_put_contents($filename, "Created ".date("Y/m/d")." ".date("h:i:sa") . chr(0x0D) . chr(0x0A), FILE_APPEND);

echo $filename;

?>

