
<?php
class demo
{
	public function hello()
	{
		echo "Hello world";
	}
}

class SimpleClass
{
    // property declaration
    public $var = 'a default value';

    // method declaration
    public function displayVar() {
        echo $this->var;
    }
}

?>
<?php 
	$test  = new SimpleClass();
	$test->displayVar();
 ?>
 <?php echo "<br>" ?>
 <?php 
  	$test2 = new demo;
  	$test2->hello();
  ?>
 <?php echo "<br>" ?>
