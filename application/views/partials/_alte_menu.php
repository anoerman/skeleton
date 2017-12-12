	<!-- =========================== MENU =========================== -->
	
	<!-- Left side column. contains the sidebar -->
	<aside class="main-sidebar">
		<!-- sidebar: style can be found in sidebar.less -->
		<section class="sidebar">
			<!-- search form -->
			<form action="#" method="get" class="sidebar-form">
				<div class="input-group">
					<input type="text" name="q" class="form-control" placeholder="Search...">
					<span class="input-group-btn">
						<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
						</button>
					</span>
				</div>
			</form>
			<!-- /.search form -->
			<!-- sidebar menu: : style can be found in sidebar.less -->
			<ul class="sidebar-menu">
				<li class="header">MAIN NAVIGATION</li>
				<li>
					<a href="<?php echo base_url() ?>">
						<i class="fa fa-home"></i> <span>Home</span>
					</a>
				</li>
				<?php if ($this->ion_auth->logged_in()): ?>
					<?php if ($this->ion_auth->is_admin()): ?>
						<!-- Menu Admin -->
						<li class="header">Settings</li>
						<li>
							<a href="<?php echo base_url('auth') ?>">
								<i class="fa fa-users"></i> <span>Users</span>
							</a>
						</li>
						
					<?php endif ?>
					<li>
						<a href="<?php echo base_url('auth/logout') ?>">
							<i class="fa fa-sign-out"></i> <span>Logout</span>
						</a>
					</li>
				<?php else: ?>
					<li>
						<a href="<?php echo base_url('auth/login') ?>">
							<i class="fa fa-sign-in"></i> <span>Login</span>
						</a>
					</li>
				<?php endif ?>
			</ul>
		</section>
		<!-- /.sidebar -->
	</aside>

	<!-- =========================== / MENU =========================== -->
