<?php

require_once 'human.php';
require_once 'student.php';
require_once 'programmer.php';

$student = new Student(175, 65, 19, 'Politeh', 2);
$student->moveToNextCourse();

$programmer = new Programmer(190, 85, 27, ['HTML', 'Python'], '5 years');
$programmer->addProgrammingLanguage('CSS');

$programmer->setHeight(180);
$programmer->setWeight(75);

$student->giveBirth();
echo "<br>";
$programmer->giveBirth();

echo "<br>";

$student->cleanRoom();
echo "<br>";
$student->cleanKitchen();

echo "<br>";

$programmer->cleanRoom();
echo "<br>";
$programmer->cleanKitchen();