<?php

namespace Wiki\UIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AdminGroup
 *
 * @ORM\Table(name="admin_group")
 * @ORM\Entity
 */
class AdminGroup
{
    /**
     * @var integer
     *
     * @ORM\Column(name="admin_group_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $adminGroupId;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=50, nullable=false)
     */
    private $label;



    /**
     * Get adminGroupId
     *
     * @return integer 
     */
    public function getAdminGroupId()
    {
        return $this->adminGroupId;
    }

    /**
     * Set label
     *
     * @param string $label
     * @return AdminGroup
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