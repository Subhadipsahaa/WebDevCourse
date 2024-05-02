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
                <div class="form-group">
                    <h1>Sum Of Two Matrix</h1>
                    <label for="num1">Enter Numbers For First Matrix :</label>
                    <input type="text" name="num1" id="num1" class="form-control">
                    <br>
                    <label for="num2">Enter Numbers For Second Matrix :</label>
                    <input type="text" name="num2" id="num2" class="form-control">
                </div>
                <br>
                <input type="submit" name="ok" class="btn btn-primary" value="Check/Reset">
                <br>
                <br>
                <?php
                if (isset($_GET['ok'])) {
                    if ($_GET['num1'] != null && $_GET['num2'] != null) {
                        $num1 = $_GET['num1'];
                        $num2 = $_GET['num2'];
                        $matrix1 = explode(' ', $num1);
                        $matrix2 = explode(' ', $num2);
                        function isNumericArray($arr)
                        {
                            foreach ($arr as $val) {
                                if (!is_numeric($val)) {
                                    return false;
                                }
                            }
                            return true;
                        }
                        function display($matrix){
                            echo "<br>";
                                for ($i = 0; $i < 3; $i++) {
                                    for ($j = 0; $j < 3; $j++) {
                                        echo $matrix[$i][$j] . " ";
                                    }
                                echo "<br>";
                            }
                        }

                        if (count($matrix1) == 9 && count($matrix2) == 9 && isNumericArray($matrix1) && isNumericArray($matrix2)) {

                            $matrix1 = array_chunk($matrix1, 3);
                            $matrix2 = array_chunk($matrix2, 3);
                            $resultMatrix = [];
                            for ($i = 0; $i < 3; $i++) {
                                for ($j = 0; $j < 3; $j++) {
                                    $resultMatrix[$i][$j] = $matrix1[$i][$j] + $matrix2[$i][$j];
                                }
                            }
                            echo display($matrix1)." + ".display($matrix2);
                            echo "<pre>";
                            echo display($resultMatrix);
                            echo "</pre>";
                        } else {
                            echo "Enter valid numeric data for both matrices.";
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