<html>
    <head>
        <title>Test PT. Transisi</title>
    </head>
    <body>
    <br /><form method="POST" action="" name="isi2"><input type="text" name="data">
        <br /><br /></form>
       <?php
       function huruf($input){
		    $huruf = [
                    ['f','g','h','i'],
                    ['j','k','p','q'],
                    ['r','s','t','u']
                ];
        $input = strtolower($input);
		    $exinput = explode(",",$input);
        for ($i=0; $i < sizeof($huruf); $i++) { 
         $arr_input = str_split($exinput[$i]);
          if (array_search($arr_input[$i], $huruf[$i], true)) {
            $hasil='True';
          }
          else {
            $hasil='false';
          }
          return $hasil;
        }
        }
	    echo huruf('fghi,fghp,fjrstp,fghq,fst,pgr,fghh');
       ?></p>
    </body>
</html>