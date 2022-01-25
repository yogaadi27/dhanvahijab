<div class="container-fluid">
	<div class="row">
    	<div class="col-sm-12">
			<div class="card">
                  <div class="card-body">
				  <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal">Tambah Produk</button>
                    <div class="table-responsive product-table">
                      <table class="display" id="table-produk">
                        <thead>
                          <tr>
                            <th>Foto</th>
                            <th>Produk</th>
                            <th>Stok</th>
                            <th>Harga</th>
                            <th>Status</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                        </tbody>
                      </table>
                    </div>
                  </div>
			</div>
		</div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
	<div class="modal-content">
		<div class="modal-header">
		<h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
		<button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<form class="form theme-form" id="form-add-product">
		<div class="modal-body">
			<div class="row">
				<div class="col">
					<div class="mb-3 row">
					<label class="col-sm-3 col-form-label">Nama Product</label>
					<div class="col-sm-9">
						<input class="form-control" name="product_name" id="product_name" type="text" required>
					</div>
					</div>
					<div class="mb-3 row">
					<label class="col-sm-3 col-form-label">Deskripsi Product</label>
					<div class="col-sm-9">
						<textarea class="form-control" name="product_description" id="product_description" required></textarea>
					</div>
					</div>
					
					<div class="mb-3 row">
					<label class="col-sm-3 col-form-label">Stock</label>
					<div class="col-sm-9">
						<input class="form-control digits" type="number" name="stock" id="stock" required>
					</div>
					</div>
					<div class="mb-3 row">
					<label class="col-sm-3 col-form-label">Harga</label>
					<div class="col-sm-9">
						<input class="form-control digits" type="number" name="cost" id="cost" required>
					</div>
					</div>
					<div class="mb-3 row">
						<label class="col-sm-3 col-form-label">Upload Foto</label>
						<div class="col-sm-9">
							<input class="form-control" type="file" name="userfile" id="userfile">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal-footer">
		<button class="btn btn-primary" type="button" data-bs-dismiss="modal">Tutup</button>
		<button class="btn btn-secondary" type="submit" name="submit">Simpan</button>
		</div>
		</form>
	</div>
	</div>
</div>

<div class="modal fade" id="modal_edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
	<div class="modal-content">
		<div class="modal-header">
		<h5 class="modal-title" id="exampleModalLabel">Edit Produk</h5>
		<button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<form class="form theme-form" id="form-update-product">
		<div class="modal-body">
			<div class="row">
				<div class="col">
					<div class="mb-3 row">
					<label class="col-sm-3 col-form-label">Nama Product</label>
					<div class="col-sm-9">
						<input class="form-control" name="product_name" id="edit_product_name" type="text" required>
						<input type="hidden" name="id_product" id="id_product">
					</div>
					</div>
					<div class="mb-3 row">
					<label class="col-sm-3 col-form-label">Deskripsi Product</label>
					<div class="col-sm-9">
						<textarea class="form-control" name="product_description" id="edit_product_description" required></textarea>
					</div>
					</div>
					
					<div class="mb-3 row">
					<label class="col-sm-3 col-form-label">Stock</label>
					<div class="col-sm-9">
						<input class="form-control digits" type="number" name="stock" id="edit_stock" required>
					</div>
					</div>
					<div class="mb-3 row">
					<label class="col-sm-3 col-form-label">Harga</label>
					<div class="col-sm-9">
						<input class="form-control digits" type="number" name="cost" id="edit_cost" required>
					</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal-footer">
		<button class="btn btn-primary" type="button" data-bs-dismiss="modal">Tutup</button>
		<button class="btn btn-secondary" type="submit" name="submit">Simpan</button>
		</div>
		</form>
	</div>
	</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>
<script>
$(document).ready(function() {

	var table;
	//datatables
	table = $('#table-produk').DataTable({ 

		"processing": true, 
		"serverSide": true, 
		"order": [], 

		"ajax": {
			"url": "<?php echo site_url('product/ajax_list_produk')?>",
			"type": "POST",
			
		},
		
		"dom": 'lBfrtip',
		"pageLength": 10, 
		buttons: [
			'copyHtml5',
			'excelHtml5',
			'csvHtml5',
			'pdfHtml5'
		]
	});

});

// "use strict";
// (function($) {
//     "use strict";
// $('#basic-1').DataTable();
// })(jQuery);

