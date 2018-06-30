<?php
	require_once('auth.php');
?>
<?php
        require_once("dbcontroller.php");
    
        $ab=$_POST["user"];
        $sql = "SELECT * FROM tw_customer WHERE REG_NO='$ab'";
        $result= mysqli_query($conn, $sql);
        $em=$result->fetch_assoc();
        



        require 'PHPMailer/PHPMailerAutoload.php';
        
        $mail = new PHPMailer;
        
        $mail->isSMTP();                                   // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';                    // Speify
        $mail->SMTPAuth = true;                            // Enable SMTP 
        $mail->Username = 'princeraj5254@gmail.com';          // username
        $mail->Password = '8002666692'; // password
        $mail->SMTPSecure = 'tls';              
        $mail->Port = 587;                                 
        
        $mail->setFrom('princeraj5254@gmail.com', 'prince');
        $mail->addReplyTo('princeraj5254@gmail.com', 'prince');
        $mail->addAddress($em['EMAIL']);   // recipient
        
        
        $mail->isHTML(true);  
        
        
        
        
        $mail->Subject = 'Email from Localhost by prince';
        $mail->Body    = $_POST["bcd"];
        
        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            header("location:sentmessage.php");
            
        }
        
        
	
	
		
    

?>
