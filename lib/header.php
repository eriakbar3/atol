<nav class="navbar navbar-default nav-border">
  <div class="container">

    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo $titik; ?>">Wedding</a>
    </div>

    <ul class="nav navbar-nav navbar-right col-sm-6">
      <li ><a href="<?php echo $titik; ?> ">Home</a></li>
      <li><a href="<?php echo $titik; ?>barang">Barang</a></li>
      <li><a href="<?php echo $titik; ?>paket">Paket</a></li>
      <li><a href="<?php echo $titik; ?>buat-acara">Buat Acara</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">User
          <span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
          <?php if (!isset($_SESSION['username'])){ ?>
            <li><a href="<?php echo $titik; ?>login.php">Login</a></li>
            <li><a href="<?php echo $titik; ?>register.php">Register</a></li>
          <?php }else { ?>
            <li><a href="<?php echo $titik; ?>account">Profile</a></li>
            <li><a href="<?php echo $titik; ?>logout.php">Logout</a></li>
          <?php } ?>

        </ul>
      </li>
    </ul>
  </div>
</nav>
