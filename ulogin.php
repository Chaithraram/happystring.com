<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="logstyle.css">
    <title>Sign In</title>
</head>
<style type="text/css">
    a {
  text-decoration: none;
  display: inline-block;
  padding: 10px 10px;
}
.a:link{
  color: black;
}


.previous {
  background-color: #f1f1f1;
  color: black;
}

.next {
  background-color: #04AA6D;
  color: white;
}

.round {
  border-radius: 50%;
}
.a:link{
text-decoration: none;
}
</style>
<body>
    <a href="home.php" class="previous round">&#8249;</a>
    <section>
        <div class="container">
            <div class="user signinBx">
              <div class="imgBx"><img src="img/ulogin.webp"></div>
                <div class="formBx">
                    <form action="idlogc.php" method="POST">
                        <h2>WELCOME BACK!</strong>
                       
<input type="text" name="email" placeholder="enter your email">
<input type="password" name="password" placeholder="enter your password">
<center><input type="submit" name="login" value="Login"></center>
<br>

  </body>
</html>
<p class="signup">Forgot password?<a href="recoveryemail.php">Click here</a></p>
<p class="signup">Dont have an account?<a href="idreg.php">Sign Up</a></p>
                    </form>
                </div>
            </div>
        </div>

    </section>

</body>
</html> 