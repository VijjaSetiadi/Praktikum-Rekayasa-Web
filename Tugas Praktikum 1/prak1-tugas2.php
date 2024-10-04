<?php
// Membuat variabel JSON
$json = '{"nama":"Vijja Setiadi","nim":"G.211.22.0098","prodi":"Teknik Informatika"}';

// Decode JSON menjadi PHP Object
$object = json_decode($json);

// Akses nilai dari PHP Object
echo "Nama: " . $object->nama . "<br>";
echo "NIM: " . $object->nim . "<br>";
echo "Prodi: " . $object->prodi . "<br>";

// Decode JSON menjadi PHP Array
$array = json_decode($json, true);

// Akses nilai dari PHP Array
echo "Nama: " . $array['nama'] . "<br>";
echo "NIM: " . $array['nim'] . "<br>";
echo "Prodi: " . $array['prodi'] . "<br>";
?>
