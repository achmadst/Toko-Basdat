

<?php $__env->startSection('content'); ?>
<!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Checkout</h1>
                    <nav class="d-flex align-items-center">
                        <a href="">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="">Checkout</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Checkout Area =================-->
    <section class="checkout_area section_gap">
        <div class="container">
            <div class="billing_details">
                <div class="row">
                    <div class="col-lg-6">
                        <h3>Billing Details</h3>
                        <form class="row contact_form" action="<?php echo e(url('up-profile')); ?>" method="post" novalidate="novalidate">
                        <?php echo csrf_field(); ?>    
                            <div class="col-md-12 form-group p_star">
                                <h6>Name :</h6>
                                <input id="name" type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" value="<?php echo e($user->name); ?>" required autocomplete="name"
                                placeholder="Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name'" autofocus>
                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <h6>Email :</h6>
                                <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e($user->email); ?>" required autocomplete="email"
                                placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'">
                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <h6>Phone Number :</h6>
                                <input id="number" type="text" class="form-control <?php $__errorArgs = ['number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="number" value="<?php echo e($user->no_hp); ?>" required autocomplete="number"
                                placeholder="Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'">
                                <?php $__errorArgs = ['number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <h6>Address :</h6>
                                <textarea id="add1" type="text" class="form-control <?php $__errorArgs = ['add1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="add1" required autocomplete="add1"
                                placeholder="Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'"><?php echo e($user->alamat); ?></textarea>
                                <?php $__errorArgs = ['add1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="col-md-12 form-group p_star ">
                                <button type="submit" value="submit" class="primary-btn">Edit Billing Details</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6">
                        <div class="order_box">
                            <h2>Your Order</h2>
                            <ul class="list">
                                <li><a href="#">Product <span>Total</span></a></li>
                                <?php $__currentLoopData = $keranjangs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keranjang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a href="#"><?php echo e($keranjang->barang->nama_barang); ?> <span class="middle" align="left">x<?php echo e($keranjang->jumlah_pemesanan); ?></span> <span class="last">IDR <?php echo e(number_format($keranjang->jumlah_harga)); ?></span></a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                            <ul class="list list_2">
                                <li><a href="#">Subtotal <span>IDR <?php echo e(number_format($checkout->harga_total)); ?></span></a></li>
                                <li><a href="#">Shipping <span>Flat rate: IDR 50,000</span></a></li>
                                <li><a href="#">Total <span>IDR <?php echo e(number_format($checkout->harga_total+50000)); ?></span></a></li>
                            </ul>
                            <form action="<?php echo e(url('check-out')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                                <div class="payment_item form-group">
                                    <div class="radion_btn">
                                        <input type="radio" id="cash" name="selector" value="Cash On Delivery">
                                        <label for="cash">Cash On Delivery</label>
                                        <div class="check"></div>
                                    </div>
                                    <p>Please send a check to Store Name, Store Street, Store Town, Store State / County,
                                        Store Postcode.</p>
                                </div>
                                <div class="payment_item active form-group">
                                    <div class="radion_btn">
                                        <input type="radio" id="paypal" name="selector" value="PayPal">
                                        <label for="paypal">PayPal </label>
                                        <img src="Frontend/img/product/card.jpg" alt="">
                                        <div class="check"></div>
                                    </div>
                                    <p>Pay via PayPal, you can pay with your credit card if you don’t have a PayPal
                                        account.</p>
                                </div>
                                <button class="primary-btn" value="submit" type="submit">Proceed to Purchase</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Checkout Area =================-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DatabaseProject\resources\views/cart/check-out.blade.php ENDPATH**/ ?>