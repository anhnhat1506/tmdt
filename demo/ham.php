<?php
    //Tạo hàm trong php
    //định nghĩa hàm
    function fn_tao_ham(){
        echo "Xin chào các bạn<br/>";
    }
    //gọi hàm dùng
    fn_tao_ham();
    //hàm với tham sô
    function fn_tinh_tich($so1,$so2){
        $tich=$so1*$so2;
        echo "Tích của 2 số là $tich <br/>";
    }
    fn_tinh_tich(10,2);
    //truyền tham số với tham chiếu
    function fn_tham_so($so){
        $so += 6;
    }
    function fn_tham_so_co_tham_bien(&$so){
        $so += 8;
    }
    $gia_tri=10;
    fn_tham_so($gia_tri);
    echo "Giá trị lúc này là $gia_tri <br/>";
    fn_tham_so_co_tham_bien($gia_tri);
    echo "Giá trị khi có tham biến là $gia_tri";
    //khá lắm nigga

?>