<?php include 'includes/header.php'; ?>


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
        <!-- <div class="rs-history pt-10 pb-20" style="background-image:url('./images/bg/body.png')"> -->
		<section class="inner-bg" style="background-image:url('./images/bg/body.png');background-size:cover;" >
  <div class="container" style="background-color:white">
  <h3 STYLE="TEXT-ALIGN:CENTER;">CHAIRMAN'S MESSAGE</h3>
    <div class="row">
      <div class="inner-content-box inner-content-color-1">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-4 in-principal-img wow fadeInDown">
                <img src="images/kanachurmonu.jpg" class="img-fluid"/>
				<h4 class="wow fadeInDown" style="text-align:center;margin-top:10px;">U.K. Monu</h4>
				<style>
					.in-principal-img img {
    border-radius: 100%;
    border: 5px solid #fff;
    -webkit-box-shadow: 5px 5px 12px 0px rgba(0, 0, 0, 0.3);
    -moz-box-shadow: 5px 5px 12px 0px rgba(0, 0, 0, 0.3);
    box-shadow: 5px 5px 12px 0px rgba(0, 0, 0, 0.3);
}
				</style>
              </div>
              <div class="col-md-8 in-principal-name">
               
                <!-- <h1 class="wow fadeInDown" style="background: #fbfbfb;
    display: inline-block;
    position: relative;
    z-index: 1;
    padding: 0px 15px;
    font-weight: 600;
    text-transform: uppercase;"><span>Founder Message</span></h1> -->
                <h5 class="wow fadeInDown">Kanachur Institute of Medical Science</h5>
              </div>

              <div class="col-md-12 pt-0">
                <!-- <div class="strip float-right wow fadeInRight" style="width:310px;"><h4 style="margin-left:30px;margin-top:7px;">WELCOME MESSAGE</h4></div> -->
                <div class="clearfix"></div>
                <p class="wow fadeInDown"style="margin-top:25px;padding:24px;">Dear Parents,<br><br>Welcome to St Aloysius Gonzaga School (SAGS), the CBSE unit of St Aloysius Institutions in Mangaluru.  Set in the heart of this coastal city, SAGS is shaping the future of many young minds in and around Mangaluru.  The school has an excellent reputation and provides a vibrant and harmonious setting for students and staff alike.  Its vision is to educate young minds and foster in them social, ethical and holistic learning and mould them into responsible global citizens. <br><br>With this end in mind, the Jesuit management has provided the school with world class infrastructure and state-of-the-art amenities thus making it the preferred choice of many a parent for the education of their children.   The school motto, Lucetet Ardet (which means Shine to Enkindle) animates the staff and students to fully exploit their potential in order to become men and women for and with others.  As you will discover in this website, SAGS places special emphasis on curricular, co-curricular and extra-curricular activities right from KG to Class XII, and provides a supportive and positive environment for children and their teachers to learn and grow.<br><br>Established in 2012 and backed by a team of competent and committed teachers, SAGS has already registered a significant growth within a short span of time, to the extent of earning accolades from national and international forums for quality and excellence.<br>Do visit us, and you will learn for yourself why you want your child to be a part of St Aloysius Gonzaga School. </p>			
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
            </div>

			<style>
				.inner-bg {
    background: url(../img/dots-bg.png) repeat;
    background-size: cover;
    background-attachment: fixed;
    padding: 40px 0;
				}

				.in-principal-name {
    text-align: center;
    padding-top: 30px;
				}
			</style>
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

<?php include 'includes/connectionClose.php'; ?>
<?php include 'includes/footer.php'; ?>       