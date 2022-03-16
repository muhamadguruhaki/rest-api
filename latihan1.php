<?php

// $mahasiswa = [
//     [
//         "nama" => "Muhamad Guruh",
//         "nim" => "18810081",
//         "email" => "muhamadguruh15@gmail.com"
//     ],
//     [
//         "nama" => "Naufal Fallah",
//         "nim" => "18810083",
//         "email" => "naufal66@gmail.com"
//     ]
// ];

$dbh = new PDO('mysql:host=localhost;dbname=latihan_phpmvc', 'root', '');
$db = $dbh->prepare('SELECT * FROM mahasiswa');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$coba = json_encode($mahasiswa);
echo $coba;
