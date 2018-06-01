<?php 
echo "Test DI 2 !";
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

#echo $dev->getAge();

class frontend
{
    private $code;
    private $developer;

    public function __construct($code){
        $this->code = $code;
    }

    public function setDeveloper(developer $developer){
        $this->developer = $developer;
    }

    public function getDeveloper(){
        return $this->developer;
    }


}

$dev = new developer('Nguyen Duc Anh', '26','Supervisor');
$frontend = new frontend('id_0012');
$frontend->setDeveloper($dev);
var_dump($frontend->getDeveloper());


?>