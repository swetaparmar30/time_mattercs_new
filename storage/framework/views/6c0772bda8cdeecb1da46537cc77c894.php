<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Temporary Employee Dashboard'); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&family=Raleway:wght@600&display=swap"
      rel="stylesheet"
    >
    <link rel="stylesheet" href="<?php echo e(asset('/front-assets/src/css/admin.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/front-assets/src/css/dashboard.css')); ?>">
    <?php echo $__env->yieldPushContent('styles'); ?>
  </head>
  <body>
    <div class="portal-app">
      <header class="portal-header">
        <div class="portal-header-inner">
          <div class="portal-header-left">
            <div class="portal-logo-wrap">
              <img src="<?php echo e(asset('/front-assets/src/images/Time-matters-header-logo.webp')); ?>" alt="TimeMatters logo">
            </div>
            <span class="portal-header-divider" aria-hidden="true"></span>
            <span class="portal-title">Temporary Employee Portal</span>
          </div>

          <div class="portal-header-right">
            <label class="portal-search" aria-label="Search portal">
              <img src="<?php echo e(asset('/front-assets/src/images/dashbord-images/search-icon.svg')); ?>" alt="">
              <input type="search" placeholder="Search">
            </label>
            <div class="portal-user">
              <img class="avatar" src="<?php echo e(asset('/front-assets/src/images/dashbord-images/default-user.png')); ?>" alt="User avatar">
              <div class="portal-user-info">
                <strong><?php echo e(auth()->user()->name ?? 'John Doe'); ?></strong>
                <span>Admin</span>
              </div>
            </div>
          </div>
        </div>
      </header>

      <main class="portal-main">
        <aside class="portal-sidebar">
          <nav class="portal-nav" aria-label="Primary navigation">
            <a class="<?php echo e(request()->routeIs('frontend.temporary-employee.dashboard') ? 'active' : ''); ?>" href="<?php echo e(route('frontend.temporary-employee.dashboard')); ?>">
                <img src="<?php echo e(asset('/front-assets/src/images/dashbord-images/Dashboard-black-icon.png')); ?>" alt="">Dashboard
            </a>
            <a href="#"><img src="<?php echo e(asset('/front-assets/src/images/dashbord-images/Onboarding-black-icon.png')); ?>" alt="">Onboarding</a>
            <a href="#"><img src="<?php echo e(asset('/front-assets/src/images/dashbord-images/Forms%20%26%20Resources-black-icon.png')); ?>" alt="">Forms &amp; Resources</a>
            <a href="#"><img src="<?php echo e(asset('/front-assets/src/images/dashbord-images/Policies-black-icon.png')); ?>" alt="">Policies</a>
          </nav>
          <nav class="portal-nav portal-logout" aria-label="Account navigation">
            <a href="<?php echo e(route('frontend.logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <img src="<?php echo e(asset('src/images/dashbord-images/Logout-black-icon.png')); ?>" alt="">Logout
            </a>
            <form id="logout-form" action="<?php echo e(route('frontend.logout')); ?>" method="POST" style="display:none;">
                <?php echo csrf_field(); ?>
            </form>
          </nav>
        </aside>

        <section>
          <?php echo $__env->yieldContent('content'); ?>
        </section>
      </main>

      <footer class="portal-footer"><div class="portal-footer-inner">&copy; <?php echo e(date('Y')); ?> TimeMatters Inc.</div></footer>
    </div>
    <?php echo $__env->yieldPushContent('scripts'); ?>
  </body>
</html>
<?php /**PATH C:\laragon\www\time_mattercs_new\resources\views/frontend/layouts/portal.blade.php ENDPATH**/ ?>