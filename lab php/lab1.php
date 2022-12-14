<!-- Lab 1 -->

<?php

//Showing PHP info on browser:
     phpinfo();
         
//Define constant:
     define("Name","Mai Website");
         echo constant("Name");
         echo "<br>";

//Display server name, port & address:
     print($_SERVER['SERVER_NAME']);
         echo "<br>";
     print($_SERVER['SERVER_ADDR']);
         echo "<br>";
     print($_SERVER['SERVER_PORT']);
         echo "<br>";

//Display file name with path:
         echo __FILE__;
         echo "<br>";

//Switch - case :
    $age = 10;
    switch ($age) {
        case $age < 5 :
            print("Stay at home!");
            break;
        case 5 :
            print("Go to Kindergarden!");
            break;
        case $age >=6 && $age <=12:
            print("go to grade: ");
            break;     
    }

?>
