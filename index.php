
<?php
    $ulkeler = ["Türkiye","Japonya","Katar","Azerbaycan","Güney Kore","İsviçre","Arjantin","Maracistan","","",NULL];
    function benimFonskiyonum($dizi,$deger){
        $diziFiltre = array_filter($dizi);
        $diziKarisik = array_rand($diziFiltre,$deger);
        $sonuc = array_map(function($item) use ($diziFiltre){
            return $diziFiltre[$item];
        }, $diziKarisik);
        return $sonuc;
    }
    echo "<pre>";
    print_r(benimFonskiyonum($ulkeler,2));
    print_r(benimFonskiyonum($ulkeler,3));
    print_r(benimFonskiyonum($ulkeler,2));
    print_r(benimFonskiyonum($ulkeler,4));
    print_r(benimFonskiyonum($ulkeler,5));
?>