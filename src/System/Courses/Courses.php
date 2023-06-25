<?php

namespace System\Courses;

use System\Loggable\Loggable;

class Courses
{
    use Loggable;
    static $count = 1;
    public readonly int $id;
    public string $name;

    public function __construct($name)
    {
        $this->id = Courses::$count++;
        $this->name = $name;

        $msg = "Course $name Created Successfully.";
        $this->log($msg);
    }
}
