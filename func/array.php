<?php
//Cách 1
$age=array("a"=>"28", "b"=>"35", "c"=>"20");
echo "Tuổi của a là ".$age["a"]."<br/>";

//mảng số
$so= array(1,2,3,4,5);
foreach ($so as $value){
    echo "Giá trị là $value <br/>";
}
//mảng kết
$luong=array("aaa"=> 2000, "bbb"=> 3000, "ccc"=> 1000);
echo "Lương của bạn b là ".$luong["bbb"]."<br/>";
// mảng đa chiều
$diem=array(
            "aaaa" => array("toan" => 8,"ly" => 7, "hoa" => 9),
            "bbbb" => array("toan"=>6, "ly" => 7, "hoa" => 5)
            );
echo "Điểm của aaaa là: ". $diem["aaaa"]["toan"]." và ". $diem["aaaa"]["hoa"]. "<br/>";

echo $_SERVER["PHP_SELF"];
?>