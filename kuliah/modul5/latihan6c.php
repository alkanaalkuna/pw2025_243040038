<?php
session_start();

$error = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'] ?? "";
    $password = $_POST['password'] ?? "";

    if ($username === "nailazalfa" && $password === "naila1407") {
        $_SESSION['username'] = $username;
        header("Location: 6cAdmin.php");
        exit();
    } else {
        $error = "Username atau Password salah!!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login admin</title>
    <style>
        body {
            background-color: pink;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }

        .container {
            background-color: palevioletred;
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
            width: 20rem;
        }

        .title {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 1rem;
            text-align: center;
        }

        .logo {
            display: block;
            margin: 0 auto 1rem;
            height: 100px;
            width: 100px;
            border-radius: 50%;
        }

        .error-message {
            color: red;
            font-weight: bold;
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.4);
            margin-top: 0.5rem;
            margin-bottom: 1rem;
            text-align: center;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-group label {
            display: block;
            color: black;
            margin-bottom: 0.5rem;
        }

        .form-group input {
            width: 92%;
            padding: 0.75rem;
            border: 1px solid #d1d5db;
            border-radius: 0.5rem;
            outline: none;
        }

        .form-group input:focus {
            border-color: rgb(246, 59, 174);
            box-shadow: 0 0 0 2px rgba(246, 59, 174, 0.5);
        }

        .submit-btn {
            width: 100%;
            background-color: rgb(246, 59, 174);
            color: #ffffff;
            padding: 0.75rem;
            border-radius: 0.5rem;
            border: none;
            cursor: pointer;
        }

        .submit-btn:hover {
            background-color: rgb(255, 195, 218);
        }
    </style>
</head>

<body>
    <div class="container">
        <h2 class="title">Login admin</h2>
        <img src="img/logo.jpg" class="logo" alt="Logo">

        <?php if (!empty($error)): ?>
            <p class="error-message"><?= $error ?></p>
        <?php endif; ?>

        <form method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input id="username" name="username" required type="text" />
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input id="password" name="password" required type="password">
            </div><br>
            <button class="submit-btn" type="submit">Login</button>
        </form>
    </div>
</body>

</html>