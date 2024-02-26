<?php

use Alura\Doctrine\Entity\Course;
use Alura\Doctrine\Entity\Phone;
use Alura\Doctrine\Entity\Student;
use Alura\Doctrine\Helper\EntityManagerCreator;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManager = EntityManagerCreator::createEntityManager();
// $studentRepository = $entityManager->getRepository(Student::class);

$dql = 'SELECT student FROM Alura\Doctrine\Entity\Student student';

/** @var Student[] $studentList */
$studentList = $entityManager->createQuery($dql)->getResult();

foreach ($studentList as $student) {
    echo "\nID: $student->id\nNome: $student->name";

    if ($student->phones()->count() > 0) {
        echo PHP_EOL;
        echo "Telefones: ";

        echo implode(', ', $student->phones()
            ->map(fn(Phone $phone) => $phone->number)
            ->toArray());
    }

    if ($student->courses()->count() > 0) {
        echo PHP_EOL;
        echo "Cursos: ";

        echo implode(', ', $student->courses()
            ->map(fn(Course $course) => $course->nome)
            ->toArray());
    }

    echo PHP_EOL . PHP_EOL;
}

// 2º maneira de utilzar DQL ao invés de passar a classe na query
$studentClass = Student::class;

$dql = "SELECT COUNT(student) FROM $studentClass student";
// $dql = "SELECT COUNT(student) FROM $studentClass student WHERE SIZE(student.phones) = 1";

var_dump($entityManager->createQuery($dql)->getSingleScalarResult());