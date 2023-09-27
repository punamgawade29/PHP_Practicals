<?php
class Flower {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  public function intro() {
    echo "The Flower is {$this->name} and the color is {$this->color}.";
  }
}


class Rose extends Flower {
  public function message() {
    echo "Am I a Flower or a Rose? ";
  }
}
$Rose = new Rose("Rose", "red");
$Rose->message();
$Rose->intro();
?>
