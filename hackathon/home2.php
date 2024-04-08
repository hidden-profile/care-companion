<?php
include('connect.php');
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
            <li class="g"><h4><a class="b" href="requirements.php">Requirements</a></li></h4>
            <li class="g"><h4><a href="profile1.php" class="w"><i class="fa fa-user-circle fa-9x" aria-hidden="true"></i></a></li></h4>
            <br>
          </ul>
          <br/><br><br>
        </nav>
        <div class="p">
          <h1 class="q">CARE COMPANION</h1>
        </div>
        <div class="ab">
          <div align="center" class="xy mn1">
            <h4>Do you need child care Assistance ??</h4><br>
            <p> Caretakers provide essential emotional support, nurturing, and guidance to children, helping them develop strong bonds and a sense of security.So what are you waiting for Come lets Start</p>
            <button class="mi">Children Care Recepient</button>
          </div>
          <div align="center" class="xy mn">
          <h4>Do you need elder care Assistance ??</h4><br>
            <p>Caretakers can alleviate some of the burdens of aging, enhancing the overall well-being of older individuals by offering companionship, safety, and peace of mind to both the elderly and their families</p>
            <button class="mi">Elder Care Recepient</button>
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
    $select ="select * from user where username='$username'";
    $result=mysqli_query($con,$select);
    $count=mysqli_num_rows($result);
    $row=mysqli_fetch_assoc($result);
    if($count>0)
    {
        echo "<script>alert('Logged in successfully')</script>";
        echo "<script>window.open('home.php','_self')</script>";
    }
    else{
          echo "<script>alert('Invalid Credentials')</script>";
        }
}
?>