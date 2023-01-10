<?php
session_start();

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: index.php");
  exit;
}
 

require_once "connect.php";
 
$username = $password = "";
$username_err = $password_err = "";
 

if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    if(empty(trim($_POST["username"]))){
        $username_err = "<font color=red> Ju lutemi shkruani emrin e perdoruesit!";
    } else{
        $username = trim($_POST["username"]);
    }
    
    if(empty(trim($_POST["password"]))){
        $password_err = "<font color=red> Ju lutem vendosni fjalekalimin tuaj!";
    } else{
        $password = trim($_POST["password"]);
    }
    
    if(empty($username_err) && empty($password_err)){

        $sql = "SELECT id, username, password FROM bf_signup WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){

            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            $param_username = $username;
            
            if(mysqli_stmt_execute($stmt)){
                
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){    
                
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);

                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){

                            session_start();
                            
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            header("location: index.php");
                        } else{
							
                            $password_err = "<font color=red> Fjalekalimi qe shenuat nuk ishte i vlefshem!";
                        }
                    }
                } else{

                    $username_err = "<font color=red> Nuk u gjet asnje llogari me ate emer perdoruesi!";
                }
            } else{
                echo "Gabim ju lutem provoni perseri me vone.";
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
    <title>LOG IN | Blest Fashion</title>
      <link rel="stylesheet"  type="text/css" href="../CSS/login.css">
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
        <button class="fb btn">
          <i class="fa fa-facebook fa-fw"></i> Log in with Facebook
         </button>
        <button class="apple btn">
          <i class="fa fa-apple fa-fw"></i> Log in with Icloud
</button>
        <button class="google btn"><i class="fa fa-google fa-fw">
          </i> Log in with Google
</button>
        <h3>OR</h3>

        <div class="login">
  <div class=" alert-warning" role="alert">
  <b>Warning:</b><p>Password must contain at least 6 or more characters</p>
</div>     
          
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="user-box <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                          <label class="label-login">Username</label>
                            <input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>">
                            <span class="help-block"><?php echo $username_err; ?></span>
                        </div>

                        <div class="user-box <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                          <label class="label-login">Password</label>
                            <input type="password" placeholder="Password" name="password" class="form-control">
                            <span class="help-block"><?php echo $password_err; ?></span>
                        </div>
                        <a href="#" class="forgot-password">Forgot your password?</a><br>
          <input type="submit" value="Log in " id="submit"><br><br><hr>

          <h3>Don't have an account</h3><br>
          
            
          <a href="signup.php" class="signUp-btn">Sign Up </a>
         
        </div>
      </div>
    </div>
  </form>
  </div>
  


</body>
</html>