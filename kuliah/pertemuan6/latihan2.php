<?php
// Mencetak array menggunakan looping
$binatang = ['😺', '🐄', '🐵', '🐔', '🐑', '🐍', '🐌'];
$makanan = ['Seblak', 'Batagor', 'Bakso', 'Cilok', 'Cigor'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mencetak Array</title>
</head>

<body>
    <h2>Daftar Binatang</h2>
    <ul>
        <?php for ($i = 0; $i < count($binatang); $i++) { ?>
            <li><?php echo $binatang[$i]; ?></li>
        <?php } ?>
    </ul>

    <h3>Daftar Makanan</h3>
    <ul>
        <?php for ($j = 0; $j < count($makanan); $j++) { ?>
            <li><?php echo $makanan[$j]; ?></li>
        <?php } ?>
    </ul>

    <h2>Daftar Binatang Baru</h2>
    <ul>
        <?php foreach ($binatang as $b) : ?>
            <li><?= $b; ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>