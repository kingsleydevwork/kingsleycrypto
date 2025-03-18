<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connecting to Admin...</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(to right, #141e30, #243b55);
            color: white;
            text-align: center;
        }

        .loader-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .spinner {
            width: 60px;
            height: 60px;
            border: 6px solid rgba(255, 255, 255, 0.3);
            border-top: 6px solid #ffffff;
            border-radius: 50%;
            animation: spin 1s linear infinite;
            margin-bottom: 20px;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .loading-text {
            font-size: 22px;
            font-weight: bold;
            margin-bottom: 10px;
            animation: fadeInOut 2s infinite;
        }

        @keyframes fadeInOut {

            0%,
            100% {
                opacity: 0.3;
            }

            50% {
                opacity: 1;
            }
        }

        .countdown {
            font-size: 18px;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="loader-container">
        <div class="spinner"></div>
        <h2 class="loading-text">Please wait while we connect you to Admin...</h2>
        <p class="countdown">Redirecting in <span id="timer">10</span> seconds</p>
    </div>

    <script src="script.js"></script>
</body>


<script>
    // Timer countdown
    let timeLeft = 10;
    const timerElement = document.getElementById('timer');

    const countdown = setInterval(() => {
        timeLeft--;
        timerElement.textContent = timeLeft;

        if (timeLeft <= 0) {
            clearInterval(countdown);
            window.location.href = "./auth/index.php"; // Change this to your destination page
        }
    }, 1000);
</script>

</html>