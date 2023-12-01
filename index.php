<?php
    include("config.php");  
    // * ==> all user ==> table name
    $my_query = "select first_name, last_name from user where id = 1";
    // first_name, last_name >> 1
    $result = mysqli_query($conn,$my_query);
    echo "<pre>";
    print_r($result);
    echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <h1>
      
    CRUD
</h1>
<h2>
    Read in CRUD
</h2>


<?php
    if(mysqli_num_rows($result) > 0){
?>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while($row = mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['first_name']. " ".$row['last_name'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['address'] ?></td>
        </tr>

        <?php
        }
        ?>
    </tbody>
</table>
<?php
    }
?>


</body>
</html>
