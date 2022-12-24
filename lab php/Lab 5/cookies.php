<!-- Cookies -->
<?php
// 
setcookie("name", "Mai Hassan", time()+60);
setcookie("course", "PHP");
setcookie("category", "ITI");
//
echo '<pre>';
var_dump($_COOKIE);
echo '</pre>';

?>
<!DOCTYPE html>
<html>
    <head>
        <title> PHP cookie </title>
    </head>
        <body>
            <h1> Hello! </h1>
        <?php echo"Set cookies";
        if (isset($_COOKIE["name"])){
        echo "Welcome ".$_COOKIE["name"]. "<br />";
        }else{
            echo "Sorry...Not recognized" ."<br />";
        }
//
//How to updat cookie
// setcookie("name", "Dai Hassan", time()-1);
//
//delete cookie
// setcookie("name", "Mai Hassan", time()-1);
         ?>


         </body>
</html>


