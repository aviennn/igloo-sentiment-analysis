<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <title>Sentiment Analysis</title>
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
    <style>
        #sentiment-bar {
            position: relative;
            height: 20px;
            width: 100%;
            background: linear-gradient(to right, red, yellow, green);
            border-radius: 10px;
            margin: 20px 0;
        }

        #sentiment-emoji {
            position: absolute;
            top: -20px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 30px;
            transition: left 0.5s;
        }

        #sentiment-info {
            margin-top: 20px;
            font-size: 1.2em;
        }

        #sentiment-info p {
            margin: 5px 0;
        }
    </style>
</head>
<body >

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
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
    <a href="" class="navbar-brand p-0">
        <h1 class="m-0">IGLOO</h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto py-0">
            <a href="#home" class="nav-item nav-link active">Dashboard</a>
            <a href="#feature" class="nav-item nav-link">Feature</a>
            <a href="#about" class="nav-item nav-link">About</a>
            <a href="#sentiment-analysis" class="nav-item nav-link">Analyzer</a>
            <a href="#contact" class="nav-item nav-link">Contact</a>
        </div>
        <!-- Logout Button (only for authenticated users) -->
        @auth
        <form action="{{ route('logout') }}" method="POST" class="d-flex align-items-center ms-lg-3">
            @csrf
            <button type="submit" class="btn bg-light text-dark btn-sm px-4">Logout</button>
        </form>
        @endauth
    </div>
</nav>


            <div class="container-xxl bg-primary hero-header" style="height:650px;">
    <div class="container px-lg-5">
        <div class="row g-5">
            <div class="col-lg-8 text-center text-lg-start">
                <h1 class="text-white mb-4 animated slideInDown">Unleash the Power of Sentiment Analysis</h1>
                <p class="text-white pb-3 animated slideInDown">Quickly analyze and understand the emotions behind your data. Whether it's customer feedback, social media posts, or reviews, our app provides deep insights into positive, negative, and neutral sentiments, empowering you to make smarter, data-driven decisions.</p>
            </div>
        </div>
    </div>
</div>

        </div>
        <!-- Navbar & Hero End -->

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

        <!-- Process Start -->
<div class="container-xxl py-5" id="how">
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


        

        <!-- Sentiment Analysis Start -->
        <div class="container-xxl py-5" id="sentiment-analysis">
            <div class="container py-5 px-lg-5">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="text-primary-gradient fw-medium">Sentiment Analysis</h5>
                    <h1 class="mb-5">Analyze Your Text or File</h1>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="wow fadeInUp" data-wow-delay="0.3s">
                            <form action="{{ route('analyze') }}" method="POST" id="sentimentForm" enctype="multipart/form-data" class="mt-4">
                                @csrf
                                <div class="form-floating mb-3">
                                    <textarea 
                                        name="text" 
                                        class="form-control" 
                                        id="text" 
                                        placeholder="Enter your text here..." 
                                        style="height: 300px;">{{ old('text') }}</textarea>
                                    <label for="text">Enter Text</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="file" name="file" class="form-control" id="file" accept=".txt,.pdf,.docx">
                                    <label for="file">Or Upload a File</label>
                                </div>
                                @error('file')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="col-12 text-center">
                                <div class="d-flex justify-content-center gap-3"> <!-- Using flexbox to align items in a row -->
    <button type="submit" class="btn btn-primary-gradient rounded-pill py-3 px-5">
        Analyze Sentiment
    </button>

    <nav> <!-- No margin-top required since the flex layout handles spacing -->
        <a href="{{ route('history') }}" class="btn btn-primary-gradient rounded-pill py-3 px-5 text-white" style="text-decoration: none;">
            View History
        </a>
    </nav>
</div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div id="resultContainer" class="row justify-content-center mt-5">
    <!-- Sentiment analysis results will be dynamically injected here -->
