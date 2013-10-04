<?php

namespace Wiki\UIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EditionStatus
 *
 * @ORM\Table(name="edition_status")
 * @ORM\Entity
 */
class EditionStatus
{
    /**
     * @var integer
     *
     * @ORM\Column(name="edition_status_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $editionStatusId;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=50, nullable=false)
     */
    private $label;



    /**
     * Get editionStatusId
     *
     * @return integer 
     */
    public function getEditionStatusId()
    {
        return $this->editionStatusId;
    }

    /**
     * Set label
     *
     * @param string $label
     * @return EditionStatus
     */
    public function setLabel($label)
    {
        $this->label = $label;
    
        return $this;
    }

    /**
     * Get label
     *
     * @return string 
     */
    public function getLabel()
    {
        return $this->label;
    }
}