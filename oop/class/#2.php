<!-- Example #2 Some examples of the $this pseudo-variable -->


<?php
class A
{
    function foo()
    {
        if (isset($this)) {
            echo '$this is defined (';
            echo get_class($this);//Hàm này trả về tên lớp của object đã cho.
            echo ")\n";
        } else {
            echo "\$this is not defined.\n";
        }
    }
}


class B
{
    function bar()
    {
        A::foo();
    }
}
$a = new A();
$a->foo();

//A::foo();

//$b = new B();
//$b->bar();

//B::bar();
?>
