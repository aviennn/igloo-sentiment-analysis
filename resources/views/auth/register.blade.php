<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IGLOO - Register</title>

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

        <!-- Registration Form Start -->
        <div class="container-xxl py-5" id="register">
            <div class="container py-5 px-lg-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center mb-4">
                        <h1 class="text-primary">IGLOO</h1>
                            <h5 class="text-primary-gradient fw-medium">Create a New Account</h5>
                            <h1 class="mb-4">Register Here</h1>
                        </div>

                        <!-- Registration Form -->
                        <form method="POST" action="{{ route('register') }}" id="register-form">
                            @csrf

                            <!-- Name -->
                            <div class="form-floating mb-3">
                                <input id="name" class="form-control" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" placeholder="Your Name">
                                <label for="name">Your Name</label>
                                <div class="text-danger" id="name-error"></div>
                            </div>

                            <!-- Email Address -->
                            <div class="form-floating mb-3">
                                <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" placeholder="Your Email">
                                <label for="email">Your Email</label>
                                <div class="text-danger" id="email-error"></div>
                            </div>

                            <!-- Password -->
                            <div class="form-floating mb-3">
                                <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" placeholder="Password">
                                <label for="password">Password</label>
                                <div class="text-danger" id="password-error"></div>
                            </div>

                            <!-- Confirm Password -->
                            <div class="form-floating mb-3">
                                <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                                <label for="password_confirmation">Confirm Password</label>
                                <div class="text-danger" id="password_confirmation-error"></div>
                            </div>

                            <div class="d-flex justify-content-between mt-4">
                                <!-- Already Registered Link -->
                                <a href="{{ route('login') }}" class="text-decoration-none">Already registered?</a>

                                <!-- Submit Button -->
                                <button type="submit" class="btn btn-primary-gradient rounded-pill py-3 px-5">Register</button>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Registration Form End -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Form Validation (optional) -->
    <script>
        document.getElementById('register-form').addEventListener('submit', function(event) {
            let hasErrors = false;

            // Clear previous error messages
            document.getElementById('name-error').textContent = '';
            document.getElementById('email-error').textContent = '';
            document.getElementById('password-error').textContent = '';
            document.getElementById('password_confirmation-error').textContent = '';

            // Check if name is entered
            const name = document.getElementById('name').value;
            if (!name) {
                document.getElementById('name-error').textContent = 'Please enter your name.';
                hasErrors = true;
            }

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

            // Check if passwords match
            const passwordConfirmation = document.getElementById('password_confirmation').value;
            if (password !== passwordConfirmation) {
                document.getElementById('password_confirmation-error').textContent = 'Passwords do not match.';
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
