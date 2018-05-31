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
<body>
<section>
            <div id="container_demo">

                <a class="hiddenanchor" id="toregister"></a>
                <a class="hiddenanchor" id="tologin"></a>
                <div id="wrapper" style="opacity: 0.95;">
        
<div id="register" class="animate form">
                        <form action="mysuperscript.php" autocomplete="on" onsubmit="return validate1();">
                            <h1> Sign up </h1>
                            <p>
                                <label for="usernamesignup" class="uname" data-icon="u">Your username</label>
                                <input id="usernamesignup" name="usernamesignup" type="text" placeholder="mysuperusername690" />
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
                                <textarea  id="addresssignup"  name="address" required="required" type="text" placeholder="eg. abc,bcd-363000" style="margin-top: -5px;position: absolute; height: 80px; margin-left: 10px; width: 150px;"></textarea>
                            
                                
                            <p class="signin button">
                                <input type="submit" value="Sign up" />
                            </p>
                            <p class="change_link">
                                Already a member ?
                                <a href="#tologin" class="to_register"> Go and log in </a>
                            </p>
                        </form>
                    </div>
                </div>
    </div>
</section>
    </body>
    </head>