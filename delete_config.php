<?php
    include("config.php");
    $user_id = $_GET['id'];
   
    $delete_query = "delete from user where id = {$user_id}";
    mysqli_query($conn, $delete_query);
    header("Location: http://localhost/crud_pract/new_read.php");
    mysqli_close($conn);

?>