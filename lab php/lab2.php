<?php
//new line using /n
// nl2br();

//displaying &_SERVER in readable format
echo "<pre>";
print($_SERVER ["SERVER_NAME"]);
echo "</pre>"; 

//display indexed array
$numbers = array(12, 45, 10, 25);

//sum of array
array_sum($numbers);


//average of array
$average = array_sum($numbers)/count($numbers);
echo "average = ". $average. "</br>";

//sorting array reversly from highest to lowest
krsort($numbers);

//associative array
$information= array("Sara"=>31, "Walaa"=>39, "Ramy"=>40);

//sorting asc acc to value
asort($information);

//sorting asc acc. to key
ksort($information);

//sorting desc acc to value
arsort($information);

//sorting desc acc to key
krsort($information);

?>
