<?php
class DetailNewsModel{
    public $mangsp;
    public $motsp;
    public function onesp($id){
    $sp =new Database();
    $sql ="SELECT * from news where id = :id";
    $this->motsp= $sp->getOne($sql, $id); 
    }
    }