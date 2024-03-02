$mahasiswa = [
    [
        "nim" => "23500019",
        "nama" => "Yerma Sheldy",
        "jurusan" => "Sistem Informasi",
        "email" => "yerma_23510019@stimata.ac.id",
    
   
    ],

];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <a href="latihan1.php?nama=<?php echo $mhs['nama']; ?>&nim=<?php echo $mhs['nim']; ?>&jurusan=<?php echo $mhs['jurusan']; ?>&email=<?php echo $mhs['email']; ?>&img=<?php echo $mhs['img']; ?>" > <?php echo $mhs['nama']; ?></a>
            </li>
        </ul>
    <?php endforeach; ?>
</body>
</html>