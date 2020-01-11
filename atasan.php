<nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#home">Home</a></li>
          <li><a href="#wisata">Paket Tour</a></li>
          
            <li class="menu-has-children"><a href="">Bantuan</a>
            <ul>
              <li><a href="#petunjuk">Petunjuk</a></li>
              <li><a href="#contact">Hubungi Kami</a></li>
            </ul>
          </li>
          <?php session_start();

	if(isset($_SESSION['username'])){
	?>
				<span class="element-divider place-right"></span>
				<div class="element place-right">                   
					<a class="dropdown-toggle icon-cog" href="#"></a>
					<ul class="dropdown-menu" data-role="dropdown">
						<li><a href="profil.php">Profil</a></li>
						<li class="divider"></li>
						<li><a href="logout.php">Keluar</a></li>
					</ul>
				</div>
				<a href="profil.php" class="element place-right">Selamat datang, <?php echo "$_SESSION[username]"; ?></a>
				
	<?php
	}else{
	?>
				<li class="menu-has-children"><a href="">Register</a>
            <ul>
              <li><a href="login.php">Login</a></li>
              <li><a href="register.php">Daftar</a></li>
            </ul>
	<?php
	}
	?>
        </ul>
      </nav><!-- #nav-menu-container -->
    