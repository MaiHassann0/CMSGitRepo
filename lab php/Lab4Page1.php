<!-- Lab 4 - Registration form-->

<!DOCTYPE html>
<html>
<head lang="en">
        <link rel="stylesheet" href="lab3.css">
        <meta charset="UTF-8"/>
        <title> User Registration Form </title>
        <meta name="description" content="Registration Form"/>
 </head> 

<?php

// create database 'user' and connection
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'User_Data';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// if(! $conn){
//     die('Could not connect: ' . mysqli_error($conn));
// } else{
//     echo 'Connected successfully';
// }

// echo 'Connected to database successfully'. '<br>';

// Create table 'form' in database 'user'

$uName =$uEmail =$uGender =$mailStatus = "";

$uName = $_POST['uName'];
$uEmail = $_POST['uEmail'];
$uGender = $_POST['uGender'];
$$mailStatus = $_POST['mailStatus'];


    if (isset($_POST["submitBtn"])){

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

          $sql= "INSERT INTO Reg_Form(User_name, Email, Gender, Mail_status ) 
          VALUES('$uName', '$uEmail', '$uGender', '$mailStatus');";

            mysqli_query( $conn, $sql );
            mysqli_close($conn);                                                                                                                                                                                                                                                                                                                                                                                                           
            }
        }
       
//  echo 'Inserted to table successfully'. '<br>'; 
?>

   <body>
    <div class="form">

    <table> 
   
    <form action="<?php $_PHP_SELF; ?>" method ="POST" autocomplete="off">
               <h1 style="color: blue; text-decoration: underline;"> 
              User Registration Form
                  </h1> 
                  <p style="text-align:left;"> Please fill this form to add user record to the database. </p> </br>
                  
                  <tr>
    <td>Name: </td>

                  </tr>
        <tr>
    <td> <input type="text" name="uName" value="<?php echo $uName; ?>">
    </td>
        </tr>

           <tr>
    <td> E-mail: </td>
           </tr> 
          <tr>
    <td> <input type="email" name="uEmail" value="<?php echo $uEmail; ?>">
    </td>
          </tr>

          <tr>
    <td>Gender: </td>
         </tr>
         <tr>
    <td> <input type="radio" name="uGender" value="Female"value="<?php if (isset($uGender) && $uGender=="Female") echo "checked";?>"  /> Female <br/>
            <input type="radio" name="uGender" value="Male"value="<?php if (isset($uGender) && $uGender=="Male") echo "checked";?>"  /> Male 
        </td>
        </tr>

        <tr>
   <td> <input type="checkbox" name="mailStatus" value="<?php echo $mailStatus; ?>"/> Recieve E-mails from us.
   </td>
        </tr>

        <tr> <td>
        <a href="Lab4Page2.php" > <input type="submit" name="submitBtn" value="Submit"/>  </a>
</td> 

     <td>
    <a href="Lab4Page1.php" ><input type="submit" name="cancelBtn" value="Cancel"/>  </a>
</td> </tr>
</form>
</table>
</div>
</body> 
    </html>