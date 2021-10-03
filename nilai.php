<?php
   $nilai = array(72, 65, 73, 78, 75, 74, 90, 81, 87, 65, 55, 69, 72, 78, 79, 91, 100, 40, 67, 77, 86);
   $count = count($nilai);
   $jml = array_sum($nilai);
    echo "<p> Jawaban : </p>";
    echo "<br /> 1. ".$jml/$count."\n";
    echo "<br />&nbsp&nbsp. ".round($jml/$count,2)."\n";
?>