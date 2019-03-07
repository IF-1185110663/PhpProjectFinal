<!DOCTYPE html>
<html>
    <head>
        <title>
            Purchase Receipt
        </title>
    </head>
    <body>
        <h2>
            Purchase Receipt for;
        </h2>
<!--      //Starting the session to get the session variable from last page-->
<?php

session_start();
$totalValue2 = $_POST['txtTotal'];
$fullNameValue = $_POST['txtName'];
echo "The name is : ".$fullNameValue.".";
echo "<br><br>";
echo "The total value is : ".$totalValue2.".";
?>
    </body>
</html>




