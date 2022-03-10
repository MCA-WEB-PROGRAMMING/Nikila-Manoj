<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Document</title>
    <style>
        th,tr{
            padding:1em;
            
        }
        </style>
</head>
<body style="background-color: bisque;">
    <center>
    <h2>WATER BILL</h2>
    <form name=form method=POST>
    <table>
        <tr>
            <th>Enter the meter number:</th>
            <td><input type=text name= num1 value=""></td>
        </tr>
        <tr>
            <th>Enter the amount of water used:</th>
            <td><input type=text name= slab value=""></td>
        </tr>
        <tr>
            <th>Select the tariff:</th>
            <td><select name=tariff>
                <option>select</option>
                <option >Rural</option>
                <option >Residential</option>
                <option >Commercial</option>
            </select></td>
        </tr>
        <tr align="center">
            <td colspan=2 ><input type=submit name=submit value=sumbit></td>
    </table>
    </form>
    </center>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
    $num1=$_POST['num1'];
    $slab=$_POST['slab'];
    $tariff=$_POST['tariff'];
   
    if($tariff=='Rural')
    {
        if($slab>0&&$slab<=15)
        {
            $e=2;
            $n=3;
            $price=($slab*$n);
            echo"$price";
        }
        elseif($slab>=16&&$slab<=30)
        {
            $e=4;
            $n=6;
            $price=($slab*$n);
        }
        elseif($slab>=31&&$slab<=60)
        {
            $e=6;
            $n=12;
            $price=($slab*$n);
        }
        elseif($slab>60)
        {
            $e=8;
            $n=24;
            $price=($slab*$n);
            echo"$price";
        }
        echo"<center>";
        echo"The meter number is:".$num1;
        echo"<br>";
        echo"The existing rate:".$e;
        echo"<br>";
        echo"The new rate:".$n;
        echo"<br>";
        echo"price of $slab kilo litre amount of water :".$price;
    }
    if($tariff=='Residential')
    {
        if($slab>0&&$slab<=15)
        {
            $e=2;
            $n=3;
            $price=($slab*$n);
            echo"$price";
        }
        elseif($slab>=16&&$slab<=30)
        {
            $e=4;
            $n=6;
            $price=($slab*$n);
        }
        elseif($slab>=31&&$slab<=60)
        {
            $e=6;
            $n=12;
            $price=($slab*$n);
        }
        elseif($slab>60)
        {
            $e=8;
            $n=24;
            $price=($slab*$n);
            echo"$price";
        }
        echo"<center>";
        echo"The meter number is:".$num1;
        echo"<br>";
        echo"The existing rate:".$e;
        echo"<br>";
        echo"The new rate:".$n;
        echo"<br>";
        echo"Price of $slab kilo litre amount of water :".$price;
    }
    if($tariff=='Commercial')
    {
        if($slab>0&&$slab<=15)
        {
            $e=2;
            $n=3;
            $price=($slab*$n);
            echo"$price";
        }
        elseif($slab>=16&&$slab<=30)
        {
            $e=4;
            $n=6;
            $price=($slab*$n);
        }
        elseif($slab>=31&&$slab<=60)
        {
            $e=6;
            $n=12;
            $price=($slab*$n);
        }
        elseif($slab>60)
        {
            $e=8;
            $n=24;
            $price=($slab*$n);
            echo"$price";
        }
        echo"<center>";
        echo"The meter number is:".$num1;
        echo"<br>";
        echo"The existing rate:".$e;
        echo"<br>";
        echo"The new rate:".$n;
        echo"<br>";
        echo"price of $slab kilo litre amount of water :".$price;
    }
}
?>