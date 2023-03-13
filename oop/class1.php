<?php
class Student{
    private $name="Huu";
    public function  setName($newName){
        $this->name=$newName;
    }
    public function getName(){
        echo $this->name."<br/>";
    }
}
$obj=new Student();
$obj->setName('Peter');
$obj->getName();

?>