<!-- Session -->
<?php
session_start();
//
echo '<pre>';
var_dump($_SESSION);
echo '</pre>';
//
if (isset($_SESSION['page_count'])) {
    $_SESSION['page_count'] += 1;
} else {
    $_SESSION['page_count'] = 1;
}
$_SESSION['country'] ='Egypt';
$message = " You have viewed this page <span style='color:red; font-weight: bold;'>" . $_SESSION['page_count'] . "</span> times in this session.";

//
if ($_SESSION['page_count'] > 10) {
    echo "<p style='text-decoration: underline;'>Thank you for visiting this website <span style='color:blue; font-weight: bold;'> 10 </span> times"."</p>";
}

echo '<pre>';
var_dump($_SESSION);
echo '</pre>';
//print_r($_SESSION);
//
// session_destroy();
// unset($_SESSION['page_count']);
// unset($_SESSION['country']);

?>

<!DOCTYPE html>
<html>
    <head>
        <title> PHP session </title>
    </head>
        <body>
        <?php echo $message; ?>
        </body>
</html>