<?php include 'includes/header.php'; ?>
<?php include 'includes/connection.php';  
$sql = "SELECT * FROM tbl_website_news WHERE status = '0' ORDER BY date DESC";
$result = mysqli_query($conn, $sql); ?>
		<!-- Breadcrumbs Start -->
		<!-- <div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
		    <div class="breadcrumbs-inner">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-12 text-center">
		                    <h1 class="page-title">OUR COURSES</h1>
		                    <ul>
		                        <li>
		                            <a class="active" href="index.html">Home</a>
		                        </li>
		                        <li>Our Courses</li>
		                    </ul>
		                </div>
		            </div>
		        </div>
		    </div>
		</div> -->
		<!-- Breadcrumbs End -->

		<!-- Courses Start -->
        <div id="rs-courses-3" class="rs-courses-3 sec-spacer">
			<div class="container">
				<div class="row">
					<div class="col-12">
                       <h2 style="text-align:center">NEWS & EVENTS</h2>
                        <!-- <h1 class="page-title page_heading" style="font-size: 24px !important;font-weight: 400 !important;">NEWS</h1> -->
                    </div>
				</div>
				<div class="row grid">
					<?php if (mysqli_num_rows($result) > 0) { 
					while($row = mysqli_fetch_assoc($result)) { ?>
					<div class="col-lg-4 col-md-6 grid-item">
		                <div class="course-item">
		                    <div class="course-img">
		                        <img src="<?php echo BASE_URL; ?><?php echo $row["image_path"]; ?>" alt="Blog Image" />
		                        <!--  <span class="course-value">$450</span> -->
		                        <div class="course-toolbar">
		                    		<!-- <h4 class="course-category"><a href="#"></a></h4> -->
		                        	<div class="course-date">
		                        		<i class="fa fa-calendar"></i> <?php echo date('F d, Y',strtotime($row["date"])); ?>
		                        	</div>
		                        	<!-- <div class="course-duration">
		                        		<i class="fa fa-clock-o"></i> <?php echo date('h:i A',strtotime($row["date"])); ?>
		                        	</div> -->
		                        </div>
		                    </div>
		                    <div class="course-body">
		                    	<div class="course-desc">
		                    		<h4 class="course-title"><a href="newsDetail.php?news_id=<?php echo base64_encode($row['row_id'])?>"><?php echo $row["subject"]; ?></a></h4>
		                    		<p>
										<span><?php echo substr($row["description"],0,70); ?></span>...
		                    		</p>
		                    	</div>
		                    </div>
		                    <div class="course-footer">
		                    	<!-- <div class="course-seats">
		                    		<i class="fa fa-map-marker"></i> 
		                    	</div> -->
		                    	<div class="course-button">
		                    		<a href="newsDetail.php?news_id=<?php echo base64_encode($row['row_id'])?>">Read More</a>
		                    	</div>
		                    </div>
		                </div>						
					</div>
					<?php } } ?>
			    </div>
			</div>
        </div>
        <!-- Courses End -->

<?php include 'includes/connectionClose.php'; ?>
<?php include 'includes/footer.php'; ?> 