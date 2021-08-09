<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
        <label for="input-1">
            enter value you want
        </label>
        <input type="text" name="passed_input" id="input-1">
        <input type="submit">
    </form>
</body>
</html>
