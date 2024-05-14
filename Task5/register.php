<?php
require 'dbcon.php';
?>
<?php
session_start();
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
    <div class="container mt-5">
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_SESSION)) {
        ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Hey Buddy!</strong><?php echo " Your Have Registered Succesfully"; ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php
                header("refresh:2;url=main.php");
            } else {
            ?>
                <div class="alert alert- alert-dismissible fade show" role="alert">
                    <strong>Sorry!</strong><?php echo " Your Have Registered Unsuccesfully"; ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
        <?php
            }
        }
        ?>
        <div class="col-6 border pt-5 pb-5 pl-5 pr-5 mx-auto rounded-lg mb-5" style="width: 40%;">
            <form class="frm" method="post">

                <div class="p-3 mb-2 bg-dark text-center rounded-lg text-white"><h2 >User Registration</h2></div>

                <br>
                <div class="form-group">
                    <label for="uname">Enter Name</label>
                    <input type="text" name="uname" id="uname" class="form-control" placeholder="Enter Your Name" required>
                    <br>
                    <label for="email">Enter E-Mail Id</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter Your E-Mail Id" required>
                    <label for="passw">Enter Password</label>
                    <input type="password" name="passw" id="passw" class="form-control" placeholder="Enter Your Password" required>
                    <label for="dob">Select Date Of Birth</label>
                    <input type="date" name="dob" id="dob" class="form-control" required>
                    <p class="mb-0">Gender</p>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="gender" id="gender" value="male" checked required>
                            Male
                        </label>
                        <br>
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="gender" id="gender" value="female" required>
                            Famle
                        </label>
                    </div>

                    <p class="mb-0">Select Language</p>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="lang[]" id="lang" value="C">
                            C
                        </label>
                        <br>
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="lang[]" id="lang" value="C++">
                            C++
                        </label>
                        <br>
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="lang[]" id="lang" value="PHP">
                            PHP
                        </label>
                    </div>
                    <label for="addr">Address</label>
                    <textarea rows="2" name="addr" id="addr" class="form-control" placeholder="Enter Your Address" required></textarea>
                    <label for="city">
                        <p class="mb-0">City</p>
                    </label>
                    <select name="city" class="form-control" required>
                        <option selected>Select</option>
                        <option value="Kolkata">Kolkata</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Mumbai">Mumbai</option>
                        <option value="Ramjibanpur">Ramjibanpur</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <br>
                <div class="text-center">
                    <input type="submit" name="ok" class="btn btn-dark btn-lg " value="Sign Up">
                </div>
                <br>
                <!-- <div class="text-center">
                    <input type="reset" name="ok" class="btn btn-dark btn-lg" value="Reset">
                </div> -->
            </form>
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if (isset($_POST['ok'])) {
                    $uname = $_POST['uname'];
                    $email_id = $_POST['email'];
                    $pwd = password_hash($_POST['passw'], PASSWORD_DEFAULT);
                    $dob = $_POST['dob'];
                    $gender = $_POST['gender'];
                    $city = $_POST['city'];
                    $address = $_POST['addr'];
                    $temp = $_POST['lang'];
                    $lang = implode(",", $temp);
                    $sql = "INSERT INTO `user` (`name`, `email`, `password`, `dob`, `gender`, `language`, `address`, `city`) VALUES ('$uname', '$email_id', '$pwd', '$dob', '$gender', '$lang', '$address', '$city')";
                    $ress = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                    $ress = 0;
                    if ($ress == 1) {
                        $_SESSION = 1;
                        $res = "successfull";
                    } else
                        $_SESSION = 0;
                    $res = "unsuccessfull";
                }
            }
            ?>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>

</html>