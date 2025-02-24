<!DOCTYPE html>
<html>
<head>
    <title>Tugas 2d</title>

    <style>
        table {
            border-collapse: collapse;
            width: 500px;
            height: 500px;
        }
        td {
            width: 50px;
            height: 50px;
        }
    </style>
</head>

<body>
    <table border="1">
        <?php
        for ($i = 0; $i < 5; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 5; $j++) {
                $color = ($i + $j) % 2 == 0 ? "black" : "white";
                echo "<td style='background-color: $color;'></td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
