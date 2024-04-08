<?php
include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Care Taker Register</title>
    <link rel="stylesheet" href="reg1.css">
        <style>
            button{
                margin-left:100px;
            }
        </style>
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
    <form   class="container" onsubmit="return validateForm()" method="post" align="center" >
        <div class="header">
        <p>You want a care taker for??</p>
          <input type="radio" id="html" name="caretaker" value="Old People">
          <label for="Old People">OLD PEOPLE</label><br><br>
         <input type="radio" id="css" name="caretaker" value="Babies">
         <label for="Babies">BABIES</label><br>
            <br>
           Username: <input name="name" type="text" placeholder="enter your name" 
             ></input><br></br>
             Password:<input name="password" type="password" placeholder="enter your password"></input><br><br>
             Confirm Password:<input name="cpassword" type="password" placeholder="confirm your password"></input><br><br>
           Email:<input name="email"type="email" placeholder="enter your email" ></input><br></br>
           Phone Number:<input name="tel" type="tel" placeholder="enter your phone number"></input><br></br>
        
           Location:<input name="loc" type="text" placeholder="enter your working address"></input><br></br>
        
           Age:<input name="age"type="number" placeholder="Age" value="enter your Age"></input><br></br>
           Timings:<input name="ava" type="text" placeholder="enter the availability"></input><br></br>
           
           Health Issues If Any:<input name="hlt" type="text" placeholder="please fill nil if no health issues"></input><br></br>
           Salary:<input name="sal" type="text" placeholder="enter salary"></input><br></br>
     
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
    $pass=$_POST['password'];
    $cpass=$_POST['cpassword'];
    $email=$_POST['email'];
    $type=$_POST['caretaker'];
    $phone=$_POST['tel'];
    $loc=$_POST['loc'];
    $age=$_POST['age'];
    $tim=$_POST['ava'];
    $health=$_POST['hlt'];
    $sal=$_POST['sal'];

    $select ="Select * from user where name='$name' or email='$email'";
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
    $insert="insert into user (typeofservice,name,email,phone,location,age,health,salary,password)
     values('$type','$name','$email','$phone','$loc','$age','$health','$sal','$pass') ";
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
?>