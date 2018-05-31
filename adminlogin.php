<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/style2.css" />
    <link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="finallogo1.jpg" />

    <script>
        function validate() {
            var name = document.getElementById("username");
            var pass = document.getElementById("password");
            if (name.value == "") {
                name.style.backgroundColor = "#C0D3E1";
                return false;
            } else {
                name.style.backgroundColor = "";
            }
            if (pass.value == "") {
                pass.style.backgroundColor = "#C0D3E1";
                return false;
            } else {
                name.style.backgroundColor = "";
            }
            return true;

        }
    </script>
    
    <style>
        .pphp {
            min-height: 100%;
            min-width: 100%;
    background-image: url(back2.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
            color: solid black;
            text-align: center;
            position: absolute;
            font-size: 24px;
}
        .divtwo{
            margin-top:300px;
            margin-left: 580px;
            width: 400px;
            height: 150px;
            background: rgb(191, 207, 245);
            opacity: 0.8;
        }
        .but{
    width: 30%;
    cursor: pointer;
    background: #276B9E;
    padding: 8px 5px;
    font-family: 'BebasNeueRegular', 'Arial Narrow', Arial, sans-serif;
    color: #fff;
    font-size: 22px;
    border: 1px solid rgb(28, 108, 122);
    margin-bottom: 10px;
    text-shadow: 0 1px 1px rgba(0, 0, 0, 0.5);

}
    .but:hover {
    background: rgb(74, 179, 198);
}

.but:active,
.but:focus {
    background: rgb(40, 137, 154);
    position: relative;
    top: 1px;
    border: 1px solid rgb(12, 76, 87);

}


    </style>

    </head>
    <body>
        <?php
require('connect.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `adminlogin` WHERE username='$username'
and password='$password'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
	    header("Location: admin1.php");
         }else{
	echo "<div class='pphp'>
            <div class='divtwo'>
<center><br/><h3>Username/Password is incorrect</h3>
<br/>Click login to try <a href='adminlogin.php'><input class='but' type='submit' value='Login' /></a> again.</center></div></div>";
	}
    }else{
?>

    <div class="container" style="background-image: url(back2.jpg); background-size: cover; background-repeat: no-repeat; background-position: center; ">
        <div class="menu">
            <a href="index1.html" class="hvr-underline-from-left ">Home</a>
            <a href="services1.html" class="hvr-underline-from-left ">Services</a>
            <a href="loginform.php" class="hvr-underline-from-left active">Login/Register</a>
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
                        <form action="" name="loginform" method="post" autocomplete="on" onsubmit="return validate();">
                            <h1>Admin Log in</h1>
                            <p>
                                <label for="username" class="uname" data-icon="u"> Your username </label>
                                <input id="username" name="username" required type="text" autofocus placeholder="myusername or mymail@mail.com" />
                            </p>
                            <p>
                                <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                <input id="password" name="password" required type="password" placeholder="eg. X8df!90EO" />
                            </p>
                            <p class="keeplogin">
                                <input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" />
                                <label for="loginkeeping">Keep me logged in</label>
                            </p>
                            <p class="login button">
                                <input type="submit" value="Login" />
                            </p>
                            <p class="change_link">
                                For user login click 
                                <a href="loginform.php" class="to_register">Log in</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        </div>
           <?php } ?>
    </body>
</html>
