<?php 
    /*
      Author: Kanai Shil
    */
    $ch = curl_init(); 
	  $url = str_replace(" ","+","fileURL");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HEADER, 0); 
    $res = curl_exec($ch); 
    curl_close($ch);
    file_put_contents("fileName",$res);
    echo 'Done';
    
?>
