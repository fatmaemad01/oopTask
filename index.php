<?php

namespace Apply;

use Manager\Manager;
use Courses\Courses;
use Student\Student;

include_once 'manager.php';

$course1 = new Courses('php');
$course2 = new Courses('python');
$course3 = new Courses('java');

$Manager = new Manager();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/all.min.css" />
  <link rel="stylesheet" href="css/task.css" />
  <title>Third Task</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:wght@100;300;400;500;700;900&family=Work+Sans:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet" />
</head>

<body>
  <div class="card m-5 text-center">
    <h5 class="card-header">PHP Classes and Objects: Building a Student Management System</h5>

    <div class="card m-3 ps-4 text-start">
      <div class="card-body">
        <h6 class="card-title">Q1:Here I add 2 new student using add_student function.</h6>
        <p class="card-text ">Answer: <br> <?php
                                            $Manager->add_student('Fatma', 'fatma@gmail.com', [$course1, $course2]);
                                            $Manager->add_student('Salma', 'salma@gmail.com', [$course1, $course3]);
                                            $Manager->add_student('Ahmed', 'aa@gmail.com', [$course2, $course3]);
                                            ?></p>
      </div>
    </div>
    <div class="card m-3 ps-4 text-start">
      <div class="card-body">
        <h6 class="card-title">Q2: Here I retrieve student by using id </h6>
        <p class="card-text">Answer: <?php $Manager->retrieve_student(2); ?></p>
      </div>
    </div>
    <div class="card m-3 ps-4 text-start">
      <div class="card-body">
        <h6 class="card-title">Q3: Here I update student info .</h6>
        <p class="card-text">Answer: <?php $Manager->update_student('Fatma', 'f@gmail.com', [$course3]);?></p>
      </div>
    </div>
    <div class="card m-3 ps-4 text-start">
      <div class="card-body">
        <h6 class="card-title">Q4: Here I delete student by using id.</h6>
        <p class="card-text">Answer: <?php $Manager->delete_student(1); ?></p>
      </div>
    </div>
    <div class="card m-3 ps-4 text-start">
      <div class="card-body">
        <h6 class="card-title">Q5: Here I retrieve all Student to check delete function.</h6>
        <p class="card-text">Answer: <?php $Manager->get_all() ?></p>
      </div>
    </div>




  </div>

  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/all.min.js"></script>
</body>

</html>