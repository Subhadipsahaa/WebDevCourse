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
                    <h1>Check The Number Is Prime Or Not</h1>
                    <label for="num">Enter The Number :</label>
                    <input type="text" name="num" id="num" class="form-control">
                </div>
                <br>
                <input type="submit" name="ok" class="btn btn-primary" value="Submit/Reset">
                <br>
                <br>
                <?php
                if (isset($_GET['ok'])) {
                    if ($_GET['num'] != null) {
                        if (isset($_GET['num'])) {
                            if (is_numeric($_GET['num'])) {
                                $num = $_GET['num'];
                                function primeChecker($num)
                                {
                                    for ($i = 2; $i < $num / 2; $i++) {

                                        if ($num % $i == 0) {
                                            return 0;
                                            break;
                                        }
                                    }
                                    return 1;
                                }
                                if (primeChecker($num)) {
                                    echo "The number is Prime.";
                                } else
                                    echo "The number is not Prime.";
                            } else
                                echo "Enter a valid numeric data.";
                        }
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