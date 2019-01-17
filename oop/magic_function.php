<?php
// magic function la ham dac biet co ten bat dau tu __ trobg 1 class
    class HocSinh{
        public $ho_ten = "";
        public $nam_sinh = 1992;

        //construct cung la 1 magic funciton __
        public function __construct()
        {
            //ham khoi tao
        }
        public function __destruct()
        {
            // TODO: Implement __destruct() method.
            //ham huy
        }

        //destruct cung la 1 macgic function __
        //dinh nghia to string tostring cung la 1 magic function __
        public function  __toString()
        {
            // TODO: Implement __toString() method.
            return "Ho va ten: ".$this->ho_ten." nam sinh: ".$this->nam_sinh;
        }
    }
    $tuan = new HocSinh();
    echo $tuan; //sai vi ban dau chua co phuong thuc __tostring

    echo "\n <br/>";

    $num =10;
    echo $num;

?>