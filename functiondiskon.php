<?php
    function login($email, $pass){
        if($email == 'test@gmail.com' && $pass == 'pass'){
            $hasil = true;
        }
        else{
            $hasil = false;
        }
        return $hasil;
    }

    $harga = 9000;
    $diskon = 0.05;

    function total($jml_beli){
        global $harga;
        $jml_total = $harga * $jml_beli;
        return $jml_total;
    }

    function diskon($total, $jml_beli){
        global $diskon;
        if($jml_beli > 30) {
            $jml_diskon = $total * $diskon;
        }
        else{
            $jml_diskon = $total * 0;
        }
        return $jml_diskon;
    }
    

    function bayar($total, $diskon)
    {
        $jml_bayar = $total - $diskon;
        return $jml_bayar;
    }

?>