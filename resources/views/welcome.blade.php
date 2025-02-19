<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, rgba(245, 244, 247, 0.3), rgba(77, 82, 81, 0.4)),
                url('/gambar/bok1.jpeg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: #fff;
            overflow-x: hidden;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            position: absolute;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 1000;
        }

        nav {
            position: absolute;
            top: 20px;
            right: 20px;
        }

        header a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            transition: color 0.3s;
            font-weight: bold;
        }

        header a:hover {
            color: #ff007f;
        }

        .hero {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
            animation: fadeIn 1.5s ease;
        }

        .hero h1 {
            font-size: 4em;
            margin: 20px 0;
            font-weight: bold;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        }

        .hero p {
            font-size: 1.5em;
            margin-bottom: 20px;
            max-width: 700px;
            font-weight: bold;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        }

        .hero .cta {
            background-color: #ff007f;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 25px;
            font-size: 1.5em;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
        }

        .hero .cta:hover {
            background-color: #e60073;
            transform: scale(1.1);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
</head>

<body>
    <section class="hero">
        <h1>Hijab Glow</h1>
        <p>Temukan koleksi hijab terbaru dengan kualitas terbaik dan harga terjangkau. Jadikan penampilan Anda semakin elegan dan percaya diri dengan pilihan hijab eksklusif dari kami</p>
        <a href="/login" class="cta">Masuk</a>
    </section>
</body>

</html>
