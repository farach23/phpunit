<?php
// File : Wordcount.php
class Wordcount{
    public function countWords($sentence){
        return count(explode(" ",$sentence));
        //explode berfungsi sebagai pemisah string.
        //jadi sebuah string akan di pecahkan menurut tanda pisah yang di tentukan sendiri
        //string yang telah di pecah, akan menjadi array
    }
}
?>