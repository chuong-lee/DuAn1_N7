<?php
    class gioithieuController{
        public function __construct(){
            $sp = new IntroModel();
            $sp->dssp();
            require_once 'views/content/gioithieu.php';
        }
    }