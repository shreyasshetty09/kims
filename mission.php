<?php

//ck1end

 include 'includes/header.php'; ?>
<?php include 'includes/connection.php';  ?>

<style type="text/css">
  .cardWidthHeight{
    background: #f8f9fa;
    color: #ca3838;
  }
 @media (min-width:775px) and (max-width: 2400px){
  .cardWidthHeight{
    height: 150px;
    padding: 10px;
    background: #000000b8;
    color: #ffff;
  }
}
</style>

<div class="containerr overview_section">
  <div class="row mt-2">
      <div class="col-12">
          
          <h1 class="page-title page_heading" style="font-size: 24px !important;font-weight: 400 !important;color: #ffffff;background: #2c2c2c59">Vision & Mission</h1>
      </div>
  </div>
  <div class="row row1">
        <div class="col-lg-6 col-md-12 col-sm-12 col-12 p-4">
            <div class="card card-1 text-center cardWidthHeight">
            <h3 style="color: white"> <i class="fa fa-eye" aria-hidden="true"></i>VISION</h3>
            <p class="fontSize" style="text-align: justify-all;">Companions of Jesus marching together with others towards building a humane society</p>
          </div>
      </div>
      <div class="col-lg-6 col-md-12 col-sm-12 col-12  p-4">
        <div class="card card-2 text-center cardWidthHeight">
            <h3 style="color: white"><img src="images/about/mission.png" width="30" alt="Mission"/>MISSION</h3>
            <p class="fontSize" style="text-align: justify-all;">Inspired by the vision of the gospel, Labour with others to buld a transformed society that upholds the dignity of the marginalized by accompaniment and value based formation</p>
          </div>
      </div>
  </div>
</div>
<?php include 'includes/connectionClose.php'; ?>
<?php include 'includes/footer.php'; ?> 