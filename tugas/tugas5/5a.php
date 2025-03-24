<?php
// $mahasiswa = [
//     ["Sandika Galih", "043040023", "sandikagalih@unpas.ac.id", "Teknik Informatika"],
//     ["Doddy Ferdiansyah", "033040001", "doddy@gmail.com", "Teknik Industri"]
// ];

// Array Associative
$mahasiswa = [
    [
        "nama" => "Sandhika Galih",
        "nrp" => "043040023",
        "email" => "sandhikagalih@unpas.ac.id",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Doddy Ferdiansyah",
        "nrp" => "033040001",
        "email" => "doddy@gmail.com",
        "jurusan" => "Teknik Industri"
    ],
    [
        "nama" => "Derania Safa Zaina",
        "nrp" => "243040038",
        "email" => "zainaderaniasafa@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Alisha Nur Salampessy",
        "nrp" => "243040055",
        "email" => "alishanursalampessy@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Lestari Vebrianti",
        "nrp" => "243040044",
        "email" => "lestari@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Audiena Febrianty",
        "nrp" => "243040062",
        "email" => "audiena@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Vica Septyana Widyastuti",
        "nrp" => "243040063",
        "email" => "vicasptyn@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Fauzan Muhammad Luthfi",
        "nrp" => "243040043",
        "email" => "fauzn@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Bayu Adji Prakoso",
        "nrp" => "243040040",
        "email" => "bayuadj@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Rayhan Faiz Adzikra",
        "nrp" => "243040041",
        "email" => "rayhanfaiz@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>


    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama : <?php echo $mhs["nama"]; ?></li>
            <li>NRP : <?php echo $mhs["nrp"]; ?></li>
            <li>Email : <?php echo $mhs["email"]; ?></li>
            <li>Jurusan : <?php echo $mhs["jurusan"]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>

</html>