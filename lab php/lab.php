<?php
     phpinfo();
         

     define("Name","Mai Website");
         echo constant("Name");
         echo "<br>";

     print($_SERVER['SERVER_NAME']);
         echo "<br>";
     print($_SERVER['SERVER_ADDR']);
         echo "<br>";
     print($_SERVER['SERVER_PORT']);
         echo "<br>";

         echo FILE;
         echo "<br>";

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