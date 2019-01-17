<?php
    class A{
        //private
        private $__a1=0;
        //protected
        protected  $_a2=0;

        //public
        public $a3=0;

    }

    class B extends A{
        //private
        private $__b1=0;
        //protected
        protected  $_b2=0;

        //public
        public $b3=0;

    }
    class C extends B{
        //private
        private $__c1=0;
        //protected
        protected  $_c2=0;

        //public
        public $c3=0;

        public function tinh(){
            $this->__c1=100;
        }
    }

    $c = new C();
    $c->tinh();


?>