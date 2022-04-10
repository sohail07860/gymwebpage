<html>
<head>
<title>join</title>
<link rel="stylesheet" type="text/css" href="frm.css">
<script>
function fun(){
var a=confirm("We have received your iformation, We will contact yiu soon Or else you can buy the membership now");
if(a){
alert("go to BUY MEMBERSHIP to start from now");
}
else{
alert("We will contact you very soon");
}}
</script>
</head>
<body>
<div class="main">
<nav>
<img src="logo1.jpg" width="200" height="100">
<ul> 
<li><a href="sample.php">HOME</a></li>
<li><a href="gallery.php">GALLERY</a></li>
<li><a href="guide.php">GUIDENCE</a></li>
<li><a href="contact.php">CONTACT US</a><li>
<li><a href="#">ENROLL NOW</a>
<ul>
<li><a href="form.php">REGISTERATION</a></li>
<li><a href="member.php">MEMBERSHIP</a></li>
</ul>
</li>
</ul>
</nav
<i><h1>Work Now<br>&emsp;&emsp;Shine Later</h1></i>
</div>
 <div class="next">
<article style="width:300px; border:4px solid gray; pading:10px; border-radius:10px; margin:10px; background-color:grey;" > 
<form action = "member.php" method= "POST" id= "reg">

        <label for= "name"> Name: </label>
        <input type= "text" name= "name">
        <br><br>
        <label for= "email"> Email: </label>
        <input type= "email" name= "email">
        <br><br>
        <label for= "contact"> Contact: </label>
        <input type= "contact" name= "contact">
        <br><br>
        <input type= "Submit" value="submit" name= "subReg" id= "subBtnn">
        </form>

</article>

</div>
<div class="second">
<h3><u>Club Facilities:</u></h3>
<p>-Group Exercise&emsp;&emsp;&emsp;&emsp;-Cardio Area<br>
-Cycle Studio&emsp;&emsp;&emsp;&emsp;&emsp;-Free Weights<br>
-Internet Station&emsp;&emsp;&emsp;&emsp;-Shower area<br>
-Steam Room&emsp;&emsp;&emsp;&emsp;&emsp;-Towel Service<br>
-Personal Traning&emsp;&emsp;&emsp;&emsp;-Yoga
</p>
</div>
<hr>
<br>
<div class="down">
<i>we will contact you soon, after getting your information to solve your other queries and for process</i><br><br>
<b>OR</b><br><br><i> You can also join now by paying the reqired fees from the given link:</i>
<br><br>
<a href="member.php"><h6><u>Buy The Membership with exited ofers:</u></h6></a>
</div>
<?php
$s_name = "localhost";
$u_name = "root";
$u_pass = "";
$db= "project";
$link= new mysqli($s_name , $u_name , $u_pass , $db);

?>
</body>
</html>