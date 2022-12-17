<!-- Lab 4 - User Details -->

<!DOCTYPE html>
<html>
<head lang="en">
        <link rel="stylesheet" href="lab3.css">
        <meta charset="UTF-8"/>
        <title> User Details </title>
        <meta name="description" content="User Details"/>
 </head> 

 <body>
 
    <div class="form">
    <h1 style="color: blue; text-decoration: underline;">
        User Details</h1>

    <table style="border:1px;"> 
              <tr>
                <th>User #</th>
                <th>User Name</th>
                <th>E-mail</th>
                <th>Gender</th>
                <th>Mail Status</th>
                <th>Action</th>
              </tr> 
 <?php

// create database 'user'
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'User_Data';
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
    echo "<tr>
    <td>" . $row["User_no"]. "</td>
    <td>" . $row["User_name"]. "</td>
    <td>" . $row["Email"]. "</td>
    <td>" . $row["Gender"]. "</td>
    <td>" . $row["Mail_status"]. "</td>
    <td><a href='lab4Page1.php'>view</a></td>
    </tr> ";
    }
} 
mysqli_close($conn);

// echo "Data fetched successfully\n";

?>
