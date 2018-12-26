<?php
    function fn_array_reduce($a1, $a2){
        return $a1."*". $a2;
    }
    $a=array("Dog","Cat","Dolphin");
    echo array_reduce($a,"fn_array_reduce");
?>