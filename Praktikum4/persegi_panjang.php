<?php

    class PersegiPanjang{
        public $panjang;
        public $lebar;

        function __construct($panjang, $lebar){
            $this -> panjang = $panjang;
            $this -> lebar = $lebar;
        }

        function getLuas(){
            return $this-> panjang * $this -> lebar;
        }

        function getKeliling(){
            return 2 * ($this -> panjang + $this -> lebar);
        }

    }

    $PersegiPanjang1 = new PersegiPanjang (10, 5);
    $PersegiPanjang2 = new PersegiPanjang (30,10);

    echo "Luas Persegi Panjang 1 = " . $PersegiPanjang1 -> getLuas() . "cm2" . "<br/>";
    echo "<br/>Luas Persegi Panjang 2 = " . $PersegiPanjang2 -> getLuas() . "cm2" . "<br/>";

    echo "<br/> Keliling Persegi Panjang 1 = " . $PersegiPanjang1 -> getKeliling() . "cm" . "<br/>";
    echo "<br/> Keliling Persegi Panjang 2 = " . $PersegiPanjang2 -> getKeliling() . "cm";

?>