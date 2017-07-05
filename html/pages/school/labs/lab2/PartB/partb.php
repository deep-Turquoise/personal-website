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
            $org_num = $num;
            $delay = 0.1;
            for($x = 0; $x < 10; ++$x) {
                print "<tr>";
                for($y = 0; $y < 10; ++$y) {
                    $delay += 0.07;
                    $img = "notch.png";
                    if($num > 0) { $img = "circle.png"; $num -= 1; }

                    print "<td><img src=\"$img\" style=\"
                            animation: fadein 1200ms;
                            animation-delay: " . $delay . "s;
                            -moz-animation: fadein 1200ms; /* Firefox */
                            -moz-animation-delay: " . $delay . "s;
                            -webkit-animation: fadein 1200ms; /* Safari and Chrome */
                            -webkit-animation-delay: " . $delay . "s;
                            -o-animation: fadein 3200ms; /* Opera */
                            opacity: 0;
                            animation-fill-mode: forwards;
                            \"</td>";
                }
                print "</tr>";
            }
        print "</table>";
        print "</div>";

        print "<div class=\"center_text\">";
        print "<h1>The number is $org_num</h1>";
        print "</div>";
        ?>
</body>
</html>