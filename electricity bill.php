<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <table>
            <tr>
                <td>Enter the meter number :
                    <input type="text" name="num1" value="" placeholder="Enter meter number"></td>
            </tr>
            <tr>
                <td>Enter the number of units :
                    <input type="text" name="unit" value="" placeholder="Enter unit"></td>
            </tr>
            <tr>
                <td>Enter the category :
                    <select name="tariff">
                    <option>select</option>
                    <option>Rural</option>
                    <option>Residential</option>
                    <option>Commercial</option>
                    </select>
                </td>
            </tr>
            <tr>
             <td><input type="submit" name="submit" value="submit">
            </td>
            </tr>
        </table>
    </form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
    $num1=$_POST['num1'];
    $unit=$_POST['unit'];
    $tariff=$_POST['tariff'];
    if($tariff=="Rural")
        {
            if($unit>0&&$unit<=50)
            {
                $e=20;
                $price=(($unit*.25)+$e);
                echo"$price";
            }
            else if($unit>50&&$unit<=100)
            {
                $e=20;
                $price=(($unit*.55)+$e);   
            }
            else if($unit>100&&$unit<=150)
            {
                $e=20;
                $price=(($unit*.80)+$e);   
            }
            else if($unit>150&&$unit<=250)
            {
                $e=20;
                $price=(($unit*1.50)+$e);   
            }
             else if($unit>250&&$unit<=400)
            {
                $e=35;
                $price=(($unit*2)+$e);   
            }
            echo"Your Meter number is:".$num1;
            echo"<br>";
            echo"Extra charges are :".$e;
            echo"<br>";
            echo"Total $unit units of charges:".$price;
            echo"<br>";
        }
        if($tariff=="Residential")
        {
            if($unit>0&&$unit<=50)
            {
                $e=35;
                $price=(($unit*1.35)+$e);
                echo"$price";
            }
            else if($unit>50&&$unit<=100)
            {
                $e=35;
                $price=(($unit*2.15)+$e);   
            }
            else if($unit>100&&$unit<=150)
            {
                $e=35;
                $price=(($unit*3)+$e);   
            }
            else if($unit>150&&$unit<=250)
            {
                $e=35;
                $price=(($unit*3.5)+$e);   
            }
             else if($unit>250&&$unit<=400)
            {
                $e=35;
                $price=(($unit*4)+$e);   
            }
            else if($unit>400)
            {
                $e=35;
                $price=(($unit*6)+$e);
                echo"$price";   
            }
            echo"Your Meter number is:".$num1;
            echo"<br>";
            echo"Extra charges are :".$e;
            echo"<br>";
            echo"Total $unit units of charges:".$price;
            echo"<br>";
        }
        if($tariff=="Commercial")
        {
            if($unit>0&&$unit<=50)
            {
                $e=65;
                $price=(($unit*3)+$e);
                echo"$price";
            }
            else if($unit>50&&$unit<=100)
            {
                $e=65;
                $price=(($unit*4.5)+$e);   
            }
            else if($unit>100&&$unit<=150)
            {
                $e=65;
                $price=(($unit*5.5)+$e);   
            }
            else if($unit>150&&$unit<=250)
            {
                $e=65;
                $price=(($unit*6)+$e);   
            }
             else if($unit>250&&$unit<=400)
            {
                $e=65;
                $price=(($unit*7.2)+$e);   
            }
            else if($unit>400)
            {
                $e=65;
                $price=(($unit*9)+$e);
                echo"$price";   
            }
            echo"Your Meter number is:".$num1;
            echo"<br>";
            echo"Extra charges are :".$e;
            echo"<br>";
            echo"Total $unit units of charges:".$price;
            echo"<br>";
        }
}
?>