<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IGLOO - Dashboard</title>
    <link href="img/favicon.ico" rel="icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{url('frontend/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{url('frontend/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{url('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('frontend/css/style.css')}}" rel="stylesheet">
    <style>
        body {
            font-family: 'Heebo', sans-serif;
            background-color: #f4f7fc;
        }
        .navbar {
            background: linear-gradient(to bottom right, var(--primary), var(--secondary));
            color: white;
        }
        .navbar h1 {
            color: #fff;
            font-size: 1.8rem;
        }
        .navbar-brand {
            font-weight: 600;
        }
        .container-xxl {
            margin-top: 30px;
        }
        .text-primary-gradient {
            background: linear-gradient(to right, #0d6efd, #6610f2);
            color: transparent;
            -webkit-background-clip: text;
        }
        .search-input {
            border-radius: 25px;
            padding: 15px;
            border: 1px solid #ddd;
            width: 100%;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .search-input:focus {
            outline: none;
            border-color: #0d6efd;
        }
        .table-wrapper {
            overflow-x: auto;
            margin-top: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
        }
        .table th, .table td {
            text-align: center;
            padding: 12px;
        }
        .table th {
            font-weight: normal; /* Ensures text in <th> is not bold */
            background: var(--secondary);
            color: white;
        }
        .table td {
            border-bottom: 1px solid #ddd;
        }
        .btn-view, .btn-delete {
            width: 100px;
            font-weight: 600;
        }
        .btn-view {
            background-color: #0d6efd;
            color: white;
        }
        .btn-view:hover {
            background-color: #0056b3;
            color: white;
        }
        .btn-delete {
            background-color: #dc3545;
            color: white;
        }
        .btn-delete:hover {
            background-color: #c82333;
        }
        .pagination {
            justify-content: center;
            margin-top: 20px;
        }
        .modal-header {
            background-color: #0d6efd;
            color: white;
        }
        .modal-body {
            padding: 20px;
        }
        .modal-footer {
            justify-content: center;
        }
    </style>
</head>
<body>
    <div class="container-xxl bg-white p-0">
                <!-- Spinner Start -->
                <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-4 py-lg-3">
            <a href="#" class="navbar-brand p-0">
                <h1 class="m-0">IGLOO</h1>
            </a>
        </nav>

        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="text-center pb-4">
                    <h5 class="text-primary-gradient fw-medium">Sentiment Analysis History</h5>
                    <h1 class="mb-5">View Your Sentiment Data</h1>
                </div>

                <!-- Search Input -->
                <div class="mb-4">
                    <input type="text" id="searchInput" class="form-control search-input" placeholder="Search table...">
                </div>

                <!-- Table -->
                <div class="table-wrapper">
                    <table class="table table-bordered" id="historyTable">
                        <thead>
                            <tr>
                                <th>Sentiment</th>
                                <th>Score</th>
                                <th>File</th>
                                <th>Text</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($history as $item)
                                <tr>
                                    <td>{{ $item->sentiment }}</td>
                                    <td>{{ $item->score }}</td>
                                    <td>
                                        @if($item->file_name)
                                            <a data-file="{{ env('AZURE_ENDPOINT') . '/' . $item->file_path }}" class="view-file">
                                                {{ $item->file_name }}
                                            </a>
                                        @else
                                            None
                                        @endif
                                    </td>
                                    <td>{{ Str::limit($item->text, 50) }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>
                                    <div class="d-flex justify-content-center">
                                    <div class="d-flex justify-content-center">
    <!-- View Button with Icon Only -->
    <button class="btn btn-primary btn-view view-text-btn d-flex align-items-center justify-content-center" data-toggle="modal" data-target="#viewTextModal" data-text="{{ $item->text }}" style="width: auto; padding: 10px;">
        <i class="fas fa-eye"></i>
    </button>

    <!-- Space between buttons -->
    <div style="width: 15px;"></div> <!-- You can adjust the width here for more or less space -->

    <!-- Delete Button with Icon Only -->
    <form action="{{ route('history.destroy', $item->id) }}" method="POST" style="display: inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger btn-delete d-flex align-items-center justify-content-center" style="width: auto; padding: 10px;">
            <i class="fas fa-trash-alt"></i>
        </button>
    </form>
</div>


                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="d-flex justify-content-center">
                    {{ $history->links('pagination::bootstrap-4', ['class' => 'pagination-sm']) }}
                </div>

                <!-- Back to Home link -->
                <p class="text-center"><a href="{{ route('dashboard') }}" class="btn btn-primary-gradient rounded-pill py-3 px-5 text-white">Back to Home</a></p>

            </div>
        </div>

        <!-- Modal for viewing full text -->
<div class="modal fade" id="viewTextModal" tabindex="-1" role="dialog" aria-labelledby="viewTextModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header" style="background-color: #0d6efd; color: white;">
            <h1 class="modal-title" id="viewTextModalLabel" style="color:white; text-align: center; width: 100%;">Full Text</h1>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="border: none; background: none; font-size: 1.5rem; color: #fff; opacity: 0.8; transition: opacity 0.3s ease;">
    <span aria-hidden="true" style="font-weight: bold;">&times;</span>
</button>
            </div>
            <!-- Modal Body -->
            <div class="modal-body" style="max-height: 500px; overflow-y: auto; padding: 20px; font-family: 'Heebo', sans-serif;">
                <p id="fullText" style="font-size: 16px; line-height: 1.5;"></p>
            </div>
            <!-- Modal Footer -->
            <div class="modal-footer" style="border-top: none; justify-content: center;">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: #6c757d; border: none;">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for viewing files -->
<div class="modal fade" id="viewFileModal" tabindex="-1" role="dialog" aria-labelledby="viewFileModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header" style="background-color: #0d6efd; color: white;">
                <h5 class="modal-title" id="viewFileModalLabel">File Preview</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- Modal Body -->
            <div class="modal-body" style="max-height: 500px; overflow-y: auto; padding: 20px; font-family: 'Heebo', sans-serif;">
                <div id="fileContent" style="text-align: center;"></div>
            </div>
            <!-- Modal Footer -->
            <div class="modal-footer" style="border-top: none; justify-content: center;">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: #6c757d; border: none;">Close</button>
            </div>
        </div>
    </div>
</div>


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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mammoth/1.4.2/mammoth.browser.min.js"></script>

    <script>
        $(document).ready(function() {
            // Search functionality
            $("#searchInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#historyTable tbody tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
                });
            });

            // Populate modal with full text when "View" button is clicked
            $(".view-text-btn").on("click", function() {
                var text = $(this).data("text");
                $("#fullText").text(text);
            });

            // Handle file preview
            $(".view-file").on("click", function(e) {
                e.preventDefault();
                var fileUrl = $(this).data("file");
                var fileContent = "";

                if (fileUrl.endsWith(".pdf")) {
                    fileContent = `<embed src="${fileUrl}" type="application/pdf" width="100%" height="500px">`;
                } else if (fileUrl.endsWith(".jpg") || fileUrl.endsWith(".jpeg") || fileUrl.endsWith(".png") || fileUrl.endsWith(".gif")) {
                    fileContent = `<img src="${fileUrl}" class="img-fluid" alt="File Preview">`;
                } else {
                    fileContent = `<p>Preview not available for this file type. <a href="${fileUrl}" target="_blank">Download file</a></p>`;
                }

                $("#fileContent").html(fileContent);
                $("#viewFileModal").modal("show");
            });
        });
    </script>
</body>
</html>
