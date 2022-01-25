
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="<?=base_url()?>/assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="<?=base_url()?>/assets/images/favicon.png" type="image/x-icon">
    <title>IMIS ( inventory management information system ) </title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/feather-icon.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/select2.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/sweetalert2.css">
    <!-- Plugins css start-->
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/style.css">
    <link id="color" rel="stylesheet" href="<?=base_url()?>/assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/responsive.css">
    <style>
        .captcha-box { border-radius: 5px; border: 2px solid; padding: 2rem; max-width: 400px; margin: 20px 0; }
        #canvas {
            width: 200px;
            height: 60px;
        }
    </style>
  </head>
  <body>
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper">
      <div class="container-fluid p-0">
        <!-- login page start-->
        <div class="authentication-main mt-0">
          <div class="row">
            <div class="col-md-12">
              <div class="auth-innerright auth-bg">
                <div class="authentication-box">
                  <div class="mt-4">
                    <div class="card-body p-0">
                      <div class="cont text-center">
                        <div> 
                          <form class="theme-form" id="form-login">
                            <h4>IMIS DHANVAHIJAB</h4>
                            <h6>( Inventory Management Information System )</h6>
                            <div class="form-group">
                              <label class="col-form-label pt-0">Email</label>
                              <input class="form-control" type="text" name="username" required="">
                            </div>
                            <div class="form-group">
                              <label class="col-form-label">Password</label>
                              <input class="form-control" type="password" name="password" required="">
                            </div>
                            <canvas id="canvas"></canvas>
                            <div class="form-group">
                              <label class="col-form-label">Captcha</label>
                              <input class="form-control" type="text" name="code" required="">
                            </div>
                            <div class="form-group row mt-3 mb-0">
                              <button class="btn btn-primary btn-block" type="submit"><i class="fa fa-paper-plane"></i> LOGIN</button>
                            </div>
                          </form>
                        </div>
                        <div class="sub-cont">
                          <div class="img">
                            <div class="img__text m--up">
                              <h2>UMKM Baru ?</h2>
                              <p>Daftar dan temukan banyak peluang baru!</p>
                            </div>
                            <div class="img__text m--in">
                              <h2>Salah satu dari kami ?</h2>
                              <p>Jika Anda sudah memiliki akun, cukup masuk. Kami merindukan Anda!</p>
                            </div>
                            <div class="img__btn"><span class="m--up">Sign up</span><span class="m--in">Sign in</span></div>
                          </div>
                          <div>
                            <form class="theme-form" id="form-registrasi">
                              <h4 class="text-center">UMKM BARU</h4>
                              <h6 class="text-center">Isilah Form Registrasi dibawah ini !</h6>
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <input class="form-control" type="text" name="fullname" placeholder="Nama UMKM">
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <textarea class="form-control" type="text" name="alamat" placeholder="Alamat"></textarea>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <input class="form-control" type="text" name="no_tlp" placeholder="No Telepon / HP">
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group">
                                  <select class="form-control form-control-primary-fill col-sm-12" name="lapangan_usaha_id" required>
                                        <option>-- Pilih Sektor Lapangan Usaha --</option>
                                     
                                    </select>                                  
                                    </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <input class="form-control" type="email" name="username" placeholder="Email Aktif">
                              </div>
                              <div class="form-group">
                                <input class="form-control" type="password" name="password" placeholder="Buat Password Login">
                              </div>
                              <div class="row">
                                <div class="col-sm-4">
                                  <button class="btn btn-primary" type="submit"><i class="fa fa-paper-plane"></i> Daftar</button>
                                </div>
                                <div class="col-sm-8">
                                  <div class="text-left mt-2 m-l-20">Sudah punya akun ? Silahkan <strong>Sign-In</strong> !</div>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- login page end-->
      </div>
    </div>
    <!-- latest jquery-->
    <script src="<?=base_url()?>/assets/js/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap js-->
    <script src="<?=base_url()?>/assets/js/bootstrap/popper.min.js"></script>
    <script src="<?=base_url()?>/assets/js/bootstrap/bootstrap.js"></script>
    <!-- feather icon js-->
    <script src="<?=base_url()?>/assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="<?=base_url()?>/assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- Sidebar jquery-->
    <script src="<?=base_url()?>/assets/js/sidebar-menu.js"></script>
    <script src="<?=base_url()?>/assets/js/config.js"></script>
    <!-- Plugins JS start-->
    <script src="<?=base_url()?>/assets/js/login.js"></script>
    <script src="<?=base_url()?>/assets/js/select2/select2.full.min.js"></script>
    <script src="<?=base_url()?>/assets/js/select2/select2-custom.js"></script>
    <script src="<?=base_url()?>/assets/js/notify/bootstrap-notify.min.js"></script>
    <script src="<?=base_url()?>/assets/js/notify/notify-script.js"></script>
    <script src="<?=base_url()?>/assets/js/tooltip-init.js"></script>
    <script src="<?=base_url()?>/assets/js/sweet-alert/sweetalert.min.js"></script>
    <!-- <script src="<?=base_url()?>/assets/js/sweet-alert/app.js" ></script> -->

    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="<?=base_url()?>/assets/js/script.js"></script>
    <!-- captcha -->
    <script type="text/javascript" src="<?=base_url()?>/assets/js/jquery-captcha-lgh.min.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
    <script>
      // step-1
      const captcha = new Captcha($('#canvas'),{
        length: 4
      });
      // api
      //captcha.refresh();
      //captcha.getCode();
      //captcha.valid("");

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
                        // if (msg=='success') {
                        //     $.notify({
                        //         title: "<strong>Login Sukses....!!!</strong> ",
                        //         message: "Anda akan segera di alihkan !"

                        //     },{
                        //         type: 'success'
                        //     });
                        //     setTimeout(function () {
                        //         window.location.href = "<?=site_url('dashboard');?>"; //will redirect to your blog page (an ex: blog.html)
                        //     }, 2000);
                        //     $("#form-login")[0].reset();
                        // }else{
                        //     $.notify({
                        //         title: "<strong>Gagal Login...!!!</strong> ",
                        //         message: "- Username dan Password tidak sesuai! <br> - Akun anda belum terverifikasi, cek email untuk verifikasi ! "

                        //     },{
                        //         type: 'danger'
                        //     });
                        // }
                        // return false;
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
  </body>
</html>
