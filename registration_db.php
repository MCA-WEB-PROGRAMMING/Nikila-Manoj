<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>REGISTRATION FORM</h3>
    <form name="f1" method="POST">
        <table name="table1">
            <tr>
                <th>Name:</th>
                <td><input type="text" name="Name" value=""/></td>
            </tr>
            <tr>
                <th>Gender:</th>
                <td>
                 <input type="text" name="Gender" value="" /></td>
            </tr>
            <tr>
                <th>Age:</th>
                <td><input type="number" name="Age" value=""></td>
            </tr>
            <tr>
            <th>Phone:</th>
                <td><input type="tel" name="Phone" value=""></td>
            </tr>
            <tr>
                <th>Email:</th>
                <td><input type="text" name="Email" value=""></td>
            </tr>
            <tr>
                <th>Password:</th>
                <td><input type="Password" name="Password" value=""></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
    $Name=$_POST['Name'];
    $Gender=$_POST['Gender'];
    $Age=$_POST['Age'];
    $Phone=$_POST['Phone'];
    $Email=$_POST['Email'];
    $Password=$_POST['Password'];
    $namecheck=preg_match('@[A-Z]@',$Name);
    $uppercase=preg_match('@[A-Z]@',$Password);
    $lowercase=preg_match('@[a-z]@',$Password);
    $number=preg_match('@[0-9]@',$Password);
    $Phonecheck= preg_match('@[6-9]\d{9}@', $Phone);
    $conn=mysqli_connect("localhost","root","","form_db");
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
    if($Name=="")
    {
        echo("Please Enter the username!");
        echo"<br>";
    }
    elseif(!$namecheck)
    {
        echo("Enter valid name with letters!");
        echo"<br>";
    }
    if($Gender=="")
    {
        echo("Please Enter your Gender!");
        echo"<br>";
    }
    if($Age=="")
    {
        echo("Please Enter your Age!");
        echo"<br>";
    }
    if($Phone=="")
    {
        echo("Please Enter a valid Phone number!");
        echo"<br>";
    }
    elseif(!$Phonecheck)
    {
        echo("Phone number must contain 10 digits & only start with 6/7/8/9");
        echo"<br>";
    }
    if($Email=="")
    {
        echo("Please Enter your Email id!");
        echo"<br>";
    }
    
    if (!filter_var($Email, FILTER_VALIDATE_EMAIL))
    {
        echo("Invalid Email format!.Please enter a valid Email");
        echo"<br>";
    }
    if($Password=="" && strlen($Password)<8)
    {
        echo("Please enter a Password");
        echo"<br>";
    }
    elseif(!$uppercase || !$lowercase || !$number)
    {
        echo("Please enter a valid Password!");
        echo"<br>";
    } 
    $query="INSERT INTO student_details(Name,Gender,Age,Phone,Email,Password)VALUES('{$Name}','{$Gender}','{$Age}','{$Phone}','{$Email}','{$Password}')";
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
    $search="SELECT * FROM student_details";
    $data=mysqli_query($conn,$search);
    echo '<table border="1"><th>Name</th><th>Gender</th><th>Age</th><th>Phone</th><th>Email</th><th>Password</th>';
    while ($res=mysqli_fetch_assoc($data))
    {
    echo '<tr>';
    echo '<td>';
        echo $res['Name'];
     echo '</td>';
     echo '<td>';
        echo $res['Gender'];
    echo '</td>';
    echo '<td>'; 
        echo $res['Age'];
    echo '</td>';
    echo '<td>';    
        echo $res['Phone'];
    echo '</td>';
    echo '<td>';
        echo $res['Email'];
    echo '</td>';
    echo '<td>';
        echo $res['Password'];
    echo '</td>';
    echo '<tr>';
    }
}
?>