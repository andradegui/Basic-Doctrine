<?php 

namespace Alura\Doctrine\Repository;

use Alura\Doctrine\Entity\Student;
use Doctrine\ORM\EntityRepository;

class StudentRepository extends EntityRepository {

    public function studentsAndCourses(): array {

        return $this->createQueryBuilder('student')
                    ->addSelect('phone')
                    ->addSelect('course')
                    ->leftJoin('student.phones', 'phone')
                    ->leftJoin('student.courses', 'course')
                    ->getQuery()
                    ->getResult();

        // 'Query na mão'
        // $dql = '    SELECT student, phone, course
        //             FROM Alura\Doctrine\Entity\Student student
        //             LEFT JOIN student.phones phone
        //             LEFT JOIN student.courses course
        //         ';

        // return $this->getEntityManager()->createQuery($dql)->getResult();
    }

}