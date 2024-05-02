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
                    <h1>Maximum And Minimum</h1>
                    <label for="num">Enter Numbers :</label>
                    <input type="text" name="num" id="num" class="form-control">
                </div>
                <br>
                <input type="submit" name="ok" class="btn btn-primary" value="Submit/Reset">
                <br>
                <br>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "GET") {
                    if ($_GET['num'] != null) {
                        if (isset($_GET['num'])) {
                            $input = $_GET['num'];
                            $num = explode(' ', $input);
                            if (is_array($num)) {
                                $length = count($num);
                                $max = $num[0];
                                $min = $num[0];
                                function isnumeric($num, $length)
                                {
                                    for ($i = 0; $i < $length; $i++) {
                                        $check = $num[$i];
                                        if (!is_numeric($check)) {
                                            return 0;
                                            break;
                                        }
                                    }
                                    return 1;
                                }
                                if (isnumeric($num, $length)) {
                                    for ($i = 1; $i < $length; $i++) {
                                        if ($max < $num[$i]) {
                                            $max = $num[$i];
                                        }
                                    }
                                    for ($i = 1; $i < $length; $i++) {
                                        if ($min > $num[$i]) {
                                            $min = $num[$i];
                                        }
                                    }
                                    echo "<pre>";
                                    print_r($num);
                                    echo "</pre>";
                                    echo $max;
                                    echo "<br>";
                                    echo $min;
                                } else
                                    echo "Enter a valid numeric data";
                            } else
                                echo "Enter a valid numeric data";
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