<!DOCTYPE html>
<html lang="en">

<?=$this->load->view('template/head');?>
  
<body>
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
			<?=$this->load->view('template/navbar');?>
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
				<?=$this->load->view('template/menu');?>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-6">
                  <h3><?=$title?> Page</h3>
                </div>
                <div class="col-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item"></li>Home</li>
                    <li class="breadcrumb-item active"><?=$title?></li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
					<?=$page?>
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
				<?=$this->load->view('template/footer');?>

      </div>
    </div>
		
		<?=$this->load->view('template/js');?>
  </body>
</html>
