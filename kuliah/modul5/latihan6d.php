<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: 6cLogin.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['logout'])) {
    session_destroy();
    header("Location: 6cLogin.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <style>
        body {
            background-color: #f3c5d0;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .container {
            background-color: #fff0f5;
            border-radius: 1rem;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            width: 100%;
            max-width: 600px;
            text-align: center;
            padding: 2rem;

            /* Animasi zoom-in */
            animation: zoomIn 0.6s ease-out;
        }

        @keyframes zoomIn {
            0% {
                transform: scale(0.5);
                opacity: 0;
            }

            100% {
                transform: scale(1);
                opacity: 1;
            }
        }


        .welcome-text {
            font-size: 2.5rem;
            font-weight: bold;
            color: #d63384;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
            margin-bottom: 1rem;
        }

        .text {
            font-size: 1.1rem;
            color: #333;
            margin-bottom: 2rem;
        }

        .button {
            background-color: #f68dbd;
            border: none;
            color: white;
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
            border-radius: 0.5rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #ffb6c1;
        }

        .button:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(246, 141, 189, 0.4);
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="welcome-text">Welcome, <?= htmlspecialchars($_SESSION['username']) ?></div>
        <p class="text">Welcome to the admin dashboard!🎉🎉</p>
        <form method="post">
            <button class="button" name="logout" type="submit">Logout</button>
        </form>
    </div>
</body>

</html>