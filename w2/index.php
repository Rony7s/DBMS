<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn php and MySQL coonect 1.0</title>
</head>
<body>
    <h1>Welcome to MySQL</h1>
</body>
</html>

<?php
    include("database.php");
    $student_id = 2002036;
    $student_name = "Tanziful Islam";
     
     $sql = "INSERT INTO student (s_id, s_name) VALUES ($student_id,'$student_name')";

     try{
        mysqli_query($conn, $sql);
        echo "Student is now resistered!";
     }catch(mysqli_sql_exception){
        echo "Could not register student";
     }


     mysqli_close($conn);



?>

