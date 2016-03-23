/**
 * Login with Amazon - SHA 256 compatibility test scripts
 *
 * @category    Amazon
 * @package     shaTest.php
 * @copyright   Copyright (c) 2016 Amazon.com
 * @license     http://opensource.org/licenses/Apache-2.0  Apache License, Version 2.0
 */
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
