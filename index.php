<?php  session_start();   // session starts with the help of this function 
?>
<?php
//tells user they logged out successfully
/*if(isset( $_GET ['logoutMsg']))
{
    echo $_GET ['logoutMsg'];
}*/
/*
if(isset($_SESSION['use']))   // Checking whether the session is already there or not if 
                              // true that header redirect it to the home page directly 
 {
    //header("Location:home.php"); 
 }
*/
?>

<!DOCTYPE html>

<head>
    <title>Login to Math Game</title>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" 
        rel="stylesheet" media="screen">   
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <h1>Please login to enjoy our math game.</h1>
            </div>
            <div class="col-sm-1"></div>
        </div>
        
        <div class="container">
            <form action="" method="post">
                <div class="row">
                    <div class="col-sm-4 text-right">Email:</div>
                    <div class="col-sm-3">
                        <input type="text" name="user" class="form-control"/>
                    </div>
                    <div class="col-sm-5"></div>
                </div>
                <div class="row">
                    <div class="col-sm-4 text-right">Password:</div>
                    <div class="col-sm-3">
                        <input type="password" name="pass" class="form-control"/>
                    </div>
                    <div class="col-sm-5"></div>
                </div>
                <div class="row">
                    <div class="col-sm-3 col-sm-offset-4">
                        <input type="submit" name="login" value="LOGIN" class="btn btn-default btn-sm" />
                    </div>   
                </div>
            </form>
        </div>

    </div>
    <div class="row">
        <div class="col-sm-3 col-sm-offset-4">
                  
        <?php
            if(isset($_POST['login'])) {   // it checks whether the user clicked 
                                           //login button or not 
                $user = $_POST['user'];
                $pass = $_POST['pass'];

                if($user == "a@a.a" && $pass == "aaa") {   // username is "a@a.a"   
                    $_SESSION['use']=$user;                   // password is "aaa"     
                    //if login info is right, redirect to home.php page
                    echo '<script type="text/javascript"> window.open("mathGame.php",
                        "_self");</script>';       
                } else {
                    echo '<span style="padding-left: 35px;  font-weight: bold; 
                        color: rgb(255, 59, 0); "> Invalid Email or Password</span>';
                }
            }
        ?>
            
        </div>
    </div>
    
</body>

</html>