<?php

namespace Sluggable\Fixture\Inheritance;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity
 */
class Car extends Vehicle
{
    /**
     * @Gedmo\Sluggable(slugField="slug")
     * @ORM\Column(length=128)
     */
    private $description;

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }
}