<!--all php functions are decleraed in here-->
<?php

    require 'config.php';

    session_start();

    echo "seat and relax! this will take some time.... ";


  

  if(isset($_GET['code']))//get Access token and store it inside $result
  {
    
    $result = get_auth_code(774280962912735, "https://localhost/Social-Login/redirect.php", $_GET['code'], "Nzc0MjgwOTYyOTEyNzM1Ojk0Nzk4NjQxMDJmZGZmMzY0ZWIzMTg5ZjEwMDQ4ODAx");
    
    
    $token_json = json_decode($result);//jason array to fetch token
    

    
    if(!isset($_COOKIE['access_token']))//set cookie to store access token to get when needed in server page
    {
     	setcookie("access_token",$token_json->access_token,time()+10,"/","localhost");
      	echo '<script> window.location.assign("https://localhost/Social-Login/server.php") </script>';
    }

    	echo '<script> window.location.assign("https://localhost/Social-Login/server.php") </script>';
 
    }



?>
