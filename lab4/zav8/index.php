<?php

require_once 'human.php';
require_once 'student.php';
require_once 'programmer.php';

$student = new Student(175, 65, 19, 'Politeh', 2);
$student->moveToNextCourse();
echo "Studennt on new course: " . $student->getCourse() . "<br>";

$programmer = new Programmer(190, 85, 27, ['HTML', 'Python'], '5 years');
$programmer->addProgrammingLanguage('CSS');
echo "Programming languages: " . implode(', ', $programmer->getProgrammingLanguages()) . "<br>";

$programmer->setHeight(180);
$programmer->setWeight(65);

echo "Programmer, height {$programmer->getHeight()}, weight {$programmer->getWeight()}";