$('#form-add-product').validator().on('submit', function (e) {
    if (e.isDefaultPrevented()) {
      // handle the invalid form...
      // console.log("gaga");
      $.notify({
          title: '<strong>Gagal !</strong>',
          message: 'Semua Form Wajib di isi !'
      },{
          type: 'danger',
          z_index: 2000,
      });
    } else {
		console.log('test');

      e.preventDefault();

      var formData = new FormData(this);

      Swal.fire({
      title: 'Anda yakin ingin menambah produk ?',
      text: "Pastikan data yang anda masukan benar !",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, Simpan !'
      }).then((result) => {
      if (result.isConfirmed) {
          $.ajax({
              method: "POST",
              contentType:false,
              catch:false,
              processData:false,
              data:formData,
              url: "<?=site_url('product/add_product') ?>",
              })
              .done(function(data) {
				  console.log(data);
                  if (data.status='success') {
                  Swal.fire(
                      'Success !',
                      'Product berhasil disimpan !',
                      'success'
                      );
                  $('#exampleModal').modal('hide');
                  $("#form-add-product")[0].reset();
                  reload();
                  }else{
                      alert('problem in the server');
                  }
			});       
      }
      })
    }
});

$('#form-update-product').validator().on('submit', function (e) {
    if (e.isDefaultPrevented()) {
      // handle the invalid form...
      // console.log("gaga");
      $.notify({
          title: '<strong>Gagal !</strong>',
          message: 'Semua Form Wajib di isi !'
      },{
          type: 'danger',
          z_index: 2000,
      });
    } else {

      e.preventDefault();

      var formData = new FormData(this);

      Swal.fire({
      title: 'Anda yakin ingin mengupdate produk ?',
      text: "Pastikan data yang anda masukan benar !",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, Simpan !'
      }).then((result) => {
      if (result.isConfirmed) {
          $.ajax({
              method: "POST",
              contentType:false,
              catch:false,
              processData:false,
              data:formData,
              url: "<?=site_url('product/update_product') ?>",
              })
              .done(function(data) {
                  if (data.status='success') {
                  Swal.fire(
                      'Success !',
                      'Product berhasil diupdate !',
                      'success'
                      );
                  $('#modal_edit').modal('hide');
                  $("#form-update-product")[0].reset();
                  reload();
                  }else{
                      alert('problem in the server');
                  }
			});       
      }
      })
    }
});

function delete_product(id){
	Swal.fire({
		title: 'Anda yakin ingin menonaktifkan produk ?',
		text: "Produk akan di nonaktifkan dan anda dapat mengaktifkannya kembali!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Yes, Delete !'
		}).then((result) => {
		if (result.isConfirmed) {
			$.ajax({
				method: "POST",
				data:{id : id},
				url: "<?=site_url('product/delete_product') ?>",
			})
			.done(function( data ) {
				if (data.status='success') {
                  Swal.fire(
                      'Success !',
                      'Product berhasil di hapus !',
                      'success'
                      );
                  reload();
                  }else{
                      alert('problem in the server');
                  }
				return false;

			})
			.fail(function() {
				alert('Masalah Pada Server');
			});

		}
	});
}

function restore_product(id){
	//send data 

	Swal.fire({
		title: 'Anda yakin ingin mengaktifkan kembali produk ini ?',
		text: "Produk akan di nonaktifkan dan anda dapat mengaktifkannya kembali!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Yes, Delete !'
		}).then((result) => {
		if (result.isConfirmed) {
			$.ajax({
				method: "POST",
				data:{id : id},
				url: "<?=site_url('product/restore_product') ?>",
			})
			.done(function( data ) {
				if (data.status='success') {
                  Swal.fire(
                      'Success !',
                      'Product berhasil di restore !',
                      'success'
                      );
                  reload();
                  }else{
                      alert('problem in the server');
                  }
				return false;
			})
			.fail(function() {
				alert('Masalah Pada Server');
			});

		}
	});
}

function reload() {
	$("#table-produk").dataTable().api().ajax.reload( null, false );
}

function edit_product(id) {
	$.ajax({
	method: "POST",
	data:{id : id},
	dataType:"JSON",
	url: "<?=site_url('product/ajax_get_product') ?>",
	})
	.done(function( data ) {
	//   console.log(data);
	$('#edit_product_name').val(data.product_name);
	$('#edit_product_description').val(data.product_description);
	$('#edit_stock').val(data.stock);
	$('#edit_cost').val(data.cost);
	$('#id_product').val(data.id_product);
		$("#modal_edit").modal("show");
	})
	.fail(function(jqXHR,textStatus,error) {
		alert(error);
		console.log(jqXHR.responseText);
	});        
}
</script>
