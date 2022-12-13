<!-- Lab 2 -->

<?php

//new line using /n
// nl2br();

//displaying &_SERVER in readable format
echo "<pre>";
print_r($_SERVER ["SERVER_NAME"]);
// print_r($_SERVER);
echo "</pre>"; 
echo '<hr>';

//INDEXED ARRAY
$numbers = array(12, 45, 10, 25);

//sum of array
$sum= array_sum($numbers);
echo 'Sum = '. $sum. '<br>';
echo '<hr>';

//average of array
$average = array_sum($numbers)/count($numbers);
echo "Average = ". $average. "<br>";
echo '<br>';
echo '<hr>';

//sorting array reversly from highest to lowest
krsort($numbers);
foreach($numbers as $values){
    echo 'Value = '.$values. '<br>';
    echo '<br>';
}
echo '<hr>';
echo '<hr>';

// -------------------------------
//ASSOCIATIVE ARRAY
$information= array("Sara"=>31, "Walaa"=>39, "Ramy"=>40);

//sorting asc acc to value
asort($information);
foreach($information as $name => $keys){
    echo 'Name = '.$name. ' '. 'Value = '. $keys. '<br>';
    echo '<br>';
}
echo '<hr>';

//sorting asc acc. to key
ksort($information);
foreach($information as $name => $keys){
    echo 'Name = '.$name. ' '. 'Value = '. $keys. '<br>';
    echo '<br>';
}
echo '<hr>';

//sorting desc acc to value
arsort($information);
foreach($information as $name => $keysAsc){
    echo 'Name = '.$name. ' '. 'Value = '. $keysAsc. '<br>';
    echo '<br>';
}
echo '<hr>';

//sorting desc acc to key
krsort($information);
foreach($information as $name => $keysAsc){
    echo 'Name = '.$name. ' '. 'Value = '. $keysAsc. '<br>';
    echo '<br>';
}
echo '<hr>';

?>
