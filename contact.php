<?php $pagetitle = "CONTACT US" ?>

<?php

$cname = $cemail = $cphone = $cmessage = "";
$success_msg = "";
$error_msg = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $cname = $_POST['cname'];
    $cemail = $_POST['cemail'];
    $cphone = $_POST['cphone'];
    $cmessage = $_POST['cmessage'];

    if(empty($cname) || empty($cemail) || empty($cphone) || empty($cmessage)){
        $error_msg = "All Fields are required";
    }

    if(empty($error_msg)){
        // EDIT THE 2 LINES BELOW AS REQUIRED
        $email_to = "info@hypercube19.com";
        $email_from = "info@hypercube19.com";
        $email_subject = $cemail;

        $email_message = "Contact Us Form:.\n\n";


        function clean_string($string) {
        $bad = array("content-type","bcc:","to:","cc:","href");
        return str_replace($bad,"",$string);
        }

        $email_message .= "Name: ".clean_string($cname)."\n";
        $email_message .= "Email: ".clean_string($cemail)."\n";
        $email_message .= "Phone: ".clean_string($cphone)."\n";
        $email_message .= "Message: ".clean_string($cmessage)."\n";

        // create email headers
        $headers = 'From: '.$email_from."\r\n".
        'Reply-To: '.$email_from."\r\n" .
        'X-Mailer: PHP/' . phpversion();
        @mail($email_to, $email_subject, $email_message, $headers);
        $cname = $cemail = $cphone = $cmessage = "";
        $success_msg = "Sent Successfully.";
    }
}
?>

<?php include('header.php');?>
 
<?php include('slider.php');?>

<div class="contact-page section-padding">
    <div class="contact-content">
        <div class="container">
            <div class="row">
                <div class="col-md-5 ml-auto mr-auto mb-5">
                    <h4 class="mb-3 text-base">Send us a message</h4>
                    <p>You can contact us with anything related to our Products. We'll get in touch with you as soon as possible.<br><br>
                    </p>
                    <form role="form" method="post">
                        <label>Your Name <span class="text-danger">*</span></label>
                        <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user-circle text-base"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Name" name="cname" value="<?php echo $cname?>">
                        </div>
                        <label>Email <span class="text-danger">*</span></label>
                        <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" ><i class="far fa-envelope-open text-base"></i></span>
                        </div>
                        <input type="email" class="form-control" placeholder="Email" name="cemail" value="<?php echo $cemail?>">
                        </div>
                        <label>Phone <span class="text-danger">*</span></label>
                        <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-mobile-alt text-base"></i></span>
                        </div>
                        <input type="tel" class="form-control" placeholder="Phone" name="cphone" value="<?php echo $cphone?>">
                        </div>
                            <label>Your Message <span class="text-danger">*</span></label>
                            <textarea class="form-control" rows="6" name="cmessage" value="<?php echo $cmessage?>"></textarea>
                            <input type="submit" class="btn-base mb-3" value="Contact Us" /> <br>
                            <small class="help-block text-danger" id="errormsg"> <?php echo $error_msg; ?> </small>
                            <small class="help-block text-success"> <?php echo $success_msg; ?> </small>
                    </form>
                </div>
                <div class="col-md-5 ml-auto mr-auto">
                    
                    <h4 class="text-base"><i class="fas fa-map-marker-alt mr-3 mb-3"></i>Find us at the office</h4>
                    <p style="margin-left: 36px">
                        The City School - PAF Chapter,<br>Shaheed-e-Millat Expy,Falcon Complex,<br>Karachi.
                    </p>

                    <h4 class="text-base"> <i class="fas fa-mobile-alt mr-3 mb-3"></i>Give us a ring</h4>
                    <p style="margin-left: 36px">
                        info@hypercube19.com<br>
                        +92 311 182 5506<br>
                        20th - 22nd December
                    </p>

                    <h4 class="text-base"> <i class="fas fa-briefcase mr-3 mb-3"></i>Legal Information</h4>
                    <p style="margin-left: 36px">
                        Creative Tim Ltd.<br>
                        VAT · EN2341241<br>
                        IBAN · EN8732ENGB2300099123<br>
                        Bank · Great Britain Bank
                    </p>

                </div>
            </div>
        </div>
    </div>
</div>

<?php include('map.php');?>

<?php include('footer.php');?>