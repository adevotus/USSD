<?php  

header("content-type:text/plain");
include('connection.php');
include("function.php");

// $session_id = $_post['sessionId'];
// $service_code = $_POST['serviceCode'];

//  $phone = $_GET['phonenumber'];
 $text = $_GET[$text];
 $data = explode("*", $text);



$level = 0;
$data;
$level = count($data);

echo $level . " ";

if($level == 0 || $level == 1){
    main_menu();
}
if($level>1){
    switch($data[1]){
        case 1;
        customer_register();
    break;

          case 2;
          transferPoints();
    break;

        case 3;
        purchaseItem();
    break;

    case 4;
    checkPoints();
    break;

    default:
    $text = "Invali text Input\n";
    ussd_stop($text);



    }
}
