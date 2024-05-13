<?php
require 'dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Title</title>
</head>

<body>
<?php
require 'nav.php';
?>
    <div class="container mt-5 pl-pr-0 mx-auto " >
        <?php
        $src = "SELECT * FROM user";
        $rs = mysqli_query($conn, $src) or die(mysqli_error($conn));
        ?>
        <table class="table table-bordered table-striped ";>
            <thead class="thead-dark">
                <tr>
                    <th scope="col">User Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Date Of Birth</th>
                    <th scope="col">Gender</th>
                    <th scope="col">language</th>
                    <th scope="col">Address</th>
                    <th scope="col">City</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (mysqli_num_rows($rs) > 0) {
                    while ($rec = mysqli_fetch_assoc($rs)) {
                        $dob = strtotime($rec['dob']);
                        $dob = date("d-M-Y", $dob);

                ?>
                        <tr>
                            <td><?php echo $rec['uid']; ?></td>
                            <td><?php echo $rec['name']; ?></td>
                            <td ><?php echo $rec['email']; ?></td>
                            <td class="text-break"><?php echo $rec['password']; ?></td>
                            <td class="text-nowrap"><?php echo $dob; ?></td>
                            <td><?php echo $rec['gender'] ?></td>
                            <td><?php echo $rec['language']; ?></td>
                            <td><?php echo $rec['address'] ?></td>
                            <td><?php echo $rec['city'] ?></td>
                        </tr>
            </tbody>
        </table>
    <?php
                    }
                } else {
    ?>
    <tr>
        <td colspan="9" class="text-center">No record found</td>
    </tr>
<?php
                }
?>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>

</html>