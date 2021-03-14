<?php 
require_once 'init.php';
require_once 'auth.php';
?>
<nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">

	<div class="navbar-header">
		<button type="button" class="navbar-toggler hamburger hamburger-close navbar-toggler-left hided" data-toggle="menubar">
			<span class="sr-only">Toggle navigation</span>
			<span class="hamburger-bar"></span>
		</button>
		<button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-collapse" data-toggle="collapse">
			<i class="icon wb-more-horizontal" aria-hidden="true"></i>
		</button>
		<div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
			<span class="navbar-brand-text hidden-xs-down"> Good Up </span>
		</div>
	</div>

	<div class="navbar-container container-fluid">
		<!-- Navbar Collapse -->
		<div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
			<!-- Navbar Toolbar -->
			<ul class="nav navbar-toolbar">
				<li class="nav-item hidden-float" id="toggleMenubar">
					<a class="nav-link" data-toggle="menubar" href="#" role="button">
						<i class="icon hamburger hamburger-arrow-left">
							<span class="sr-only">Toggle menubar</span>
							<span class="hamburger-bar"></span>
						</i>
					</a>
				</li>
			</ul>
			<!-- End Navbar Toolbar -->

			<!-- Navbar Toolbar Right -->
			<ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
				<li class="nav-item dropdown">
					<a class="nav-link navbar-avatar" data-toggle="dropdown" href="#" aria-expanded="false" data-animation="scale-up" role="button">
						<span class="avatar avatar-online">
							<img src="assets/images/logo.png" alt="Administrator">
							<i></i>
						</span>
					</a>
					<div class="dropdown-menu" role="menu">
						<a class="dropdown-item" href="logout.php" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> Logout</a>
					</div>
				</li>		
			</ul>
			<!-- End Navbar Toolbar Right -->
		</div>
		<!-- End Navbar Collapse -->
	</div>
</nav>



<div class="site-menubar">
	<div class="site-menubar-body">
		<div>
			<div>
				<ul class="site-menu" data-plugin="menu">
					<?php if ($_SESSION['user']['group_id'] == 1) : ?>
						<li class="site-menu-item <?php echo ($current_file == 'index.php') ? 'active' : ''; ?>">
							<a class="animsition-link" href="index.php">
								<i class="site-menu-icon icon fa-home" aria-hidden="true"></i>
								<span class="site-menu-title">ระบบจัดการข้อมูล</span>
							</a>
						</li>
						<li class="site-menu-item <?php echo ( in_array($current_file, array('banner.php', 'banner_add.php', 'banner_edit.php') ) ) ? 'active' : ''; ?>">
							<a class="animsition-link" href="banner.php">
								<i class="site-menu-icon icon fa-image" aria-hidden="true"></i>
								<span class="site-menu-title">แบนเนอร์</span>
							</a>
						</li>
						<li class="site-menu-item <?php echo ( in_array($current_file, array('about_us.php', 'about_us_add.php', 'about_us_edit.php') ) ) ? 'active' : ''; ?>">
							<a class="animsition-link" href="about_us.php">
								<i class="site-menu-icon icon fa-paper-plane" aria-hidden="true"></i>
								<span class="site-menu-title">เกี่ยวกับเรา</span>
							</a>
						</li>
						<li class="site-menu-item <?php echo ( in_array($current_file, array('category.php', 'category_edit.php') ) ) ? 'active' : ''; ?>">
							<a class="animsition-link" href="category.php">
								<i class="site-menu-icon icon fa-list-ul" aria-hidden="true"></i>
								<span class="site-menu-title">หมวดหมู่การบริการ</span>
							</a>
						</li>
						<li class="site-menu-item <?php echo ( in_array($current_file, array('service.php', 'service_add.php', 'service_edit.php') ) ) ? 'active' : ''; ?>">
							<a class="animsition-link" href="service.php">
								<i class="site-menu-icon icon fa-wrench" aria-hidden="true"></i>
								<span class="site-menu-title">งานบริการ</span>
							</a>
						</li>
					<?php endif ?>

				</ul>
			</div>
		</div>
	</div>
	<div class="site-menubar-footer">
		<a href="logout.php" data-placement="top" data-toggle="tooltip" data-original-title="Logout">
			<span class="icon wb-power" aria-hidden="true"></span>
		</a>
	</div>
</div>