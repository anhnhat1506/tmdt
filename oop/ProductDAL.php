<?php
    require_once("./db.php");
    require_once("./ProductDTO.php");
    class ProductDAL{
        public $db;
        public function __construct()
        {
            $this->db = new Db();
        }
        public function fn_them_sp_moi($product){
            $sql  = "INSERT INTO product(name,price) VALUES ('{$product->name}',{$product->price})";
            $this->db->fn_query($sql);
        }
    }
?>