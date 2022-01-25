<div class="container-fluid">

    <div class="row">
        <div class="col-sm-12">
            <div class="alert alert-dark dark" role="alert">
                    <h6>Selamat Datang, <strong><?=$this->session->userdata('logged_in')['fullname']?> ( <?=$this->session->userdata('logged_in')['alamat']?> ) !</strong></h6>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-xl-3 col-lg-6">
            <div class="card o-hidden">
            <div class="bg-danger b-r-4 card-body">
                <div class="media static-top-widget">
                <div class="align-self-center text-center"><i data-feather="database"></i></div>
                <div class="media-body"><span class="m-0">Penjualan Hari ini</span>
                    <h4 class="mb-0 counter">150,000</h4><i class="icon-bg" data-feather="database"></i>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3 col-lg-6">
            <div class="card o-hidden">
            <div class="bg-success b-r-4 card-body">
                <div class="media static-top-widget">
                <div class="align-self-center text-center"><i data-feather="package"></i></div>
                <div class="media-body"><span class="m-0">Jumlah Produk</span>
                    <h4 class="mb-0 counter">4</h4><i class="icon-bg" data-feather="package"></i>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3 col-lg-6">
            <div class="card o-hidden">
            <div class="bg-primary b-r-4 card-body">
                <div class="media static-top-widget">
                <div class="align-self-center text-center"><i data-feather="inbox"></i></div>
                <div class="media-body"><span class="m-0">Jumlah Transaksi</span>
                    <h4 class="mb-0 counter">10</h4><i class="icon-bg" data-feather="inbox"></i>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3 col-lg-6">
            <div class="card o-hidden">
            <div class="bg-warning b-r-4 card-body">
                <div class="media static-top-widget">
                <div class="align-self-center text-center"><i data-feather="user"></i></div>
                <div class="media-body"><span class="m-0"><?=$this->session->userdata('logged_in')['fullname']?></span>
                    <h5 class="mb-0">Nama UMKM</h5><i class="icon-bg" data-feather="user"></i>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
