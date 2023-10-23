<?php

class Orang
{
    var $nama = "RYSKY";
    var $alamat = "BANDUNG";
    var $umur = "23 TAHUN";
    var $gender = "LAKI-LAKI";
    var $skill = "FULL STACK DEVELOPER";
    var $hoby = "MAIN MOBILE LEGEND";
    var $email = "NAME@GMAIL.COM";
    var $id = "000001991";
    var $role = "ASSASIN";
    var $hero = "LANCELOT";
}

$ini_object = new Orang();
$ini_object->nama = 'RYSKY';
$ini_object->alamat = 'BANDUNG';
$ini_object->umur = '23 TAHUN';
$ini_object->gender = 'LAKI-LAKI';
$ini_object->skill = 'FULL STACK DEVELOPER';
$ini_object->hoby = 'MAIN MOBILE LEGEND';
$ini_object->email= 'NAME@GMAIL.COM';
$ini_object->id = '000001991';
$ini_object->role = 'ASSASIN';
$ini_object->hero = 'LANCELOT';


echo "Nama: $ini_object->nama \n";
echo "Alamat: $ini_object->alamat \n";
echo "Umur: $ini_object->umur \n";
echo "Gender: $ini_object->gender \n";
echo "Skill: $ini_object->skill \n";
echo "Hoby: $ini_object->hoby \n";
echo "Email: $ini_object->email \n";
echo "Id Akun: $ini_object->id \n";
echo "Role Hero: $ini_object->role \n";
echo "Nama Hero: $ini_object->hero \n";