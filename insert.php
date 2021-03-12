<?php

require_once "db/config.php";

function uploads_img($img){
    $image = $_FILES[$img]['tmp_name'];
    $path = $_FILES[$img]['name'];
    $ext = pathinfo($path, PATHINFO_EXTENSION);
    $filename = rand().".".$ext;
    $db_file = "uploads/".$filename;
    if(move_uploaded_file($image, $db_file)){
        return $db_file;
    }else{
        return '';
    }
}

// Define variables and initialize with empty values
$success_msg = "";
$error_msg = "";
$uname = $uemail = $uphone = $up2 = $up2Phone = $up3 = $up3Phone = $up4 = $up4Phone = $up5 = $up5Phone = $up6 = $up6Phone = $uschoolname = $umodule = $upaymentoption = $ucnic = $uimage = $up2cnic = $up2image = $up3cnic = $up3image = $up4cnic = $up4image = $up5cnic = $up5image = $up6cnic = $up6image =  "";

// Processing form data when form is submitted
if(isset($_POST['btnSubmit'])){

    $uname = htmlspecialchars($_POST['e_name']);
    $uemail = htmlspecialchars($_POST['e_email']);
    $uphone = htmlspecialchars($_POST['e_phone']);
    $up2 = htmlspecialchars($_POST['e_p2']);
    $up2Phone = htmlspecialchars($_POST['e_p2Phone']);
    $up3 = htmlspecialchars($_POST['e_p3']);
    $up3Phone = htmlspecialchars($_POST['e_p3Phone']);
    $up4 = htmlspecialchars($_POST['e_p4']);
    $up4Phone = htmlspecialchars($_POST['e_p4Phone']);
    $up5 = htmlspecialchars($_POST['e_p5']);
    $up5Phone = htmlspecialchars($_POST['e_p5Phone']);
    $up6 = htmlspecialchars($_POST['e_p6']);
    $up6Phone = htmlspecialchars($_POST['e_p6Phone']);
    $uschoolname = htmlspecialchars($_POST['e_schoolname']);
    $upaymentoption = htmlspecialchars($_POST['paymentoption']);
    $ucnic = htmlspecialchars($_POST['e_cnic']);
    $up2cnic = htmlspecialchars($_POST['e_p2cnic']);
    $up3cnic = htmlspecialchars($_POST['e_p3cnic']);
    $up4cnic = htmlspecialchars($_POST['e_p4cnic']);
    $up5cnic = htmlspecialchars($_POST['e_p5cnic']);
    $up6cnic = htmlspecialchars($_POST['e_p6cnic']);
    $uimage = uploads_img('e_image');
    $up2image = uploads_img('e_p2image');
    $up3image = uploads_img('e_p3image');
    $up4image = uploads_img('e_p4image');
    $up5image = uploads_img('e_p5image');
    $up6image = uploads_img('e_p6image');

    // Validate Data
    if(empty($uname) || empty($uemail) || empty($uphone) || empty($up2) || empty($up2Phone) || empty($up3) || empty($up3Phone) || empty($upaymentoption) || empty($ucnic)  || empty($up2cnic)  || empty($up3cnic)){
        $error_msg = "Fields with (*) are required";
    }

        $generalModule = $_POST['generalModule'];
        $stemModule = $_POST['stemModule'];

        $generalcount = count($generalModule);
        $stemcount = count($stemModule);
        $totalcount = $generalcount + $stemcount;

        if(($generalcount > 0)){
            
        }else{
            $error_msg = "You can Select Minimum 1 & Maximum 4 Module per category.";
        }
        
        if(($stemcount > 0)){
            
        }else{
            $error_msg = "You can Select Minimum 1 & Maximum 4 Module per category.";
        }

        if(($totalcount > 0) && ($totalcount < 9)){

        }else{
            $error_msg = "You can Select Minimum 1 & Maximum 4 Module per category.";
        }

    
    // Check input errors before inserting in database
    if(empty($error_msg)){

        if(empty($uschoolname)){
            $uschoolname = "Private";
        }

        for($i = 0; $i < count($generalModule); $i++){
            $umodule .= $generalModule[$i] . " - ";
        }

        for($i = 0; $i < count($stemModule); $i++){
            $umodule .= $stemModule[$i] . " - ";
        }

        // User Selected Modules
        $modules = $umodule;

        $sql = "INSERT INTO `userregister` (`u_name`, `u_email`, `u_phone`, `u_2p`, `u_2p_phone`, `u_3p`, `u_3p_phone`, `u_4p`, `u_4p_phone`, `u_5p`, `u_5p_phone`, `u_6p`, `u_6p_phone`, `u_module`, `u_schoolname`, `u_paymentoption`, `u_cnic`, `u_image`, `u_p2cnic`, `u_p2image`, `u_p3cnic`, `u_p3image`, `u_p4cnic`, `u_p4image`, `u_p5cnic`, `u_p5image`, `u_p6cnic`, `u_p6image`) VALUES ('$uname', '$uemail', '$uphone', '$up2', '$up2Phone', '$up3', '$up3Phone', '$up4', '$up4Phone', '$up5', '$up5Phone', '$up6', '$up6Phone', '$modules', '$uschoolname', '$upaymentoption', '$ucnic', '$uimage', '$up2cnic', '$up2image' ,'$up3cnic', '$up3image', '$up4cnic', '$up4image', '$up5cnic', '$up5image', '$up6cnic', '$up6image');";


        if ($link->query($sql) === TRUE) {

                // EDIT THE 2 LINES BELOW AS REQUIRED
                $email_to = "shahzebalifakhr@gmail.com";
                $email_from = "admin@alphasdesigners.com";
                $email_subject = $uemail;

                $email_message = "Registration Details:.\n\n";


                function clean_string($string) {
                $bad = array("content-type","bcc:","to:","cc:","href");
                return str_replace($bad,"",$string);
                }

                $email_message .= "Name: ".clean_string($uname)."\n";
                $email_message .= "Email: ".clean_string($uemail)."\n";
                $email_message .= "Phone: ".clean_string($uphone)."\n";
                $email_message .= "CNIC: ".clean_string($ucnic)."\n";
                $email_message .= "Name of 2nd participant: ".clean_string($up2)."\n";
                $email_message .= "Contact No. of 2nd participant: ".clean_string($up2Phone)."\n";
                $email_message .= "CNIC of 2nd participant: ".clean_string($up2cnic)."\n";
                $email_message .= "Name of 3rd participant: ".clean_string($up3)."\n";
                $email_message .= "Contact No. of 3rd participant: ".clean_string($up3Phone)."\n";
                $email_message .= "CNIC of 3rd participant: ".clean_string($up3cnic)."\n";
                if(!(empty($up4)) || !(empty($up4Phone))){
                    $email_message .= "Name of 4th participant: ".clean_string($up4)."\n";
                    $email_message .= "Contact No. of 4th participant: ".clean_string($up4Phone)."\n"; 
                    $email_message .= "CNIC of 4th participant: ".clean_string($up4cnic)."\n";
                }
                
                if(!(empty($up5)) || !(empty($up5Phone))){
                    $email_message .= "Name of 5th participant: ".clean_string($up5)."\n";
                    $email_message .= "Contact No. of 5th participant: ".clean_string($up5Phone)."\n";
                    $email_message .= "CNIC of 5th participant: ".clean_string($up5cnic)."\n";
                }
                
                if(!(empty($up6)) || !(empty($up6Phone))){
                    $email_message .= "Name of 6th participant: ".clean_string($up6)."\n";
                    $email_message .= "Contact No. of 6th participant: ".clean_string($up6Phone)."\n";
                    $email_message .= "CNIC of 6th participant: ".clean_string($up6cnic)."\n";
                }
                
                $email_message .= "Modules: ".clean_string($modules)."\n";
                $email_message .= "School Name: ".clean_string($uschoolname)."\n";
                $email_message .= "Payment Option: ".clean_string($upaymentoption)."\n";

                // create email headers
                $headers = 'From: '.$email_from."\r\n".
                'Reply-To: '.$email_from."\r\n" .
                'X-Mailer: PHP/' . phpversion();
                @mail($email_to, $email_subject, $email_message, $headers);
                $uname = $uemail = $uphone = $up2 = $up2Phone = $up3 = $up3Phone = $up4 = $up4Phone = $up5 = $up5Phone = $up6 = $up6Phone = $uschoolname = $umodule = $upaymentoption = $ucnic = $uimage = $up2cnic = $up2image = $up3cnic = $up3image = $up4cnic = $up4image = $up5cnic = $up5image = $up6cnic = $up6image =  "";
                $success_msg = "Registration Successfull.";
        }else{
            $error_msg = "Something gone wrong" . mysqli_error($link);
        }
        
        // Close connection
        mysqli_close($link);

        }
    }
?>