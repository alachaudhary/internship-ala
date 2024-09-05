<?php
class animal
{
    protected $name;
    protected $sound;
    public function __construct(){
        $this->name = "NULL";
        $this->sound = "NULL";
    }
    public static function info(){
        echo "Hello World";
    }
    public function setName(string $name)
    {
        $this->name = $name;
    }
    public function setSound(string $sound)
    {
        $this->sound = $sound;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getSound()
    {
        return $this->sound;
    }
}
class birds extends animal
{

}
animal::info();
$a= new animal();
$a->setName("Dog");
echo $a->getName();
$a->setSound("bow");
echo $a->getSound();
$b=new birds();
$b->setName("Falcon");
echo $b->getName();

?>