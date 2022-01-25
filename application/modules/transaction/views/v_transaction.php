<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
		<div class="card">
			<div class="card-header">
			<h5>Cart</h5>
			<button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg">Tambah Keranjang</button>
			</div>
			<div class="card-body">
			<div class="row">
				<div class="order-history table-responsive wishlist">
				<table class="table table-bordered">
					<thead>
					<tr>
						<th>Prdouct</th>
						<th>Prdouct Name</th>
						<th>Price</th>
						<th>Quantity</th>
						<th>Action</th>
						<th>Total</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td><img class="img-fluid img-40" src="<?=base_url('template');?>/assets/images/product/1.png" alt="#"></td>
						<td>
						<div class="product-name"><a href="#">Long Top</a></div>
						</td>
						<td>$21</td>
						<td>
						<fieldset class="qty-box">
							<div class="input-group">
							<input class="touchspin text-center" type="text" value="5">
							</div>
						</fieldset>
						</td>
						<td><i data-feather="x-circle"></i></td>
						<td>$12456</td>
					</tr>
					<tr>
						<td class="text-end" colspan="5"><a class="btn btn-secondary cart-btn-transform" href="#">continue shopping</a></td>
						<td><a class="btn btn-success cart-btn-transform" href="">check out</a></td>
					</tr>
					</tbody>
				</table>
				</div>
			</div>
			</div>
			<!-- Container-fluid Ends-->
		</div>
		</div>
	</div>
</div>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
	<div class="modal-content">
		<div class="modal-header">
		<h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
		<button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
			<div class="row">
				
			</div>
			<div class="row">
				<div class="col-xl-12">
					<div class="card">
					<div class="blog-box blog-list row">
						<div class="col-sm-5"><img class="img-fluid sm-100-w" src="<?=base_url('template')?>/assets/images/faq/1.jpg" alt=""></div>
						<div class="col-sm-7">
						<div class="blog-details">
							<div class="blog-date"><span>05</span> January 2019</div>
							<h6>Java Language </h6>
							<div class="blog-bottom-content">
							<ul class="blog-social">
								<li>by: Paige Turner</li>
								<li>15 Hits</li>
							</ul>
							<hr>
							<p class="mt-0">inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit.</p>
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
</div>


