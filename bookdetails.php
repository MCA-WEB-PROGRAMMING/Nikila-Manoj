<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIBRARY</title>
    <style>
    tr,td{
        padding:1em;
    }
    </style>
</head>
<body  style="background-color: bisque;">
    <center>
    <h2>BOOK MANAGEMENT SYSTEM</h2>
    <form name="form1" method="POST">
        <table name="t1">
            <tr>
                <th>Accession number:</th>
                <td><input type="text" name="Accession_number" value=""/></td>
            </tr>
            <tr>
                <th>Title:</th>
                <td>
                 <input type="text" name="Title" value="" /></td>
            </tr>
            <tr>
                <th>Author:</th>
                <td><input type="text" name="Author" value=""></td>
            </tr>
            <tr>
            <th>Edition:</th>
                <td><input type="tel" name="Edition" value=""></td>
            </tr>
            <tr>
                <th>Publisher:</th>
                <td><input type="text" name="Publisher" value=""></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit"></td>
            </tr>
        </table>
    </form>
        <h2>SEARCH A BOOK</h2>
    <form name="form2" method="POST">
        <table name="t2">
            <tr>
                <th>Search:</th>
                <td><input type="text" name="Booktitle" value="" placeholder="Enter the title of the book"></td>
                <td><input type="submit" name="titlesearch" value="Search"></td>
            </tr>
        </table>
    </form>
</center>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
    $Accession_number=$_POST['Accession_number'];
    $Title=$_POST['Title'];
    $Author=$_POST['Author'];
    $Edition=$_POST['Edition'];
    $Publisher=$_POST['Publisher'];
    $conn=mysqli_connect("localhost","root","","nikhila");
    if($conn)
    {
        echo("Sucessfully connected");
        echo"<br>";
    }
    else
    {
        echo("error");
        echo"<br>";
    }
    $query="INSERT INTO library(Accession_number,Title,Author,Edition,Publisher)VALUES('{$Accession_number}','{$Title}','{$Author}','{$Edition}','{$Publisher}')";
    if(mysqli_query($conn,$query))
    {
        echo("Sucessfully inserted");
        echo"<br>";
    }
    else
    {
        echo("Attempt failed");
        echo"<br>";
    }
    }
    if(isset($_POST['titlesearch']))
    {
        $con=mysqli_connect("localhost","root","","nikhila");
        $Booktitle=$_POST['Booktitle']; 
    $search="SELECT * FROM library WHERE Title LIKE'%$Booktitle%'";
    $book=mysqli_query($con,$search);
    echo '<table border=1 style="margin-left:auto;margin-right:auto;margin-top:3em;border-collapse:collapse;"><th>Accession_number</th><th>Title</th><th>Author</th><th>Edition</th><th>Publisher</th>';
    while ($res=mysqli_fetch_assoc($book))
    {
    echo '<tr>';
    echo '<td>';
        echo $res['Accession_number'];
     echo '</td>';
     echo '<td>';
        echo $res['Title'];
    echo '</td>';
    echo '<td>'; 
        echo $res['Author'];
    echo '</td>';
    echo '<td>';    
        echo $res['Edition'];
    echo '</td>';
    echo '<td>';
        echo $res['Publisher'];
    echo '</td>';
    echo '<tr>';
    }
    echo'</table>';
}
?>