<html>
    <head>
        <title>Test PT. Transisi</title>
    </head>
    <body>
    <br />
       <?php
       function inputKalimat($input)
       {
           $argm = explode(' ', $input);
   
           // unigram
           $unigram = '';
           foreach ($argm as $item) {
               $unigram .= $item.', ';
           }
           $unigram = substr($unigram, 0, -2);
   
           // bigram
           $x = 0;
           $bigram = '';
           foreach ($argm as $item) {
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
           foreach ($argm as $item) {
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
   
       echo inputkalimat('Jakarta adalah ibukota negara Republik Indonesia');
       ?></p>
    </body>
</html>