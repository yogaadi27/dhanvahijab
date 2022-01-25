
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="<?=base_url("template")?>/assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="<?=base_url("template")?>/assets/images/favicon.png" type="image/x-icon">
    <title>Cuba - Premium Admin Template</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?=base_url("template")?>/assets/css/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="<?=base_url("template")?>/assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="<?=base_url("template")?>/assets/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="<?=base_url("template")?>/assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="<?=base_url("template")?>/assets/css/vendors/feather-icon.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url("template")?>/assets/css/select2.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url("template")?>/assets/css/sweetalert2.css">
    <!-- Plugins css start-->
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="<?=base_url("template")?>/assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="<?=base_url("template")?>/assets/css/style.css">
    <link id="color" rel="stylesheet" href="<?=base_url("template")?>/assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="<?=base_url("template")?>/assets/css/responsive.css">
	<style>
        .captcha-box { border-radius: 5px; border: 2px solid; padding: 2rem; max-width: 400px; margin: 20px 0; }
        #canvas {
            width: 200px;
            height: 60px;
        }
    </style>
  </head>
  <body>
    <!-- login page start-->
    <div class="container-fluid p-0">
      <div class="row m-0">
        <div class="col-12 p-0">    
          <div class="login-card">
            <div>
              <div><a class="logo" href="index.html"><img class="img-fluid for-light" src="<?=base_url("template")?>/assets/images/logo/login.png" alt="looginpage"><img class="img-fluid for-dark" src="<?=base_url("template")?>/assets/images/logo/logo_dark.png" alt="looginpage"></a></div>
              <div class="login-main">  
                <form class="theme-form" id="form-login">
                  <h4>Sign in to account</h4>
                  <p>Enter your email & password to login</p>
                  <div class="form-group">
                    <label class="col-form-label">Email</label>
                    <input class="form-control" type="email" name="username" required="">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label">Password</label>
                    <div class="form-input position-relative">
                      <input class="form-control" type="password" name="password" required="">
                      <div class="show-hide"><span class="show">                         </span></div>
                    </div>
                  </div>
                  <div class="form-group mb-0">
				 	<canvas id="canvas"></canvas>
					<div class="form-group">
						<label class="col-form-label">Captcha</label>
						<input class="form-control" type="text" name="code" required="">
					</div>
                    <div class="text-end mt-3">
                      <button class="btn btn-primary btn-block w-100" type="submit">Sign in</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- latest jquery-->
      <script src="<?=base_url("template")?>/assets/js/jquery-3.5.1.min.js"></script>
      <!-- Bootstrap js-->
      <script src="<?=base_url("template")?>/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
      <!-- feather icon js-->
      <script src="<?=base_url("template")?>/assets/js/icons/feather-icon/feather.min.js"></script>
      <script src="<?=base_url("template")?>/assets/js/icons/feather-icon/feather-icon.js"></script>
      <!-- scrollbar js-->
      <!-- Sidebar jquery-->
      <script src="<?=base_url("template")?>/assets/js/config.js"></script>
      <!-- Plugins JS start-->
	  <script src="<?=base_url("template")?>/assets/js/select2/select2.full.min.js"></script>
    <script src="<?=base_url("template")?>/assets/js/select2/select2-custom.js"></script>
    <script src="<?=base_url("template")?>/assets/js/notify/bootstrap-notify.min.js"></script>
    <script src="<?=base_url("template")?>/assets/js/notify/notify-script.js"></script>
    <script src="<?=base_url("template")?>/assets/js/tooltip-init.js"></script>
    <script src="<?=base_url("template")?>/assets/js/sweet-alert/sweetalert.min.js"></script>
      <!-- Plugins JS Ends-->
      <!-- Theme js-->
      <script src="<?=base_url("template")?>/assets/js/script.js"></script>
      <!-- login js-->
      <!-- Plugin used-->
	   <!-- captcha -->
	   <script type="text/javascript" src="<?=base_url('template')?>/assets/js/jquery-captcha-lgh.min.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
    <script>
      // step-1
      const captcha = new Captcha($('#canvas'),{
        length: 4
      });
      
      $('#form-login').on('submit', function(e) {
        var formData = new FormData(this);
        e.preventDefault();
        const ans = captcha.valid($('input[name="code"]').val());
        captcha.refresh();
        // alert(ans);
        if (ans==true) {
            // alert('lanjutkan');
            $.notify({
                title: "<strong>Harap Tunggu ....!!!</strong> ",
                message: "Hingga notifikasi login berhasil !"
            },{
                type: 'warning'
            });
            $.ajax({
                    method: "POST",
                    contentType:false,
                    catch:false,
                    processData:false,
                    data:formData,
                    url: "<?php echo site_url('auth/cek_login') ?>",
                    })
                    .done(function( msg ) {
                    console.log(msg);
                        if (msg=='success') {
                            $.notify({
                                title: "<strong>Login Sukses....!!!</strong> ",
                                message: "Anda akan segera di alihkan !"

                            },{
                                type: 'success'
                            });
                            setTimeout(function () {
                                window.location.href = "<?=site_url('dashboard');?>"; //will redirect to your blog page (an ex: blog.html)
                            }, 2000);
                            $("#form-login")[0].reset();
                        }else{
                            $.notify({
                                title: "<strong>Gagal Login...!!!</strong> ",
                                message: "- Username dan Password tidak sesuai! <br> - Akun anda belum terverifikasi, cek email untuk verifikasi ! "

                            },{
                                type: 'danger'
                            });
                        }
                        return false;
                    })
                    .fail(function(jqXHR,textStatus,error) {
                        alert(error);
                        console.log(jqXHR.responseText);
                    });


        }else{
            alert('capcha salah');
        }
      });


      $("#form-registrasi").on('submit',function (e) {
    // alert("tombal simpan");
            e.preventDefault();
            var formData = new FormData(this);
            swal({
            title: "Anda Yakin Ingin Daftar ?",
            text: "Pastikan Email Anda Aktif untuk verifikasi !",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            })
            .then((lanjutkan) => {
                if (lanjutkan) {

                    $.notify({
                        title: "<strong>Harap Tunggu ....!!!</strong> ",
                        message: "Hingga notifikasi pendaftaran berhasil !"
                    },{
                        type: 'warning'
                    });

                    $.ajax({
                    method: "POST",
                    contentType:false,
                    catch:false,
                    processData:false,
                    data:formData,
                    url: "<?php echo site_url('auth/register') ?>",
                    })
                    .done(function( msg ) {
                    console.log(msg);
                        if (msg=='success') {
                            $.notify({
                                title: "<strong>Success....!!!</strong> ",
                                message: "Registered Done !"

                            },{
                                type: 'success'
                            });
                            swal("Pendaftaran Berhasil! Silahkan Cek Email Anda untuk Verifikasi !", {
                            icon: "success",
                            });
                            $("#form-registrasi")[0].reset();
                        }else{
                            $.notify({
                                title: "<strong>Failed....!!!</strong> ",
                                message: "Server has a problem !"

                            },{
                                type: 'danger'
                            });
                        }
                        return false;
                    })
                    .fail(function(jqXHR,textStatus,error) {
                        alert(error);
                        console.log(jqXHR.responseText);
                    });

                   
                } 
            });    
        });
    </script>
    </div>
  </body>
</html>
