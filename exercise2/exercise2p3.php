<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="input-1">
            enter value you want
        </label>
        <input type="text" name="passed_input" id="input-1">
        <input type="submit">
    </form>
</body>
</html>
<?php
$matchFound = (array_key_exists("passed_input", $_POST) && trim($_POST["passed_input"]) != '');
$slide = $matchFound ? trim($_POST["passed_input"]) : '';
function countWords($str)
{
    $str = strtolower($str);
    $strArr = preg_split("/[\s,.)(]+/", $str);
    return $strArr;
}
if ($slide != '') {
    print_r(array_count_values(countWords($slide)));

}
?>