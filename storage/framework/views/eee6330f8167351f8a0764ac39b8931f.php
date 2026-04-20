
<?php $__env->startSection('robots'); ?> noindex <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


<section class="contact-banner-sec inner-service-banner thank-you-page ">
    
        <img src="/front-assets/src/images/contact-us-banner.webp" alt="" class="img-fluid w-100  banner-img 3" width="1920" height="767">


    <div class="banner-content col-12">
        <div class="container-md">
            <div class="row">
                <div class="banner-text">
                    
                    <h1 class="desktop-heading">Thank You</h1>
                    <h1 class="mobile-heading">Thank You</h1>
                    <p>Thank you for the inquiry. A representative from our team will contact you.</p>
                    <a href="<?php echo e(route('home')); ?>" class="common-btn common-btn" id="common-btn">BACK TO HOME</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\time_mattercs_new\resources\views/frontend/thankyou.blade.php ENDPATH**/ ?>