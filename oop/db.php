<?php
    //class db
    class Db{
        private $__conn=false; //connection
        // Hàm Kết Nối
        public function fn_ket_noi(){
            // Nếu chưa kết nối thì thực hiện kết nối
            $this->__conn = mysqli_connect("localhost","root","","tmdt") or die("Ket noi DB that bai");
            // Xử lý truy vấn UTF8 để tránh lỗi font
            mysqli_query($this->__conn, "SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");

        }
        // Hàm Ngắt Kết Nối
        public function fn_ngat_ket_noi(){
            // Nếu đang kết nối thì ngắt
            mysqli_close($this->__conn);
            $this->conn = false;
        }

        //quẻy
        public function fn_lay_danh_sach($sql){
            //select * from product;
            //khoi tao mang rong
            $return = [];
            //mo ket noi
            $this->fn_ket_noi();
            //thuc thi truy van va push vao mang du lieu neu co
            $query = mysqli_query($this->__conn,$sql);
            // Lặp qua kết quả để đưa vào mảng
            while ($row = mysqli_fetch_assoc($query)){
                $return[] = $row;
            }

            //dong ket noi
            $this->fn_ngat_ket_noi();

            //tra ve ket qua
            return $return;
        }

        //them,xoa,sua
        public function fn_query($sql){
            //select * from product;
            //khoi tao mang rong
            $return = 0;
            //mo ket noi
            $this->fn_ket_noi();
            //thuc thi truy van va push vao mang du lieu neu co
            $return = mysqli_query($this->__conn,$sql);
            // Lặp qua kết quả để đưa vào mảng
            //dong ket noi
            $this->fn_ngat_ket_noi();

            //tra ve ket qua
            return $return;
        }

        //chji lay 1 dong
        public function fn_lay_dong($sql){
            //select * from product;
            //khoi tao mang rong
            $return = [];
            //mo ket noi
            $this->fn_ket_noi();
            //thuc thi truy van va push vao mang du lieu neu co
            $query = mysqli_query($this->__conn,$sql);
            // Lặp qua kết quả để đưa vào mảng
            while ($row = mysqli_fetch_assoc($query)){
                $return[] = $row;
            }

            //dong ket noi
            $this->fn_ngat_ket_noi();

            //tra ve ket qua
            return $return;
        }
    }
?>