<?php $__env->startSection('content'); ?>
<!-- start banner Area -->
    <section class="banner-area">
		<div class="container">
			<div class="row fullscreen align-items-center justify-content-start">
				<div class="col-lg-12">
					<div class="active-banner-slider owl-carousel">
						<!-- single-slide -->
						<div class="row single-slide align-items-center d-flex">
							<div class="col-lg-5 col-md-6">
								<div class="banner-content">
									<h1>Nike New <br>Collection!</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
									</p>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img">
									<img class="img-fluid" src="<?php echo e(url ('Frontend/img/banner/banner-img.png')); ?>" alt="">
								</div>
							</div>
						</div>
						<!-- single-slide -->
						<div class="row single-slide">
							<div class="col-lg-5">
								<div class="banner-content">
									<h1>Nike New <br>Collection!</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
									</p>
									
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img">
									<img class="img-fluid" src="<?php echo e(url ('Frontend/img/banner/banner-img1.png')); ?>" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
    <!-- End banner Area -->
    
<!-- start features Area -->
<section class="features-area section_gap_top">
		<div class="container">
			<div class="row features-inner">
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
                            <img src="<?php echo e(url ('Frontend/img/features/f-icon1.png')); ?>" alt="">
						</div>
						<h6>Free Delivery</h6>
						<p>Free Shipping on all order</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="<?php echo e(url ('Frontend/img/features/f-icon2.png')); ?>" alt="">
						</div>
						<h6>Return Policy</h6>
						<p>Free Shipping on all order</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="<?php echo e(url ('Frontend/img/features/f-icon3.png')); ?>" alt="">
						</div>
						<h6>24/7 Support</h6>
						<p>Free Shipping on all order</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="<?php echo e(url ('Frontend/img/features/f-icon4.png')); ?>" alt="">
						</div>
						<h6>Secure Payment</h6>
						<p>Free Shipping on all order</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end features Area -->

	<!-- start product Area -->
	<section class="owl-carousel active-product-area section_gap_bottom">
		<!-- single product slide -->
		<div class="single-product-slider">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>New Products</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
								dolore
								magna aliqua.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- single product -->
					<?php $__currentLoopData = $barangs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $barang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="<?php echo e(url ('Frontend/img/product')); ?>/<?php echo e($barang->foto_barang); ?>" alt="">
							<div class="product-details">
								<h6><?php echo e($barang->nama_barang); ?></h6>
								<div class="price">
								<h6><strong>IDR <?php echo e(number_format($barang->harga_barang)); ?></strong></h6>
								</div>
								<div class="prd-bottom">

									<a href="<?php echo e(url('detail')); ?>/<?php echo e($barang->id); ?>" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">add to bag</p>
									</a>
									<a  class="social-info">
										<span class="lnr lnr-heart"></span>
										<p class="hover-text">Wishlist</p>
									</a>
									<a  class="social-info">
										<span class="lnr lnr-sync"></span>
										<p class="hover-text">compare</p>
									</a>
									<a  class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
			</div>
		</div>
		<!-- single product slide -->
		<div class="single-product-slider">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>New Products</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
								dolore
								magna aliqua.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- single product -->
					<?php $__currentLoopData = $barangs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $barang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="<?php echo e(url ('Frontend/img/product')); ?>/<?php echo e($barang->foto_barang); ?>" alt="">
							<div class="product-details">
								<h6><?php echo e($barang->nama_barang); ?></h6>
								<div class="price">
								<h6><strong>IDR <?php echo e(number_format($barang->harga_barang)); ?></strong></h6>
								</div>
								<div class="prd-bottom">

									<a href="<?php echo e(url('detail')); ?>/<?php echo e($barang->id); ?>" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">add to bag</p>
									</a>
									<a  class="social-info">
										<span class="lnr lnr-heart"></span>
										<p class="hover-text">Wishlist</p>
									</a>
									<a  class="social-info">
										<span class="lnr lnr-sync"></span>
										<p class="hover-text">compare</p>
									</a>
									<a  class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
			</div>
		</div>
	</section>
	<!-- end product Area -->

	<!-- Start exclusive deal Area -->
	<section class="exclusive-deal-area">
		<div class="container-fluid">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-6 no-padding exclusive-left">
					<div class="row clock_sec clockdiv" id="clockdiv">
						<div class="col-lg-12">
							<h1>Exclusive Hot Deal Ends Soon!</h1>
							<p>Who are in extremely love with eco friendly system.</p>
						</div>
						<div class="col-lg-12">
							<div class="row clock-wrap">
								<div class="col clockinner1 clockinner">
									<h1 class="days">150</h1>
									<span class="smalltext">Days</span>
								</div>
								<div class="col clockinner clockinner1">
									<h1 class="hours">23</h1>
									<span class="smalltext">Hours</span>
								</div>
								<div class="col clockinner clockinner1">
									<h1 class="minutes">47</h1>
									<span class="smalltext">Mins</span>
								</div>
								<div class="col clockinner clockinner1">
									<h1 class="seconds">59</h1>
									<span class="smalltext">Secs</span>
								</div>
							</div>
						</div>
					</div>
					<a href="home" class="primary-btn">Shop Now</a>
				</div>
				<div class="col-lg-6 no-padding exclusive-right">
					<div class="active-exclusive-product-slider">
						<!-- single exclusive carousel -->
						<div class="single-exclusive-slider">
							<img class="img-fluid" src="<?php echo e(url ('Frontend/img/product/e-p1.png')); ?>" alt="">
							<div class="product-details">
								<div class="price">
									<h6>IDR <?php echo e(number_format(1499000)); ?></h6>
								</div>
								<h4>addidas New Hammer sole
									for Sports person
								</h4>
							</div>
						</div>
						<!-- single exclusive carousel -->
						<div class="single-exclusive-slider">
							<img class="img-fluid" src="<?php echo e(url ('Frontend/img/product/e-p1.png')); ?>" alt="">
							<div class="product-details">
								<div class="price">
									<h6>IDR <?php echo e(number_format(1499000)); ?></h6>
								</div>
								<h4>addidas New Hammer sole
									for Sports person
								</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End exclusive deal Area -->

	<!-- Start brand Area -->
	<section class="brand-area section_gap">
		<div class="container">
			<div class="row">
				<a class="col single-img">
					<img class="img-fluid d-block mx-auto" src="<?php echo e(url ('Frontend/img/brand/1.png')); ?>" alt="">
				</a>
				<a class="col single-img">
					<img class="img-fluid d-block mx-auto" src="<?php echo e(url ('Frontend/img/brand/2.png')); ?>" alt="">
				</a>
				<a class="col single-img">
					<img class="img-fluid d-block mx-auto" src="<?php echo e(url ('Frontend/img/brand/3.png')); ?>" alt="">
				</a>
				<a class="col single-img">
					<img class="img-fluid d-block mx-auto" src="<?php echo e(url ('Frontend/img/brand/4.png')); ?>" alt="">
				</a>
				<a class="col single-img">
					<img class="img-fluid d-block mx-auto" src="<?php echo e(url ('Frontend/img/brand/5.png')); ?>" alt="">
				</a>
			</div>
		</div>
	</section>
	<!-- End brand Area -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DatabaseProject\resources\views/home.blade.php ENDPATH**/ ?>