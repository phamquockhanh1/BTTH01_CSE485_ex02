<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="logincss.css">
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <!-- header -->
        <div class="header">
        <?php include"header.php" ?></div>
        <div class="maincontent">
            <div class="smcontainer">
                <div class="top"><h3>Sign In</h3></div>
                <div class="formlg">
                    <form action="" method="">
                        <div class="username"><input type="text" placeholder="username"></div>
                        <div class="password"><input type="text" placeholder="password"></div>
                        <div class="rmb"><input type="checkbox" placeholder""><div class="txt"><p>Remember Me</p></div></div>
                        <div class="login"><button><strong>Login</strong> </button></div>

                    </form>
                </div>
                <div class="foot">
                    <hr>
                    <p>Dont'n have an account ? <a href="">Sign Up <br>Forgot your password ?</a></p>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>