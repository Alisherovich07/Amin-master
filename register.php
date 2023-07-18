<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Register</title>
</head>
<body>
      <div class="container">
        <div class="box form-box">

        <?php 
         
         include("include/config.php");
         if(isset($_POST['submit'])){
            $username = htmlspecialchars($_POST['username']);
            $email = htmlspecialchars($_POST['email']);
            $password = htmlspecialchars($_POST['password']);

         //verifying the unique email

         $verify_query = mysqli_query($con,"SELECT Email FROM users WHERE Email='$email'");

         if(mysqli_num_rows($verify_query) !=0 ){
            echo "<div class='message'>
                      <p>This email is used, Try another One Please!</p>
                  </div> <br>";
            echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
         }
         else{

            mysqli_query($con,"INSERT INTO users(Username,Email,Password) VALUES('$username','$email','$password')") or die("Erroe Occured");

            echo "<div class='message'>
                      <p>Registration successfully!</p>
                  </div> <br>";
            echo "<a href='login.php'><button class='btn'>Login Now</button>";
         

         }

         }else{
         
        ?>

            <header style="color:#fff;">Sign Up</header>
            <form action="" method="post">
                <div class="field input">
                    <label style="color:#fff;" for="username">Username</label>
                    <input type="text" name="username" id="username" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label style="color:#fff;" for="email">Email</label>
                    <input type="text" name="email" id="email"  required>
                </div>

                <div class="field input">
                    <label style="color:#fff" for="password">Password</label>
                    <input type="password" name="password" id="password"  required>
                </div>

                <div class="field">
                    
                    <input style="background-color:#E718A3FF;" type="submit" class="btn" name="submit" value="Register" required>
                </div>
                <div class="links" style="color:#fff;">
                    Already a member? <a style="color:#E718A3FF;text-decoration:none;" href="login.php">Sign In</a>
                </div>
            </form>
        </div>
        <?php } ?>
      </div>
</body>
</html>
<style>
    body{
        background:#17181A;
    }
    .field input:hover{
        background-color:#E718A3FF;
        transition:1s;
    }
</style>