<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
.e
{
  background-color:lightslategray;
}
body{
    background-color:  #E6E6FA;
}
.abc
{
  list-style-type:none;
  display:flex;
  /* margin-top:200px; */
  align-items:center;
  justify-content: center;
  margin-right:100px;
  height:100%;
}
.ab
{
  min-height:70vh;
}
.xy
{
   align-items:center;
  display:inline-block;
  text-align:center;
  padding:10px;
  align-items:center; 
  width:35%;
  height:60vh;
  margin-top:20px;
  margin-left:60px;
  margin-right:60px;
}
.mn
{
  background-color:yellow;
}
.mn1
{
  background-color:aqua;
}
nav ul li a
{
    text-decoration:none;
    color:azure;
}
nav ul li{
    list-style-type:none;
    display:inline-block;
    margin-right:70px;
    min-height:10px;
}
nav
{
  height:60px;
  align-items:center;
  margin-top:0px;
}
nav ul{
  align-items:center;
}
.q
{
  text-align:center;
}
.he
{
  width:70px;
  height:50px;
  display:block;
  margin-left: auto;
margin-right: auto;
}
.mi
{
  margin-top:70px;
  background-color:deepskyblue;
}
.o 
{
  text-align:center;
  color:azure;
  margin:8px;
}
.r 
{
  margin-left:20px;
  margin-right:20px;
}
.d 
{
  background-color:#61dafb;
}
input[type=submit]
{
  background-color: #61dafb;
  border:0;
}
.c 
{
  width:100%;
  height:190px;
}
.i 
{
  margin-top:2px;
  color:azure;
}
.t input[type="submit"]
{
  color:white;
  background-color:red;
}
/* Apply styles to the form container */
.container {
    max-width: 400px;
    margin-top: 100px;
    padding: 20px;
    background-color: #f2f2f2;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-left:500px;
}

/* Style the input fields and select box */
input[type="text"],
select {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
    font-size: 16px;
}

/* Style the submit button */
input[type="submit"] {
    background-color: #007BFF;
    color: #fff;
    border: none;
    border-radius: 3px;
    padding: 10px 20px;
    font-size: 18px;
    cursor: pointer;
    margin-left:150px;
}

/* Style the submit button on hover */
input[type="submit"]:hover {
    background-color: #0056b3;
}

/* Add some spacing between elements */
br {
    line-height: 20px;
}

        </style>
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
            <li class="g"><h4><a class="b" href="signup.php">Sign Up</a></li></h4>
            <li class="g"><h4><a href="profile.php" class="w"><i class="fa fa-user-circle fa-9x" aria-hidden="true"></i></a></li></h4>
                  </ul>
              <br/>
            </nav>
            </div>
            <div>
    
                <form action="card.html" class="container">
                    CITY:<input type="text" placeholder="enter your location (city)"><br><br>
                    Availability:<select>
                        <option value=""></option>
                        <option value="day">DAY</option>
                        <option value="week">WEEk</option>
                        <option value="Month">MONTH</option>
                    </select><br><br>
                    Salary:<input type="text" placeholder="enter salary you want to give"><br><br>
                    <input type="submit" value="submit">
                </form>
            </div>
    </body>
</html>