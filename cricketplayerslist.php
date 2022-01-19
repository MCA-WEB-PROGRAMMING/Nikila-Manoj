<html>
    <body>
        <?php
        $player=array("Virat Kohli","Rohit Sharma","KL Rahul","Hardik Pandya","Dinesh Karthik","Hardik Pandya","MS Dhoni","Rishab Pant");
        echo"<table border='1'><tr><th>Player.NO</th><th>PLAYERS</th></tr>";
        foreach($player as $key=>$value)
            {
                echo"<tr><td>$key</td><td>$value</td></tr>";
            }
        echo"</table>";
        ?>
    </body>
</html>    
