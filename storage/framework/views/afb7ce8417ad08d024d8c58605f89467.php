<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TimeMatters - Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: #1e40af;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: system-ui, -apple-system, sans-serif;
    }
    .login-card {
      background: white;
      border-radius: 16px;
      max-width: 480px;
      width: 100%;
      padding: 40px 50px;
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
    }
    .logo {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 12px;
      margin-bottom: 30px;
    }
    .tm-logo {
      width: 48px;
      height: 48px;
      background: #1e40af;
      color: white;
      border-radius: 8px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: bold;
      font-size: 26px;
    }
    .form-label {
      font-size: 14px;
      font-weight: 500;
      color: #333;
      margin-bottom: 6px;
    }
    .form-control {
      border-radius: 8px;
      padding: 12px 14px;
      border: 1px solid #d1d5db;
      font-size: 15px;
    }
    .form-control:focus {
      border-color: #3b82f6;
      box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.15);
    }
    .btn-login {
      background: #1e40af;
      color: white;
      border: none;
      padding: 14px;
      font-size: 16px;
      font-weight: 600;
      border-radius: 8px;
      margin-top: 20px;
    }
    .btn-login:hover {
      background: #1e3a8a;
    }
    .register-link {
      color: #3b82f6;
      text-decoration: none;
    }
    .register-link:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <div class="login-card">
    <!-- Logo -->
    <div class="logo">
      <div class="tm-logo">TM</div>
      <div>
        <h4 class="mb-0 fw-bold text-dark">TimeMatters</h4>
        <small class="text-muted" style="font-size: 12px;">INC</small>
      </div>
    </div>

    <h3 class="text-center mb-1 fw-semibold">Welcome Back</h3>
    <p class="text-center text-muted mb-4">Sign in to your account</p>

    <?php if(session('success')): ?>
        <div class="alert alert-success text-center">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <form method="POST" action="<?php echo e(route('frontend.login.store')); ?>">
        <?php echo csrf_field(); ?>

        <div class="mb-3">
            <label class="form-label">Email Address</label>
            <input type="email" 
                   name="email" 
                   class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                   placeholder="Enter your email address" 
                   value="<?php echo e(old('email')); ?>" 
                   required autofocus>
            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="invalid-feedback"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" 
                   name="password" 
                   class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                   placeholder="Enter your password" 
                   required>
            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="invalid-feedback"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" name="remember" id="remember">
            <label class="form-check-label" for="remember">
                Remember me
            </label>
        </div>

        <button type="submit" class="btn btn-login w-100">
            Login
        </button>
    </form>

    <div class="text-center mt-4">
        <small class="text-muted">
            Don't have an account? 
            <a href="<?php echo e(route('frontend.register.store')); ?>" class="register-link fw-medium">Register here</a>
        </small>
    </div>

    <div class="text-center mt-3">
        <small>
            <a href="#" class="text-muted">Forgot Password?</a>
        </small>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html><?php /**PATH C:\laragon\www\time_mattercs_new\resources\views/frontend/auth/login.blade.php ENDPATH**/ ?>