<?php
	require_once('auth.php');
?>



<!DOCTYPE html>
<html>
<head>
<title>NOTICE</title>
<style>
body{
    background-image: url("traffic-signs.jpg");
}
h3,label {
text-align:center;
font-family:'Raleway',sans-serif;
color:#006400
}
h2 {
font-family:'Raleway',sans-serif
}
input {
width:100%;
margin-bottom:20px;
padding:5px;
height:30px;
box-shadow:1px 1px 12px gray;
border-radius:3px;
border:none
}
textarea {
width:100%;
height:300px;
margin-top:10px;
padding:5px;
box-shadow:1px 1px 12px gray;
border-radius:3px
}
#send {
width:103%;
height:45px;
margin-top:40px;
border-radius:3px;
background-color:#cd853f;
border:1px solid #fff;
color:#fff;
font-family:'Raleway',sans-serif;
font-size:18px
}
div#feedback {
text-align:center;
height:520px;
width:900px;
padding:20px 25px 20px 15px;
background-color:#f3f3f3;
border-radius:3px;
border:1px solid #cd853f;
font-family:'Raleway',sans-serif;
float:left
}
.container {
width:960px;
margin:40px auto;
margin-top:75px;
}
header{
    position: fixed;
    width:100%;
    top: 0px;
    opacity: 0.9;
}
footer{
	width:100%;
}
#nav{
    width:100%;
    height: 70px;
    background-image: url("img2.jpg");
	background-size: cover;
	margin-left:-9px;
}
#nav_wrapper{
    height: 40px;
    width:700px;
    background-color: rgba(7, 56, 68, 0.73);
    margin-left: auto;
    margin-right:auto;
    margin-top:5px;
    opacity: 0.7;
    filter :alpha(opacity=70);
}
#nav_wrapper ul li{
    list-style:none;
    display: inline;
	font-weight: bold;
	margin-top:-10px;
    padding: 10px;

}
#nav_wrapper ul{
	margin-top:-45px;
}
#nav_wrapper a{
    font-family: Arial, Helvetica, sansserif-;
    font-size: 20px;
    color:white;
    text-decoration: none;
    padding: 5px;
}#nav_wrapper ul li:hover{
    background: red;
    transition: all 0.45s;
    opacity: 0.5;
    filter:alpha(opacity=90);
}
#nav_wrapper ul li.a{
	margin-left: 10px;


}
#nav_wrapper ul li.b{
    margin-left: 250px;

}
#me{
    width:100%;
    bottom:0px;
	opacity: 0.9;
	position:fixed;
	
}

#foot{
    width:100%;
    height:50px;
    background-image: url("img2.jpg");
    background-size: cover;
    
}
#foot p{
    font-family: Arial, Helvetica, sansserif-;
    font-size: 20px;
    padding-top: 20px;
    color:white;
    text-align: center;
}
#foot p a{
    
    color:#47F180;
}
#foot p a:hover{
    color:white;
    background-color: red;;
    transition: all 0.45s;
    opacity: 0.5;
}
</style>
</head>

<body>
<header>
		<div id="nav"><br>
			<div id="nav_wrapper"><br><br><br>
				<ul>
					<li class="a"><a href="home.php" style="font-size:20">Regional Transport Office</a></li>
					<li class="b"><a href="logout.php">logout</a>
				</ul>
            </div>
            
		</div>
	</header>
<div class="container">
<!-- Feedback Form Starts Here -->
<div id="feedback">
<!-- Heading Of The Form -->
<div class="head">
<h3>NOTICE</h3>

</div>
<!-- Feedback Form -->
<form action="mail1.php" id="form" method="post" name="form">
<label>REGISTRATION NUMBER</label>

<input type="text" class="demoInputBox" name="user" value="<?php if(isset($_POST['user'])) echo $_POST['user']; ?>">

<label>Message</label>
<textarea name="bcd" cols="50" rows="50"placeholder="Type notice here..."></textarea>

<input type="submit" name="register-user" value="send" id="dend">

</form>
</div>
</div>
</body>
<footer id="me">
<div id="foot">
    <p>Developed by<a href="#"><b> PRINCERAJ</b></a></p>
</div>
</footer>
</html>
