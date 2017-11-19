 <?php $this->load->view('Templates/User/Header');?>
 <div class="slider">
    <div id="about-slider">
      <div id="carousel-slider" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators visible-xs">
          <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-slider" data-slide-to="1"></li>
          <li data-target="#carousel-slider" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
          <div class="item active">
            
            <div class="carousel-caption">

              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
              </div>
            </div>
          </div>
          <center>
          <h2>
                Selamat Datang <b><?php echo $this->session->userdata('nama_member'); ?></b>
                </h2>
          </center>
      
      </div>
      <!--/#carousel-slider-->
    </div>
    <!--/#about-slider-->
  </div>
  <!--/#slider-->
<?php $this->load->view('Templates/User/Footer');?>