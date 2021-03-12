<?php $pagetitle = "SIGNUP" ?>

<?php
// Include config file
require_once "db/config.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $usernamev = $_POST["username"];
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    }else if(strpos($usernamev, ' ') !== false){
        $username_err = "Username can be only one word.";
    }
    else{
        // Prepare a select statement
        $sql = "SELECT u_id FROM adminusers WHERE u_username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO adminusers (u_username, u_password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
 <?php include('header.php');?>

<div class="section-padding">
   <div class="col-lg-6 mx-auto">
       <div class="card p-5">
           <h2 class="mb-3">Signup</h2>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group">
                    <label>Username <span class="text-danger">*</span></label>
                    <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                    <small class="help-block"><?php echo $username_err; ?></small>
                </div>    
                <div class="form-group">
                    <label>Password <span class="text-danger">*</span></label>
                    <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                    <small class="help-block"><?php echo $password_err; ?></small>
                </div>
                <div class="form-group">
                    <label>Confirm Password <span class="text-danger">*</span></label>
                    <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                    <small class="help-block"><?php echo $confirm_password_err; ?></small>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn-base" value="Submit">
                </div>
            </form>
            </div>
        </div>
    </div>    

<?php include('footer.php');?>