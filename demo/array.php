<?php
 $xe= array("Merxi","Porsche","Toyota");
 var_dump($xe[1]);
 //indexed arrays
    $ten= array("aaaaa","bbbbb","ccccc");
    echo $ten[1]."<br/>";
  // associtive array
    $chuc_vu= array("aaa"=>"Giám đốc","bbb"=>"Trường phòng","ccc"=>"nhân viên");
    echo $chuc_vu["aaa"]."<br/>";

    //Các hàm xử lý và thao tác trên  mảng
$author=array();
//thêm phần tử của với mảng indexed array
$author[]="maybach";
$author[]="bmw i8";
$author[]="porsche";
echo  $author[0]."<br/>";
echo  $author[1]."<br/>";
echo  $author[2]."<br/>";

// Thêm các phần tử với mảng associative arrays
// với các key lần lượt ở dưới là "author_1", "author_2" và "author_3"
$author["author_1"]="thạch sanh";
$author["author_2"]="bùi kiệm";
$author["author_3"]="kim dung";
echo $author["author_1"]."<br/>";
echo $author["author_2"]."<br/>";
echo $author["author_3"]."<br/>";
//xóa phần tử trong 1 mảng
$manager = array("Cao Thái Sơn"     =>   "ca sĩ 1",
                "phan mạnh quỳnh"     =>   "ca nhạc sĩ",
                "DSK"   =>   "rapper" );
var_dump($manager);

unset($manager["DSK"]);
var_dump($manager)."<br/>";
//hàm count đếm số phần tử mảng
echo count($xe)."<br/>";
//

?>