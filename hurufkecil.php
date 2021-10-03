<html>
    <head>
        <title>Test PT. Transisi</title>
    </head>
    <body>
       <?php
       function inputKalimat($string){
        $chars=count_chars($string,1);
        $lowers=array_sum(array_filter($chars,function($k){return in_array($k,range(97,122));},ARRAY_FILTER_USE_KEY));
        $hasil = "Jumlah Huruf Kecil Dari Kata ".$string." : ". $lowers;
        return $hasil;
        }
        echo inputkalimat('TranSISI');
      ?></p>
    </body>
</html>