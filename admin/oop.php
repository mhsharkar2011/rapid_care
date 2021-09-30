<?php
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function myFunc($name) {
    $this->name = $name;
  }
  function myFunc1() {
    return $this->name;
  }
}
$apple = new Fruit();
$banana = new Fruit();
$apple->myFunc('Apple');
$banana->myFunc('Banana');

echo $apple->myFunc1();
echo "<br>";
echo $banana->myFunc1();

?>