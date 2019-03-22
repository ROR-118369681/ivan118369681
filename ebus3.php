<!DOCTYPE html>
<html>
<body>
    
<center>
    
    <p>
    <h1><b><u>Purchase Receipt</u></b></h1>
    <br />
    <br />
    <style>
            body {
                background-color: lightblue;
            }
            p {
            background-color: whitesmoke;
            width: 800px;
            border: 25px solid black;
            padding: 25px;
            margin: 25px;
        }
           body {margin:0;}
               
    </style>
<!--    //Starting session to get the variable from the last page -->
<?php

session_start();
$totalValue = $_POST['txtTotal'];     
$fullNameValue = $_POST['txtName'];


echo "The Name is: ".$fullNameValue.".";
echo "<br></br>";
echo "The Total Value Is $".$totalValue.".";

echo "Thanking You! Please come again!";



?>
</p>
</center>

</body>
</html>