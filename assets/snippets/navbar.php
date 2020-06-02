<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top <?php if (strpos($_SERVER['SCRIPT_NAME'], 'index.php')) echo 'transparent make_transparent';  ?>">
  <!-- Navbar content -->
  <a class="navbar-brand mb-0 h1" href="index.php">
    <img src="assets/images/logo/logo_hori_white.png" height="50" alt="Verde Logo">
  </a>
  <!-- Toggler -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarVerde" aria-controls="navbarVerde" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarVerde">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="products.php">CLOTHING</a>
      </li>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about-us.php">ABOUT US</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact-us.php">CONTACT US</a>
      </li>
    </ul>

      <div class="search-box">
        <input type="text" class="search-focus" id="searchbar" placeholder="search here..." autocomplete="off">
        <i class="fas fa-search fa-lg" id="searchicon"></i>
        <span class="result">
        </span>
      </div>
    <ul class="navbar-nav mt-2 mt-lg-0 mr-0">
      <li class="nav-item dropdown">
        <!-- Button trigger modal -->

          <?php
            if($logged)
            {?>
                <button type="button" class="btn btn-link nav-link dropdown-toggle" id="navbarAccount" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="text-capitalize"><?php echo $_SESSION['fname']." "; ?></span>
                  <i class="fas fa-user-cog fa-lg" id="user_icon"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="navbarAccount">
                  <a class="dropdown-item" href="my-account.php">Account</a>
                  <a class="dropdown-item" href="logout.php">Log out</a>
                </div>
              <?php
            }else{ ?>
              <button type="button" class="btn btn-link nav-link" data-toggle="modal" data-target="#accountModal">
                <i class="fas fa-user fa-lg"></i>
              </button> <?php } ?>

        </li>
        <li class="nav-item">
          <span class="nav-link">
            <?php
              if($logged)
              {?>
                  <i class="fas fa-heart fa-lg" onclick="openNav()"></i><span class="badge badge-pill badge-danger align-top" id="count_fav"></span>
              <?php } else{ ?>
                <i class="fas fa-heart fa-lg"></i>
                <?php } ?>
          </span>
        </li>

        <span class="count"><?php include('assets/snippets/count_fav.php'); ?></span>
        <li class="nav-item">
          <span>
            <?php
              if($logged)
              {?>
                <a class="nav-link" href="cart.php"><i class="fas fa-shopping-bag fa-lg bag"></i><span class="badge badge-pill badge-danger align-top" id="count_bag"></span></a>
              <?php } else{ ?>
                <i class="fas fa-shopping-bag fa-lg nav-link"></i>
              <?php } ?>
          </span>
        </li>
      </ul>
    </div>
</nav>
