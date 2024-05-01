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
        <form class="frm" method="post">
            <div class="from-group">
            <label for="name">Enter The Number :</label>
            <input type="text" name="name" id="name" class="form-control">
            </div>
            <br>
            <input type="submit" name="ok"  class="btn btn-primary" value="Submit">
            <br>
            <br>
            <?php
            if(isset($_POST['name'])){
                $num=$_POST['name'];
                $rem=0;
                $rev=null;
                while ($num>0) {
                    
                    $rem=$num % 10;
                    $rev=$rev*10+$rem;
                    $num=(int)($num/10);
                }
                echo "The reverse number is :".$rev;
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