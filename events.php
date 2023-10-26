<?php include 'includes/header.php'; ?>
<?php include 'includes/connection.php'; 
  $sql = "SELECT * FROM tbl_website_event WHERE status = '0' order by date desc";
  $result = mysqli_query($conn, $sql);?>

		<!-- Breadcrumbs Start -->
		<!-- <div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
		    <div class="breadcrumbs-inner">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-12 text-center">
		                    <h1 class="page-title">OUR EVENTS</h1>
		                    <ul>
		                        <li>
		                            <a class="active" href="index.html">Home</a>
		                        </li>
		                        <li>Events</li>
		                    </ul>
		                </div>
		            </div>
		        </div>
		    </div>
		</div> -->
		<!-- Breadcrumbs End -->

		<!-- Events Start -->
        <div class="rs-events-2 pt-20">
            <div class="container">
				<div class="row">
					<div class="col-12">
                       
                        <h1 class="page-title page_heading">Events</h1>
                    </div>
				</div>
                <div class="row space-bt30">
				<?php  if (mysqli_num_rows($result) > 0) {
					while($row = mysqli_fetch_assoc($result)) { 
						if(!empty($row["image_url"])){  ?>
                    <div class="col-lg-6 col-md-12">
                    	<div class="event-item">
	                        <div class="row rs-vertical-middle">
	                        	<div class="col-md-5">
	                        	    <div class="event-img">
	                        	        <img src="<?php echo BASE_URL; ?><?php echo $row["image_url"]; ?>" alt="events Images" width="215" height="215"/>
	                        	    </div>                        		
	                        	</div>
	                        	<div class="col-md-7">
	                    	        <div class="event-content">
	                    	        	<div class="event-meta">
		                    	        	<div class="event-date">
		                    	        		<i class="fa fa-calendar"></i>
		                    	        		<span><?php echo date('d F Y', strtotime($row["date"])); ?></span>
		                    	        	</div>
	                    	        	</div>
	                    	        	<div class="event-meta">
	                    	        		<div class="event-time">
	                    	        			<i class="fa fa-clock-o"></i>
	                    	        			<span>12.30AM-05.30PM</span>
	                    	        		</div> &nbsp;
											<div class="event-location">
												<i class="fa fa-map-marker"></i>
												<span><?php echo $row["location"]; ?></span>
											</div>
	                    	        	</div>
	                    	        	<h3 class="event-title"><?php echo $row["title"]; ?>7</h3>
	                    	        	<div class="event-desc">
	                    	        		<p>
												<?php echo $row["description"]; ?>
	                    	        		</p>
	                    	        	</div>
	                    	        </div>                    		
	                        	</div>
	                        </div>                    		
                    	</div>
					</div>
					<?php } } } ?>
                </div>
            </div>
        </div>
        <!-- Events End -->

       
<?php include 'includes/footer.php'; ?> 
<?php include 'includes/connectionClose.php'; ?>