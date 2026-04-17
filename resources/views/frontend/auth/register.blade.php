<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TimeMatters - Create Account</title>
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
    .register-card {
      background: white;
      border-radius: 16px;
      max-width: 720px;
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
    .form-control, .form-select {
      border-radius: 8px;
      padding: 12px 14px;
      border: 1px solid #d1d5db;
      font-size: 15px;
    }
    .form-control:focus, .form-select:focus {
      border-color: #3b82f6;
      box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.15);
    }
    .btn-register {
      background: #1e40af;
      color: white;
      border: none;
      padding: 14px;
      font-size: 16px;
      font-weight: 600;
      border-radius: 8px;
      margin-top: 20px;
    }
    .btn-register:hover {
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

  <div class="register-card">
    <!-- Logo -->
    <div class="logo">
      <div class="tm-logo">TM</div>
      <div>
        <h4 class="mb-0 fw-bold text-dark">TimeMatters</h4>
        <small class="text-muted" style="font-size: 12px;">INC</small>
      </div>
    </div>

    <h3 class="text-center mb-1 fw-semibold">Create Your Account</h3>
    <p class="text-center text-muted mb-4">Fill in your details to get started</p>

    <form method="POST" action="{{ route('frontend.register.store') }}">
      @csrf

      <div class="row g-3">
        <div class="col-md-6">
          <label class="form-label">First Name</label>
          <input type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror" 
                 placeholder="Enter your first name" value="{{ old('first_name') }}" >
          @error('first_name')
            <span class="invalid-feedback">{{ $message }}</span>
          @enderror
        </div>

        <div class="col-md-6">
          <label class="form-label">Last Name</label>
          <input type="text" name="last_name" class="form-control @error('last_name') is-invalid @enderror" 
                 placeholder="Enter your last name" value="{{ old('last_name') }}" >
          @error('last_name')
            <span class="invalid-feedback">{{ $message }}</span>
          @enderror
        </div>

        <div class="col-12">
          <label class="form-label">Email Address</label>
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" 
                 placeholder="Enter your email address" value="{{ old('email') }}" >
          @error('email')
            <span class="invalid-feedback">{{ $message }}</span>
          @enderror
        </div>

        <div class="col-md-6">
          <label class="form-label">Phone Number</label>
          <input type="tel" name="phone" class="form-control @error('phone') is-invalid @enderror" 
                 placeholder="+91 123 456 7890" value="{{ old('phone') }}" >
          @error('phone')
            <span class="invalid-feedback">{{ $message }}</span>
          @enderror
        </div>

        <div class="col-md-6">
          <label class="form-label">company name</label>
          <input type="name" name="name" class="form-control @error('name') is-invalid @enderror" 
                 placeholder="" value="{{ old('name') }}">
          @error('name')
            <span class="invalid-feedback">{{ $message }}</span>
          @enderror
        </div>

        <div class="col-md-6">
          <label class="form-label">Password</label>
          <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" 
                 placeholder="" >
          @error('password')
            <span class="invalid-feedback">{{ $message }}</span>
          @enderror
        </div>

        <div class="col-md-6">
          <label class="form-label">Confirm Password</label>
          <input type="password" name="password_confirmation" class="form-control" 
                 placeholder="" >
        </div>

        <div class="col-12">
          <label class="form-label">Role</label>
          <select name="role" class="form-select @error('role') is-invalid @enderror" >
            <option value="">Select your role</option>
            <option value="Independent Contractor" {{ old('role') == 'Independent Contractor' ? 'selected' : '' }}>Independent Contractor </option>
            <option value="Temporary Employee" {{ old('role') == 'Temporary Employee' ? 'selected' : '' }}> Temporary Employee </option>
          </select>
          @error('role')
            <span class="invalid-feedback">{{ $message }}</span>
          @enderror
        </div>

        <div class="col-12 mt-2">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="agree" >
            <label class="form-check-label" for="agree">
              I agree to <a href="#" class="text-primary">Terms & Privacy Policy</a>
            </label>
          </div>
        </div>
      </div>

      <button type="submit" class="btn btn-register w-100">
        Register
      </button>
    </form>

    <div class="text-center mt-4">
      <small class="text-muted">
        Already have an account? 
        <a href="{{ route('frontend.login') ?? '#' }}" class="register-link fw-medium">Login here</a>
      </small>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>