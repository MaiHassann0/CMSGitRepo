<!-- Lab 3 Part 1 -->

<?php
// define values
$name = $email = $groupnumber = $classdetails = $gender = $courses = $agree = "";
$nameERR = $emailERR = $groupnumberERR = $classdetailsERR = $genderERR = $coursesERR = $agreeERR = "";
 
// print_r($POST); 

// $_POST variable

if(isset($_POST["submitBtn"])){

    if ($_SERVER['REQUEST_METHOD'] == "POST"){
// $name is required
        if(!empty($_POST["name"])){
           $name = ($_POST["name"]);
        } else{
            $nameERR = "This field is required";  
            echo "<span color=red>" .$nameERR . "</span>" . "<br>";
        }
    }
// $email is required
    if(!empty($_POST["email"])){
        $email = ($_POST["email"]);
     } else{
          $emailERR = "This field is required";  
          echo "<span color=red>" .$emailERR . "</span>" . "<br>";
     }
// $groupnumber is not required
     if(!empty($_POST["groupnumber"])){
        $groupnumber = ($_POST["groupnumber"]). "</br>";
     } else{
          $groupnumber = " ";  
     }
// $classdetails is not required
     if(!empty($_POST["classdetails"])){
        $classdetails = ($_POST["classdetails"]). "</br>";
     } else{
         $classdetails = " ";  
     }
// $gender is required
     if(!empty($_POST["gender"])){
        $gender = ($_POST["gender"]). "</br>";
     } else{
          $genderERR = "This field is required ";
         echo "<span color=red>" .$genderERR . "</span>" . "<br>";

     }
// $courses is not required
   
//      if (!empty($_POST["courses"])) {
//           foreach ($_POST['courses'] as $courses){
          
//           echo ' '. $courses .' ';
//      }
// }
     
// $agree is required
     if(!empty($_POST["agree"])){
       $agree = test_input($_POST["agree"]). "</br>";
     } else{
          $agreeERR = "This field is required";  
          echo "<span color=red>" .$agreeERR . "</span>" . "<br>";

    exit();
 }
}

function test_input($data) {
   return $data;
  }
  
?>

<html>
<head lang="en">
        <link rel="stylesheet" href="lab3.css">
        <meta charset="UTF-8"/>
        <title> AAST_BIS class registration </title>
        <meta name="description" content="Application name"/>
 </head> 

    <body>
        <div class="form">
    <table> 
   
    <form action="<?php $_PHP_SELF; ?>" method ="POST" autocomplete="off">
               <h3 style="color: blue;"> 
                Application name: AAST_BIS class registration
                  </h3> 
              <p style="text-align:left;"> <span style="color:red;"> * Required field. </span> </p> </br>
            

            <tr>
    <td>Name: </td>
    <td> <input type="text" name="name" value="<?php echo $name; ?>" >
     <span style="color:red;"> *</span>
    <span class="error"><?php echo $nameERR; ?></span>
    </td>
           </tr>

           <tr>
    <td> E-mail: </td>
    <td> <input type="email" name="email" value="<?php echo $email;?>" >
     <span style="color:red;"> *</span> 
    <span class="error"><?php echo $emailERR; ?></span>
    </td>
          </tr>

          <tr>
    <td> Group #: </td>
    <td> <input type="number" name="groupnumber" value="<?php echo $groupnumber;?>"/> </td>
          </tr>

          <tr>
    <td>Class details: </td> 
    <td> <textarea  name="classdetails" style="width:260px; height:65px;" value="<?php echo $classdetails;?>"> </textarea> </td>
         </tr>

         <tr>
    <td>Gender: </td>
    <td> <input type="radio" name="gender" value="Female" value="<?php if (isset($gender) && $gender=="female") echo "checked";?>" /> Female
            <input type="radio" name="gender" value="Male" value="<?php if (isset($gender) && $gender=="male") echo "checked";?>" /> Male <span style="color:red;"> *</span>
            <span class="error"><?php echo $genderERR; ?></span>
        </td>
        </tr>

        <tr>
    <td>Select courses: </td>
    <td><select  name="courses[]" id="courses" multiple size="4" > 
    <option value="select" disabled selected>- - - - Select - - - -</option>
        <option value="PHP"> PHP </option>
        <option value="HTML"> HTML </option>
        <option value="JavaScript"> JavaScript </option>
        <option value="MYSQL"> MYSQL </option>
                 </select> </td>
        </tr>

        <tr>
   <td> Agree: </td>
   <td> <input type="checkbox" name="agree" />
   <span style="color:red;"> *</span>
   <span class="error"><?php echo $agreeERR; ?></span>
   </td>
        </tr>

        <tr> <td>
    <input type="submit" name="submitBtn" value="Submit"/>
</td> </tr>
</form>
</table>
</div>

<!-- your given data -->
<?php
echo "<h2> Your given values as: </h2>";

echo "Name: ".$name;
echo "</br>";
echo "E-mail: ".$email;
echo "</br>";
echo "Group #: ".$groupnumber;
echo "</br>";
echo "Class details: ".$classdetails;
echo "</br>";
echo "Gender: ".$gender;
echo "</br>";
echo "Your courses are: ". $courses;
if (!empty($_POST["courses"])) {
     foreach ($_POST['courses'] as $courses){
     
     echo ' '. $courses .' ';
}
}
?>

</body>
</html>
