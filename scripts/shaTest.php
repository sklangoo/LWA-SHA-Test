<?php
    // create curl resource
    $ch = curl_init();

    // set url
    curl_setopt($ch, CURLOPT_URL, "https://api.sandbox.amazon.com");

    //return the transfer as a string
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_exec($ch);
    $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    if($httpcode==403) { // status 403 implies the ssl connection was successful
    	echo "True\n";
    } else {
    	echo "False\n";
    }

    curl_close($ch);     
?>