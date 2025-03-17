<?php
$hardware = ["Motherboard", "Processor", "Hard Disk", "PC Coller", "VGA Card", "SSD"];

array_push($hardware, "Card Reader", "Modem");
sort($hardware);
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Perangkat Keras</title>
</head>

<body>
    <h3>Macam-macam perangkat keras komputer</h3>
    <ul>
        <?php
        for ($i = 0; $i < 6; $i++) {
            echo "<li>$hardware[$i]</li>";
        }
        ?>
    </ul>

    <h3>Macam-macam perangkat keras komputer baru</h3>
    <ul>
        <?php
        foreach ($hardware as $item) {
            if ($item == "Card Reader" || $item == "Modem") {
                echo "<li><u style='color:red;'>$item</u></li>";
            } else {
                echo "<li>$item</li>";
            }
        }
        ?>
    </ul>
</body>

</html>