</div>

            </div>
        </div>
        <!-- Sentiment Analysis End -->






        <!-- Contact Start -->
        <div class="container-xxl py-5" id="contact">
            <div class="container py-5 px-lg-5">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="text-primary-gradient fw-medium">Contact Us</h5>
                    <h1 class="mb-5">Get In Touch!</h1>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="wow fadeInUp" data-wow-delay="0.3s">
                            <p class="text-center mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                            <form>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" placeholder="Your Name">
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" placeholder="Your Email">
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="subject" placeholder="Subject">
                                            <label for="subject">Subject</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                            <label for="message">Message</label>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center">
                                        <button class="btn btn-primary-gradient rounded-pill py-3 px-5" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

        

        <!-- Footer Start -->
        <div class="container-fluid bg-primary text-light footer wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-3">
                        <h4 class="text-white mb-4">Address</h4>
                        <p><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                        <p><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        <p><i class="fa fa-envelope me-3"></i>info@example.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h4 class="text-white mb-4">Quick Link</h4>
                        <a class="btn btn-link" href="">About Us</a>
                        <a class="btn btn-link" href="">Contact Us</a>
                        <a class="btn btn-link" href="">Privacy Policy</a>
                        <a class="btn btn-link" href="">Terms & Condition</a>
                        <a class="btn btn-link" href="">Career</a>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h4 class="text-white mb-4">Popular Link</h4>
                        <a class="btn btn-link" href="">About Us</a>
                        <a class="btn btn-link" href="">Contact Us</a>
                        <a class="btn btn-link" href="">Privacy Policy</a>
                        <a class="btn btn-link" href="">Terms & Condition</a>
                        <a class="btn btn-link" href="">Career</a>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h4 class="text-white mb-4">Newsletter</h4>
                        <p>Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulpu</p>
                        <div class="position-relative w-100 mt-3">
                            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Your Email" style="height: 48px;">
                            <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary-gradient fs-4"></i></button>
                        </div>
                    </div>
                </div>
            </div>
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

    <script>
   $(document).ready(function () {
    $("#sentimentForm").on("submit", function (e) {
        e.preventDefault(); // Prevent page reload

        let formData = new FormData(this);

        // Show a loading indicator (optional)
        $("#resultContainer").html('<div class="text-center">Loading...</div>');

        $.ajax({
            url: "{{ route('analyze') }}",
            method: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                // Update the results dynamically
                $("#resultContainer").html(`
                    <div class="col-lg-9">
                        <div class="wow fadeInUp" data-wow-delay="0.5s">
                            <h2 class="text-center">Sentiment Analysis Result</h2>
                            <div id="sentiment-info" class="text-center mt-4">
                                <div class="mb-3">
                                    <p><strong>Sentiment Score:</strong> ${response.score}</p>
                                    <p><strong>Positive Words:</strong> ${response.positiveCount}</p>
                                    <p><strong>Negative Words:</strong> ${response.negativeCount}</p>
                                </div>
                                <p>The sentiment is: <strong class="text-uppercase text-muted">${response.sentiment}</strong></p>
                                <div id="sentiment-bar" class="position-relative mt-3" style="height: 10px; background-color: #f1f1f1; border-radius: 5px;">
                                    <div id="sentiment-emoji" class="position-absolute" style="left: 50%; transform: translateX(-50%);">
                                        😊
                                    </div>
                                </div>
                                <p class="mt-3 p-3 rounded-lg bg-light shadow-sm" style="font-size: 1.1rem;">
                                    ${response.highlightedText}
                                </p>
                            </div>
                        </div>
                    </div>
                `);

                // Emoji position logic based on the score
                const emoji = document.getElementById('sentiment-emoji');
                const score = response.score;

                const minScore = -10;
                const maxScore = 10;
                const normalizedScore = ((score - minScore) / (maxScore - minScore)) * 100;

                // Move the emoji dynamically based on the normalized score
                emoji.style.left = `${Math.min(100, Math.max(0, normalizedScore))}%`;
                emoji.textContent = score > 0 ? '😊' : score < 0 ? '😢' : '😐';
            },
            error: function () {
                $("#resultContainer").html('<div class="text-danger text-center">An error occurred while processing your request.</div>');
            }
        });
    });
});

        </script>
</body>
</html>
