

<?php $__env->startSection('content'); ?>
<!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">    
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Shopping Bag</h1>
                    <nav class="d-flex align-items-center">
                        <a href="home">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="category.html">Cart</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Cart Area =================-->
    <section class="cart_area">
        <div class="container">
            <div class="cart_inner">
                <div class="table-responsive">
                    <?php if(!empty($checkout)): ?>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Price</th>
                                <th scope="col">Total</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $keranjangs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keranjang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                    <div class="media">
                                        <div class="d-flex">
                                            <img src="<?php echo e(url ('Frontend/img/product')); ?>/<?php echo e($keranjang->barang->foto_barang); ?>" width="150" alt="">
                                        </div>
                                        <div class="media-body">
                                            <p><?php echo e($keranjang->barang->nama_barang); ?></p>
                                        </div>
                                    </div>
                                </td>
                                <td align="center">
                                    <h5><?php echo e($keranjang->jumlah_pemesanan); ?></h5>
                                </td>
                                <td> 
                                    <h5>IDR <?php echo e(number_format($keranjang->barang->harga_barang)); ?></h5>
                                </td>
                                <td>
                                    <h5>IDR <?php echo e(number_format($keranjang->jumlah_harga)); ?></h5>
                                </td>
                                <td>
                                    <form method="post" action="<?php echo e(url('cart')); ?>/<?php echo e($keranjang->id); ?>">
                                    <?php echo csrf_field(); ?>
                                    <?php echo e(method_field('DELETE')); ?>

							            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this order?')"><i class="fa fa-trash"></i></button>
						            </form>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td colspan="2"><h5 align="left">Purchase date : <?php echo e($checkout->tanggal_checkout); ?></h5></td>
                                <td>
                                    <h5>Subtotal</h5>
                                </td>
                                <td>
                                    <h5>IDR <?php echo e(number_format($checkout->harga_total)); ?></h5>
                                </td>
                            <tr class="out_button_area">
                                <td colspan="3"></td>
                                <td>
                                    <div class="checkout_btn_inner d-flex align-items-center">
                                        <a class="gray_btn" href="home">Continue Shopping</a>
                                        <a class="primary-btn" href="check-out" onclick="return confirm('Are you sure you want to checkout this order?')">Proceed to checkout</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <?php else: ?>
                    <div class="col-lg-12" align="center">
                        <h4>The cart is empty</h4>
                        <img class="img-fluid" src="<?php echo e(url ('Frontend/img/empty.png')); ?>" width="500"alt="">
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <!--================End Cart Area =================-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DatabaseProject\resources\views/cart/cart.blade.php ENDPATH**/ ?>