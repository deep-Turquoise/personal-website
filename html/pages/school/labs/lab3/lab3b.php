<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div>
    <h1>Assignment 3: String Stuff</h1>
    <form id="form1" method="get">
        Number: <input type="text" name="num0" size="10"> <br>
        Number: <input type="text" name="num1" size="10"> <br>
        Number: <input type="text" name="num2" size="10"> <br>
        Number: <input type="text" name="num3" size="10"> <br>
        Number: <input type="text" name="num4" size="10"> <br>
        Number: <input type="text" name="num5" size="10"> <br>
        Number: <input type="text" name="num6" size="10"> <br>
        Number: <input type="text" name="num7" size="10"> <br>
        Number: <input type="text" name="num8" size="10"> <br>
        Number: <input type="text" name="num9" size="10"> <br> <br>

        <input type="radio" name="todo" value="shuffle">Shuffle<br>
        <input type="radio" name="todo" value="rsort">Reverse Sort<br>
        <input type="radio" name="todo" value="sort">Forward Sort<br>
        <input type="radio" name="todo" value="sum">Sum<br>
        <input type="radio" name="todo" value="dups">Remove Duplicates<br>

        <input type="submit" value="Convert to Inches"> <br>
    </form>
    <?php
    $num0 = (int)$_GET['num0'];
    $num1 = (int)$_GET['num1'];
    $num2 = (int)$_GET['num2'];
    $num3 = (int)$_GET['num3'];
    $num4 = (int)$_GET['num4'];
    $num5 = (int)$_GET['num5'];
    $num6 = (int)$_GET['num6'];
    $num7 = (int)$_GET['num7'];
    $num8 = (int)$_GET['num8'];
    $num9 = (int)$_GET['num9'];
    $arr = array($num0, $num1, $num2, $num3, $num4, $num5, $num6, $num7, $num8, $num9);

    $todo = $_GET['todo'];
    if($todo != "") {
        if(isset($todo) && $todo=="shuffle") { shuffle($arr); print_r($arr); }
        if(isset($todo) && $todo=="rsort") { rsort($arr); print $arr;}
        if(isset($todo) && $todo=="sort") { sort($arr); print $arr;}
        if(isset($todo) && $todo=="sum") { print sum($arr);}
        if(isset($todo) && $todo=="dups") { print array_unique($arr); }
    }
    ?>
</div>
</body>
</html>