<?php
// reads the varibles sent via Post for AT gateway 

$sessionId =$_POST["sessionId"];
$serviceCode =$_POST["serviceCold"];
$phoneNumber =$_POST["phoneNumber"];
$text =$_POST["text"];


if($text == "")
{
    // this is the first request 
    $response ="CCN what would you want to check \n";
    $response += "1. My Account No \n";
    $response += "2. My Phone Number";

}

else if($text == "1")
{
    //option 1 
    $response = " CCN Check Account information you want to view \n";
    $response = " 1. Account Number \n";
    $response = " 2. Account Balance";

}

elseif ($text == "2") {
    # option 2 
    $response = " End your phone number is " .$phoneNumber;

}
elseif ($text == " 1 * 1 "){

    // option 1 by 1 

    $accountNumber = "ACC1001";


    // this is terminal request .nate how we start wit End 

    $response = " End your account number is " .$accountNumber;

}

elseif ($text == "1 *2 " ){

    $balance ="KEC 10,000";

     $response = "End your balance is " .$balance;



}
  // echo the response to the API . the response depends on the statement that is fulfilled in each instance .

  header('Content-type; text/plain ');

  echo $response;


?>