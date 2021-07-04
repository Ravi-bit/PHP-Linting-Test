<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
    Enter 1st value: <input type="number" name="A" value="">
    <br>
    Enter 1st value: <input type="number" name="B" value=""><br>
    <input type="submit" value="ADD">
    </form>
    <?php
    if ($_POST) {
        $a = $_POST['A'];
        $b = $_POST['B'];
        echo "sum of two numbers is ".$a+$b;
    }
    ?>
</body>
</html>