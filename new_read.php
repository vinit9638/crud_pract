<?php
include("header.php");
if (mysqli_num_rows($data) > 0) {
    ?>
    <br><br>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Address</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($data)) {
                    ?>
                    <tr>

                        <th scope="row">
                            <?php echo $row['id'] ?>
                        </th>
                        <td>
                            <?php echo $row['first_name'] . " " . $row['last_name'] ?>
                        </td>
                        <td>
                            <?php echo $row['phone'] ?>
                        </td>
                        <td>
                            <?php echo $row['address'] ?>
                        </td>
                        <td>
                            <button><a href="delete_config.php?id=<?php echo $row['id']; ?>">Delete</a></button>
                            <button><a href="update_data_inline.php?id=<?php echo $row['id']; ?>">Edit</a></button>
                        </td>

                    </tr>-
                    <?php
                }
                ?>
            </tbody>
        </table>
        <?php
}
?>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

</html>