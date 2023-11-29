<?php
// Pertemuan 2 - PHP Dasar
// Sintaks PHP

/* 
Standar Output menggunakan
echo, print
print_r (print array)
var_dump (debugging)
*/

echo "Egi Lukman Nur Hakim <br>"; 
print "Miracle <br>";
print_r ('Lort <br>');
var_dump ('Shadow');
echo "<br>";
//variabel
$nama = "Egi Lukman Nur Hakim";
//interpolasi pada "" dan ''
echo "Hallo nama saya $nama";
echo "<br>";

//operator
//aritmatika
// + - / %
$x = 10;
$y = 10;
echo $x + $y;
echo "<br>";

//penggabungan string / concatenation / concat
// .
$nama_depan = "Egi Lukman";
$nama_belakang = "Nur Hakim";
echo $nama_depan ."".$nama_belakang;
echo "<br>";

//operator asignment
// =, +=, -= , /=, *=, .=, *=
$e = 2;
$e +=1;
echo $e;
echo "<br>";

$n = "Egi Lukman";
$n .= " ";
$n .= "Nur Hakim";
echo $n;
echo "<br>";

//perbandingan tidak mengecek tipe data
// <,>,<=,>=, ==
var_dump(1 < 5);
echo "<br>";

//identitas mengecek tipe data
var_dump ( 1 === "1");
echo "<br>";

//Logika
// &&, ||, !
$q = 10;
var_dump($x <20 && $x % 2 == 0);
echo "<br>";





?>