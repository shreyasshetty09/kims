<?php include 'includes/header.php'; ?>
<?php include 'includes/connection.php'; ?>

		<!-- Breadcrumbs Start -->
		<!-- <div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
		    <div class="breadcrumbs-inner">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-12 text-center">
		                    <h1 class="page-title">About Us</h1>
		                    <ul>
		                        <li><a class="active" href="index.php">Home</a></li>
		                        <li>About Us</li>
		                    </ul>
		                </div>
		            </div>
		        </div>
		    </div>
		</div> -->
		<!-- Breadcrumbs End -->
		
		<!-- History Start -->
        <div class="rs-history pt-10 pb-20">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- <ul class="breadcrumb pt-0 float-right">
                            <li><a class="active" href="index.php">Home</a></li>
                            <li>About</li>
                            <li>About Us</li>
                        </ul> -->
                        <h1 class="page-title page_heading" style="font-size: 24px !important;font-weight: 400 !important;">Refund & Cancellation Policy</h1>
                    </div>
                    <div class="col-12">
		                <!-- <div class="abt-title">
		                    <h2>OUR HISTORY</h2>
		                </div> -->
                    	<div class="about-desc">
                			<p class="para_text">Our focus is complete customer satisfaction. In the event, if you are displeased with the services provided, we will refund back the money, provided the reasons are genuine and proved after investigation. Please read the fine prints of each deal before buying it, it provides all the details about the services or the product you purchase.</p>
                            <p class="para_text">In case of dissatisfaction from our services, clients have the liberty to cancel their projects and request a refund from us. Our Policy for the cancellation and refund will be as follows:</p>
                            <h4 class="para_text">Cancellation Policy</h4>
                            <p class="para_text">Requests received later than two business days prior to the end of the current service period will be treated as cancellation of services for the next service period.</p>
                            <h4 class="para_text">Refund Policy</h4>
                            <p class="para_text">We will try our best to create the suitable design concepts for our clients.</p>
                            <p class="para_text">In case any client is not completely satisfied with our products we can provide a refund.</p>
                            <p class="para_text">If paid by credit card, refunds will be issued to the original credit card provided at the time of purchase and in case of payment gateway name payments refund will be made to the same account.</p>
                            </ul>
								<p class="para_text"></p>
							<p class="para_text"></p>
                    	</div>
                    </div>
                  
					
				
                    </div>
                </div>
            </div>
        <!-- </div> -->
        <!-- History End -->

        <!-- Mission Start
        <div class="rs-mission sec-color pt-10 pb-20">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="page-title page_heading">School Song</h1>
					</div>
                </div>
				<ol class="para_text">
					<div class="row prayer_list_row">
						<div class="col-12 col-md-3 col-lg-3">
							<li class="prayer_list">
								We seek a trail to follow<br>
								A cause for which to stand<br>
								We seek a valiant leader<br>
								Who could our love command
							</li>
						</div>
						<div class="col-12 col-md-3 col-lg-3"> 
							<li>
								We seek a stirring challenge<br>
								Some noble work to try<br>
								To give our life fulfillment<br>
								Our dreams to satisfy
							</li>
						</div>
						<div class="col-12 col-md-3 col-lg-3"> 
								<li>
								We find them in the shepherd<br>
								The life, the truth, the way<br>
								Beneath his crook we take our stand<br>
								And follow him everyday
								</li>
						</div>
						<div class="col-12 col-md-3 col-lg-3"> 
							<li>
								St. Agnes is our patron<br>
								Of love and purity<br>
								Our motto guides us onward<br>
								To work with dignity
							</li>
						</div>
					</div>
				</ol>
				<div class="row">
					<div class="col-12 para_text">
						Do well all that you do<br>
						To God and world be true<br>
						To strive to know life's purpose<br>
						To solve its mystery
					</div>
				</div>
            </div>
        </div>
     Mission End -->
        
		<!-- Testimonial Start 
        <div id="rs-testimonial" class="rs-testimonial bg5 sec-spacer">
			<div class="container">
                <?php  $sql = "SELECT * FROM tbl_website_alumni_testimonials WHERE status = '0'";
                $result = mysqli_query($conn, $sql);
				if (mysqli_num_rows($result) > 0) { ?>
				<div class="sec-title mb-50 text-center">
					<h2 class="white-color">WHAT PEOPLE SAYS</h2>      
				</div>
				<div class="row">
			        <div class="col-md-12">
						<div  class="rs-carousel owl-carousel" data-loop="true" data-items="2" data-margin="30" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="1200" data-dots="true" data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="true" data-ipad-device-dots="true" data-md-device="2" data-md-device-nav="true" data-md-device-dots="true">
							<?php while($row = mysqli_fetch_assoc($result)) { ?>
							<div class="testimonial-item">
			                    <div class="testi-img">
			                        <img src="<?php echo BASE_URL; ?><?php echo $row["image_url"]; ?>" alt="Jhon Smith">
			                    </div>
			                    <div class="testi-desc">
			                        <h4 class="testi-name"><?php echo $row["name"]; ?></h4>
			                        <p>
			                            <?php echo $row["message"]; ?>
			                        </p>
			                    </div>
							</div>
							<?php } ?>
			            </div>
			        </div>
				</div>
				<?php } ?>
			</div>
        </div>
		<!-- Testimonial End -->

<?php include 'includes/connectionClose.php'; ?>
<?php include 'includes/footer.php'; ?>       