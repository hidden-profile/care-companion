<?php 
include('connect.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>FeedbacK</title>
<!-- //custom-theme -->
<link href="feedbackform.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body class="agileits_w3layouts" style="background-color:lightcoral;">
    <h1 class="agile_head text-center">Feedback Form</h1>
    <div class="w3layouts_main wrap">
	  <h3  align="center">Please help us to serve you better by taking a couple of minutes. </h3>
	    <form method="post" class="agile_form">
		  <h2>How satisfied were you with our Service?</h2>
			 <ul class="agile_info_select">
				 <li><input type="radio" name="view" value="excellent" id="excellent" required> 
				 	  <label for="excellent">excellent</label>
				      <div class="check w3"></div>
				 </li>
				 <li><input type="radio" name="view" value="good" id="good"> 
					  <label for="good"> good</label>
				      <div class="check w3ls"></div>
				 </li>
				 <li><input type="radio" name="view" value="neutral" id="neutral">
					 <label for="neutral">neutral</label>
				     <div class="check wthree"></div>
				 </li>
				 <li><input type="radio" name="view" value="poor" id="poor"> 
					  <label for="poor">poor</label>
				      <div class="check w3_agileits"></div>
				 </li>
			 </ul>	  
			<h2>If you have specific feedback, please write to us...</h2>
			<textarea placeholder="Additional comments" class="w3l_summary" name="comments" required=""></textarea>
			<input type="text" placeholder="Your Name " name="name"  required=""/>
            <input type="text" placeholder="Caretaker Name" name="name1"  required=""/>
			<input type="email" placeholder="Your Email" name="email"required=""/>
			<input type="text" placeholder="Your Number " name="num" required="" /><br>
			<center><input type="submit" value="submit Feedback" class="agileinfo" name="submit"/></center>
	  </form>
	</div>
	</div>
</body>
/html>
<?php
if(isset($_POST['submit']))
{
  $name=$_POST['name'];
  $email=$_POST['email'];
  $name1=$_POST['name1'];
  $num=$_POST['num'];
  $feed=$_POST['comments'];
  $rating=$_POST['view'];
  $insert="insert into feedback (username,password,feedback,rating,taker)
  values('$name','$num','$feed','$rating','$name1') ";
  $result=mysqli_query($con,$insert);
 if($result)
 {
 echo "<script>alert('Feedback Submitted successfully successfully')</script>";
 echo "<script>window.open('home2.php','_self')</script>";
 }
 else
 die(mysqli_error($con));
 }
?>