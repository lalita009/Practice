<!DOCTYPE html>
<html>
<body>

<?php
class Fruit {
  public $name;
  public $color;

  function Fruit($name, $color) {
    $this->name = $name; 
    $this->color = $color; 
  }
  function get_name() {
    return $this->name;
  }
  function get_color() {
    return $this->color;
  }
}

$apple = new Fruit("Apple", "red");
echo $apple->get_name();
echo "<br>";
echo $apple->get_color();
?>
 
</body>
</html>