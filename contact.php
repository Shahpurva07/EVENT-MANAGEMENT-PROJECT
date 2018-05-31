<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Contact me</title>
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="finallogo1.jpg" />
    
    
    <script>
        function validate()
        {
            var name = document.getElementById("fn");
            var email = document.getElementById("email");
            var subject = document.getElementById("subject");
            var message = document.getElementById("message");
            if(name.value=="")
            {
            name.style.backgroundColor = "#C0D3E1";
                return false;
            }
            else{
                name.style.backgroundColor="";
            }
            
            if
            (
                email.value == "" ||
                email.value.indexOf("@")<=0 ||
                email.value.indexOf('.') == -1 ||
                email.value.lastIndexOf('.')==email.length-1 ||
                email.value.lastIndexOf('.')-email.indexOf('@')<2 ||
                email.value.indexOf('@') != email.lastIndexOf('@')
            )
            {
                email.style.backgroundColor = "#C0D3E1";
                return false;
             }
            else{
                email.style.backgroundColor="";
            }
            
            if(subject.value=="")
            {
                subject.style.backgroundColor = "pink";
                return false;
            }
            else{
                subject.style.backgroundColor="";
            }
            
            if(message.value=="")
            {
                message.style.backgroundColor = "pink";
            }
            else{
                message.style.backgroundColor="";
            }
            
            
            return true;
            
        }
    </script>
</head>

<body>
    <div style="background-image: url(back3.jpg); background-size: cover; background-repeat: no-repeat; background-position: center; width: 100%; height: 794px;position: relative;">
        <div class="menu">
            <a href="index1.html" class="hvr-underline-from-left ">Home</a>
            <a href="services1.html" class="hvr-underline-from-left ">Services</a>
            <a href="loginform.php" class="hvr-underline-from-left ">Login/Register</a>
            <a href="contact.html" class="hvr-underline-from-left active">Contact us</a>
            <form>
                <div style="float: right; width: 350px;"><input type="text" name="search" placeholder="Search.." class="searc"></div>
            </form>
        </div>
        <div style="left: 70px; width: 700px;height: 450px;background-color:white; margin-top: 210px; position: absolute; opacity: 0.8;border: 2px solid rgb(95, 155, 198)">
            <form onSubmit="return validate();" action="checkcontact.php" method="post">
                <input type="text" id="fn" name="name" placeholder="Name" style="border: none;left: 50px; position: relative; margin-top: 60px; border-bottom: 1px solid rgb(95, 155, 198);height: 40px; width: 260px; float: left;">

                <input type="text" id="email" name="email" Placeholder="Email" style="border: none;left: 120px; position: relative; margin-top: 60px; border-bottom: 1px solid rgb(95, 155, 198);height: 40px; width: 260px; float: left;">

                <input type="text" id="subject" name="subject" placeholder="Subject" style="border: none;left: 50px; position: relative; margin-top: 30px; border-bottom: 1px solid rgb(95, 155, 198);height: 40px; width: 590px; float: left;">

                <input placeholder="Message" name="message" id="message" style="float: left; margin-top: 0px; left: 50px; position: relative; width: 590px; height: 150px; border: none;border-bottom: 1px solid rgb(95, 155, 198);">

                <button type="submit" style="border: none; margin-top: 380px;clear: both;margin-left: -200px; background-color: inherit;">Send</button>
            </form>
        </div>
    </div>
    <div style="width:100%; height:330px;position: absolute; background-color: #322f30; color: white; margin-top: 100px;">
        <div style="width: 50%; background-color: #322f30; height: 100%;float: left;">
            <div style="width: 50%;height: 100%;background-color: #322f30; float: left;">
                <a href="index1.html"><img src="finallogo.jpg" style="margin-top: 30px; margin-left: 40px;float: left; height: 150px;width: 350px; float: left;"></a>
                <div class="footer-social-icons" style="float: left;">
                    <ul class="social-icons" style="padding-top: 40px; padding-left: 70px;">
                        <li style="padding: 10px;list-style: none; font-size: 20px !important;"><a href="https://www.facebook.com/purva.shah.330" class="social-icon"> <i class="fa fa-facebook"></i></a></li>
                        <li style="padding: 5px;list-style: none; font-size: 20px !important;"><a href="https://twitter.com/PurvaShah_1997" class="social-icon"> <i class="fa fa-twitter"></i></a></li>
                        <li style="padding: 10px;list-style: none; font-size: 20px;"><a href="https://www.linkedin.com/in/purva-shah-56808b125/" class="social-icon"> <i class="fa fa-linkedin"></i></a></li>
                        <li style="padding: 10px;list-style: none; font-size: 20px;"><a href="https://plus.google.com/+PurvaShah07" class="social-icon"> <i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
<div style="height: 10px;width: 1000px; float: left;"><i class="fa fa-copyright" aria-hidden="true" style="font-size: 17px;margin-left: 40px;margin-top: 20px;"> 2017 EVENTful Times. All Rights Reserved.</i></div>
            </div>
            <div style="width: 50%;height: 100%;float: left;">
                <div style="margin-top: 30px;margin-left: 40px; margin-right: 40px;">EVENTful Times helps you make your event stunning. Be free and enjoy your event. You can view the things required for the event and event order the same online. EVENTful Times will be happy to help you.</div>
            </div>
        </div>
        <div style="width: 50%;height: 100%;float: left; background-color:#322f30;">
            <div style="height: 20%;width: 100%; background-color: #322f30;float: left;">
                <ul style="list-style: none; margin-left: 50px; ">
                    <li><a href="index1.html" style="text-decoration: none; color: white;">Home</a></li>
                    <li><a href="services1.html" style="text-decoration: none; color: white;">Services</a></li>
                    <li><a href="index2.html" style="text-decoration: none; color: white;">Login</a></li>
                    <li><a href="contact.html" style="text-decoration: none; color: white;">Contact us</a></li>
                </ul>
            </div>
            <center>
                <div style="width: 62%;height: 200px;background-color:#322f30;float: left; margin-left: 140px;margin-top: 30px;">
                    <p>
                        Contact us : 7383380632<br><br> Email : contactevento@gmail.com<br><br> Address : Navrangpura, Ahmedabad.
                    </p>
                </div>
            </center>
        </div>
    </div>
</body>

</html>