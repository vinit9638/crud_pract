<?php
    // server_name, host_username, password, database_name
    $conn = mysqli_connect("localhost:3308","root","", "users");
    if ($conn -> connect_error) {
        die("Connection failed");
    }
    else{
        echo "Connection Pass";
    }
?>