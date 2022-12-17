<!-- Lab 4 - User Details -->

<!DOCTYPE html>
<html>
<head lang="en">
        <link rel="stylesheet" href="lab4.css">
        <meta charset="UTF-8"/>
        <title> User Details </title>
        <meta name="description" content="User Details"/>
 </head> 

 <body>
 
    <div class = "form">
    <h1 style="color: blue; text-decoration: underline;"> 
        User Details</h1>
        <a href="Lab4Page1.php" target="_blank"><button >Add new user</button>  </a> 
    <table style="border:1px solid;"> 
              <tr>
                <th style="border:1px solid;">User #</th>
                <th style="border:1px solid;">User Name</th>
                <th style="border:1px solid;">E-mail</th>
                <th style="border:1px solid;">Gender</th>
                <th style="border:1px solid;">Mail Status</th>
                <th style="border:1px solid;">Action</th>
              </tr> 
 <?php

// create database 'user'
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'app_form';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// if(! $conn){
//     die('Could not connect: ' . mysqli_error($conn));
// }

// echo 'Connected to database successfully'. '<br>';

// View details from table 'form' in database 'user'

$sql= "SELECT * FROM Reg_Form";

$result=mysqli_query($conn,$sql);

// if(! $result){
//     die('Could not insert into table: ' . mysqli_error($conn));
//     }

//  echo 'Inserted to table successfully'. '<br>';

//Fetching results of table rows
if (mysqli_num_rows($result) > 0){ 

   while ($row = mysqli_fetch_assoc($result)){
       echo '<tr>';
    echo '<td style="border:1px solid;">' . $row["User_no"]. '</td>';
    echo'<td style="border:1px solid;">' . $row["User_name"]. '</td>';
    echo '<td style="border:1px solid;">' . $row["Email"]. '</td>';
    echo '<td style="border:1px solid;" >' . $row["Gender"]. '</td>';
    echo '<td style="border:1px solid;" >';  if ($row["Mail_status"]=="on"){echo "Yes";}else{echo "No";} echo '</td>';
    echo '<td style="border:1px solid;"><a href="lab4Page3.php" target="_blank">View</a></td>';
       echo '</tr>';
    }
} 
mysqli_close($conn);

// echo "Data fetched successfully\n";

?>

