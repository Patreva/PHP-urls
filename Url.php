<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
//& is represented by %26 and the spaces with +
$Web="Google Kenya";
$Search="Patrick Wahome Online Courses & Website";
$Result1="https://".urlencode($Web)."?Search=".urlencode($Search);
echo $Result1;
?>
<br>
<?php
//rawurlencode changes spaces into 
$Result2="https://".rawurlencode($Web)."?Search=".rawurlencode($Search);
echo $Result2;
?>
<br>
<?php
/*This is recommended Anything before your search query you should use rawurlencode and Anything past your search query you should use urlencode*/
$Result2="https://".rawurlencode($Web)."?Search=".urlencode($Search);
echo $Result2;
?>
</body>
</html>