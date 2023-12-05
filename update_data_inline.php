<?php
include("header.php");
$update_id = $_GET['id'];
$select_query = "select * from user where id = {$update_id}";
$result = mysqli_query($conn, $select_query);
?>

<div class="container">
    <br><br>
    <h2>Update data to data base</h2>
    <br><br>
    <div class="container">
        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <form method="post" action="update_data_config.php">
                  
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">First Name</label>
                        <div class="col-sm-10">
                            <input type="hidden" class="form-control" id="first_name" name="id"
                                value="<?php echo $row['id']; ?>">
                            <input type="text" class="form-control" id="first_name" name="first_name"
                                value="<?php echo $row['first_name']; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Last Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="last_name" name="last_name"
                                value="<?php echo $row['last_name']; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3" name="email"
                                value="<?php echo $row['email']; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword3" name="password"
                                value="<?php echo $row['password']; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="inputPassword3" name="phone"
                                value="<?php echo $row['phone']; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword3" name="address"
                                value="<?php echo $row['address']; ?>">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <button type="submit" class="btn btn-primary">Clear</button>
                </form>
                <?php
            }
        }
        ?>
    </div>