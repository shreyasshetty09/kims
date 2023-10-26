<?php include 'includes/header.php'; ?>
		
		<!-- Breadcrumbs Start -->
		<!-- <div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
		    <div class="breadcrumbs-inner">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-12 text-center">
		                    <h1 class="page-title">Contact</h1>
		                    <ul>
		                        <li>
		                            <a class="active" href="index.html">Home</a>
		                        </li>
		                        <li>Cantact</li>
		                    </ul>
		                </div>
		            </div>
		        </div>
		    </div
		</div> -->
		<!-- Breadcrumbs End -->
		
		<!-- Contact Section Start -->
		<div class="contact-page-section pt-10 pb-20">
        	<div class="container">
				<div class="row">
					<div class="col-12">
                        <ul class="breadcrumb pt-0 float-right">
                            <li><a class="active" href="index.php">Home</a></li>
                            <!-- <li>Academics</li> -->
                            <li>Admission Enquiry</li>
                        </ul>
                        <h1 class="page-title page_heading">Admission Enquiry</h1>
                    </div>
				</div>
				

        		<div class="contact-comment-section">
        			<h3 class="pb-2 text-center">ADMISSION ENQUIRY 2022</h3>
                    <div id="form-messages"></div>
					 <?php  if(isset($_GET['status'])){
				                        $status = $_GET['status'];
				                        if($status == 1) {
				                            ?>
						<div id="sendmessage"><b class="text-success">Admission Enquiry Form Successfully Submitted</b></div>
					 <?php   } else if($status == 2){ ?>
						<div id="errorMessage"><b class="text-danger">Mobile Number Already Registered!</b></div>
				 	 <?php   } else if($status == 0){ ?>
				 	 	<div id="errorMessage"><b class="text-danger">Failed To Submit!</b></div>
				 	 <?php } } ?>
					<form action="admission_enquiry.php"  name="register" method="POST" id="reg_form">
						<fieldset>
							<div class="row">                                      
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Name of the Student<span class="text-danger required_star">*</span></label>
										<input name="student_name" id="fname" class="form-control" type="text" required autocomplete="off" required=""> 
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Father's Name<span class="text-danger required_star">*</span></label>
										<input name="father_name" id="father_name" class="form-control" type="text" required autocomplete="off" required=""> 
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Mother's Name<span class="text-danger required_star">*</span></label>
										<input name="mother_name" id="mother_name" class="form-control" type="text" required autocomplete="off" required=""> 
									</div>
								</div>
								<!-- <div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Email</label>
										<input name="email" id="email" class="form-control" type="email" autocomplete="off">
									</div>
								</div> -->
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Contact Number<span class="text-danger required_star">*</span></label>
										<input name="mobile_one" id="mobile" class="form-control" type="text" required autocomplete="off" maxlength="10"  pattern="[0-9]{10}" onkeypress="return isNumber(event)">
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Place of Birth<span class="text-danger required_star">*</span></label>
										<input name="place_of_birth" id="place_of_birth" class="form-control" type="text" required autocomplete="off">
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Native of Student<span class="text-danger required_star">*</span></label>
										<input name="native" id="native" class="form-control" type="text" required autocomplete="off">
									</div>
								</div>
								

									<div class="col-md-6 col-sm-12">
									<div class="form-group ">
	                                    <label for="team_id">Admission for<span class="text-danger required_star">*</span></label>
	                                    <select required id="admission_type" name="admission_type" class="form-control" required="">
	                                       <option value="">Select Admission for</option>  
											 <option value="LKG">LKG</option>
                                            <option value="UKG">UKG</option>
                                            <option value="I">I</option>
                                            <option value="II">II</option>
                                            <option value="III">III</option>
                                            <option value="IV">IV</option>
                                            <option value="V">V</option>
                                            <option value="VI">VI</option>
                                            <option value="VII">VII</option>
                                            <option value="VIII">VIII</option>
                                            <option value="IX">IX</option>
                                            <option value="X">X</option>
	                                    </select>
	                                </div>
								</div>
							</div>					        
							<div class="form-group mb-0 text-center">
								<input class="btn-send" type="submit" value="Submit Now" name="register">
							</div>
							   
						</fieldset>
					</form>						
        		</div>
        	</div>
        </div>
        <!-- Contact Section End -->     
       
<?php include 'includes/footer.php'; ?> 
<script>
function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
</script>