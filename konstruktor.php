<?php

class Orang
{
    var $nama;
    var $alamat;
    var $umur;
    var $gender;
    var $skill;
    var $Hobi; // Menambahkan properti Hobi
    var $ID; // Menambahkan properti ID
    var $Role; // Menambahkan properti Role
    var $Hero; // Menambahkan properti Hero

    // Konstruktor
    public function __construct($nama, $alamat, $umur, $gender, $skill, $Hobi, $ID, $Role, $Hero)
    {
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->umur = $umur;
        $this->gender = $gender;
        $this->skill = $skill;
        $this->Hobi = $Hobi;
        $this->ID = $ID;
        $this->Role = $Role;
        $this->Hero = $Hero;
    }
}

// Membuat objek Orang dengan konstruktor
$ini_object = new Orang('Risky', 'Taliwang', '23 Tahun', 'laki-laki', 'Pemrograman', 'MAIN MOBILE LEGEND', '000001991', 'ASSASIN', 'LANCELOT');

// Menampilkan data objek
echo "Nama: $ini_object->nama \n";
echo "Alamat: $ini_object->alamat \n";
echo "Umur: $ini_object->umur \n";
echo "Gender: $ini_object->gender \n";
echo "Skill: $ini_object->skill \n";
echo "Hobi: $ini_object->Hobi \n";
echo "ID: $ini_object->ID \n";
echo "Role: $ini_object->Role \n";
echo "Hero: $ini_object->Hero \n";
