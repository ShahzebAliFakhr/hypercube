<?php

require_once "db/config.php";

// Define variables and initialize with empty values
$success_msg = "";
$error_msg = "";
$uemail = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $uemail = mysqli_real_escape_string($link, $_REQUEST['e_email']);

    // Validate Data
    if(empty($uemail)){
        $error_msg = "Please Enter Valid Email";
    }
    
    // Check input errors before inserting in database
    if(empty($error_msg)){
    
        $sql = "INSERT INTO subscriptionusers (u_email)VALUES('$uemail')";

        if ($link->query($sql) === TRUE) {

                // EDIT THE 2 LINES BELOW AS REQUIRED
                $email_to = "info@hypercube19.com";
                $email_from = "info@hypercube19.com";
                $email_subject = $uemail;

                $email_message = "Subscripton Details.\n\n";


                function clean_string($string) {
                $bad = array("content-type","bcc:","to:","cc:","href");
                return str_replace($bad,"",$string);
                }

                $email_message .= "Email: ".clean_string($uemail)."\n";

                // create email headers
                $headers = 'From: '.$email_from."\r\n".
                'Reply-To: '.$email_from."\r\n" .
                'X-Mailer: PHP/' . phpversion();
                @mail($email_to, $email_subject, $email_message, $headers);
                $uname = $uemail = $uphone = "";
                $success_msg = "Registration Successfull.";
                header("location: index.php");
    }else{
        
        header("location: index.php");
    }
    
    // Close connection
    mysqli_close($link);
}
}

?>