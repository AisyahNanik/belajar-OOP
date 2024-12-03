<?php
require_once "data/Person.php";
require_once "data/Santri.php";

//$person->name="Lila";//ini adalah properties
//$person->age = 22;
//$person->address = "Solo";
//$person->country = "Indonesia";//karena sudha dikasih value atau nilai di class depan nya
$person = new Person('Lila', 22, 'Solo', 'Indonesia');//tanpa nama parameter
var_dump($person);
$person = new Person (name: 'Lila', age: 32, address: 'Solo');//dengan parameter
// var_dump ($person);
//var_dump($person);
// echo "Tahun Kelahiran $person->name adalah tahun " . (2024 - $person->age) . PHP_EOL;
// echo "Tahun Kelahiran $person->name adalah tahun " . $person->tahunLahir() . PHP_EOL;
// echo "Jumlah kaki $person->name ada " . Person::JUMLAH_KAKI . PHP_EOL;//conts lebih merujuk ke class ny jadi cara penulisan ny berbeda
// echo "$person->name membutuhkan jumlah sandal " . $person->jumlahSandal(). " pasang" . PHP_EOL;//lebih merujuk ke class nya cuman penulisan manggilny merujuk ke objek
// echo "$person->name tinggal di negara " . $person->country. PHP_EOL;


//$fulan->name="Adi";
//$fulan->age = 32;
//$fulan->address = "Yogyakarta";
//$fulan->country = "Indonesia";
$fulan = new Person('Adi', 32, 'Yogyakarta', 'Indonesia');
var_dump($fulan);
$fulan = new Person (name: 'Lila', age: 32, address: 'Solo');
// var_dump($fulan);
//var_dump($fulan);
//echo "Tahun Kelahiran $fulan->name adalah tahun " . (2024 - $fulan->age) . PHP_EOL;//ini hrs diganti manual setiap objek ny
// echo "Tahun Kelahiran $fulan->name adalah tahun " . $fulan->tahunLahir() . PHP_EOL;//ini bisa langsung diganti lewat class ny yg di depan
// echo "Jumlah kaki $fulan->name ada " . Person::JUMLAH_KAKI . PHP_EOL;
// echo "$fulan->name membutuhkan jumlah sandal " . $fulan->jumlahSandal(). " pasang" . PHP_EOL;
// echo "$fulan->name tinggal di negara " . $fulan->country. PHP_EOL;

//$fulanah->name="Embun";
//$fulanah->age = 31;
//$fulanah->address = "Palembang";
//$fulanah->country = "Indonesia";
$fulanah = new Person('Embun', 31, 'Palembang', 'Indonesia');
var_dump($fulanah);
$fulanah = new Person (name: 'Lila', age: 32, address: 'Solo');
// var_dump($fulanah);
//var_dump($fulanah);
//echo "Tahun Kelahiran $fulanah->name adalah tahun " . (2024 - $fulanah->age) . PHP_EOL;
// echo "Tahun Kelahiran $fulanah->name adalah tahun " . $fulanah->tahunLahir() . PHP_EOL;
// echo "Jumlah kaki $fulanah->name ada " . Person::JUMLAH_KAKI . PHP_EOL;
// echo "$fulanah->name membutuhkan jumlah sandal " . $fulanah->jumlahSandal(). " pasang" . PHP_EOL;
// echo "$fulanah->name tinggal di negara " . $fulanah->country. PHP_EOL;

$sholeh = new Santri('Sholih', 20, 'Solo', 'Indonesia');
$sholeh->hafalan = 5;
$sholeh->sekolah = "Pondok Programmer";
var_dump($sholeh);
?>