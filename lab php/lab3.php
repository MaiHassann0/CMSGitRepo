<?php
// define values
$name = $email = $groupnumber = $classdetails = $gender = $courses = $agree = "";
$nameERR = $emailERR = $groupnumberERR = $classdetailsERR = $genderERR = $coursesERR = $agreeERR = "";
 
// print_r($_REQUEST); 

// $_REQUEST variable

if(isset($_REQUEST["submitBtn"])){

    if($_REQUEST == "POST"){
// $name is required
        if(!empty($_REQUEST["name"])){
           $name = test_input($_REQUEST["name"]). "<br/>";
        } else{
            $nameERR = "This field is required" ;  
        }
    }
// $email is required
    if(!empty($_REQUEST["email"])){
        $email = test_input($_REQUEST["email"]). "</br>";
     } else{
          $emailERR = "This field is required";  
     }
// $groupnumber is not required
     if(!empty($_REQUEST["groupnumber"])){
        $name = test_input($_REQUEST["groupnumber"]). "</br>";
     } else{
          $groupnumber = " ";  
     }
// $classdetails is not required
     if(!empty($_REQUEST["classdetails"])){
        $classdetails = test_input($_REQUEST["classdetails"]). "</br>";
     } else{
         $classdetails = " ";  
     }
// $gender is required
     if(!empty($_REQUEST["gender"])){
        $gender = test_input($_REQUEST["gender"]). "</br>";
     } else{
          $genderERR = "This field is required";  
     }
// $courses is not required
     if(!empty($_REQUEST["courses"])){
        $courses = test_input($_REQUEST["courses"]). "</br>";
     } else{
          $coursesERR = " ";  
     }
// $agree is required
     if(!empty($_REQUEST["agree"])){
       $agree = test_input($_REQUEST["agree"]). "</br>";
     } else{
          $agreeERR = "This field is required";  
         
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
    <form action="<?php $_PHP_SELF ?>" method ="POST" autocomplete="off">
               <h3 style="color: blue;"> 
                Application name: AAST_BIS class registration
                  </h3> 
              <p style="text-align:left;"> <span style="color:red;"> * Required field. </span> </p> </br>
            

            <tr>
    <td>Name: </td>
    <td> <input type="text" name="name" /> <span style="color:red;"> *</span>
    <span class="error"><?php echo $nameERR; ?></span>
    </td>
           </tr>

           <tr>
    <td> E-mail: </td>
    <td> <input type="text" name="email" /><span style="color:red;"> *</span> 
    <span class="error"><?php echo $emailERR; ?></span>
    </td>
          </tr>

          <tr>
    <td> Group #: </td>
    <td> <input type="number" name="groupnumber" /> </td>
          </tr>

          <tr>
    <td>Class details: </td> 
    <td> <textarea  name="classdetails" style="width:260px; height:65px;"> </textarea> </td>
         </tr>

         <tr>
    <td>Gender: </td>
    <td> <input type="radio" name="gender" value="Female" /> Female
            <input type="radio" name="gender" value="Male" /> Male <span style="color:red;"> *</span>
            <span class="error"><?php echo $genderERR; ?></span>
        </td>
        </tr>

        <tr>
    <td>Select courses: </td>
    <td><select  name="courses" multiple> 
        <option value="PHP"> PHP </option>
        <option value="HTML"> HTML </option>
        <option value="JavaScript"> JavaScript </option>
        <option value="MYSQL"> MYSQL </option>
                 </select> </td>
        </tr>

        <tr>
   <td> Agree: </td>
   <td> <input type="checkbox" name="agree" /><span style="color:red;"> *</span>
   <span class="error"><?php echo $agreeERR; ?></span>
   </td>
        </tr>

        <tr> <td>
    <input type="submit" name="submitBtn"/>
</td> </tr>

</table>
</div>

<!-- your given data -->
<?php
echo "<h2> Your given values as: </h2>";

echo "Name: ".$name;
echo "E-mail: ".$email;
echo "Group #: ".$groupnumber;
echo "Class details: ".$classdetails;
echo "Gender: ".$gender;
echo "Your courses are: ".$courses;
?>

</body>
</html>