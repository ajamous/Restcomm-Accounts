<?php 

/*


AUTHOR: AMEED JAMOUS
Description: This script aims to simplify and provides a starting point to the usage of the Restcomm Curl Examples in PHP for sending SMS, Voice, Fax and other API calls
right from your PHP script.


*/

//Restcomm Account SID

$api_login ="ENTER ACCOUNT SID";


//Restcomm Auth Token
$api_key = 'ENTER AUTH TOKEN';


// Usage Period, Daily, Monthly Yearly etc..
$Period = "Monthly";

// GETTING MONTHLY CDRS USAGE FOR VOICE SERVICES

$base_url = "cloud.restcomm.com/restcomm/2012-04-24/Accounts/$api_login/Usage/Records/$Period";


// initialising CURL

$ch = curl_init();

//query against api. URL


// GETTING THE DATA
curl_setopt($ch, CURLOPT_URL,"https://$api_login:$api_key@$base_url");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_output = curl_exec ($ch);
curl_close ($ch);

//analyze JSON output

echo "server_output:$server_output";




