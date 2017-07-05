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
        $evens = 0;
        $odds = 0;

        for($x = 0; $x < 10; ++$x) {
            print "<tr>";
            for($y = 0; $y < 10; ++$y) {
                $num = rand(1, 99);
                $style = "style1";
                if($num % 2 == 0) { $evens += 1; $style = "style2";}
                else { $evens += 1;}

                print "<td class=\"$style\">$num</td>";
            }
            print "</tr>";
        }
        print "</table>";
        print "</div>";

        print "<div class=\"center_text\">";
        print "<h1>There are $odds odd numbers and $evens even numbers.</h1>";
        print "<h1>There are $odds % odd numbers and $evens of even numbers</h1>";
        print "</div>";
        ?>
</body>
</html>