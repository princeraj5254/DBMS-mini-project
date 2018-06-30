<?php
	require_once('auth.php');
?>
<?php
if(!empty($_POST["register-user"])) {
	/* Form Required Field Validation */
	foreach($_POST as $key=>$value) {
		if(empty($_POST[$key])) {
		$error_message = "All Fields are required";
		break;
		}
	}

	/* Email Validation */
	if(!isset($error_message)) {
		if (!filter_var($_POST["userEmail"], FILTER_VALIDATE_EMAIL)) {
		$error_message = "Invalid Email Address";
		}
	}

	/* Validation to check if gender is selected
	if(!isset($error_message)) {
	if(!isset($_POST["gender"])) {
	$error_message = " All Fields are required";
	}
	}*/
	
	/* Validation to check if Terms and Conditions are accepted */
	if(!isset($error_message)) {
		if(!isset($_POST["terms"])) {
		$error_message = "Accept Terms and Conditions to Register";
		}
	}

	if(!isset($error_message)) {
		require_once("dbcontroller.php");
		$a = mysqli_real_escape_string($conn, $_POST["abcd"]);
		$b = mysqli_real_escape_string($conn, $_POST["firstName"]);
		$c = mysqli_real_escape_string($conn, $_POST["lastName"] );
		$d = mysqli_real_escape_string($conn, $_POST["bbcd"]);
		$e = mysqli_real_escape_string($conn, $_POST["cbcd"]);
        $f = mysqli_real_escape_string($conn, $_POST["dbcd"]);
        $g = mysqli_real_escape_string($conn, $_POST["ebcd"]);
        $h = mysqli_real_escape_string($conn, $_POST["fbcd"]);
		$i = mysqli_real_escape_string($conn, $_POST["gbcd"]);
		$o = mysqli_real_escape_string($conn, $_POST["kbcd"]);
        $j = mysqli_real_escape_string($conn, $_POST["hbcd"]);
        $k = mysqli_real_escape_string($conn, $_POST["ibcd"]);
        $l = mysqli_real_escape_string($conn, $_POST["userEmail"]);
		$m = mysqli_real_escape_string($conn, $_POST["jbcd"]);
	

	
	
	
		$query = "INSERT INTO fw_customer (TITLE, FIRSTNAME, LASTNAME, AGE, REG_NO, REGIS_DATE, CHASSIS_NUM, ENGINE_NUMB, MANF_NAME, MODEL, MANFT_YEAR, MOBILE_NUMBER, EMAIL, ADDRESS) VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$o', '$j', '$k', '$l', '$m');";
		$result= mysqli_query($conn, $query);

		if(!empty($result)) {
			$error_message = "";
			$success_message = "You have registered successfully!";	
			unset($_POST);
		} else {
			$error_message = "Problem in registration. Try Again!";	
		}
	}
}
?>
<html>
<head>
<title>Registration Form</title>
<style>

	body{
		background-image: url("rto.gif");
		background:cover;
	}
	
