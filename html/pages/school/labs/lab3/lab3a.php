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
    if($received != "") {
        print $_GET['cm'] . " cm = " . $num . " inches.";
    }
    ?>
</div>

<div>
    <form id="form2" method="get">
        Enter inches: <input type="text" name="in" size="10"> <br>
        Convert to:<br>
        <input type="radio" name="convertTo" value="cms">Centimeters <br>
        <input type="radio" name="convertTo" value="ft">Feet <br>
        <input type="radio" name="convertTo" value="yds">Yards<br>
        <input type="submit" value="Convert!">
    </form>
    <?php
    $received2 = $_GET['in'];
    if($received2 != "") {
        $convertTo = $_GET['convertTo'];
        if(isset($convertTo) && $convertTo=="cms") { $return = ((int)$received2)*2.54; }
        if(isset($convertTo) && $convertTo=="ft") { $return = ((int)$received2)*0.0833333; }
        if(isset($convertTo) && $convertTo=="yds") { $return = ((int)$received2)*0.0277777666667; }

        print "$received2 in = $return $convertTo";
    }
    ?>
</div>
</body>
</html>