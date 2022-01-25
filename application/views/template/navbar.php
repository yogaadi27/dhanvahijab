<!-- Page Header Start-->
<div class="page-header">
	<div class="header-wrapper row m-0">
		<div class="header-logo-wrapper col-auto p-0">
			<div class="logo-wrapper"><a href="index.html"><img class="img-fluid" src="../assets/images/logo/logo.png" alt=""></a></div>
			<div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i></div>
		</div>
		<div class="left-header col horizontal-wrapper ps-0">
			<ul class="horizontal-menu">
				<li class="mega-menu outside"><a class="nav-link" href="javascript:void(0);"><i data-feather="layers"></i><span>Bonus Ui</span></a>
				</li>
			</ul>
		</div>
		<div class="nav-right col-8 pull-right right-header p-0">
			<ul class="nav-menus">
			
				<li>
					<div class="mode"><i class="fa fa-moon-o"></i></div>
				</li>
				<li class="maximize"><a class="text-dark" href="javascript:void(0);" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
				<li class="profile-nav onhover-dropdown p-0 me-0">
					<div class="media profile-media"><img class="b-r-10" src="../assets/images/dashboard/profile.jpg" alt="">
						<div class="media-body"><span><?=$this->session->userdata('logged_in')['fullname']?></span>
							<p class="mb-0 font-roboto"><?=$this->session->userdata('logged_in')['role']?> <i class="middle fa fa-angle-down"></i></p>
						</div>
					</div>
					<ul class="profile-dropdown onhover-show-div">
						<li><a href="#"><i data-feather="user"></i><span>Account </span></a></li>
						<li><a href="#"><i data-feather="settings"></i><span>Settings</span></a></li>
						<li><a href="<?=site_url('auth/logout')?>"><i data-feather="log-in"> </i><span>Log Out</span></a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>
<!-- Page Header Ends    
