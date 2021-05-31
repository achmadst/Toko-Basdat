

<?php $__env->startSection('content'); ?>
<<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>History</h1>
					<nav class="d-flex align-items-center">
						<a href="<?php echo e(url('home')); ?>">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="<?php echo e(url('history')); ?>">History<span class="lnr lnr-arrow-right"></span></a>
						<a href="">Detail</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Order Details Area =================-->
	<section class="order_details section_gap">
		<div class="container">
			<div class="row order_d_inner">
				<div class="col-lg-4">
					<div class="details_item">
						<h4>Order Info</h4>
						<ul class="list">
							<li><a href="#"><span width="10">Order number</span> : <?php echo e($checkout->id); ?></a></li>
							<li><a href="#"><span>Date</span> : <?php echo e($checkout->tanggal_checkout); ?></a></li>
							<li><a href="#"><span>Total</span> : IDR <?php echo e(number_format($checkout->harga_total_kirim)); ?></a></li>
							<li><a href="#"><span>Payment method</span> : <?php echo e($checkout->bayar); ?></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="details_item">
						<h4>Shipping Information</h4>
						<ul class="list">
							<li><a href="#"><span width="10">Name</span> : <?php echo e($user->name); ?></a></li>
							<li><a href="#"><span>Email</span> : <?php echo e($user->email); ?></a></li>
							<li><a href="#"><span>Phone</span> : <?php echo e($user->no_hp); ?></a></li>
							<li><a href="#"><span>Address</span> : <?php echo e($user->alamat); ?></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="order_details_table">
				<h2>Order Details</h2>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Product</th>
								<th scope="col">Quantity</th>
								<th scope="col">Total</th>
							</tr>
						</thead>
						<tbody>
							<?php $__currentLoopData = $keranjangs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keranjang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td>
									<p><?php echo e($keranjang->barang->nama_barang); ?></p>
								</td>
								<td>
									<h5>x<?php echo e($keranjang->jumlah_pemesanan); ?></h5>
								</td>
								<td>
									<p>IDR <?php echo e(number_format($keranjang->jumlah_harga)); ?></p>
								</td>
							</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td>
									<h4>Subtotal</h4>
								</td>
								<td>
									<h5></h5>
								</td>
								<td>
									<p>IDR <?php echo e(number_format($checkout->harga_total)); ?></p>
								</td>
							</tr>
							<tr>
								<td>
									<h4>Shipping</h4>
								</td>
								<td>
									<h5></h5>
								</td>
								<td>
									<p>Flat rate: IDR <?php echo e(number_format($checkout->ongkos_kirim)); ?></p>
								</td>
							</tr>
							<tr>
								<td>
									<h4>Total</h4>
								</td>
								<td>
									<h5></h5>
								</td>
								<td>
									<p>IDR <?php echo e(number_format($checkout->harga_total_kirim)); ?></p>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
	<!--================End Order Details Area =================-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DatabaseProject\resources\views/history/detail.blade.php ENDPATH**/ ?>