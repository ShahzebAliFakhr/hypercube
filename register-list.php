<?php $pagetitle = "REGISTER LIST" ?>

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
                        <button onclick="exportTableToCSV('register-list.csv','#registerList tr')" class="btn-base">EXPORT CSV</button>
                        <a href="welcome.php" class="btn-base">MAIN PAGE</a>
                        <a href="logout.php" class="btn-base">LOGOUT</a>
                    </div>
                </div>
                <div class="row mt-5">
                    <?php 
                        
                        require_once "db/config.php";
                        $query = "SELECT * FROM userregister";

                        $result = $link->query($query);

                        if ($result->num_rows > 0) {

                            echo '<table id="registerList" class="table table-responsive table-hover table-bordered text-center"> 
                                    <tr class="bg-base">
                                        <th>ID</th> 
                                        <th>NAME</th>  
                                        <th>EMAIL</th> 
                                        <th>PHONE</th>
                                        <th>CNIC</th>
                                        <th>IMAGE</th>
                                        <th>2nd PARTICIPANT</th>
                                        <th>2nd CONTACT #</th>
                                        <th>2nd CNIC #</th>
                                        <th>2nd IMAGE #</th>
                                        <th>3rd PARTICIPANT</th>
                                        <th>3rd CONTACT #</th>
                                        <th>3rd CNIC #</th>
                                        <th>3rd IMAGE #</th>
                                        <th>4th PARTICIPANT</th>
                                        <th>4th CONTACT #</th>
                                        <th>4th CNIC #</th>
                                        <th>4th IMAGE #</th>
                                        <th>5th PARTICIPANT</th>
                                        <th>5th CONTACT #</th>
                                        <th>5th CNIC #</th>
                                        <th>5th IMAGE #</th>
                                        <th>6th PARTICIPANT</th>
                                        <th>6th CONTACT #</th>
                                        <th>6th CNIC #</th>
                                        <th>6th IMAGE #</th>
                                        <th>MODULE</th>
                                        <th>SCHOOL NAME</th>
                                        <th>PAYMENT OPTION</th>
                                        <th>REGISTER DATE</th>
                                    </tr>';

                            while($row = $result->fetch_assoc()) {
                                
                                $id = $row["u_id"];
                                $name = $row["u_name"];
                                $email = $row["u_email"];
                                $phone = $row["u_phone"]; 
                                $cnic = $row["u_cnic"];
                                $image = $row["u_image"];
                                $u2name = $row["u_2p"];
                                $u2phone = $row["u_2p_phone"];
                                $u2_cnic = $row["u_p2cnic"];
                                $u2_image = $row["u_p2image"];
                                $u3name = $row["u_3p"];
                                $u3phone = $row["u_3p_phone"];
                                $u3_cnic = $row["u_p3cnic"];
                                $u3_image = $row["u_p3image"];
                                $u4name = $row["u_4p"];
                                $u4phone = $row["u_4p_phone"];
                                $u4_cnic = $row["u_p4cnic"];
                                $u4_image = $row["u_p4image"];
                                $u5name = $row["u_5p"];
                                $u5phone = $row["u_5p_phone"];
                                $u5_cnic = $row["u_p5cnic"];
                                $u5_image = $row["u_p5image"];
                                $u6name = $row["u_6p"];
                                $u6phone = $row["u_6p_phone"];
                                $u6_cnic = $row["u_p6cnic"];
                                $u6_image = $row["u_p6image"];
                                $module = $row["u_module"];
                                $school = $row["u_schoolname"];
                                $payment = $row["u_paymentoption"];
                                $created_at = $row["u_created_at"];  
                         
                                echo '<tr> 
                                          <td>'.$id.'</td>
                                          <td>'.$name.'</td> 
                                          <td>'.$email.'</td> 
                                          <td>'.$phone.'</td> 
                                          <td>'.$cnic.'</td> 
                                          <td><a href="'.$image.'" target="_blank"><img src="'.$image.'" width="80px;"></a></td>
                                          <td>'.$u2name.'</td> 
                                          <td>'.$u2phone.'</td> 
                                          <td>'.$u2_cnic.'</td>
                                          <td><a href="'.$u2_image.'" target="_blank"><img src="'.$u2_image.'" width="80px;"></a></td>
                                          <td>'.$u3name.'</td> 
                                          <td>'.$u3phone.'</td> 
                                          <td>'.$u3_cnic.'</td> 
                                          <td><a href="'.$u3_image.'" target="_blank"><img src="'.$u3_image.'" width="80px;"></a></td>
                                          <td>'.$u4name.'</td> 
                                          <td>'.$u4phone.'</td> 
                                          <td>'.$u4_cnic.'</td> 
                                          <td><a href="'.$u4_image.'" target="_blank"><img src="'.$u4_image.'" width="80px;"></a></td>
                                          <td>'.$u5name.'</td> 
                                          <td>'.$u5phone.'</td> 
                                          <td>'.$u5_cnic.'</td> 
                                          <td><a href="'.$u5_image.'" target="_blank"><img src="'.$u5_image.'" width="80px;"></a></td>
                                          <td>'.$u6name.'</td> 
                                          <td>'.$u6phone.'</td> 
                                          <td>'.$u6_cnic.'</td> 
                                          <td><a href="'.$u6_image.'" target="_blank"><img src="'.$u6_image.'" width="80px;"></a></td> 
                                          <td>'.$module.'</td> 
                                          <td>'.$school.'</td> 
                                          <td>'.$payment.'</td> 
                                          <td>'.$created_at.'</td>
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