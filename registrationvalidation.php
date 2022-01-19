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
        <table>
            <tr>
                <th>User Name:</th>
                <td><input type="text" name="username" value=""/></td>
            </tr>
            <tr>
                <th>GENDER</th>
                <td>
                Male <input type="radio" name="Gender" value="Male" />
                Female <input type="radio" name="Gender" value="Female" />
                </td>
            </tr>
            <tr>
                <th>Address:</th>
                <td><input type="text" name="address" value=""></td>
            </tr>
            <tr>
                <th>Age:</th>
                <td><input type="number" name="age" value=""></td>
            </tr>
            <tr>
            <th>Phone:</th>
                <td><input type="number" name="phone" value=""></td>
            </tr>
            <tr>
                <th>Email:</th>
                <td><input type="text" name="email" value=""></td>
            </tr>
            <tr>
                <th>Password:</th>
                <td><input type="password" name="password" value=""></td>
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
    $username=$_POST['username'];
    $password=$_POST['password'];
    $age=$_POST['age'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $namecheck=preg_match('@[A-Z]@',$username);
    $uppercase=preg_match('@[A-Z]@',$password);
    $lowercase=preg_match('@[a-z]@',$password);
    $number=preg_match('@[0-9]@',$password);
    $phonecheck= preg_match('@[6-9]\d{9}@', $phone);
    if($username=="")
    {
        echo("Please Enter the username!");
        echo"<br>";
    }
    elseif(!$namecheck)
    {
        echo("Enter valid name with letters!");
        echo"<br>";
    }
    if($age=="")
    {
        echo("Please Enter your age!");
        echo"<br>";
    }
    if($phone=="")
    {
        echo("Please Enter a valid phone number!");
        echo"<br>";
    }
    elseif(!$phonecheck)
    {
        echo("Phone number must contain 10 digits & only start with 6/7/8/9");
        echo"<br>";
    }
    if($email=="")
    {
        echo("Please Enter your email id!");
        echo"<br>";
    }
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        echo("Invalid email format!.Please enter a valid email");
        echo"<br>";
    }
    if($password=="" && strlen($password)<8)
    {
        echo("Please enter a password");
        echo"<br>";
    }
    elseif(!$uppercase || !$lowercase || !$number)
    {
        echo("Please enter a valid password!");
        echo"<br>";
    }   
}
?>
