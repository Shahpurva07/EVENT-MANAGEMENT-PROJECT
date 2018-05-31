<?php

require('connect.php');
include("loginform.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>orders</title>
    <style type="text/css">
    	table,td,tr{
    		border: 1px solid #89bbe0;
    	}

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
            font-size: 22px;
}
        
        .but{
            margin-left: 550px;
            margin-top: 50px;
    width: 10%;
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
</head>

<body>
 <div class="pphp">
  <table width="50%" border="1px solid orange" style="border-collapse:collapse; background-color:rgb(191, 207, 245); opacity: 0.9;margin-left:370px;margin-top: 170px;">

   <thead>
   	<tr style="height: 60px; color: #276B9E; font-size: 28px;"><td colspan="5"> <b>Order details</b></td>
   	</tr>
<tr style="height: 40px;"><th><strong>S.No</strong></th><th><strong>Submitted By</strong></th><th><strong>Product name</strong></th><th><strong>Quantity</strong></th><th><strong>Delete</strong></th></tr>
</thead>

    <tbody>
<?php
$count=1;
$sel_query="Select * from new_record ORDER BY id desc;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr style="height: 30px;"><td align="center"><?php echo $count; ?></td><td align="center"><?php echo $row["submittedby"]; ?></td><td align="center"><?php echo $row["productname"]; ?></td><td align="center"><?php echo $row["quantity"]; ?></td><td align="center"><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td></tr>
<?php $count++; } ?>
</tbody>
    </table>
    <a href="logout.php"><input class="but" type="submit" value="Logout" /></a>
</div>
</body>
</html>