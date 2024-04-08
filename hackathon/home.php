<?php
include('connect.php');
include('commonfunc.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="abc.css">
</head>
<body>
    <div class="d">
        <nav class="e">
          <ul class="f">
            <li><img class="he" src="logo.png"></img></li>
            <li class="g"><h4><a class="b" href="about.php">About Us</a></li></h4>
            <li class="g"><h4><a class="b" href="services.php">Services</a></li></h4>
            <li class="g"><h4><a class="b" href='contact.php'>Contact Us</a></li></h4>
            <li class="g"><h4><a class="b" href='conditions.php'>Conditions</a></li></h4>
            <li class="g"><h4><a class="b" href='feedback.php'>Rating & Review</a></li></h4>
            <li class="g"><h4><a class="b" href='home.php'>Sign In</a></li></h4>
            <li class="g"><h4><a class="b" href="signup.php">Sign Up</a></li></h4>
            <br>
          </ul>
          <br/><br><br>
        </nav>
        <div class="p">
          <h1 class="q">CARE COMPANION</h1>
        </div>
        <div class="ab">
          <div align="center" class="xy mn1" method="post">
            <h4>Are you a Care Recipient!!</h4><br>
            <p>Login Here!</p><br>
            <form align="center" method="post">
              <label for="a">Username : </label>
              <input type="text" name="name1" placeholder="enter your username"/><br/><br/>
              <label for="b">Password : </label>
              <input type="password" name="pass1" placeholder="enter your password"/><br/><br/><br>
              <input type="submit" value="SUBMIT" name="submit1"/>
            </form><br/>
            <p> Don't have an Account <a href='carerecreg.php'>Register here</a></p>
          </div>
          <div align="center" class="xy mn">
          <h4>Are you a Care Taker!!</h4><br>
            <p>Login Here!</p><br>
            <form align="center" method="post">
              <label for="a">Username : </label>
              <input type="text" name="name2" placeholder="enter your username"/><br/><br/>
              <label for="b">Password : </label>
              <input type="password" pass="pass2" placeholder="enter your password"/><br/><br/><br>
              <input type="submit" value="SUBMIT" name="submit2"/>
            </form><br/>
            <p> Don't have an Account <a href='register.php'>Register here</a></p>
          </div>
        </div>
      </div>
</body>
</html>
<?php
if(isset($_POST['submit1']))
{
    $name1=$_POST['name1'];
    $pass1=$_POST['pass1'];
    $select ="Select * from user where name='$name1' and password='$pass1'";
    $res=mysqli_query($con,$select);
    $count=mysqli_num_rows($res);
    if($count>0)
    {
    echo "<script>alert('Logged in Successfully')</script>";
    echo "<script>window.open('home2.php','_self')</script>";
    }
    else 
    {
        echo "<script>alert('Invalid Credintials')</script>";
    }
}
if(isset($_POST['submit2']))
{
  $name2=$_POST['name1'];
    $pass2=$_POST['pass1'];
    $select ="Select * from taker where name='$name2' and password='$pass2'";
    $res=mysqli_query($con,$select);
    $count=mysqli_num_rows($res);
    if($count>0)
    {
    echo "<script>alert('Logged in Successfully')</script>";
    echo "<script>window.open('home1.php','_self')</script>";
    }
    else 
    {
        echo "<script>alert('Invalid Credintials')</script>";
    }
}

?>