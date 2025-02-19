<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Error</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
            background-color: #f8d7da;
            color: #721c24;
            font-family: Arial, sans-serif;
            text-align: center;
        }
        .error-container {
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 3rem;
        }
        p {
            font-size: 1.2rem;
        }
        .back-button {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #dc3545;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .back-button:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <div class="error-container">
        <h1>Oops!</h1>
        <p>Terjadi kesalahan. Halaman yang Anda cari tidak ditemukan.</p>
        <button class="back-button" onclick="goBack()">Kembali</button>
    </div>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</body>
</html>
