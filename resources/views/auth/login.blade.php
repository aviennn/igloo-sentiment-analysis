<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IGLOO - Login</title>

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{url('frontend/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{url('frontend/css/style.css')}}" rel="stylesheet">
</head>
<body class="antialiased bg-gray-100">
    <div class="container-xxl bg-white p-0">

        <!-- Login Form Start -->
        <div class="container-xxl py-5" id="login">
            <div class="container py-5 px-lg-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center mb-4">
                        <h1 class="text-primary">IGLOO</h1>
                            <h5 class="text-primary-gradient fw-medium">Login to Your Account</h5>
                            <h1 class="mb-4">Welcome Back!</h1>
                        </div>

                        <!-- Login Form -->
                        <form method="POST" action="/login" id="login-form">
                            <!-- CSRF Token -->
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <!-- Email Address -->
                            <div class="form-floating mb-3">
                                <input id="email" class="form-control" type="email" name="email" required autofocus autocomplete="username" placeholder="Your Email">
                                <label for="email">Your Email</label>
                                <div class="text-danger" id="email-error"></div>
                            </div>

                            <!-- Password -->
                            <div class="form-floating mb-3">
                                <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" placeholder="Password">
                                <label for="password">Password</label>
                                <div class="text-danger" id="password-error"></div>
                            </div>

                            <!-- Remember Me -->
                            <div class="d-flex justify-content-between mb-4">
                                <div>
                                    <input type="checkbox" id="remember" name="remember">
                                    <label for="remember" class="form-check-label">Remember Me</label>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary-gradient rounded-pill py-3 px-5">Login</button>
                            </div>
                        </form>

                        <div class="text-center mt-4">
                            <p>Don't have an account? <a href="{{ route('register') }}" class="text-primary">Register here</a></p>
                            <a href="{{ route('welcome') }}" class="text-primary">
    Back
</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Login Form End -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Form Validation -->
    <script>
        document.getElementById('login-form').addEventListener('submit', function(event) {
            let hasErrors = false;

            // Clear previous error messages
            document.getElementById('email-error').textContent = '';
            document.getElementById('password-error').textContent = '';

            // Check if email is valid
            const email = document.getElementById('email').value;
            if (!email || !email.includes('@')) {
                document.getElementById('email-error').textContent = 'Please enter a valid email.';
                hasErrors = true;
            }

            // Check if password is entered
            const password = document.getElementById('password').value;
            if (!password) {
                document.getElementById('password-error').textContent = 'Please enter your password.';
                hasErrors = true;
            }

            // If errors, prevent form submission
            if (hasErrors) {
                event.preventDefault();
            }
        });
    </script>
</body>
</html>
