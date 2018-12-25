<?php

 $a = 10;
 var_dump($a);
 fn_change_a($a);
 var_dump($a);
 function fn_change_a(&$b){
     $b=100;
 }