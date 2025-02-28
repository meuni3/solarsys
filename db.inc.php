<?php
include_once 'pollv.php';
   
    $sql="INSERT INTO 'vpoll' (fsname , email , form , ch) VALUES (fsname, email,form,ch)";

    mysqli_query($conn,$sql);
        echo "New record created successfully!";
    
$result = mysqli_query($conn , $sql);

?>

