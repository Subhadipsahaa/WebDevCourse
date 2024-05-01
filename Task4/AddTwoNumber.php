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
        <div class="col-6">
            <form class="frm" method="get">
                <div class="from-group">
                    <h1>Addition Of Two Numbers</h1>
                    <label for="num1">Enter First Number :</label>
                    <input type="text" name="num1" id="num1" class="form-control">
                    <label for="num2">Enter Second Number :</label>
                    <input type="text" name="num2" id="num2" class="form-control">
                </div>
                <br>
                <input type="submit" name="ok" class="btn btn-primary" value="Submit/Reset">
                <br>
                <br>
                <?php
                if (isset($_GET['ok'])) {
                    if (isset($_GET['num1']) && isset($_GET['num2'])) {
                        if (is_numeric($_GET['num1']) && is_numeric($_GET['num2'])) {
                            $num1 = $_GET['num1'];
                            $num2 = $_GET['num2'];
                            $sum = $num1 + $num2;
                            echo "The sum of two numbers is :-" . $sum;
                        } else
                            echo "Enter a Valid Numeric data";
                    }
                }
                ?>
            </form>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>

</html>