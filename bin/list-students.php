<?php

use Alura\Doctrine\Entity\Course;
use Alura\Doctrine\Entity\Phone;
use Alura\Doctrine\Entity\Student;
use Alura\Doctrine\Helper\EntityManagerCreator;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManager = EntityManagerCreator::createEntityManager();
$studentRepository = $entityManager->getRepository(Student::class);
$studentList = $studentRepository->studentsAndCourses();

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
            ->map(fn(Course $course) => $course->name)
            ->toArray());
    }

    echo PHP_EOL . PHP_EOL;
}


$studentClass = Student::class;

// $dql = "SELECT COUNT(student) FROM $studentClass student ";
// $dql = "SELECT COUNT(student) FROM $studentClass student WHERE SIZE(student.phones) = 1";
$dql = "SELECT COUNT(student) FROM $studentClass student WHERE SIZE(student.phones) = 2";

// Configuração p/ armazenar resultados de query em cache durante 1 dia
$query = $entityManager->createQuery($dql)->enableResultCache(86400);
$singleScalarResult = $query->getSingleResult();
var_dump($singleScalarResult);