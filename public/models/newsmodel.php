<?php
class NewsModel{
    public $mangsp;
    public function dssp(){
    $sp =new Database();
    $sql ="SELECT * from post";
    $this->mangsp= $sp->getAll($sql); 
    }

}
