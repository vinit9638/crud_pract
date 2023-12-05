<?php
    include("config.php");
    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $update_query = "UPDATE user SET first_name='{$first_name}',last_name='{$last_name}',email='{$email}',password='{$password}',phone='{$phone}',address='{$address}' WHERE id = {$id}";
    mysqli_query($conn, $update_query);
    header("Location: http://localhost/crud_pract/new_read.php");
    mysqli_close($conn);
?>