<?php 

/*


AUTHOR: AMEED JAMOUS
Description: This script aims to simplify and provides a starting point to the usage of the Restcomm Curl Examples in PHP for sending SMS, Voice, Fax and other API calls
right from your PHP script.


*/

//Orgination Administrator Email [Must have a Restcomm Cloud Account associated]

$Email = "tier1%40domain.com";


//Restcomm Auth Token
$api_key = 'ENTER TOKEN';


$base_url_sms = "cloud.restcomm.com/restcomm/2012-04-24/Accounts/";




// initialising CURL

$ch = curl_init();

// Executing and Getting the data from restcomm accounts



curl_setopt($ch, CURLOPT_URL,"https://$Email:$api_key@$base_url_sms");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_output = curl_exec ($ch);
curl_close ($ch);

//analyze JSON output
echo "server_output:$server_output";




