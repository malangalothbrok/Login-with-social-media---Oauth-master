<?php 
   require 'config.php';

   session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title> Website </title>
	<meta charset="utf-8"/>
</head>
<body>

    <h1> <small>Get information from Facebook</small> </h1>

    <a href="<?php echo AUTH_URL("774280962912735","https%3A%2F%2Flocalhost%2FSocial-Login%2Fredirect.php"); ?>" onclick="return getCount();"><img src="fb.png" width="150" /></a><br/><br/>
            
<?php

?>

</body>
</html>
