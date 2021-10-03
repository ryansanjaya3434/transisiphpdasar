<html>
    <head>
        <title>Test PT. Transisi</title>
    </head>
    <body>
        <p>Bagian 1 : PHP DASAR</p>
        <p><br />Nilai ujian sebuah kelas tersimpan dalam sebuah string berikut :
        <br />$nilai = “72 65 73 78 75 74 90 81 87 65 55 69 72 78 79 91 100 40 67 77 86”;
        <br />Buatlah sebuah PHP script untuk menentukan (1) nilai rata-rata, (2) 7 nilai tertinggi, (3) 7 nilai terendah dari nilai-nilai di atas.
       <?php
          $nilai = array(72, 65, 73, 78, 75, 74, 90, 81, 87, 65, 55, 69, 72, 78, 79, 91, 100, 40, 67, 77, 86);
          $count = count($nilai);
          $jml = array_sum($nilai);
          echo "<p> Jawaban : </p>";
          echo "<br /> 1. ".$jml/$count."\n";
          echo "<br />&nbsp&nbsp. ".round($jml/$count,2)."\n";
       ?></p>
        <p><br />Buatlah sebuah fungsi dalam PHP untuk menentukan jumlah huruf kecil dalam sebuah string.
        <br />Contoh : bila fungsi diberikan input “TranSISI” maka akan menghasilkan output : “TranSISI” mengandung 3 buah huruf kecil.
        <br /><form method="POST" action="index.php" name="isi"><input type="text" name="kata">
        <br /><br /></form>
       <?php
       $string=$_POST["kata"];
       $chars=count_chars($string,1);
       $lowers=array_sum(array_filter($chars,function($k){return in_array($k,range(97,122));},ARRAY_FILTER_USE_KEY));
       echo "Jumlah Huruf Kecil Dari Kata ".$_POST["kata"]." : ". $lowers;      
       ?></p>
        
        <p><br />Buatlah sebuah fungsi dalam PHP untuk membentuk unigram, bigram, trigram dari sebuah string.
        <br /> Contoh : bila fungsi diberikan input “Jakarta adalah ibukota negara Republik Indonesia”, maka akan menghasilkan output :
        <br /><form method="GET" action="index.php" name="isi2"><input type="text" name="kata2">
        <br /><br /></form>
       <?php
       function inputKalimat($input)
       {
           $arr_input = explode(' ', $input);
   
           // unigram
           $unigram = '';
           foreach ($arr_input as $item) {
               $unigram .= $item.', ';
           }
           $unigram = substr($unigram, 0, -2);
   
           // bigram
           $x = 0;
           $bigram = '';
           foreach ($arr_input as $item) {
               if ($x < 1) {
                   $bigram .= $item.' ';
                   $x++;
               } else {
                   $bigram .= $item.', ';
                   $x = 0;
               }
           }
           $bigram = substr($bigram, 0, -2);
   
           // trigram
           $y = 0;
           $trigram = '';
           foreach ($arr_input as $item) {
               if ($y < 2) {
                   $trigram .= $item.' ';
                   $y++;
               } else {
                   $trigram .= $item.', ';
                   $y = 0;
               }
           }
           $trigram = substr($trigram, 0, -2);
   
   
           $result = 'Unigram : '. $unigram . '<br>';
           $result .= 'Bigram : '. $bigram . '<br>';
           $result .= 'Trigram : '. $trigram;
   
           return $result;
       }
   
       echo inputkalimat($_GET["kata2"]);
       ?></p>
    </body>
</html>

<script>
 
function harusHuruf(evt){
        var charCode = (evt.which) ? evt.which : event.keyCode
        if ((charCode < 65 || charCode > 90)&&(charCode < 97 || charCode > 122)&&charCode>32)
            return false;
        return true;
}
</script>