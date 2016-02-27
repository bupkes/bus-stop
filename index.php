<?php

echo "<h1>Next bus from Lewes Post Office to Brighton...</h1>";

// Get the .json from the API
$json = file_get_contents('http://transportapi.com/v3/uk/bus/stop/1400LE0036/live.json?app_id=03bf8009&app_key=d9307fd91b0247c607e098d5effedc97');
	
// Convert .json to an array															
$newJson = json_decode($json, true);

// Cut out most of the stuff I'm not interested in (as I already know which stop we're talking about)
$thingsToRemove = array('atcocode', 'smscode', 'request_time', 'bearing', 'stop_name');
foreach($thingsToRemove as $thingToRemove){
unset($newJson[$thingToRemove]);
}


// Sorting it out a little bit
$departures = $newJson['departures'];
$departures = array_values($departures);

// Pull out the bus numbers, estimated departure times and timetabled times

echo "<ul>";
foreach($departures as $route){
  
	foreach($route as $departure){
	
	$line = $departure['line'];
	$time = $departure['best_departure_estimate'];
	$now = new DateTime();
	$busDueIn = new DateTime($departure['best_departure_estimate']);
	$interval = $busDueIn->diff($now);
	$interval = $interval->format("%i minutes"); // took out days and hours, and also seconds
	
	
// Strip out times for buses that aren't the ones I want
// (in this case I'm only looking for the 28 and 29 services which go to Brighton
	if ($line === "28" || $line === "29" || $line === "29B" || $line === "29X" ){

// Print each one out as a list item
	echo 	"<li>The next number " . $line . 
			" is due in " . $interval . 
			" (due at " . $time . ')
			</li>'
			;};  
}}


// Show when page was last loaded
$time = date("H:i");
echo "</ul>
		<footer>" .
		"<aside>Last updated at <em>" . $time . "</em></aside> 
		</footer></body>";
		
		







