<?php
include('connect.php');
?>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Care Taker Register</title>
    <link rel="stylesheet" href="reg1.css">
        <script>
            function validateForm() {
               
                var name = document.forms[0]["name"].value;
                var email = document.forms[0]["email"].value;
                var tel = document.forms[0]["tel"].value;
                var loc = document.forms[0]["loc"].value;
                var age = document.forms[0]["age"].value;
                var ava = document.forms[0]["ava"].value;
                var hlt = document.forms[0]["hlt"].value;
                var sal = document.forms[0]["sal"].value;
    
                if (name === "" || email === "" || tel === "" || loc === "" || age === "" || ava === "" || hlt === "" || sal === "") {
                    alert("All fields must be filled out");
                    return false;
                }
    
                if (!/^[a-zA-Z ]+$/.test(name)) {
                    alert("Name should contain only letters and spaces");
                    return false;
                }
    
                if (!/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/.test(email)) {
                    alert("Invalid email address");
                    return false;
                }
    
                if (!/^\d{10}$/.test(tel)) {
                    alert("Invalid phone number");
                    return false;
                }
    
                // Add more specific validation for other fields if needed
    
                return true;
            }
        </script>
    
    </head>
    <body>
<div class="main">
    <h1 align="center">REGISTRATION FORM</h1>
    <form  class="container" onsubmit="return validateForm()" align="center" method="post">
        <div class="header">
        <p>Which type of care taker you are ??</p>
          <input type="radio" id="html" name="caretaker" value="Old People">
          <label for="Old People">OLD PEOPLE</label><br><br>
         <input type="radio" id="css" name="caretaker" value="Babies">
         <label for="Babies">BABIES</label><br>
            <br>
           Name: <input name="name" type="text" placeholder="enter your name" 
             ></input><br></br>
           Email:<input name="email"type="email" placeholder="enter your email" ></input><br></br>
           Phone Number:<input name="tel" type="tel" placeholder="enter your phone number"></input><br></br>
           Password:<input type="password" name="password" placeholder="enter your password"><br><br>
           Confirm Password:<input type="password" name="cpassword" placeholder="confirm your password"><br><br>
           Location:<input name="loc" type="text" placeholder="enter your working address" ></input><br></br>
           Age:<input name="age"type="number" placeholder="Age" ></input><br></br>
           Timings:<input name="ava" type="text" placeholder="enter the availability" ></input><br></br>
           Experience:<input name="exp" type="text" placeholder="enter your years of experience"><br><br>
           Available Time:<input name="avail" type="text" placeholder="enter your available time"><br><br>
           Special Skills:<input name="special" type="text" placeholder="enter special skills if any"><br><br>
           Photo:<input name="photo" type="file" placeholder="upload you photo"><br><br>
           Aadhar:<input name="aadhar" type="text" placeholder="enter your aadhar"><br><br>
           Aadhar Photo:<input type="file" name="aadharp" placeholder="upload you aadhar"><br><br>
           Prefered Age of Service:<input type="text" name="ages" placeholder="enter your prefered age of service"><br><br>
           Health Details:<input name="hlt" type="file" placeholder="upload health reports" ></input><br></br>
           Salary:<input name="sal" type="text" placeholder="enter salary" ></input><br></br>
           <input type="submit" value="SUBMIT" name="submit">
        </div>

    </form>
</div>
</body>
    
</html>
<?php
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $phone=$_POST['tel'];
    $type=$_POST['caretaker'];
    $cpass=$_POST['cpassword'];
    $loc=$_POST['loc'];
    $age=$_POST['age'];
    $exp=$_POST['exp'];
    $avail=$_POST['avail'];
    $spec=$_POST['special'];
    $photo=$_POST['photo'];
    $aadhar=$_POST['aadhar'];
    $ages=$_POST['ages'];
    $health=$_POST['hlt'];
    $sal=$_POST['sal'];
    $aadharp=$_POST['aadharp'];

    $select ="Select * from taker where name='$name' or email='$email'";
    $res=mysqli_query($con,$select);
    $count=mysqli_num_rows($res);
    if($count>0)
    {
    echo "<script>alert('This username or email is already present please enter another username')</script>";
    }
    else if($pass!=$cpass)
    {
        echo "<script>alert('Password and confirm password do not match')</script>";
    }
    else
    {
    $insert="insert into taker (typeofservice,name,email,phone,location,experience,password,availability,special,health,salary,photo,aadhar,age,preference,aadharno)
     values('$type','$name','$email','$phone','$loc','$exp','$pass','$avail','$spec','$health','$sal','$photo','$aadharp','$age','$ages','$aadhar') ";
     $result=mysqli_query($con,$insert);
    if($result)
    {
    echo "<script>alert('user registered successfully')</script>";
    echo "<script>window.open('home.php','_self')</script>";
    }
    else
    die(mysqli_error($con));
    }
}