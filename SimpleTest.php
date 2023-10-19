<?php
//Path untuk run ./vendor/bin/phpunit --bootstrap vendor/autoload.php SimpleTest.php
//Butuh Framework phpunit
use PHPUnit\Framework\TestCase;
 //Class yang akan di tes
 require_once "Wordcount.php";

 //Class untuk run testing
 class SimpleTest extends TestCase{
    public function testCountWords(){
        //Kita gunakan class yang akan kita test
        $Wc = new Wordcount();

        //Kita masukkan parameter 4 kata, yang harusnya mendapatkan output 4.
        $TestSentence = "My name is Farach"; //4 kata
        $WordCount = $Wc->countWords($TestSentence);

        //Kita assert equal, ekspektasi nya harus 4, jika benar maka berarti Wordcount berfungsi dengan baik
        $this->assertEquals(4, $WordCount);
        //assertEqual berguna untuk membandingkan parameter pertama (output yang diinginkan yaitu 4) dengan parameter kedua (method yang di run yaitu $WordCount yang berisi 4 kata)
        //Jika berhasil maka class SimpleTest.php berjalan dengan baik, jika saat di test hasilnya tidak sama berarti class tersebut terdapat error/bug
    }
 }