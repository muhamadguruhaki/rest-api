<?php

$mahasiswa = [
    [
        "nama" => "Muhamad Guruh",
        "nim" => "18810081",
        "email" => "muhamadguruh15@gmail.com"
    ],
    [
        "nama" => "Naufal Fallah",
        "nim" => "18810083",
        "email" => "naufal66@gmail.com"
    ]
];

$coba = json_encode($mahasiswa);
echo $coba;
