  <?php
class worker
{ 
      
    Public $name;
  
    Public $position;
  
    function __construct($name,$position)
  
    {
        // This is initializing the class properties
        $this->name=$name;
        $this->profile=$position;
  
  
    }     
    function show_details()
    {
        echo $this->name." : ";
        echo "Position in compony ".$this->profile."<br>";
    }
}
      
$employee_obj= new worker("Punam","designer");
$employee_obj->show_details();
      
$employee2= new worker("Jack","Manager");
$employee2->show_details();
  
?>
