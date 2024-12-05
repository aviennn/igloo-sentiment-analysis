<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IGLOO - Dashboard</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{url('frontend/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{url('frontend/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{url('frontend/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{url('frontend/css/style.css')}}" rel="stylesheet">
</head>
<body class="antialiased bg-gray-100">

<div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0" id="home">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-4 py-lg-3">
    <a href="" class="navbar-brand p-0">
        <h1 class="m-0">IGLOO</h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
    <!-- Login and Register Buttons (aligned to the right) -->
    <div class="d-flex align-items-center ms-auto"> <!-- ms-auto here for right alignment -->
        <div class="d-flex align-items-center ms-lg-3">
            <a href="{{ route('login') }}" class="btn bg-white text-dark btn-sm px-4 fw-medium buttonlogin">Login</a>
        </div>
        
        <div class="d-flex align-items-center ms-lg-3">
            <a href="{{ route('register') }}" class="btn bg-white text-dark btn-sm px-4 fw-medium buttonlogin">Register</a>
        </div>
    </div>
</div>
</nav>



            <div class="container-xxl bg-primary hero-header" style="height:650px;">
    <div class="container px-lg-5">
        <div class=" g-5">
            <div class="col-lg-8 text-center text-lg-start">
                <h1 class="text-white mb-4 animated slideInDown">Unleash the Power of Sentiment Analysis</h1>
                <p class="text-white pb-3 animated slideInDown">Quickly analyze and understand the emotions behind your data. Whether it's customer feedback, social media posts, or reviews, our app provides deep insights into positive, negative, and neutral sentiments, empowering you to make smarter, data-driven decisions.</p>
            </div>
        </div>
    </div>
</div>

        </div>
        <!-- Navbar & Hero End -->

                <!-- Process Start -->
<div class="container-xl py-5">
    <div class="container py-5 px-lg-5">
        <div class="text-center pb-4 wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="text-primary-gradient fw-medium">How It Works</h5>
            <h1 class="mb-5">3 Easy Steps</h1>
        </div>
        <div class="row gy-5 gx-4 justify-content-center">
            <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="position-relative bg-light rounded pt-5 pb-4 px-4">
                    <div class="d-inline-flex align-items-center justify-content-center bg-primary-gradient rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                        <i class="fa fa-upload fa-3x text-white"></i>
                    </div>
                    <h5 class="mt-4 mb-3">Upload Your Text</h5>
                    <p class="mb-0">Simply upload your text or paste content like reviews, tweets, or customer feedback into the app for analysis.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="position-relative bg-light rounded pt-5 pb-4 px-4">
                    <div class="d-inline-flex align-items-center justify-content-center bg-secondary-gradient rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                        <i class="fa fa-brain fa-3x text-white"></i>
                    </div>
                    <h5 class="mt-4 mb-3">Analyze Sentiment</h5>
                    <p class="mb-0">Our sentiment analysis engine evaluates your text and determines the sentiment—positive, negative, or neutral.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="position-relative bg-light rounded pt-5 pb-4 px-4">
                    <div class="d-inline-flex align-items-center justify-content-center bg-primary-gradient rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                        <i class="fa fa-chart-bar fa-3x text-white"></i>
                    </div>
                    <h5 class="mt-4 mb-3">View Analysis Results</h5>
                    <p class="mb-0">Once the analysis is complete, you can view detailed results, including sentiment scores, and take action based on the findings.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Process End -->

        <!-- Features Start -->
        <div class="container-xxl py-5" id="feature">
            <div class="container py-5 px-lg-5">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="text-primary-gradient fw-medium">App Features</h5>
                    <h1 class="mb-5">Awesome Features</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="feature-item bg-light rounded p-4">
                            <div class="d-inline-flex align-items-center justify-content-center bg-primary-gradient rounded-circle mb-4" style="width: 60px; height: 60px;">
                                <i class="fa fa-eye text-white fs-4"></i>
                            </div>
                            <h5 class="mb-3">High Resolution</h5>
                            <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="feature-item bg-light rounded p-4">
                            <div class="d-inline-flex align-items-center justify-content-center bg-secondary-gradient rounded-circle mb-4" style="width: 60px; height: 60px;">
                                <i class="fa fa-layer-group text-white fs-4"></i>
                            </div>
                            <h5 class="mb-3">Retina Ready</h5>
                            <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="feature-item bg-light rounded p-4">
                            <div class="d-inline-flex align-items-center justify-content-center bg-primary-gradient rounded-circle mb-4" style="width: 60px; height: 60px;">
                                <i class="fa fa-edit text-white fs-4"></i>
                            </div>
                            <h5 class="mb-3">Editable Data</h5>
                            <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features End -->
<!-- About Start -->
<div class="container-xxl py-5" id="about">
    <div class="container py-5 px-lg-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="text-primary-gradient fw-medium">About Our Sentiment Analysis App</h5>
                <h1 class="mb-4">Unlock Insights with Advanced Sentiment Analysis</h1>
                <p class="mb-4">Our Sentiment Analysis App empowers you to effortlessly analyze the emotions behind any text. Whether you're evaluating customer feedback, social media conversations, or product reviews, our app provides the tools you need to gain deeper insights into underlying sentiments.</p>
                <p class="mb-4">Our app delivers precise sentiment scores, categorizing text as positive, negative, or neutral. It's the perfect tool for businesses looking to improve customer experience, or for individuals seeking a deeper understanding of emotional tones in communication.</p>
                <p class="mb-4">With intuitive, user-friendly features, you'll receive instant, data-driven insights that help you make smarter decisions and predict sentiment trends over time. Whether for real-time feedback or historical sentiment analysis, our app gives you the power to track and act on emotions effectively.</p>
                <h5 class="mb-4">Start analyzing sentiment today and make informed decisions with ease!</h5>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

        <!-- Footer Start -->
        <div class="container-fluid bg-primary text-light footer wow fadeIn" data-wow-delay="0.1s">
            <div class="container px-lg-5">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">IGLOO</a>, All Right Reserved. 
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Dashboard</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up text-white"></i></a>
    </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('frontend/lib/wow/wow.min.js')}}"></script>
    <script src="{{url('frontend/lib/easing/easing.min.js')}}"></script>
    <script src="{{url('frontend/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{url('frontend/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{url('frontend/lib/owlcarousel/owl.carousel.min.js')}}"></script>

        <!-- Template Javascript -->
        <script src="{{url('frontend/js/main.js')}}"></script>

</body>
</html>
