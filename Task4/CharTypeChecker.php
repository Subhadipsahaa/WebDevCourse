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
                <input type="submit" name="ok" class="btn btn-primary" value="Check/Reset">
                <br>
                <br>
                <?php
                if (isset($_GET['ok'])) {
                    if ($_GET['num'] != null) {
                        if (isset($_GET['num'])) {
                            $input = $_GET['num'];
                            if (is_string($input)) {
                                function charChecker($input)
                                {
                                    $length = strlen($input);
                                    $char = 0;
                                    $num = 0;
                                    $schar = 0;
                                    $err = 0;
                                    for ($i = 0; $i < $length; $i++) {
                                        $check = $input[$i];
                                        switch ($check) {
                                            case ctype_digit($check):
                                                $num += 1;
                                                break;
                                            case ctype_alpha($check):
                                                $char += 1;
                                                break;
                                            case ctype_punct($check):
                                                $schar += 1;
                                                break;
                                            default:
                                                $err = 1;
                                                break;
                                        }
                                    }
                                    return array($num, $char, $schar, $err);
                                }
                                $result = charChecker($input);
                                $num = $result[0];
                                $char = $result[1];
                                $schar = $result[2];
                                $err = $result[3];
                                if ($err == 0) {
                                    echo "Digits in your input is : ".$num;
                                    echo "<br>";
                                    echo "Alphabets in your input is : " . $char;
                                    echo "<br>";
                                    echo "Special Charecters in your input is : " . $schar;
                                } else {
                                    echo "It can only count the Numeric, Alphabets and Special charecters in your input.";
                                }
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