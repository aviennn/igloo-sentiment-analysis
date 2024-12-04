<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sentiment Analysis</title>
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
<body>
    <h1>Sentiment Analysis</h1>

    <nav>
        <a href="{{ route('history') }}" style="text-decoration: underline; color: blue;">
            View History
        </a>
    </nav>

    <form action="{{ route('analyze') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="text">Enter Text:</label><br>
        <textarea name="text" rows="10" cols="80" placeholder="Enter your text here...">{{ old('text') }}</textarea><br>

        <label for="file">Or Upload a File:</label><br>
        <input type="file" name="file" accept=".txt,.pdf,.docx"><br><br>

        @error('file')
            <div style="color: red;">{{ $message }}</div>
        @enderror

        <button type="submit">Analyze Sentiment</button>
    </form>

    @if(isset($sentiment))
        <h2>Sentiment Analysis Result</h2>
        <div id="sentiment-info">
            <p><strong>Sentiment Score:</strong> {{ $score ?? 'N/A' }}</p>
            <p><strong>Positive Words:</strong> {{ $positiveCount ?? 0 }}</p>
            <p><strong>Negative Words:</strong> {{ $negativeCount ?? 0 }}</p>
        </div>

        <p>The sentiment is: <strong>{{ $sentiment }}</strong></p>
        <p>Sentiment Score: <strong>{{ $score }}</strong></p>

        <div id="sentiment-bar">
            <div id="sentiment-emoji">😊</div>
        </div>
        <p>{!! $highlightedText !!}</p>
    @endif

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            @if(isset($score) && isset($positiveCount) && isset($negativeCount))
                const score = {{ $score }};
                const positiveCount = {{ $positiveCount }};
                const negativeCount = {{ $negativeCount }};
                const barWidth = document.getElementById('sentiment-bar').offsetWidth;
                const emoji = document.getElementById('sentiment-emoji');

                const minScore = -10;
                const maxScore = 10;
                const normalizedScore = ((score - minScore) / (maxScore - minScore)) * 100;

                emoji.style.left = `${Math.min(100, Math.max(0, normalizedScore))}%`;
                emoji.textContent = score > 0 ? '😊' : score < 0 ? '😢' : '😐';
            @endif
        });
    </script>
</body>
</html>
