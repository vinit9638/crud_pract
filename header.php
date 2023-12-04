
<?php
    include ("config.php");
    $my_query = "select * from user";
    $data = mysqli_query($conn, $my_query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read_CRUD</title>
    <style>
        a{
            color: black;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
</head>

<body>
    <header>
        <center>
            <h1>CRUD</h1>
        </center>
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <b><a class="nav-link text-dark" aria-current="true" href="new_read.php">Read</a></b>
                </li>
                <li class="nav-item">
                    <b><a class="nav-link text-dark" aria-current="true" href="add_data.php">Add</a></b>
                </li>
                <li class="nav-item ">
                    <b><a class="nav-link text-dark" href="update_data.php">Update</a></b>
                </li>
                <li class="nav-item ">
                    <b><a class="nav-link text-dark" href="#">Delete</a></b>
                </li>
            </ul>
        </div>
    </header>
