<?php

namespace AppBundle\Repository;

class MapRepository extends \Doctrine\ORM\EntityRepository
{
    public function findType(array $mapLimit)
    {

        $query = $this->createQueryBuilder('m')

            ->where('(m.coordinateX >= :minX and m.coordinateX <= :maxX) and
                              (m.coordinateY >= :minY and m.coordinateY <= :maxY)')
            ->setParameter('minX', $mapLimit[0]+1)
            ->setParameter('maxX', $mapLimit[1])
            ->setParameter('minY', $mapLimit[2]+1)
            ->setParameter('maxY', $mapLimit[3])
            ->getQuery();

        return $query->getResult();
    }

    public function findMapbyCoordinate(array $movement)
    {
        $query = $this->createQueryBuilder('m')

            ->where('m.coordinateX = :x and m.coordinateY = :y')
            ->setParameter('x', $movement[0])
            ->setParameter('y', $movement[1])
            ->getQuery();

        return $query->getResult();
    }
}
