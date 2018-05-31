<?php
require('connect.php');
include("check.php");

$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$productname ='weddingcake2';
    $quantity =$_REQUEST['quantity'];

$submittedby = $_SESSION["username"];
$ins_query="insert into new_record (`productname`,`quantity`,`submittedby`) values ('$productname','$quantity','$submittedby')";
mysqli_query($con,$ins_query) or die(mysql_error());
}
?>

<html>
<head>
        <style>
        .pphp {
            margin: -8px;
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
            margin-top:200px;
            margin-left: 580px;
            width: 400px;
            height: 350px;
            background: rgb(191, 207, 245);
            opacity: 0.8;
        }
        .but{
    width: 40%;
    cursor: pointer;
    background: #276B9E;
    padding: 8px 10px 8px 2px;
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


<title>Orders</title>
    <link rel="icon" type="image/png" href="finallogo1.jpg" />
</head>

<body>

    <div class="pphp">
            <div class="divtwo">
<center><br/><h3>Your order has been placed successfully.</h3>
<br/>The total cost of your order is<b> Rs. <?php
    echo 580 * $_REQUEST['quantity'];?></b>. Your order will be delivered soon.<br> Please be ready with the payment.</center> <pre><a href="services1.html"><input class="but" type="submit" value="Continue Shopping" /></a>   <a href="logout.php"><input class="but" type="submit" value="Logout" /></a></pre></div></div>

</body>
</html>
