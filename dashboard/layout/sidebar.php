	<div class="wrapper row-offcanvas row-offcanvas-left">
		<!-- BEGIN SIDEBAR -->
		<aside class="left-side sidebar-offcanvas">
			<section class="sidebar">
				<div class="user-panel">
					<div class="pull-left image">					
						<img src="<?php echo $_SESSION['foto']; ?>" class="img-circle" alt="User Image">
					</div>
					<div class="pull-left info"><br/>
						<p><?php echo $_SESSION['name']; ?></p>
						<a href="?profile=<?php echo $_SESSION['id']; ?>"><i class="fa fa-circle text-green"></i> <?php echo $_SESSION['username']; ?></a>
					</div>
				</div><br/>			
				<ul class="sidebar-menu">
					<li class="active">
						<a href="../index.php">
							<i class="fa fa-home"></i><span>Home</span>
						</a>
					</li>
				<?php 
					if (isset($_SESSION['access'])) {
						if ($_SESSION['access'] == 'admin') {
				?>					
					<li class="menu">
						<a href="#">
							<i class="fa fa-users"></i><span>Users</span>
							<i class="fa fa-angle-left pull-right"></i>
						</a>
						<ul class="sub-menu">
							<li><a href="?users=admin">Admin</a></li>
							<li><a href="?users=guru">Guru</a></li>
							<li><a href="?users=siswa">Siswa</a></li>
						</ul>
					</li>
					<li class="menu">
						<a href="#">
							<i class="fa fa-laptop"></i><span>Perangkat Labor</span>
							<i class="fa fa-angle-left pull-right"></i>
						</a>
					</li>
					<li class="menu">
						<a href="#">
							<i class="fa fa-align-left"></i><span>Akademik</span>
							<i class="fa fa-angle-left pull-right"></i>
						</a>
					</li>
					<li class="menu">
						<a href="#">
							<i class="fa fa-bar-chart-o"></i><span>Nilai</span>
							<i class="fa fa-angle-left pull-right"></i>
						</a>
					</li>
					<li class="menu">
						<a href="#">
							<i class="fa fa-calendar"></i><span>Jadwal Laboratorium</span>
							<i class="fa fa-angle-left pull-right"></i>
						</a>
					</li>				
					<li class="menu">
						<a href="#">
							<i class="fa fa-book"></i><span>Modul Pembelajaran</span>
							<i class="fa fa-angle-left pull-right"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-camera"></i><span>Gallery</span>
						</a>
					</li>
				<?php
						}elseif ($_SESSION['access'] == 'guru') {
				?>
					<li class="menu">
						<a href="#">
							<i class="fa fa-laptop"></i><span>Perangkat Labor</span>
							<i class="fa fa-angle-left pull-right"></i>
						</a>
					</li>
					<li class="menu">
						<a href="#">
							<i class="fa fa-bar-chart-o"></i><span>Nilai</span>
							<i class="fa fa-angle-left pull-right"></i>
						</a>
					</li>
					<li>
						<a href="?jadwal=laboratorium">
							<i class="fa fa-calendar"></i><span>Jadwal Laboratorium</span>
						</a>
					</li>
					<li>
						<a href="?jadwal=absen">
							<i class="fa fa-calendar"></i><span>Absensi</span>
						</a>
					</li>				
					<li class="menu">
						<a href="#">
							<i class="fa fa-book"></i><span>Modul Pembelajaran</span>
							<i class="fa fa-angle-left pull-right"></i>
						</a>
					</li>
				<?php
						}elseif ($_SESSION['access'] == 'siswa') {
				?>
					<li class="menu">
						<a href="#">
							<i class="fa fa-bar-chart-o"></i><span>Nilai</span>
							<i class="fa fa-angle-left pull-right"></i>
						</a>
					</li>
					<li class="menu">
						<a href="#">
							<i class="fa fa-calendar"></i><span>Jadwal Laboratorium</span>
							<i class="fa fa-angle-left pull-right"></i>
						</a>
					</li>				
					<li class="menu">
						<a href="#">
							<i class="fa fa-book"></i><span>Modul Pembelajaran</span>
							<i class="fa fa-angle-left pull-right"></i>
						</a>
					</li>
				<?php
						}
					}
				?>										
				</ul>
			</section>
		</aside>
		<!-- END SIDEBAR -->