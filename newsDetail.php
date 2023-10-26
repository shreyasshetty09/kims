<?php include 'includes/header.php'; ?>
<?php include 'includes/connection.php';  
    $myId = base64_decode($_GET['news_id']);
    $sql = "SELECT * FROM tbl_website_news WHERE row_id = '$myId' AND status = '0'";
    $result = mysqli_query($conn, $sql);
?>
        
        <!-- Breadcrumbs Start -->
        <!-- <div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
            <div class="breadcrumbs-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1 class="page-title">EVENT DETAILS</h1>
                            <ul>
                                <li>
                                    <a class="active" href="index.html">Home</a>
                                </li>
                                <li>Event Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Breadcrumbs End -->

        <!-- Event Details Start -->
        <div class="rs-event-details pt-30 pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ul class="breadcrumb pt-0 float-right">
                            <li><a class="active" href="index.php">Home</a></li>
                            <li>News</li>
                        </ul>
                        <h1 class="page-title page_heading">News</h1>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <?php if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result)) { ?>
                        <div class="event-details-content">
                            <div class="event-img">
                               <?php if(!empty($row["image_sub1"]) && !empty($row["image_sub2"]) && !empty($row["image_sub3"]) && !empty($row["image_sub4"])){ ?>
                                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                      <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                                      </ol>
                                      <div class="carousel-inner">
                                        <div class="carousel-item active">
                                          <img class="d-block w-100" src="<?php echo BASE_URL; ?><?php echo $row["image_path"]; ?>" alt="News & Events">
                                        </div>
                                        <div class="carousel-item">
                                          <img class="d-block w-100" src="<?php echo BASE_URL; ?><?php echo $row["image_sub1"]; ?>" alt="News & Events">
                                        </div>
                                        <div class="carousel-item">
                                          <img class="d-block w-100" src="<?php echo BASE_URL; ?><?php echo $row["image_sub2"]; ?>" alt="News & Events">
                                        </div>
                                        <div class="carousel-item">
                                          <img class="d-block w-100" src="<?php echo BASE_URL; ?><?php echo $row["image_sub3"]; ?>" alt="News & Events">
                                        </div>
                                        <div class="carousel-item">
                                          <img class="d-block w-100" src="<?php echo BASE_URL; ?><?php echo $row["image_sub4"]; ?>" alt="News & Events">
                                        </div>
                                      </div>
                                    </div>
                                    <?php }else if(!empty($row["image_sub3"]) && empty($row["image_sub4"])){ ?>
                                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                      <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                         <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                      </ol>
                                      <div class="carousel-inner">
                                        <div class="carousel-item active">
                                          <img class="d-block w-100" src="<?php echo BASE_URL; ?><?php echo $row["image_path"]; ?>" alt="News & Events">
                                        </div>
                                        <div class="carousel-item">
                                          <img class="d-block w-100" src="<?php echo BASE_URL; ?><?php echo $row["image_sub1"]; ?>" alt="News & Events">
                                        </div>
                                          <div class="carousel-item">
                                          <img class="d-block w-100" src="<?php echo BASE_URL; ?><?php echo $row["image_sub2"]; ?>" alt="News & Events">
                                        </div>
                                          <div class="carousel-item">
                                          <img class="d-block w-100" src="<?php echo BASE_URL; ?><?php echo $row["image_sub3"]; ?>" alt="News & Events">
                                        </div>
                                        
                                      </div>
                                    </div>
                                  <?php }else if(!empty($row["image_sub2"])){ ?>
                                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                      <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                      </ol>
                                      <div class="carousel-inner">
                                        <div class="carousel-item active">
                                          <img class="d-block w-100" src="<?php echo BASE_URL; ?><?php echo $row["image_path"]; ?>" alt="News & Events">
                                        </div>
                                        <div class="carousel-item">
                                          <img class="d-block w-100" src="<?php echo BASE_URL; ?><?php echo $row["image_sub1"]; ?>" alt="News & Events">
                                        </div>
                                        <div class="carousel-item">
                                          <img class="d-block w-100" src="<?php echo BASE_URL; ?><?php echo $row["image_sub2"]; ?>" alt="News & Events">
                                        </div>
                                      </div>
                                    </div>
                                  <?php }else if(!empty($row["image_sub1"]) && empty($row["image_sub2"])){ ?>
                                    
                                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                      <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                      </ol>
                                      <div class="carousel-inner">
                                        <div class="carousel-item active">
                                          <img class="d-block w-100" src="<?php echo BASE_URL; ?><?php echo $row["image_path"]; ?>" alt="News & Events">
                                        </div>
                                        <div class="carousel-item">
                                          <img class="d-block w-100" src="<?php echo BASE_URL; ?><?php echo $row["image_sub1"]; ?>" alt="News & Events">
                                        </div>
                                      </div>
                                    </div>
                                  <?php } else { ?>
                                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                      <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                      </ol>
                                      <div class="carousel-inner">
                                        <div class="carousel-item active">
                                          <img class="d-block w-100" src="<?php echo BASE_URL; ?><?php echo $row["image_path"]; ?>" alt="News & Events">
                                        </div>
                                      </div>
                                    </div>
                                  <?php }  ?>
                                
                           </div>
                            <h3 class="event-title"><?php echo $row["subject"]; ?></h3>
                            <div class="event-meta">
                                <div class="event-date">
                                    <i class="fa fa-calendar"></i>
                                    <span><?php echo date('F d, Y',strtotime($row["date"])); ?></span>
                                </div>
                                <!-- <div class="event-time">
                                    <i class="fa fa-clock-o"></i>
                                    <span>12.30AM-05.30PM</span>
                                </div>
                                <div class="event-location">
                                    <i class="fa fa-map-marker"></i>
                                    <span>Venue A, Main Campus</span>
                                </div> -->
                            </div>
                            <div class="event-desc">
                                <p>
                                    <?php echo $row["description"]; ?>
                                </p>
                            </div>
                        </div>
                        <?php } } ?>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="sidebar-area">
                            <div class="latest-courses">
                                <h3 class="title">Recent News</h3>
                                <?php $sql = "SELECT * FROM tbl_website_news WHERE NOT row_id = '$myId' AND status = '0' order by date desc LIMIT 5";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        while($row = mysqli_fetch_assoc($result)) { ?>
                                <div class="post-item">
                                    <a href="newsDetail.php?news_id=<?php echo base64_encode($row['row_id'])?>">
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="post-img">
                                                    <img src="<?php echo BASE_URL; ?><?php echo $row["image_path"]; ?>" alt="" class="recent_news">
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="post-desc">
                                                    <h4><?php echo $row["subject"]; ?></h4>
                                                    <span class="duration"> 
                                                        <i class="fa fa-calendar" aria-hidden="true"></i> <?php echo date('F d, Y',strtotime($row["date"])); ?>
                                                    </span> 
                                                    <span class="price"><?php echo substr($row["description"],0,30); ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <?php } } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Event Details End -->

       

<?php include 'includes/connectionClose.php'; ?>
<?php include 'includes/footer.php'; ?> 