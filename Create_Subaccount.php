<?php 

/*


AUTHOR: AMEED JAMOUS
Description: This script aims to simplify and provides a starting point to the usage of the Restcomm Curl Examples in PHP for Creating Sub-Accounts.
right from your PHP script.


*/

//Orgination Administrator Email [Must have a Restcomm Cloud Account associated]

$AdminEmail = "user%40domain.com";


//Restcomm Auth Token

$API_KEY = 'ENTER AUTH KEY';


$base_url_sms = "cloud.restcomm.com/restcomm/2012-04-24/Accounts/";




// initialising CURL

$ch = curl_init();
$FriendlyName = "This is a new Account for TESLA.com";
$EmailAddress = "support@domain.com";
$Password = "Ad8934df3443CcbAvsDEF7363"; // Do not use/allow weak passwords


$params = array(
                'FriendlyName' => $FriendlyName, 
                'EmailAddress' => $EmailAddress,
                'Password' => $Password
                
                
                );
//query against api. URL


curl_setopt($ch, CURLOPT_URL,"https://$AdminEmail:$API_KEY@$base_url_sms");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,
http_build_query($params));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_output = curl_exec ($ch);
curl_close ($ch);

//analyze JSON output
echo "server_output:$server_output";




