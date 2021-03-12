<?php $pagetitle = "WELCOME" ?>

<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;

}
?>

<?php include('header.php');?> 

    <div class="section-padding">
        <div class="col-lg-10 mx-auto">
            <div class="card p-5">
                <div class="row">
                    <div class="col-md-6 mt-4">
                    <h5 class="text-base">Yo registrations dude! Sup?</h5>
                    </div>
                    <div class="col-md-6 text-md-right mt-4">
                        <a href="logout.php" class="btn-base">LOGOUT</a>
                    </div>
                </div>
                <div class="row mt-5">
                    
                    <a href="subscription-list.php" class="btn-base btn-block mb-3 text-center">Newsletter subscribers</a>
                    <a href="register-list.php" class="btn-base btn-block text-center">Registrations</a>

                </div>
            </div>
        </div>
    </div>

<?php include('footer.php');?>