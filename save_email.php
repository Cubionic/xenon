<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Xenon</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins;700&family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Albert+Sans:ital,wght@0,100..900;1,100..900&family=Bayon&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #000;
            color: #fff;
            font-family: Arial, sans-serif;
        }

        .container {
            text-align: center;
            padding: 0 20px;
        }

        .logo img {
            width: 100px; /* Adjust as needed */
        }

        h1 {
            font-size: 4em;
            margin: 0.2em 0;
            font-family: 'Poppins', sans-serif;
        }

        .xenon {
            font-size: 100px;
            letter-spacing: 0.5em;
            font-weight: 200;
            color: #9d84f0;
            font-family: 'Albert Sans', sans-serif;
        }

        h2 {
            font-size: 3em;
            margin: 0.2em 0;
            font-family: 'Bayon', cursive;
        }

        .join-button {
            display: inline-block;
            margin-top: 20px;
            padding: 20px 40px;
            font-size: 1.9em;
            color: #fff;
            background-color: #663ef7;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
            font-family: "Albert Sans", sans-serif;
            font-optical-sizing: auto;
            font-weight: 400;
            font-style: normal;
        }

        .join-button:hover {
            background-color: #777;
        }

        .welcome-text {
            margin-top: 20px;
            font-size: 1.2em;
            font-family: "Albert Sans", sans-serif;
            font-optical-sizing: auto;
            font-weight: 100;
            font-style: normal;
        }

        .bayon-regular {
            font-family: "Bayon", sans-serif;
            font-weight: 400;
            font-style: normal;
            font-size: 100px;
        }

        .albert-sans {
            font-family: "Albert Sans", sans-serif;
            font-optical-sizing: auto;
            font-weight: 500;
            font-size: 200px;
            font-style: normal;
        }

        .email-form {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
            flex-wrap: wrap;
        }

        .email-form input[type="email"] {
            padding: 15px;
            margin-top: 21px;
            border: 1px solid #663ef7;
            border-radius: 5px 0 0 5px;
            font-family: 'Poppins', sans-serif;
            font-size: medium;
        }

        @media (max-width: 768px) {
            h1 {
                font-size: 2.5em;
            }

            .xenon {
                font-size: 50px;
                letter-spacing: 0.2em;
            }

            h2 {
                font-size: 2em;
            }

            .join-button {
                padding: 15px 30px;
                font-size: 1.5em;
            }

            .email-form input[type="email"] {
                padding: 15px;
                font-size: small;
                border-radius: 5px;
                margin: 10px 0;
            }

            .email-form .join-button {
                border-radius: 5px;
                margin-top: 10px;
                padding: 15px 20px;
                font-size: 1.5em;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="logo.jpeg" alt="Xenon Logo">
        </div>
        <h1 class="albert-sans">PROJECT <br> <span class="xenon">X E N O N</span></h1>
        <p class="welcome-text">Welcome to The Great Entrepreneur Revolution.</p>

        <form action="submit_email.php" method="POST" class="email-form">
            <input type="email" name="email" placeholder="Enter your email address" required>
            <a href="https://discord.gg/Q7VxGZ9Kf3" class="join-button"><b>Join</b></a><br>
        </form>
    </div>
</body>
</html>
