<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/style2.css" />
    <link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="finallogo1.jpg" />

    <script>
        function validate1() {
            var namesignup = document.getElementById("usernamesignup");
            var emailsignup = document.getElementById("emailsignup");
            var passsignup = document.getElementById("passwordsignup");

            if (namesignup.value == "") {
                namesignup.style.backgroundColor = "#C0D3E1";
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
            height: 170px;
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
// If form submitted, insert values into the database.
        if (isset($_REQUEST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username); 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
            
	$street = stripslashes($_REQUEST['street']);
	$street = mysqli_real_escape_string($con,$street);
            
	$area = stripslashes($_REQUEST['area']);
	$area = mysqli_real_escape_string($con,$area);
        $query = "INSERT into `users` (username, password, email, street, area)
VALUES ('$username', '".md5($password)."', '$email', '$street', '$area')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='pphp'>
            <div class='divtwo'>
<center><br/><h3>You have registered successfully.</h3>
<br/>Click here to <a href='loginform.php'><input class='but' type='submit' value='Login' /></a></center></div></div>";
        }
            else{
                echo "<div class='pphp'>
            <div class='divtwo'>
<center><br/><h3>You are not registered. Please select different username.</h3>
<br/>Click here to <a href='register.php'><input class='but' type='submit' value='Register' /></a> again.</center></div></div>";
            }
    }else{
            
?>


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
                        <div id="registerr" class="animate form">
                            <form action="" name="register" method="post" autocomplete="on" onsubmit="return validate1();">
                                <h1> Sign up </h1>
                                <p>
                                    <label for="usernamesignup" class="uname">Your username</label>
                                    <input id="usernamesignup" autofocus name="username" type="text" required="required" placeholder="eg. mysuperusername690" />
                                </p>
                                <p>
                                    <label for="emailsignup" class="youmail"> Your email</label>
                                    <input id="emailsignup" name="email" required="required" type="email" placeholder="eg. mysupermail@mail.com" />
                                </p>
                                <p>
                                    <label for="passwordsignup" class="youpasswd" >Your password </label>
                                    <input id="passwordsignup" name="password" required="required" type="password" placeholder="eg. X8df!90EO" />
                                </p>
                                <p>
                                    <label for="streetsignup" >Your Street </label>
                                    <input id="streetsignup" name="street" required="required" type="text" placeholder="eg. h-9,ankur society" />
                                </p>

                                <p>
                                    <label for="areasignup"  >Your area </label>
                                    <input id="areasignup" name="area" required="required" type="text" placeholder="eg. Navrangpura, ahmedabad" />
                                </p>


                                <p class="signin button">
                                    <input type="submit" name="submit" value="Register" />
                                </p>
                                <p class="change_link">
                                    Already a member ?
                                    <a href="loginform.php" class="to_
                                                               "> Go and log in </a>
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
