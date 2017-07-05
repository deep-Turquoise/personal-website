<!DOCTYPE html>
<html>
<head>
    <title>Lab 2. Part A</title>
    <link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet'>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="central_zone">
    <table border="1">
        <?php
            $num = rand(1, 99);
            for($x = 0; $x < 10; ++$x) {
                print "<tr>";
                for($y = 0; $y < 10; ++$y) {
                    $img = "notch.png";
                    if(num > 0) { $img = "circle.png"; $num -= 1; }

                    print "<td><img src=\"$img\"</td>";
                }
                print "</tr>";
            }
        print "</table>";
        print "</div>";

        print "<div class=\"center_text\">";
        print "<h1>The number is $num</h1>";
        print "</div>";
        ?>
</body>
</html>