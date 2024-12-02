<?php
class IntroModel{
    public function dssp(){
    $sp =new Database();
    $sql ="SELECT * from intro";
    $this->mangsp= $sp->getAll($sql); 
    }

}
