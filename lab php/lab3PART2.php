<!-- Lab 3 Part 2 -->
<html>
<head lang="en">
        <link rel="stylesheet" href="lab3.css">
        <meta charset="UTF-8"/>
        <title> PHP class registration </title>
        <meta name="description" content="Application name"/>
 </head> 
   <body>
    <div class="form">

    <?php

$students = [
    ['name' => 'Alaa',
    'email' => 'ahmed@test.com',
    'status' => 'Science'],

    ['name' => 'Shamy', 
    'email' => 'ali@test.com', 
    'status' => 'AAST'],

    ['name' => 'Youssef', 
    'email' => 'basem@test.com', 
    'status' => 'AAST'],

    ['name' => 'Waleid', 
    'email' => 'farouk@test.com', 
    'status' => 'Science'],

    ['name' => 'Rahma', 
    'email' => 'hany@test.com', 
    'status' => 'AAST'],
];
?>
     <table width="100%" ,border="1">
        <thead>
            <h2 style="color: blue;" > Application name: PHP class registration </h2>
            <tr>
                <th>Name</th>
                <th>E-mail</th>
                <th>Status</th>
            </tr> 

        </thead>

        <?php
        foreach($students as $key=>$value){
            echo '<tr>';

            foreach($value as $key1 => $value1){
                if($value1=="Science") {
               echo '<td>'.'<span style="color: red;" >' .$value1. '</span>'.'</td>';
                }else{

                echo '<td>' .$value1. '</td>';
            }
        }
        echo '</tr>';
    }
         ?>
         </table>
   </div> 
</body>
<html> 
