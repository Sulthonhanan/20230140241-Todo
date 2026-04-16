<?php
// Data mahasiswa (bisa dari database nanti)
$nama = "Sulthon Hanan";
$nim = "20230140241";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Modul Mahasiswa</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #0d0d0d;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            background-color: #1a1a1a;
            padding: 40px;
            border-radius: 10px;
            width: 500px;
            color: #fff;
            box-shadow: 0 0 10px rgba(255,255,255,0.05);
        }

        .nama {
            font-size: 18px;
            margin-bottom: 5px;
        }

        .nim {
            font-size: 14px;
            color: #ccc;
            margin-bottom: 20px;
        }

        .btn {
            background-color: #e0e0e0;
            color: #000;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 14px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #cfcfcf;
        }
    </style>
</head>
<body>

<div class="card">
    <div class="nama"><?php echo $nama; ?></div>
    <div class="nim"><?php echo $nim; ?></div>

    <a href="#" class="btn">Modul Pertemuan 1</a>
</div>

</body>
</html>