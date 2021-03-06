<?php

/*
 * This file is part of the `src-run/arthur-doctrine-uuid-library` project.
 *
 * (c) Rob Frawley 2nd <rmf@src.run>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace SR\Doctrine\ORM\Id;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Id\AbstractIdGenerator;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

abstract class AbstractUuid4Generator extends AbstractIdGenerator
{
    use IdGeneratorTrait;
    use IdGeneratorPreInsertTrait;

    /**
     * @param EntityManager                $em
     * @param \Doctrine\ORM\Mapping\Entity $entity
     *
     * @return UuidInterface
     */
    public function generate(EntityManager $em, $entity)
    {
        return Uuid::uuid4();
    }
}

/* EOF */
