

<?php $__env->startSection('content'); ?>
<!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">    
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>History</h1>
                    <nav class="d-flex align-items-center">
                        <a href="home">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="history">History</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================History Area =================-->
    <section class="checkout_area section_gap">
        <div class="container">
            <div class="billing_details">
                <h4><i class="fa fa-history"></i> History</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>Date</td>
                                <td>Status</td>
                                <td>Subtotal</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $checkouts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $checkout): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="align-middle"><?php echo e($checkout->tanggal_checkout); ?></td>
                                <td class="align-middle">
                                    <?php if( $checkout->status == 2): ?>
                                    Belum Dibayar
                                    <?php elseif( $checkout->status == 3): ?>
                                    Proses Pengiriman
                                    <?php endif; ?>
                                </td>
                                <td class="align-middle">IDR <?php echo e(number_format($checkout->harga_total_kirim)); ?></td>
                                <td><a href="<?php echo e(url('history')); ?>/<?php echo e($checkout->id); ?>" class="primary-btn"><i class="fa fa-info"></i>Detail</a></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!--================End History Area =================-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DatabaseProject\resources\views/history/index.blade.php ENDPATH**/ ?>