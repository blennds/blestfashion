
<?php

require_once "connect.php";
 
$username = $email = $password = $confirm_password = $phone = "";
$username_err = $email_err = $password_err = $confirm_password_err = $phone_err = "";
 
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    if(empty(trim($_POST["username"]))){
        $username_err = "<font color=red> Ju lutem shkruani emrin e perdoruesit.";
    } else{
        $sql = "SELECT id FROM bf_signup WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){

            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            $param_username = trim($_POST["username"]);
            
            if(mysqli_stmt_execute($stmt)){
				
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = " <font color=red> Ky emer perdoruesi egziston tashme!";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Dicka shkoi keq. Ju lutem provoni perseri me vone!";
            }
        }
         
        mysqli_stmt_close($stmt);
    }

    if(empty(trim($_POST["email"]))){
        $email_err = "<font color=red> Ju lutem shkruani emailin e perdoruesit.";
    } else{
        
        $sql = "SELECT id FROM bf_signup WHERE email = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){

            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            $param_email = trim($_POST["email"]);
            
            if(mysqli_stmt_execute($stmt)){
				
                mysqli_stmt_store_result($stmt);
                
                $email = trim($_POST["email"]);
                
            } else{
                echo "Oops! Dicka shkoi keq. Ju lutem provoni perseri me vone!";
            }
        }

        mysqli_stmt_close($stmt);
    }
    
    if(empty(trim($_POST["password"]))){
        $password_err = "<font color=red> Shenoni nje fjalekalim.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "<font color=red> Fjalekalimi duhet te kete min. 6 karaktere !";
    } else{
        $password = trim($_POST["password"]);
    }
    
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "<font color=red> Ju lutem konfirmoni fjalekalimin !";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "<font color=red> Fjalekalimi nuk perputhet.";
        }
    }

    if(empty(trim($_POST["phone"]))){
        $phone_err = "<font color=red> Ju lutem shkruani numrin e telefonit te perdoruesit.";
    } else{
        
        $sql = "SELECT id FROM bf_signup WHERE phone = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){

            mysqli_stmt_bind_param($stmt, "i", $param_phone);
            
            $param_phone = trim($_POST["phone"]);
            
            if(mysqli_stmt_execute($stmt)){
				
                mysqli_stmt_store_result($stmt);
                
                $phone = trim($_POST["phone"]);
                
            } else{
                echo "Oops! Dicka shkoi keq. Ju lutem provoni perseri me vone!";
            }
        }

        mysqli_stmt_close($stmt);

    }
    
    if(empty($username_err) && empty($email_err) && empty($password_err) && empty($confirm_password_err) && empty($phone_err)){
        
        $sql = "INSERT INTO bf_signup (username, email, password, phone) VALUES (?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){

            mysqli_stmt_bind_param($stmt, "sssi", $param_username, $param_email, $param_password, $param_phone);
            
            $param_username = $username;

            $param_email = $email;
			
            $param_password = password_hash($password, PASSWORD_DEFAULT); 

            $param_phone = $phone;
            	
            if(mysqli_stmt_execute($stmt)){
				
                header("location: login.php");
            } else{
                echo "Dicka shkoi keq. Ju lutem provoni perseri me vone !!!";
            }
        }
         
        mysqli_stmt_close($stmt);
    }
    
    mysqli_close($link);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP | Blest Fashion</title>
      <link rel="stylesheet"  type="text/css" href="../CSS/signup.css">
      <link rel="icon" href="../img/logo-icon.png" type="image/x-icon">
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">    <link rel="icon" href="../img/logo-icon.png" type="image/x-icon">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
       
    </head>
<body>

    <header>
        <nav>
            <div class="logo">
                <img src="../img/logo.png" alt="logoja">
            </div>
        </nav>
    </header>   



    
    
    <div class="col">
        <a href="#" class="fb btn">
            <i class="fa fa-facebook fa-fw"></i> Sign Up with Facebook
         </a>
        <a href="#" class="apple btn">
          <i class="fa fa-apple fa-fw"></i> Sign Up with Icloud
        </a>
        <a href="#" class="google btn"><i class="fa fa-google fa-fw">
          </i> Sign Up with Google
        </a>
        <h3>OR</h3>

        <div class="signup">
            <div class=" alert-warning" role="alert">
            <b>Warning:</b><p>Password must contain at least 6 or more characters</p>        
            </div>     
            
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                        <div class="user-box <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                            <label class="label-login">Username</label>
                            <input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>">
                        </div>
                             <div class="user-box <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                                <label class="label-login">Email</label>
                            <input type="text" placeholder="Email" name="email" value="<?php echo $email; ?>">
                        </div>
                      
                      
                            <div class="user-box <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                                <label class="label-login"> Password</label>
                            <input type="password" placeholder="Password" id="password"  name="password"  value="<?php echo $password; ?>"> 
                            <span class="help-block"><?php echo $password_err; ?></span>
                            </div>
                       <div class="user-box <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                        <label class="label-login">Confirm Password</label>
                            <input type="password" placeholder="Confirm Password" class='password2' id="password2"  name="confirm_password"  value="<?php echo $confirm_password; ?>"> 
                            <span class="help-block"><?php echo $confirm_password_err; ?></span>
                            </div>
                         <div class="user-box <?php echo (!empty($phone_err)) ? 'has-error' : ''; ?>">
                            <label class="label-login"> Phone</label>    
                            <input type="number" placeholder="Phone" name="phone" value="<?php echo $phone; ?>"><br><br>
                         </div>


          <input type="submit" value="sign up " id="submit"><br><hr>

          <h3>Already have an account</h3><br>
          
            
          <a href="login.php" class="signUp-btn" >Log in </a>
         
        </div>
      </div>
    </div>
  </form>
  </div>
  

  
    <!-- FILET E JAVASCRIPTIT -->
  <script src="../JS/confirm_password.js"></script>


</body>
</html>