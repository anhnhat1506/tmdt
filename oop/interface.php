<?php
    //giao dien
    interface Hinh{
        //lop co so base
        public function fn_tinh_chu_vi($d,$r);
        public function fn_tinh_dien_tinh($d,$r);
    }
    class HCN implements Hinh{
        //bat buoc phai dinh nghia lai o lop dan xuat
        public function fn_tinh_chu_vi($d,$r){

        }
        //bat buoc phai dinh nghia lai o lop dan xuat
        public function fn_tinh_dien_tinh($d,$r){

        }
    }
    class TamGiac implements Hinh{
        //bat buoc phai dinh nghia lai o lop dan xuat
        public function fn_tinh_chu_vi($d,$r){

        }
        //bat buoc phai dinh nghia lai o lop dan xuat
        public function fn_tinh_dien_tinh($d,$r){

        }
    }

?>