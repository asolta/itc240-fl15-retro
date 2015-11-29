<?php
// class-test.php

$cars[] = new Car('Mustang','gold',15000,130);
$cars[] = new Car('Hummer','yellow',100000,150);
$cars[] = new Car('Volkswaggen','blue',25000,135);
$cars[] = new Car('Pinto','red',10000,45);




echo '<pre>';
var_dump($cars);
echo'</pre>';

class Car 
    
{
    public $model;
    public $color;
    public $price;
    public $mph;
    
    public function _contruct($model,$color,$price,$mph)
    {
        $this ->model=$model;
        $this ->color=$color;
        $this ->price=$price;
        $this ->mph=$mph;
    }// end constructor
}//end Car class

