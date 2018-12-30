<?php
    $quoc_gia_thu_do= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg",
        "Belgium"=> "Brussels", "Denmark"=>"Copenhagen",
        "Finland"=>"Helsinki", "France" => "Paris",
        "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana",
        "Germany" => "Berlin", "Greece" => "Athens",
        "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
        "Austria" => "Vienna", "Poland"=>"Warsaw",
        "Việt Nam" =>"Hà Nội",
        "Trung Quốc" =>"Bắc Kinh");
    var_dump($quoc_gia_thu_do);
    // sắp xêp mảng liên hợp
    // theo giá trị
    asort($quoc_gia_thu_do);
    var_dump($quoc_gia_thu_do);
    //theo khóa key
    ksort($quoc_gia_thu_do);
    var_dump($quoc_gia_thu_do);
    foreach ($quoc_gia_thu_do as $quoc_gia => $thu_do){
        echo "Quốc gia $quoc_gia có thủ đô là: $thu_do"."<br/>";
    }

?>