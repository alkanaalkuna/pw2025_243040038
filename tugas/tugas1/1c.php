<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1c</title>
    <style>
        .row {
            display: flex;
            justify-content: flex-start;
            margin-bottom: 5px;
        }
        .box {
            width: 50px;
            height: 50px;
            background-color: salmon;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 2px solid black;
            margin-right: 5px;
            font-size: 20px;
            font-weight: bold;
        }
        .container {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <?php
    for ($i = 1; $i <= 3; $i++) {
        echo '<div class="row">';
        for ($j = 1; $j <= $i; $j++) {
            echo "<div class='box'>$j</div>";
        }
        echo '</div>';
    }
    ?>
</div>

</body>
</html>
