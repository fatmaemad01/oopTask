<?php
namespace Student;

include_once 'courses.php';

class Student
{
    static $count = 1 ;
    public readonly int $id ;
    public $name;
    public $email;
    public $courses ;

    public function __construct( $name , $email , $courses )
    {
        $this->id = Student::$count++;
        $this->name = $name;
        $this->email = $email;
        $this->courses = $courses;
    }
}

