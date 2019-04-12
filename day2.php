<?php
$n=100;
$m=999;
flower($n,$m);
function flower($n,$m){
   for($i=$n;$i<=$m;$i++){
    $b=floor($i/100);
    $s=floor($i/10%10);
    $g=floor($i%10);
    if($b*$b*$b+$s*$s*$s+$g*$g*$g==$i){
        echo '</br>';
        echo $i;
    }
    
   }
 
}
?>