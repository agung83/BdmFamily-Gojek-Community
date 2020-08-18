<aside class="main-sidebar sidebar-dark-primary elevation-4 ">
	<!-- Brand Logo -->
	<a href="index3.html" class="brand-link bg-success">
		<img src=" <?= base_url() ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
		<span class="brand-text font-weight-lighter">BDM Family</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar" style="background-color: darkslategrey;">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">

				<img src="<?= base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
			</div>
			<div class="info">
				<a href="#" class="d-block">Alexander Pierce</a>
			</div>
		</div>

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
				<li class="nav-item has-treeview menu-open">
					<a href="<?= base_url('Home') ?>" class="nav-link bg-success">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>
							Home
							<i class="right fas fa-angle-left"></i>
						</p>
					</a>

				</li>

				<li class="nav-item has-treeview">
					<a href="" class="nav-link">
						<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-archive-fill mb-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM6 7a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1H6zM.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8H.8z" />
						</svg>
						<p>
							Kelola Data Master
							<i class="fas fa-angle-left right"></i>

						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?= base_url('userAdministrator') ?>" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Admin</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('Members') ?>" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Data Anggota</p>
							</a>
						</li>

					</ul>
				</li>

			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>
