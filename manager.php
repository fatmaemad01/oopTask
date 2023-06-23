<?php

namespace Manager;

require_once 'loggable.php';
include_once 'student.php';

use Loggable\Loggable;
use Student\Student;



class Manager
{
    use Loggable;

    private $students = [];

    public function __construct()
    {
        $this->students = [];
    }


    function add_student($name, $email, $courses)
    {
        $student = new Student($name, $email, $courses);
        $this->students[] = $student;

        $msg = "Student $name Added Successfully.";
        $this->log($msg);
        echo "$msg<br>";
        return $this->students;
    }

    function retrieve_student($id)
    {
        foreach ($this->students as $student) {
            if ($student->id == $id) {
                $msg = "This is info about $student->name";
                $this->log($msg);
                echo '<pre>';
                print_r($student);
                echo '</pre>';
            } 
        }
    }


    function update_student($name, $new_email, $new_courses)
    {
        foreach ($this->students as $student) {
            if ($student->name == $name) {
                $student->email = $new_email;
                $student->courses = $new_courses;

                $msg = "Student $student->name Updated Successfully";
                $this->log($msg);
                echo '<pre>';
                print_r($student);
                echo '</pre>';
            } 
        }
    }

    function delete_student($id)
    {
        foreach ($this->students as $key => $student) {
            if ($student->id == $id) {
                unset($this->students[$key]);
                $msg = "Student $student->name Deleted Successfully";
                $this->log($msg);
                echo $msg;
            }
        }
    }

    public function get_all()
    {
        echo '<pre>';
        print_r($this->students);
        echo '</pre>';
    }
}
