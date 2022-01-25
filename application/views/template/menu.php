<div class="sidebar-wrapper">
	<div>
	<div class="logo-wrapper"><a href="index.html"><img class="img-fluid for-light" src="<?=base_url('template')?>/assets/images/logo/logo.png" alt=""><img class="img-fluid for-dark" src="<?=base_url('template')?>/assets/images/logo/logo_dark.png" alt=""></a>
		<div class="back-btn"><i class="fa fa-angle-left"></i></div>
		<div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
	</div>
	<div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid" src="<?=base_url('template')?>/assets/images/logo/logo-icon.png" alt=""></a></div>
	<nav class="sidebar-main">
              <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
              <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
					<li class="back-btn"><a href="index.html"><img class="img-fluid" src="../assets/images/logo/logo-icon.png" alt=""></a>
					<div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
					</li>
					<li class="sidebar-list">  
					<a class="sidebar-link sidebar-title link-nav" href="<?=site_url('dashboard')?>"><i data-feather="home"> </i><span>Dashboard</span></a>
					</li>
					<li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i data-feather="box"></i><span>Product</span></a>
						<ul class="sidebar-submenu">
						<li><a href="<?=site_url('product')?>">List Product</a></li>
						<li><a href="<?=site_url('category')?>">Category</a></li>
						</ul>
					</li>
					<li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="<?=site_url('transaction')?>"><i data-feather="refresh-cw"> </i><span>Transaction</span></a></li>
					<li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="<?=site_url('transaction/history')?>"><i data-feather="activity"> </i><span>History</span></a></li>
					</ul>
              </div>
              <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
		</nav>
	</div>
</div>
