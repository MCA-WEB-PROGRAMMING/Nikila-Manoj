<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOCUMENT</title>
    <style>
    tr,td{
        padding:1em;
    }
    </style>
</head>
<body  style="background-color: cyan;">
    <center>
    <h2>EMPLOYEE DETAILS MANAGEMENT SYSTEM</h2>
    <form name="form1" method="POST">
        <table name="t1">
            <tr>
                <th>Employee_id:</th>
                <td><input type="text" name="Employee_id" value=""/></td>
            </tr>
            <tr>
                <th>Employee_name:</th>
                <td>
                 <input type="text" name="Employee_name" value="" /></td>
            </tr>
            <tr>
                <th>Job_name:</th>
                <td><input type="text" name="Job_name" value=""></td>
            </tr>
            <tr>
            <th>Manager_id:</th>
                <td><input type="tel" name="Manager_id" value=""></td>
            </tr>
            <tr>
                <th>Salary:</th>
                <td><input type="text" name="Salary" value=""></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit"></td>
            </tr>
        </table>
    </form>
        <h2>SALARY DETAILS</h2>
    <form name="form2" method="POST">
        <table name="t2">
            <tr>
                <th>Click here to view Employees with pay greater than 35000:</th>
               
                <td><input type="submit" name="empsearch" value="Search"></td>
            </tr>
        </table>
    </form>
</center>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
    $Employee_id=$_POST['Employee_id'];
    $Employee_name=$_POST['Employee_name'];
    $Job_name=$_POST['Job_name'];
    $Manager_id=$_POST['Manager_id'];
    $Salary=$_POST['Salary'];
    $conn=mysqli_connect("localhost","root","","company");
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
    $query="INSERT INTO emp(Employee_id,Employee_name,Job_name,Manager_id,Salary)VALUES('{$Employee_id}','{$Employee_name}','{$Job_name}','{$Manager_id}','{$Salary}')";
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
    if(isset($_POST['empsearch']))
    {
        $con=mysqli_connect("localhost","root","","company");
    $search="SELECT Employee_name,Salary FROM emp WHERE Salary>35000";
    $data=mysqli_query($con,$search);
    echo '<table border=1 style="margin-left:auto;margin-right:auto;margin-top:3em;border-collapse:collapse;"><th>Employee_id</th><th>Salary</th>';
    while ($res=mysqli_fetch_assoc($data))
    {
    echo '<tr>';
     echo '<td>';
        echo $res['Employee_name'];
    echo '</td>';
    echo '<td>';
        echo $res['Salary'];
    echo '</td>';
    echo '<tr>';
    }
    echo'</table>';
}
?>