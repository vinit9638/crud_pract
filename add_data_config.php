<?php
    include("config.php");
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $my_query = "insert into user(first_name, last_name, email, password, phone, address) values ('{$first_name}','{$last_name}','{$email}','{$password}','{$phone}','{$address}')";
    mysqli_query($conn, $my_query);
    header("Location: http://localhost/crud_pract/new_read.php");
    mysqli_close($conn);
?>