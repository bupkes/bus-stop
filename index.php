<?php

echo "<h1>Next bus from Lewes Post Office to Brighton...</h1>";

$json = file_get_contents('http://transportapi.com/v3/uk/bus/stop/1400LE0036/live.json?app_id=03bf8009&app_key=d9307fd91b0247c607e098d5effedc97');
																
$newJson = json_decode($json, true);

$thingsToRemove = array('atcocode', 'smscode', 'request_time', 'bearing', 'stop_name');

foreach($thingsToRemove as $thingToRemove){
unset($newJson[$thingToRemove]);

}

$departures = $newJson['departures'];

$departures = array_values($departures);

$departures = $departures[0];

foreach($departures as $departure){
	
	$line = $departure['line'];
	$time = $departure['best_departure_estimate'];
	
	echo "<h2>Bus Number:  " . $line . "</h2> \n <h2>Leaving at " . $time . "</h2>";
}
