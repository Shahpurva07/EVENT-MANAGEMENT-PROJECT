<?php
require('connect.php');
include("check10.php");
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Orders</title>
    <link rel="icon" type="image/png" href="finallogo1.jpg" />
    
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
            padding-top: 1px;
            margin-top:300px;
            margin-left: 580px;
            width: 400px;
            height: 270px;
            background: rgb(191, 207, 245);
            opacity: 0.8;
        }
        .but{
    width: 25%;
    cursor: pointer;
    background: #276B9E;
    padding: 2px 5px;
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
<body><div class="pphp">
            <div class="divtwo">

  <h3>Welcome <b><?php echo $_SESSION['username']; ?></b>!</h3>
    
<form action="order11.php" method="post">
<input type="hidden" name="new" value="1" />
Please select the quantity : <br><br><input type="number" min="1" name="quantity" required autofocus="autofocus"/>
<input name="submit" type="submit" value="Submit" class="but"/><br><br>
    <a href="logout.php"><input type="button" name="logout " class="but" value="Logout"></a>
</form>

    </div>
    </div>
</body>
</html>