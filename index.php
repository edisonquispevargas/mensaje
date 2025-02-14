<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feliz San Valentín</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: pink;
            text-align: center;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .card, .message {
            background: white;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            position: relative;
            display: none;
            max-width: 90%;
        }
        .envelope {
            background: #ffcccc;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            cursor: pointer;
            transition: transform 0.3s, opacity 0.5s;
            text-align: center;
            max-width: 80%;
        }
        .envelope:hover {
            transform: scale(1.1);
        }
        .envelope.hide {
            transform: translateY(-50px);
            opacity: 0;
        }
        .heart {
            color: red;
            font-size: 40px;
            animation: heartbeat 1s infinite;
            position: relative;
        }
        .hearts-container, .flowers-container {
            position: absolute;
            width: 80px;
            height: 80px;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }
        .small-heart, .flower {
            position: absolute;
            font-size: 16px;
            opacity: 0;
            animation: expand 2s infinite;
        }
        .small-heart:nth-child(1), .flower:nth-child(1) { top: -20px; left: -15px; animation-delay: 0.2s; }
        .small-heart:nth-child(2), .flower:nth-child(2) { top: -30px; right: -15px; animation-delay: 0.4s; }
        .small-heart:nth-child(3), .flower:nth-child(3) { bottom: -20px; left: -15px; animation-delay: 0.6s; }
        .small-heart:nth-child(4), .flower:nth-child(4) { bottom: -30px; right: -15px; animation-delay: 0.8s; }
        @keyframes heartbeat {
            0% { transform: scale(1); }
            50% { transform: scale(1.2); }
            100% { transform: scale(1); }
        }
        @keyframes expand {
            0% { transform: scale(0.5); opacity: 0; }
            50% { transform: scale(1); opacity: 1; }
            100% { transform: scale(1.5); opacity: 0; }
        }
        .typing {
            display: block;
            white-space: normal;
            border-right: none;
            animation: none;
        }
        .close-btn {
            margin-top: 10px;
            padding: 10px;
            background: red;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
    </style>
    <script>
        function openMessage() {
            let envelope = document.querySelector('.envelope');
            let card = document.querySelector('.card');
            envelope.classList.add('hide');
            setTimeout(() => {
                envelope.style.display = 'none';
                card.style.display = 'block';
            }, 500);
        }

        function closeMessage() {
            let envelope = document.querySelector('.envelope');
            let card = document.querySelector('.card');
            card.style.display = 'none';
            envelope.style.display = 'block';
            envelope.classList.remove('hide');
        }
    </script>
</head>
<body>
    <div class="envelope" onclick="openMessage()">
        📩 Haz clic para abrir tu mensaje
    </div>
    <div class="card">
        <h3>💖 ¡Por si nadie te lo dijo! 💖</h3>
        <h1 class="typing">💖 ¡Feliz San Valentín! 💖</h1>
        <p>🙈Eres especial y mereces todo el amor del mundo💕(❁´◡`❁).</p>
        <p>Recuerda: ¡Eres increíble tal como eres! 💞</p>
        <div class="heart">❤️
            <div class="hearts-container">
                <div class="small-heart">❤️</div>
                <div class="small-heart">❤️</div>
                <div class="small-heart">❤️</div>
                <div class="small-heart">❤️</div>
            </div>
            <div class="flowers-container">
                <div class="flower">🌸</div>
                <div class="flower">🌺</div>
            </div>
        </div>
        <button class="close-btn" onclick="closeMessage()">Cerrar</button>
    </div>
</body>
</html>
