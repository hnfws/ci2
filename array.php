<?php 

$mahasiswa = [
    ["nim" => "1324073", "nama" => "muhana"],
    ["nim" => "1213323", "nama" => "tere"]
];

foreach ($mahasiswa as $mhs){
    echo "nim: " . $mhs['nim'] . "</br>";
    echo "nama: " . $mhs['nama'] . "</br>";

}
?>