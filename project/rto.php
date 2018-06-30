<?php
	//Start session
	session_start();	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
?>

<?php
	include_once 'header2.php'
?>

<form name="loginform" action="login_exec.php" method="post">
		<!--the code bellow is used to display the message of the input validation-->
		 <?php
			if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
			echo '<ul>';
			foreach($_SESSION['ERRMSG_ARR'] as $msg) {
				echo '<li>',$msg,'</li>'; 
				}
			echo '</ul>';
			unset($_SESSION['ERRMSG_ARR']);
			}
		?>

	
  <div id="login">
    <h1><strong>Welcome.</strong> Please login.</h1>
    <form action="javascript:void(0);" method="get">
    <fieldset>
    <p><input type="text" name="username" required value="Username" onBlur="if(this.value=='')this.value='Username'" onFocus="if(this.value=='Username')this.value='' "></p>
    <p><input type="password" name="password" required value=" Enter Password" onBlur="if(this.value=='')this.value='Password'" onFocus="if(this.value=='Password')this.value='' "></p>
    <p><input type="submit" name="" value="Login"></p>
    </fieldset>
    </form>
		</div> 
		
</form>

<?php
	include_once 'footer.php'
?>