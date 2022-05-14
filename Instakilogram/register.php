<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (isset($_POST['login]']) )
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    header('location: admin.php');
    
}
?>
<!DOCTYPE html>
<html lang="en">


<?php $_SESSION['login'] = true; 
if ($_SESSION['validate'] === false) {

    echo "<script type='text/javascript'> document.location = 'admin.php'; </script>";
}?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>InstaKilogram-Register-Login site</title>
</head>
<body>
    <div class="register container-fluid-register">
        <div class="register-form">
            <div class="inside-form" id="inside-form">
                <div class="form-front">
                    <a href="#" class="logo"><img src="image/insta-logo.png" alt="logo"></a>
                    <H2 action="login.php" > LOGIN </H2>
                    <form>
                        <input type="email" class="reg-input" placeholder="Your email @" required>
                        <input type="password" class="reg-input" placeholder="Your password" required>
                        <button type="submit" class="submit-btn" name="login" >Login</button>
                        <input type="checkbox"><span>Remember account</span>
                    </form>
                    <button type="button" class="btn" onclick="openRegister()">Create new account</button>
                </div>
                <div class="form-back">
                    <a href="#" class="logo"><img src="image/insta-logo.png" alt="logo"></a>
                    <H2>REGISTER</H2>
                    <form action="register.php" method="POST">
                        <input type="text" class="reg-input" id="name" placeholder="Your name" required>
                        <input type="email" class="reg-input" id="email" placeholder="Your email @" required>
                        <input type="password" class="reg-input" id="password" placeholder="Your password" required>
                        <input type="password" class="reg-input" id="password" placeholder="Re-type password" required>
                        <input type="img" class="reg-input" id="image" placeholder="
                        <button type="submit" class="submit-btn" value="register"> Create </button>
                    </form>
                    <button type="button" class="btn" onclick="openLogin()">I already have an account</button>
                    
<?php
if(isset($_POST['register']))   
{
    $email = $_POST["email"];
    $fail_register = false;
   
    require_once("config.php");
    if(isset($_POST['submit']))
        {
            $name = $_POST['name'];
            $email 	= $_POST['email'];
            $password = $_POST['password'];
            
            $options = array("cost"=>8 and "cost" <= 20);
            $hashPassword = password_hash($password,PASSWORD_BCRYPT,$options);
            
            if($hashPassword)
            {
                echo "Registration successfully";
            }
            else
            {
                die( "something error, please register again");
            }
        }
}

?>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="script.js"></script>
</body>
</html>