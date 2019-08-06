<?php
$obj = new CAnimal();
$obj->makeNoise();
echo "<br>";

$obj->weight = 10;
$obj->weight = -5;
echo $obj->weight;

class CAnimal
{
    public $weight;
    private $_weight = 0;

    public function __construct()
    {
        // 強制將公開屬性移除、讓公開屬性設置時經由 __get、__set
        foreach (get_class_vars("CAnimal") as $varName => $varValue) {
            if (substr($varName, 0, 1) != "_") {
                unset($this->$varName);
            }

        }

        $this->weight = 0;
    }

    public function __get($varName)
    {
        // 如果有相應的存取子則透過存取子處理
        if (method_exists($this, $MethodName = 'get' . $varName)) {
            return $this->$MethodName();
        }
        // 不讓外部隨意新增屬性
        else {
            trigger_error($varName . ' is not avaliable .', E_USER_ERROR);
        }

    }

    public function __set($varName, $value)
    {
        if (method_exists($this, $MethodName = 'set' . $varName)) {
            return $this->$MethodName($value);
        } else {
            trigger_error($varName . ' is not avaliable .', E_USER_ERROR);
        }

    }

    public function makeNoise()
    {
        echo "CAnimal: makeNoise";
    }

    public function setWeight($value)
    {
        if ($value >= 0) {
            $this->_weight = $value;
        }

    }

    public function getWeight()
    {
        return $this->_weight;
    }
}
