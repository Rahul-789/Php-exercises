<?php

class bite
{
    public $bitten;

    public function __construct($rand)
    {
        $this->bitten = $rand;
    }

    public function trueorfalse()
    {
        if ($this->bitten == 1) {
            echo "true = $this->bitten";
        } else {
            echo "false = $this->bitten";
        }
    }
}

?>
<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
    <h1>
        Welcome to the game
    </h1>
    <?php
$rand = rand(0, 1);

$myBite = new bite($rand);
$rtnValue = $myBite->trueorfalse();
?>
<title>
        Random Values
    </title>

</head>

<body>



</body>
</html>