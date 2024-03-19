<?php
require('connection.php');
session_start();
// for login

include('smtp/PHPMailerAutoload.php');

// echo smtp_mailer('$_result_fetch[email]','Email Verification Link',$v_code);
function smtp_mailer($to, $v_code){
	$mail = new PHPMailer(); 
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	//$mail->SMTPDebug = 2; 
	$mail->Username = "codeavenues01@gmail.com";
	$mail->Password = "ngrfdxezadhlnkfd";
	$mail->FromName = "Support Team";
	$mail->SetFrom("email");
	$mail->Subject = 'Email Verification From Codeavenues';
	$mail->Body ="Thanks for registration!
    Click the link below to verify the email address
    <a href='https://www.codeavenues.com/verify?email=$to&v_code=$v_code'>Verify</a>
    ";
	$mail->AddAddress($to);
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if(!$mail->Send()){
		// echo $mail->ErrorInfo;
        return true;
	}else{
		// return 'Sent';
        return false;
	}
}

if(isset($_POST['login']))
{
    // $query = "SELECT * FROM `registered_user` WHERE `email`='$_POST[email_username]' OR `username`='$_POST[username]'";
    $user_query="SELECT * FROM `registered_user` WHERE `username`='$_POST[email_username]'";

    $result=mysqli_query($con,$user_query);
    if($result)
    {
        if(mysqli_num_rows($result)==1)
        {
            $result_fetch = mysqli_fetch_assoc($result);
            if($result_fetch['isverified']==1)
            {
                if(password_verify($_POST['password'],$result_fetch['password']))
            {
                #if password matched
                $_SESSION['logged_in']=true;
                $_SESSION['username']=$result_fetch['username'];
                echo $_SESSION['username'];
                header("location: codelab/community");
            }
            else{
                  echo "<script>alert('Incorrect Password');
                  window.location.href='userauth';
                  </script>";
            }
            }
            else{
                
                echo "<script>alert('Email Not verified');
                window.location.href='userauth';
                </script>";
            }
            
        }
        else
        {
            echo "<script>alert('Email or Username Not Registered');
            window.location.href='userauth';
            </script>";
        }

    }
    else{
        echo "<script>alert('Cannot Run Query');
        window.location.href='userauth';
        </script>";
    }
}
// for registration
if(isset($_POST['register']))
{
    $user_exist_query="SELECT * FROM `registered_user` WHERE `username`='$_POST[username]' OR `email`='$_POST[email]'";
    $result = mysqli_query($con,$user_exist_query);
    if($result)
    {
        // error for username already taken username or email
        if(mysqli_num_rows($result)>0){
            $result_fetch = mysqli_fetch_assoc($result);
            if($result_fetch['username']==$_POST['username'])
            {
                echo "<script>alert('$_result_fetch[username]-Username already exist');
               window.location.href='userauth';
                </script>";
            }
            else
            {
                // error for email already registered
                echo "<script>alert('$_result_fetch[email]-email already exist');
                window.location.href='userauth';
                </script>";
            }
        }
        // it wiill execute if any user does not exist for the name
        else 
        {
            $password = password_hash($_POST['password'],PASSWORD_BCRYPT);
            $v_code = bin2hex(random_bytes(16));
            // $query = "INSERT INTO `registered_user`(`username`, `email`, `password`,`country`,`verificationcode`, `isverified`) VALUES ('$_POST[username]','$_POST[email]','$password','$country','$v_code','0')";
            $query = "INSERT INTO `registered_user`(`username`, `email`, `password`,`country`, `verificationcode`, `isverified`) VALUES ('$_POST[username]','$_POST[email]','$password','$_POST[country]','$v_code','0')";
            if(mysqli_query($con,$query) && smtp_mailer($_POST['email'],$v_code))
            {
                // if data inserted successfully
                
                echo "<script>alert('Registration Successful');
        window.location.href='userauth';
        </script>";
            }
            else{
                // if data cannot be inserted
                echo "<script>alert('Server Down Please check your mail or report error');
        window.location.href='userauth';
        </script>";
            }
        }
    }
    else{
        echo "<script>alert('Server Slow ');
        window.location.href='userauth';
        </script>";
    }
}
?>