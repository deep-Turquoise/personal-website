<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div>
    <h1>Length Converter</h1>
    <form id="form1" method="get">
        Enter centimeters: <input type="text" name="cm" size="10">
        <input type="submit" value="Convert to Inches"> <br>
    </form>
    <?php
    $received = $_GET['cm'];
    $num = ((int)$received)*0.393701;
    echo $_GET['cm'] . "cm = " . $num . " inches.";
    ?>
</div>

<div>
    <p>
    </p>
        <form id="form2" method="get">
        Enter inches: <input type="text" name="in" size="10"> <br>
        Convert to:<br>
        <input type="radio" name="convertTo" value="cms">Centimeters <br>
        <input type="radio" name="convertTo" value="ft">Feet <br>
        <input type="radio" name="convertTo" value="yds">Yards<br>
        <input type="submit" value="Convert!">
    </form>
    <p></p>
</div>
</body>
<?php

$received = $_GET['get']

?>
</html>