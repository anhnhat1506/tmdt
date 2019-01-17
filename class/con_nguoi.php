<?php
    class conNguoi{
        //thuoc tinh
        public $ho_ten="";
        public $nam_sinh = 0;
        //ham khoi tao
        public function __construct($ho_ten,$nam_sinh)
        {
            $this->ho_ten = $ho_ten;
            $this->nam_sinh = $nam_sinh;
        }
        //phuong thuc
        public function xuat_ten_tuoi(){
            $tuoi = date("Y") - date($this->nam_sinh);
            return "Ho ten: ".$this->ho_ten." - tuoi: ".$tuoi;
        }
        //ham huy
    }
    $nhat = new conNguoi("Pham Anh Nhat",1992);
    echo $nhat->xuat_ten_tuoi();
?>