<?php
    include("database.php");
    
    $sql = "SELECT * FROM student";


    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo $row["s_id"]."  ".$row["s_name"]."<br>";
        }
        echo "some student here";
    }else{
        echo "No student Found!";
    }

    mysqli_close($conn);

?>