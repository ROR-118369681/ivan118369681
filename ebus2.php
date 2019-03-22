<?php
session_start();
$fullNameValue = "";
$totalValue2 = "";

/*
* Create a session variable for the mobile number
*/
$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtTotal'] = $totalValue2

/**
*Allocate the mobile number session variable to a text box
*/

?>

<!DOCTYPE html>

<html>
<head>
    <style>
         body {
                background-color: lightblue;
            }
          
        div {
            background-color: whitesmoke;
            width: 300px;
            border: 25px solid black;
            padding: 25px;
            margin: 25px;
        }
    </style>
<title>eBus2</title>
</head>
<body>
<center>
<div class="form">
<form name="Details" method = "post" action="ebus3.php">
<center>
<table cellspacing="10">
<tr>
<td><b></b></td>
<td><b>Enter in your Details below</b></td>
</tr>
<tr>
<td>Name</td>
<td><input type="text" id="txtName" name="txtName" value="" required="" /></td>
</tr>
<tr>
<td>Phone Number</td>
<td><input type="text" id="txtNum" value="" required="" /></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" id="txtPassword" name="txtPassword" value="" required="" max=""/></td>
</tr>
<tr>

	<td><input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>"/
	</tr>
	</table>
	
	</center>
	
	<center>
	
	<input type="submit" name="btnContinue" id="btnContinue" onclick="" value="Continue"/>
	
	 </div>
                    </form>
</center>
            </body>
    </html>
	
	