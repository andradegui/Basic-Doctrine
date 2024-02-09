<?php

use Alura\Doctrine\Entity\Phone;
use Alura\Doctrine\Entity\Student;
use Alura\Doctrine\Helper\EntityManagerCreator;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManager = EntityManagerCreator::createEntityManager();

$student = new Student('Rafael');
$student->addPhone(new Phone('(11) 29999 - 9992'));
$student->addPhone(new Phone('(11) 3222 - 2223'));

$entityManager->persist($student);
$entityManager->flush();
