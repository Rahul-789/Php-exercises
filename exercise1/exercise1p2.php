<?php

class bite
{
    public $bitten;

    public function __construct($rand)
    {
        $this->bitten = $rand;
    }

    public function isbitten()
    {
        if ($this->bitten == 1) {
            echo "Charlie bit your finger";

        } else {
            echo "Charlie didn't bit your finger";
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
$rtnValue = $myBite->isbitten();
?>
<title>
        Random Values
    </title>

</head>

<body>



</body>
</html>