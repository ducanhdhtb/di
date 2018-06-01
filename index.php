<?php 
echo "Test DI!";
class developer{
    private $name;
    private $age;
    private $role;

    public function __Construct($name, $age ,$role)
    {
        $this->name = $name;
        $this->age = $age;
        $this->role = $role;
    }

    public function getName()
    {
        return $this->name;
    }
    public function getAge()
    {
        return $this->age;
    }

}

$dev = new developer('Nguyen Duc Anh', '26','Supervisor');
#echo $dev->getAge();

class architect
{
    private $intro;
    private $name;
    private $age;
    public function __construct( developer $developer){
        $this->intro = $developer;
        $this->name = $developer->getName();
        $this->age = $developer->getAge();
    }

    public function intro(){
        return $this->intro;
    }

    public function showName(){
        return $this->name;
    }

    public function showAge(){
        return $this->age;
    }
}

$arc = new architect($dev);
var_dump($arc->intro());

echo $arc->showName();
echo "<br>";
echo $arc->showAge();


?>