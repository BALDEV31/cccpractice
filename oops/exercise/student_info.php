<?php
class Student_info{
    public $name;
    public $age;
    public $grade;

    public function __construct($name,$age,$grade)
    {
        $this->name = $name;
        $this->age = $age;
        $this->grade = $grade;
    }

    public function displayinfo(){
        echo "this student info : {$this->name} , {$this->age} , {$this->grade}";
    }
}

$student = new Student_info('harsh',21,'graduation');
$student->displayinfo();
?>