<?php
//rinsip ini mengacu pada menyembunyikan detail implementasi dalam kelas dan hanya menyediakan antarmuka yang diperlukan untuk berinteraksi dengan objek.
//Enkapsulasi dicapai dengan menggunakan akses modifier seperti public, private, dan protected.

class Mobil{
    private $kecepatan;

    public function setKecepatan($kecepatan){
        $this->kecepatan = $kecepatan;
    }

    public function getKecepatan(){
        return $this->kecepatan;
    }
}

$mobil1 = new Mobil();
$mobil1->setKecepatan(100);
echo $mobil1->getKecepatan();

//Polymorphism
//Polimorfisme memungkinkan objek dari kelas yang berbeda untuk diperlakukan sebagai objek dari kelas yang sama.
//Ini juga berarti kita bisa memanggil metode yang sama pada objek yang berbeda dan mendapatkan hasil yang berbeda.
class Hewan{
    public function suara(){
        echo"Suara hewan ";
    }
}
class Anjing extends Hewan {
    public function suara(){
        echo "Guk Guk";
    }
}
class Kucing extends Hewan {
    public function suara(){
        echo "Meong Meong";
    }
}

$anjing = new Anjing();
$kucing = new Kucing();

$anjing->suara();
$kucing->suara();

//Interface
//Interface adalah kontrak yang mendefinisikan metode yang harus diimplementasikan oleh kelas yang mengimplementasikannya.
//Interface tidak memiliki implementasi metode, hanya deklarasi.
interface Perhitungan{
    public function hitung();
}

class Kalkulator implements Perhitungan{
    public function hitung(){
        echo "Menghitung ....";
    }
}

//traits
//Traits memungkinkan penggabungan kode ke dalam beberapa kelas tanpa pewarisan.
//Ini berguna untuk menghindari duplikasi kode.
trait Penghitung{
    public function hitung(){
        echo "Menghitung....";
    }
}

class Kalkulator{
    use Penghitung;
}

//destructor
//Fungsi khusus yang dijalankan saat objek dihancurkan (misalnya, ketika objek keluar dari scope).
class Mobil {
    public function __destruct(){
        echo "Objek Mobil dihancurkan";
    }
}

$mobil = new Mobil("Toyota");
?>