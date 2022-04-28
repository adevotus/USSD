<?php 

 $data;
 function main_menu(){
     $text ="welcome to our service\nPlease replay with\n1.Register\n2.Transfer Points\n3.Purchase Item with Points\n4. Check Points Balance";
     ussd_proceed($text);
 }
// register customer..
 function customer_register(){
    
 $text = "you can now register";


     global $connection;
     if(count($data) == 2){
         $text = "Enter your first name";
         ussd_proceed($text);
     }
     if(count($data) == 3){
        $text = "Enter your middle name";
        ussd_proceed($text);
    }
    if(count($data) == 4){
        $text = "Enter your last name";
        ussd_proceed($text);
    }
    if(count($data) == 5){
        $text = "Enter your gender";
        ussd_proceed($text);
    }
    if(count($data) == 6){
        $text = "Enter your ID numnber";
        ussd_proceed($text);
    }
    if(count($data) == 7){
        $text = "Enter your email address";
        ussd_proceed($text);
    }
    if(count($data) == 8){
        $text = "Enter your password";
        ussd_proceed($text);
    }
    if(count($data) == 9){
        $phone = $_GET['phonenumber'];
        $firstname = $data[2];
        $middlename = $data[3];
        $lastname = $data[4];
        $gender = $data[5];
        $idNumber = $data[6];
        $email = $data[7];
        $password = $data[8];

$spl = "insert into customer(phonenumber,firstname,middilename,lastname,gender,idNumber,email,password,registerDate)
 values('$phone','$firstname','$middlename','$lastname','$gender','$idNumber','$email','$password',Now())";
 $result = mysqli_query($connection, $sql);

 if($result == 1){
     $text = "you  have succeful register";
     ussd_stop($text);
 }
        // $text = " thanks you for registering\nfirstname $firstname\nmiddlename $middlename\nlastname $lastname\ngender $gender\nidNumber $idNumber";
        // ussd_proceed($text);
    }
    //  ussd_proceed($text); 

 }

 //transfer points
  function transferPoints(){
      $text = "you have transfer 20  points to 10101010 ";

      ussd_proceed($text);
  }

  // to purchase items
  function purchaseItem(){
      $text = "your have purchase item for 5 points ";
      ussd_proceed($text);

  }

  //check points Balance

function checkPoints(){
    $text = "Your points balances is 100";
    ussd_proceed($text);
}


function ussd_proceed($text){
    echo "CON".$text;
}



function ussd_stop ($text){
    echo "END".$text;
}



?>