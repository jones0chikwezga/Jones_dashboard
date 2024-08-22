<?php
try {
    $conn= new mysqli('localhost','root','','Detection');

    if ($conn == True)
    {
       
    }
    else
    {
        echo "error".mysqli_error($conn);
    }
} catch (\Throwable $th) {
    echo $th;
}





?>