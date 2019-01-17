<?php
    class HinhChuNhat{
        //thuoc tinh
        public $chieu_dai = 0;
        public $chieu_rong = 0;


        //Hàm khởi tạo trong php, có thể có 0 hoặc nhiều tham số
        public function __construct($chieu_dai,$chieu_rong){
            $this->chieu_dai = $chieu_dai;
            $this->chieu_rong = $chieu_rong;
            echo 'The class "' . __FUNCTION__ . '" was initiated!<br>';
        }

        //phuoc thuc
        public function fn_lay_chu_vi(){
            echo 'The class "' . __FUNCTION__ . '" was called.<br>';
           return ($this->chieu_dai + $this->chieu_rong)*2;
        }
        public function fn_lay_dtich(){
            return ($this->chieu_dai*$this->chieu_rong);
        }
        //phuoc thuc
        public function fn_lay_chu_vi2(){
            echo 'The class "' . __FUNCTION__ . '" was called.<br>';
            return ($this->chieu_dai + $this->chieu_rong)*2;
        }
        // Destructor
        public function __destruct(){
            echo 'The class "' . __FUNCTION__ . '" was destroyed.<br>';
        }
    }
    $h1 = new HinhChuNhat(5,10);
    $cv = $h1->fn_lay_chu_vi();
    $cv = $h1->fn_lay_chu_vi2();
    $dt = $h1->fn_lay_dtich();
    echo "dien thich la ".$dt."<br/>";


?>