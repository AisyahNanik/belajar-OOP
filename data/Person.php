<?php
class Person {//var untuk membuat ciri-ciri atau properties
    var string $name;// bisa diisikan jg, jika ingin membuat nama ny pasti dan tidak perlu diisikan
    var int $age;
    var string $address;
    var string $country = "Indonesia";//dikasih nilai karena sudah pasti

    const JUMLAH_KAKI = 2;//constant nempelny ke class bukan objek

    function tahunLahir(){
        //this adalah keyword yang metujuk ke objek yang sedang memanggil fungsi ini
        return 2024 - $this->age;
    }
    function jumlahSandal(){
        //return Person::JUMLAH_KAKI / 2;//klo didalam kelas yg sama bisa pakai self sebagai penganti nama class nya
        return self::JUMLAH_KAKI / 2;//lebih merujuk ke class
    }
    function __construct(
        string $name,
        int $age,
        string $address,
        string $country = "Indonesia"
        ){
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
        $this->country = $country;
        }
}
?> 