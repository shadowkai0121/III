<?php

$test = new CTest();
$test->newProp = "New Property";
echo "set new property<br>";
echo $test->newProp;

class CTest
{
    public function __set($varName, $varValue)
    {
        echo "set $varName: $varValue<br>";
    }
    public function __get($varName)
    {
        echo "get $varName<br>";
    }
}
// $obj = new CAnimal();
// $obj->makeNoise();
// output: Animal: ...
// (new CAnimal())->makeNoise();

// $obj = new CAnimal(100);

// echo "object lifetime test";
// // $obj2 = $obj;

// echo "<hr>";

// unset($obj);
// // $obj = null;
// echo "<hr>";

// $obj = new CDog(10, "Taichung");
// $obj->makeNoise();
// $obj->getWeight();
// echo $obj->Location . "<br>";

// class CAnimal
// {
//     private $_weight = 10;

//     public function __construct($_weight = 10)
//     {
//         echo "New Animal<br>";
//         $this->_weight = $_weight;
//     }

//     public function makeNoise()
//     {
//         echo "Animal: ...<br>";
//     }

//     public function getWeight()
//     {
//         echo $this->_weight . "<br>";
//     }

//     public function __destruct()
//     {
//         echo "Animal destroyed<br>";
//     }
// }

// class CDog extends CAnimal
// {
//     // 子類別成員
//     public $Location;
//     public function __construct($weight, $loc)
//     {
//         // 父類別建構子
//         parent::__construct($weight);
//         $this->Location = $loc;
//     }
//     // 複寫
//     public function makeNoise()
//     {
//         echo "Dog: Wan! Wan!<br>";
//     }
// }
