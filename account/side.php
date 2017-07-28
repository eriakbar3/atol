<div class="col-sm-3">
  <div class="panel panel-default">
      <div class="panel-body">
        <div class="">
          <div class="pull-left">
            <img src="<?php echo $side?>../assets/img/acc.png" alt="" class="img-circle img-responsive" width="60px" height="70px"/>
          </div>
          <div class="pull-left" style="margin-left:5px;">
            <h5 style="color:blue"><?php echo $_SESSION['username']; ?></h5>
          </div>
        </div>
        <ul class="col-sm-12 nav nav-pills nav-stacked">
          <li><a href="<?php echo $side?>">Home</a></li>
          <li><a href="<?php echo $side?>edit-profile">Edit Profile</a></li>
          <li><a href="<?php echo $side?>ubah-password">Ubah Password</a></li>
          <li><a href="<?php echo $side?>transaksi">Transaksi</a></li>
          <li><a href="<?php echo $side?>konfirmasi">Konfirmasi Pembayaran</a></li>
          <li><a href="<?php echo $side?>agenda">Agenda</a></li>
        </ul>
      </div>
    </div>
</div>
