<?php $pagetitle = "SUBSCRIPTION LIST" ?>

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
        <div class="col-lg-12">
            <div class="card p-5">
                <div class="row">
                    <div class="col-md-6 mt-4">
                    <h5 class="text-base">Hi <?php echo htmlspecialchars($_SESSION["username"]); ?>!</h5>
                    </div>
                    <div class="col-md-6 text-md-right mt-4">
                        <button onclick="exportTableToCSV('subscription-list.csv','#subscriptionList tr')" class="btn-base">EXPORT CSV</button>
                        <a href="welcome.php" class="btn-base">MAIN PAGE</a>
                        <a href="logout.php" class="btn-base">LOGOUT</a>
                    </div>
                </div>
                <div class="row mt-5">
                    <?php 
                        
                        require_once "db/config.php";
                        $query = "SELECT * FROM subscriptionusers";

                        $result = $link->query($query);

                        if ($result->num_rows > 0) {

                            echo '<table id="subscriptionList" class="table table-hover table-bordered text-center"> 
                                    <thead class="bg-base">
                                        <th>ID</th> 
                                        <th>EMAIL</th> 
                                        <th>SUBSCRIBED DATE</th> 
                                    </thead>';

                            while($row = $result->fetch_assoc()) {
                                
                                $field1name = $row["u_id"];
                                $field2name = $row["u_email"];
                                $field3name = $row["u_subscribed_at"]; 
                         
                                echo '<tr> 
                                          <td>'.$field1name.'</td> 
                                          <td>'.$field2name.'</td> 
                                          <td>'.$field3name.'</td> 
                                      </tr>';
                            }
                            echo "</table>";
                        } else {
                            echo '<div class="col-lg-12"><h6>0 results</h6></div>';
                        }
                        $link->close();
                    ?>

                </div>
            </div>
        </div>
    </div>

<?php include('footer.php');?>