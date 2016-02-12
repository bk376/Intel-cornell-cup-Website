<?php
/*Set the variables*/
$name_main=$name1=$name2=$name3="";
$email_main=$email1=$email2=$email3="";
$phone_main="";
$summary=$message="";
$NameErr=$EmailErr=$SummaryErr1=$SummaryErr2="";
/*Set arrays for emails, names, and summary/messages.*/
$names= array($name_main, $name1, $name2, $name3);
$emails= array($email_main, $email1, $email2, $email3);


/*start validation—once the user clicks one of the two buttons*/
if (isset($_POST['submit']) xor isset($_POST['save'])){
    /*enter the optional information that doesn't have to be validated*/
		$title = $_POST['title'];
        $phone_main = $_POST['phone_main'];
        $message = $_POST['message'];
    /*validate names*/
    if( (empty($_POST["name_main"]) or empty($_POST["name1"]) or empty($_POST["name2"]) or empty($_POST["name3"])) 
       ){
     $NameErr = "Name cannot be empty!";
     $name_main=$_POST["name_main"];
     $name1=$_POST["name1"];
     $name2=$_POST["name2"];
     $name3=$_POST["name3"];
   } 
    else {
     $name_main=$_POST["name_main"];
     $name1=$_POST["name1"];
     $name2=$_POST["name2"];
     $name3=$_POST["name3"];
     }
   
    /*validate email address and make sure there is '@' in it*/
    if (empty($_POST["email_main"]) or empty($_POST["email1"]) or empty($_POST["email2"]) or empty($_POST["email3"]) || (substr_count($_POST['email_main'], '@') != 1) || (substr_count($_POST['email1'], '@') != 1) || 
(substr_count($_POST['email2'], '@') != 1) 
|| (substr_count($_POST['email3'], '@') != 1) ){
      $EmailErr = "Please enter a valid email address!";
      $email_main=$_POST["email_main"];
     $email1=$_POST["email1"];
     $email2=$_POST["email2"];
     $email3=$_POST["email3"];
    }
    else {
     $email_main=$_POST["email_main"];
     $email1=$_POST["email1"];
     $email2=$_POST["email2"];
     $email3=$_POST["email3"];
   }
    /*validate summary, make sure the character number is between 10 and 200*/
    // $_POST['summary']="";   
    if(strlen($_POST['summary']) > 200){
        $SummaryErr1 = "Summary cannot be longer than 200 characters";
        $summary = $_POST['summary'];
    }
    if(strlen($_POST['summary']) < 10){
        $SummaryErr2 = "Summary cannot be shorter than 10 characters!";
        $summary = $_POST['summary'];
    }
    else {
        $summary = $_POST['summary'];
    }
}

/*end of validation*/
?>