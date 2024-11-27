<?php
    class NewsController{
        public function __construct() {
            $sp = new NewsModel();
    
                $sp->dssp();
                require_once "views/content/tintuc.php";
    }
}