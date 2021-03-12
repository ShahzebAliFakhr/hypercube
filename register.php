<?php $pagetitle = "REGISTER" ?>

<?php include('insert.php');?>
<?php include('header.php');?>
 
    <div class="container-fluid section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto card p-5">
                    <h2 class="mb-3">Registration form</h2>
                    
                    <p>
                    * Maximum number of participants per team is 6.<br>
                    * Minimum number of participants per team is 3.<br>
                    * It is mandatory to select at least 1 module from each category.<br>
                    * You can select upto 4 modules.
                    </p>
                    
                    <hr>
                    
                    <form name="registration" action="<?='http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];?>" method="post" onsubmit="return validateitem();" enctype="multipart/form-data">
                        
                        <div class="form-group row" style="border: 1px dashed #546D76; padding: 20px 10px 0 10px;">
                            <div class="col-md-4 form-group">
                                <label>Name (Head of delegation) <span class="text-danger">*</span></label>
                                <input type="text" name="e_name" id="e_name" class="form-control" required value="<?php echo $uname; ?>">
                            </div>    
                            <div class="col-md-4 form-group">
                                <label>Email (Head of delegation) <span class="text-danger">*</span></label>
                                <input type="email" name="e_email" id="e_email" class="form-control" required value="<?php echo $uemail; ?>"> 
                            </div>
                            <div class="col-md-4 form-group">
                                <label>Contact no. (Head of delegation) <span class="text-danger">*</span></label>
                                <input type="tel" name="e_phone" id="e_phone" class="form-control" required value="<?php echo $uphone; ?>">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>CNIC (Head of delegation) <span class="text-danger">*</span></label>
                                <input type="tel" name="e_cnic" id="e_cnic" class="form-control" required value="<?php echo $ucnic; ?>">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Image (Head of delegation) <span class="text-danger">*</span></label>
                                <div class="custom-file">
                                    <input type="file" required class="custom-file-input" name="e_image" id="e_image">
                                    <label class="custom-file-label" for="e_image">Choose file</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group row" style="border: 1px dashed #546D76; padding: 20px 10px 0 10px;">
                            <div class="col-md-6 form-group">
                                <label>Name of 2<sup>nd</sup> participant <span class="text-danger">*</span></label>
                                <input type="text" name="e_p2" id="e_p2" class="form-control" required value="<?php echo $up2; ?>">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Contact no. <span class="text-danger">*</span></label>
                                <input type="tel" name="e_p2Phone" id="e_p2Phone" class="form-control" required value="<?php echo $up2Phone; ?>">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>CNIC<span class="text-danger">*</span></label>
                                <input type="tel" name="e_p2cnic" id="e_p2cnic" class="form-control" required value="<?php echo $up2cnic; ?>">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Image<span class="text-danger">*</span></label>
                                <div class="custom-file">
                                    <input type="file" required class="custom-file-input" name="e_p2image" id="e_p2image">
                                    <label class="custom-file-label" for="e_p2image">Choose file</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group row" style="border: 1px dashed #546D76; padding: 20px 10px 0 10px;">
                            <div class="col-md-6 form-group">
                                <label>Name of 3<sup>rd</sup> participant <span class="text-danger">*</span></label>
                                <input type="text" name="e_p3" id="e_p3" class="form-control" required value="<?php echo $up3; ?>">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Contact no. <span class="text-danger">*</span></label>
                                <input type="tel" name="e_p3Phone" id="e_p3Phone" class="form-control" required value="<?php echo $up3Phone; ?>">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>CNIC<span class="text-danger">*</span></label>
                                <input type="tel" name="e_p3cnic" id="e_p3cnic" class="form-control" value="<?php echo $up3cnic; ?>">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Image<span class="text-danger">*</span></label>
                                <div class="custom-file">
                                    <input type="file" required class="custom-file-input" name="e_p3image" id="e_p3image">
                                    <label class="custom-file-label" for="e_p3image">Choose file</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group row" style="border: 1px dashed #546D76; padding: 20px 10px 0 10px;">
                            <div class="col-md-6 form-group">
                                <label>Name of 4<sup>th</sup> participant</label>
                                <input type="text" name="e_p4" id="e_p4" class="form-control" value="<?php echo $up4; ?>">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Contact no.</label>
                                <input type="tel" name="e_p4Phone" id="e_p4Phone" class="form-control" value="<?php echo $up4Phone; ?>">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>CNIC</label>
                                <input type="tel" name="e_p4cnic" id="e_p4cnic" class="form-control" value="<?php echo $up4cnic; ?>">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Image</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="e_p4image" id="e_p4image">
                                    <label class="custom-file-label" for="e_p4image">Choose file</label>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="form-group row" style="border: 1px dashed #546D76; padding: 20px 10px 0 10px;">
                            <div class="col-md-6 form-group">
                                <label>Name of 5<sup>th</sup> participant</label>
                                <input type="text" name="e_p5" id="e_p5" class="form-control" value="<?php echo $up5; ?>">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Contact no.</label>
                                <input type="tel" name="e_p5Phone" id="e_p5Phone" class="form-control" value="<?php echo $up5Phone; ?>">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>CNIC</label>
                                <input type="tel" name="e_p5cnic" id="e_p5cnic" class="form-control" value="<?php echo $up5cnic; ?>">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Image</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="e_p5image" id="e_p5image">
                                    <label class="custom-file-label" for="e_p5image">Choose file</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group row" style="border: 1px dashed #546D76; padding: 20px 10px 0 10px;">
                            <div class="col-md-6 form-group">
                                <label>Name of 6<sup>th</sup> participant</label>
                                <input type="text" name="e_p6" id="e_p6" class="form-control" value="<?php echo $up6; ?>">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Contact no.</label>
                                <input type="tel" name="e_p6Phone" id="e_p6Phone" class="form-control" value="<?php echo $up6Phone; ?>">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>CNIC</label>
                                <input type="tel" name="e_p6cnic" id="e_p6cnic" class="form-control" value="<?php echo $up6cnic; ?>">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Image</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="e_p6image" id="e_p6image">
                                    <label class="custom-file-label" for="e_p6image">Choose file</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                        <div class="col-md-6 form-group">
                            <label>Stem Module</label>
                            <div class="funkyradio">
                                <div class="funkyradio-default">
                                    <input type="checkbox" name="stemModule[]" id="Probot" value="Probot"/>
                                    <label for="Probot">Probot</label>
                                </div>
                                <div class="funkyradio-default">
                                    <input type="checkbox" name="stemModule[]" id="Code Rally" value="Code Rally"/>
                                    <label for="Code Rally">Code Rally</label>
                                </div>
                                <div class="funkyradio-default">
                                    <input type="checkbox" name="stemModule[]" id="Cosmic Engine" value="Cosmic Engine"/>
                                    <label for="Cosmic Engine">Cosmic Engine</label>
                                </div>
                                <div class="funkyradio-default">
                                    <input type="checkbox" name="stemModule[]" id="Euler's Identity" value="Eulers Identity"/>
                                    <label for="Euler's Identity">Euler's Identity</label>
                                </div>
                                <div class="funkyradio-default">
                                    <input type="checkbox" name="stemModule[]" id="Pharmalure" value="Pharmalure"/>
                                    <label for="Pharmalure">Pharmalure</label>
                                </div>
                                <div class="funkyradio-default">
                                    <input type="checkbox" name="stemModule[]" id="DaVinci's Construct" value="DaVincis Construct"/>
                                    <label for="DaVinci's Construct">DaVinci's Construct</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>General Module</label>
                            <div class="funkyradio">
                                <div class="funkyradio-default">
                                    <input type="checkbox" name="generalModule[]" id="Neurodrill" value="Neurodrill"/>
                                    <label for="Neurodrill">Neurodrill</label>
                                </div>
                                <div class="funkyradio-default">
                                    <input type="checkbox" name="generalModule[]" id="Fandom Fiesta" value="Fandom Fiesta"/>
                                    <label for="Fandom Fiesta">Fandom Fiesta</label>
                                </div>
                                <div class="funkyradio-default">
                                    <input type="checkbox" name="generalModule[]" id="Uncharted" value="Uncharted"/>
                                    <label for="Uncharted">Uncharted</label>
                                </div>
                                <div class="funkyradio-default">
                                    <input type="checkbox" name="generalModule[]" id="CSI" value="CSI"/>
                                    <label for="CSI">CSI</label>
                                </div>
                             </div>
                        </div>
                        </div>
                        
                        <div class="col-md-12 form-group">
                        
                          <div class="custom-control custom-radio mr-3">
                            <input type="radio" class="custom-control-input" id="private" name="school" value="Private" checked>
                            <label class="custom-control-label" for="private">Private</label>
                          </div>
                          
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="school" name="school" value="School">
                            <label class="custom-control-label" for="school">School</label>
                          </div>
                            
                        </div>
                        
                        
                        <div class="col-md-12 form-group d-none" id="schoolnamebox">
                            <label>School Name <span class="text-danger">*</span></label>
                            <input type="text" name="e_schoolname" id="e_schoolname" class="form-control" value="<?php echo $uschoolname; ?>">
                        </div>
                        
                        <div class="col-md-12 form-group">
                        
                            <label>How would you like to pay? <span class="text-danger">*</span></label>
                          <div class="custom-control custom-radio mr-3">
                            <input type="radio" class="custom-control-input" id="CashHandover" name="paymentoption" value="Cash Handover">
                            <label class="custom-control-label" for="CashHandover">Cash Handover</label>
                          </div>
                          
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="BankDraft" name="paymentoption" value="BankDraft">
                            <label class="custom-control-label" for="BankDraft">Bank Draft</label>
                          </div>
                            
                        </div>
                        
                        <div class="col-md-12 form-group">
                            <input type="submit" name="btnSubmit" class="btn-base mb-2" value="REGISTER"> <br>
                            <small class="help-block text-danger" id="errormsg"> <?php echo $error_msg; ?> </small>
                            <small class="help-block text-success"> <?php echo $success_msg; ?> </small>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <?php include('footer.php');?>