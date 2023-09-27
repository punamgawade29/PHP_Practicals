<?php
class Punam
{
    public function description() {
        echo "I am a super class for the Child class.<br>";
    }
}

class Child extends Punam
{
    public function description() {
        echo "I'm " . get_class($this) , " class.<br>";
        echo "I'm " . get_parent_class($this) , "'s child.<br>";
    }
}

if (class_exists("Punam")) {
    $Punam = new Punam();
    echo "The class name is: " . get_class($Punam) . "<br>"; 
    $Punam->description();
}

if (class_exists("Child")) {
    $child = new Child();
    $child->description();

    if (is_subclass_of($child, "Punam")) {
        echo "Yes, " . get_class($child) . " is a Child of Punam.<br>";
    }
    else {
        echo "No, " . get_class($child) . " is not a Child of Punam.<br>";
    }
}

?>