body{
	width:100%px;
	font-family:calibri;
}
.error-message {
	padding: 7px 10px;
	background: #fff1f2;
	border: #ffd5da 1px solid;
	color: #d6001c;
	border-radius: 4px;
}
.success-message {
	padding: 7px 10px;
	background: #cae0c4;
	border: #c3d0b5 1px solid;
	color: #027506;
	border-radius: 4px;
}
.demo-table {
	background:grey;
	width: 710px;
	border-spacing: initial;
	margin-left:300px;
	margin-top:10px;
	word-break: break-word;
	table-layout: auto;
	line-height: 1.8em;
	color: #333;
	border-radius: 4px;
	padding: 20px 40px;
}
.demo-table td {
	padding: 15px 0px;
}
.demoInputBox {
	padding: 10px 30px;
	border: #a9a9a9 1px solid;
	border-radius: 4px;
}
.btnRegister {
	padding: 10px 30px;
	background-color: #3367b2;
	border: 0;
	color: #FFF;
	cursor: pointer;
	border-radius: 4px;
	margin-left: 80px;
}
h1 {
			margin:auto;
			margin-top:85px;
			margin-left:10px;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		header{
    position: fixed;
    width:100%;
    top: 0px;
    opacity: 0.9;
}
body{
    font-family: Arial, Helvetica, sans-serif;
    background-color:#9393F5;
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
<h1>FOUR WHEELER</h1>
<form name="frmRegistration" method="post" action="">
<table border="0" width="500" align="center" class="demo-table">
<?php if(!empty($success_message)) { ?>	
<div class="success-message"><?php if(isset($success_message)) echo $success_message; ?></div>
<?php } ?>
<?php if(!empty($error_message)) { ?>	
<div class="error-message"><?php if(isset($error_message)) echo $error_message; ?></div>
<?php } ?>
<tr>
<td>Title</td>
<td><input type="text" class="demoInputBox" name="abcd" value="<?php if(isset($_POST['abcd'])) echo $_POST['abcd']; ?>"></td>
</tr>
<tr>
<td>First Name</td>
<td><input type="text" class="demoInputBox" name="firstName" value="<?php if(isset($_POST['firstName'])) echo $_POST['firstName']; ?>"></td>
</tr>
<tr>
<td>Last Name</td>
<td><input type="text" class="demoInputBox" name="lastName" value="<?php if(isset($_POST['lastName'])) echo $_POST['lastName']; ?>"></td>
</tr>
<tr>
<td>Age</td>
<td><input type="text" class="demoInputBox" name="bbcd" value="<?php if(isset($_POST['bbcd'])) echo $_POST['bbcd']; ?>"></td>
</tr>
<tr>
<td>Vehicle Registration No</td>
<td><input type="text" class="demoInputBox" name="cbcd" value="<?php if(isset($_POST['cbcd'])) echo $_POST['cbcd']; ?>"></td>
</tr>
<tr>
<td>Registration Date</td>
<td><input type="date" class="demoInputBox" name="dbcd" value="<?php if(isset($_POST['dbcd'])) echo $_POST['dbcd']; ?>"></td>
</tr>
<tr>
<td>Chassis No</td>
<td><input type="text" class="demoInputBox" name="ebcd" value="<?php if(isset($_POST['ebcd'])) echo $_POST['ebcd']; ?>"></td>
</tr>
<tr>
<td>Engine No</td>
<td><input type="text" class="demoInputBox" name="fbcd" value="<?php if(isset($_POST['fbcd'])) echo $_POST['fbcd']; ?>"></td>
</tr>
<tr>
<td>Manufacturer Name</td>
<td><select name="gbcd" style="width: 222px;" value="<?php if(isset($_POST['gbcd'])) echo $_POST['gbcd']; ?>">
		<option selected="selected" value="0">--Select--</option>
		<option >ASHOK LEYLAND</option>
		<option >ASTON MARTIN</option>
		<option >ATUL AUTO</option>
		<option >AUDI</option>
		<option >BAJAJ AUTO</option>
		<option >BAJAJ TEMPO</option>
		<option >BENTLEY</option>
		<option >BMW</option>
		<option >BUGATTI</option>
		<option >BUICK</option>
		<option >CADILLAC</option>
		<option >CHRYSLER</option>
		<option >DAEWOO</option>
		<option >DAIMLER</option>
		<option >DATSUN</option>
		<option >DC DESIGN PVT LTD</option>
		<option >DODGE</option>
		<option >EICHER MOTORS</option>
		<option >EICHER POLARIS PVT LTD</option>
		<option >FERRARI</option>
		<option >FIAT</option>
		<option >FORCE</option>
		<option >FORD</option>
		<option >GENERAL MOTORS</option>
		<option >HINDUSTAN MOTORS</option>
		<option >HONDA</option>
		<option >HUMMER</option>
		<option >HYUNDAI</option>
		<option >HYUNDAI MOTOR INDIA LTD.</option>
		<option >ICML</option>
		<option >INFINITI</option>
		<option >ISUZU</option>
		<option >JAGUAR</option>
		<option >JEEP</option>
		<option >LAMBORGHINI</option>
		<option >LAND ROVER</option>
		<option >MAHINDRA</option>
		<option >MAHINDRA RENAULT</option>
		<option >MAHINDRA(FOR XUV)</option>
		<option >MARUTI</option>
		<option >MASERATI</option>
		<option >MAYBACH</option>
		<option >MAZDA</option>
		<option >MERCEDES-BENZ.</option>
		<option >MINI</option>
		<option >MITSUBISHI</option>
		<option >MORRIS</option>
		<option >NISSAN</option>
		<option >OPEL</option>
		<option >PEUGEOT</option>
		<option >PIAGGIO</option>
		<option >PLYMOUTH</option>
		<option >PORSCHE</option>
		<option >PREMIER.</option>
		<option >RENAULT</option>
		<option >REVA</option>
		<option >ROLLS-ROYCE</option>
		<option >ROVER</option>
		<option >SAN</option>
		<option >SKODA</option>
		<option >SONALIKA MOTORS</option>
		<option >SSANGYONG</option>
		<option >STANDARD</option>
		<option >SUBARU</option>
		<option >SWARAJ MAZDA</option>
		<option >TATA MOTORS LTD</option>
		<option >TOYOTA KIRLOSKAR</option>
		<option >TOYOTA MOTORS</option>
		<option >TVS</option>
		<option >VOLKSWAGEN</option>
		<option >VOLVO</option>
		<option >VOLVO</option>
		<option >WILLYS</option>
	</select>
</td>
</tr>
<tr>
<td>Vehicle Model</td>
<td><input type="text" class="demoInputBox" name="kbcd" value="<?php if(isset($_POST['kbcd'])) echo $_POST['kbcd']; ?>"></td>
</tr>
<tr>
<td>Manufacturing Year</td>
<td><input type="text" class="demoInputBox" name="hbcd" value="<?php if(isset($_POST['hbcd'])) echo $_POST['hbcd']; ?>"></td>
</tr>
<tr>
<td>Mobile No</td>
<td><input type="number" class="demoInputBox" name="ibcd" value="<?php if(isset($_POST['ibcd'])) echo $_POST['ibcd']; ?>"></td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" class="demoInputBox" name="userEmail" value="<?php if(isset($_POST['userEmail'])) echo $_POST['userEmail']; ?>"></td>
</tr>
<tr>
<td>Correspondence Address</td>
<td><input type="textarea" class="demoInputBox" name="jbcd" value="<?php if(isset($_POST['jbcd'])) echo $_POST['jbcd']; ?>"></td>
</tr>
<tr>
<td colspan=2>
<input type="checkbox" name="terms"> I accept Terms and Conditions <input type="submit" name="register-user" value="Register" class="btnRegister"></td>
</tr>
</table>
</form>
</body>
<footer id="me">
<div id="foot">
    <p>Developed by<a href="#"><b> PRINCERAJ</b></a></p>
</div>
</footer>
</html>