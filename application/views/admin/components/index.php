	<?= $header ?>

	<!-- Navbar -->
	<?= $topbar ?>
	<!-- /.navbar -->

	<!-- Main Sidebar Container -->
	<?= $sidebar ?>

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-10">
						<h1 class="m-0 text-dark"><?= $title ?></h1>
					</div>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page"><?= $hal  ?></li>
						</ol>
					</nav>
				</div>
			</div>
		</div>

		<section class="content">
			<div class="container-fluid">

				<?= $content ?>


			</div>
		</section>
	</div>

	<?= $footer ?>
