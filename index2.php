<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Login and Registration Form with HTML5 and CSS3</title>
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/style2.css" />
    <link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="finallogo1.jpg" />

    <script>
        function validate()
        {
            var name = document.getElementById("username");
            var pass = document.getElementById("password");
            if(name.value=="")
            {
            name.style.backgroundColor = "#C0D3E1";
                return false;
            }
            else{
                name.style.backgroundColor="";
            }
            if(pass.value=="")
            {
            pass.style.backgroundColor = "#C0D3E1";
                return false;
            }
            else{
                name.style.backgroundColor="";
            }
            return true;
            
        }
        
        function validate1()
        {
            var namesignup = document.getElementById("usernamesignup");
            var emailsignup = document.getElementById("emailsignup");
            var passsignup = document.getElementById("passwordsignup");
            
            if(namesignup.value=="")
            {
            namesignup.style.backgroundColor = "#C0D3E1";
                return false;
            }
            else{
                name.style.backgroundColor="";
            }
            
            return true;
        }
    </script>

</head>

<body>
    <div class="container" style="background-image: url(back2.jpg); background-size: cover; background-repeat: no-repeat; background-position: center; ">
        <div class="menu">
            <a href="index1.html" class="hvr-underline-from-left ">Home</a>
            <a href="services1.html" class="hvr-underline-from-left ">Services</a>
            <a href="index2.html" class="hvr-underline-from-left active">Login/Register</a>
            <a href="contact.html" class="hvr-underline-from-left">Contact us</a>
            <form>
                <div style="float: right; width: 350px;"><input type="text" name="search" placeholder="Search.." class="search"></div>
            </form>
        </div>
        <section>
            <div id="container_demo">

                <a class="hiddenanchor" id="toregister"></a>
                <a class="hiddenanchor" id="tologin"></a>
                <div id="wrapper" style="opacity: 0.95;">
                    <div id="login" class="animate form">
                        <form action="mysuperscript.php" autocomplete="on" onsubmit="return validate();">
                            <h1>Log in</h1>
                            <p>
                                <label for="username" class="uname" data-icon="u"> Your username </label>
                                <input id="username" name="username" type="text" placeholder="myusername or mymail@mail.com" />
                            </p>
                            <p>
                                <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                <input id="password" name="password"  type="password" placeholder="eg. X8df!90EO" />
                            </p>
                            <p class="keeplogin">
                                <input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" />
                                <label for="loginkeeping">Keep me logged in</label>
                            </p>
                            <p class="login button">
                                <input type="submit" value="Login" />
                            </p>
                            <p class="change_link">
                                Not a member yet ?
                                <a href="#toregister" class="to_register">Join us</a>
                            </p>
                        </form>
                    </div>
                    
                    <div id="register" class="animate form">
                        <?php
require('connect.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['usernamesignup'])){
        // removes backslashes
	$usernamesignup = stripslashes($_REQUEST['usernamesignup']);
        //escapes special characters in a string
	$usernamesignup = mysqli_real_escape_string($con,$usernamesignup); 
	$emailsignup = stripslashes($_REQUEST['emailsignup']);
	$emailsignup = mysqli_real_escape_string($con,$emailsignup);
	$passwordsignup = stripslashes($_REQUEST['passwordsignup']);
	$passwordsignup = mysqli_real_escape_string($con,$passwordsignup);
	$addresssignup = stripslashes($_REQUEST['addresssignup']);
	$addresssignup = mysqli_real_escape_string($con,$addresssignup);
        $query = "INSERT into `users` (usernamesignup, passwordsignup, emailsignup, addresssignup)
VALUES ('$usernamesignup', '".md5($passwordsignup)."', '$emailsignup', '$addresssignup')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>
                        <form action="" autocomplete="on" onsubmit="return validate1();" method="post">
                            <h1> Sign up </h1>
                            <p>
                                <label for="usernamesignup" class="uname" data-icon="u">Your username</label>
                                <input id="usernamesignup" name="usernamesignup"  type="text" placeholder="mysuperusername690" />
                            </p>
                            <p>
                                <label for="emailsignup" class="youmail" data-icon="e"> Your email</label>
                                <input id="emailsignup" name="emailsignup" required="required" type="text" placeholder="mysupermail@mail.com" />
                            </p>
                            <p>
                                <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
                                <input id="passwordsignup" name="passwordsignup" required="required" type="password" placeholder="eg. X8df!90EO" />
                            </p>
                            Your address:
                                <textarea  id="addresssignup"  name="addresssignup" required="required" type="text" placeholder="eg. abc,bcd-363000" style="margin-top: -5px;position: absolute; height: 80px; margin-left: 10px; width: 150px;"></textarea>
                            <p class="signin button">
                                <input type="submit" name="submit" value="Sign up" />
                            </p>
                            <p class="change_link">
                                Already a member ?
                                <a href="#tologin" class="to_register"> Go and log in </a>
                            </p>
                        </form>
                    </div>
<?php } ?>
                </div>
            </div>
        </section>

    </div>

</body>

</html>