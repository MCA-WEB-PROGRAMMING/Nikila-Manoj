<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
    <?php
    $freedom_fighters=array("mahatma gandhi","jawaharlal nehru","lala lajpat roy","bhagat singh","subhash chandra bose");
    echo"array freedom_fighters";
    print_r($freedom_fighters);
    echo"<br>";
    echo"<br>";
    echo"<table border='2'style='margin-left: auto;margin-right: auto;margin-top:auto;border-collapse: collapse;'><tr><th>sl.no</th><th>Freedom Fighters</th></tr>";
    foreach($freedom_fighters as $key=>$value)
    {
        echo"<tr>";
        echo"<td>";
        echo"$key";
        echo"</td>";
        echo"<td>";
        echo"$value";
        echo"</td>";
        echo"</tr>";
    }
    echo"</table>";
    ?>
</body>
</html>