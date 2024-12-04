<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History Page</title>
    <!-- SB Admin 2 Bootstrap CSS -->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom styling for table */
        .table-wrapper {
            overflow-x: auto;
            margin: 20px 0;
        }
        .search-input {
            margin-bottom: 10px;
        }
        .w-5.h-5 {
            width: 16px; /* or any appropriate size */
            height: 16px;
        }
        svg.w-5.h-5 {
            width: 16px !important;
            height: 16px !important;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Sentiment Analysis History</h1>

        <!-- Search input -->
        <input type="text" id="searchInput" class="form-control search-input" placeholder="Search table...">

        <!-- Table with SB Admin 2 Bootstrap classes -->
        <div class="table-wrapper">
            <table class="table table-bordered" id="historyTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Sentiment</th>
                        <th>Score</th>
                        <th>File</th>
                        <th>Text</th>
                        <th>Created At</th>
                        <th>Action</th> <!-- Add an action column for the view button -->
                    </tr>
                </thead>
                <tbody>
                    @foreach($history as $item)
                        <tr>
                            <td>{{ $item->sentiment }}</td>
                            <td>{{ $item->score }}</td>
                            <td>
                                @if($item->file_name)
                                    <a href="javascript:void(0);" data-file="{{ env('AZURE_ENDPOINT') . '/' . $item->file_path }}" class="view-file">
                                        {{ $item->file_name }}
                                    </a>
                                @else
                                    None
                                @endif
                            </td>
                            <td>{{ Str::limit($item->text, 50) }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>
                                <!-- Button to open modal with full text -->
                                <button class="btn btn-primary view-text-btn" data-toggle="modal" data-target="#viewTextModal" data-text="{{ $item->text }}">View</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Pagination links -->
        <div>
            {{ $history->links() }}
        </div>

        <!-- Back to Home link -->
        <p><a href="{{ route('welcome') }}">Back to Home</a></p>

    </div>

    <!-- Modal for viewing full text -->
    <div class="modal fade" id="viewTextModal" tabindex="-1" role="dialog" aria-labelledby="viewTextModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewTextModalLabel">Full Text</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p id="fullText"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- SB Admin 2 Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JavaScript for search functionality -->
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
        });
    </script>
</body>
</html>