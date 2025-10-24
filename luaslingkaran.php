<?php

class luaslingkaran {
    public const phi =  3.14;
    public int $jari;
    public function tampil($nama = 'roda'){
         $rumus = luaslingkaran::phi * $lingkaran->jari * $lingkaran->jari;
         echo "hasilnya adalah: ". $rumus;
    }
   public static function testing(){
    echo"<br>";
    echo"ini dari static";
   }
}

$lingkaran = new luaslingkaran(10);
luaslingkaran::testing()

?>