<?php
class NewsModel{
    public $mangsp;
    public function dssp(){
    $sp =new Database();
    $sql ="SELECT * from news";
    $this->mangsp= $sp->getAll($sql); 
    }

}
