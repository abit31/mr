<?php require_once('config/main.php');
$data_pembelian = mysqli_query($GLOBALS["___mysqli_ston"], "select * from user");
$data_teknisi=mysqli_query($GLOBALS["___mysqli_ston"], "select * from teknisi1");
$data_customer=mysqli_query($GLOBALS["___mysqli_ston"], "select * from customer");
$data_spk=mysqli_query($GLOBALS["___mysqli_ston"], "select * from teknisi");
 ?>
<div class="row">
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3><?php echo mysqli_num_rows($data_customer); ?></h3>
          <p>Datacustomer</p>
        </div>
        <div class="icon">
          <i class="fa fa-user"></i>
        </div>
        <a href="./?page=data_user" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div><!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
          <h3><?php echo mysqli_num_rows($data_pembelian); ?></h3>
          <p>Data Pembelian</p>
        </div>
        <div class="icon">
          <i class="fa fa-money"></i>
        </div>
        <a href="./?page=data_pembelian" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div><!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3><?php echo mysqli_num_rows($data_teknisi); ?></h3>
          <p>Data Teknisi</p>
        </div>
        <div class="icon">
          <i class="fa fa-group"></i>
        </div>
        <a href="./?page=data_teknisi" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div><!-- ./col -->
    
  </div><!-- /.row -->
  <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>