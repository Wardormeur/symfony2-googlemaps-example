<?php

namespace Hammond\ChurchBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChurchImages
 */
class ChurchImages
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $path;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set path
     *
     * @param string $path
     * @return ChurchImages
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }
    /**
     * @var \Hammond\ChurchBundle\Entity\Church
     */
    private $church;


    /**
     * Set church
     *
     * @param \Hammond\ChurchBundle\Entity\Church $church
     * @return ChurchImages
     */
    public function setChurch(\Hammond\ChurchBundle\Entity\Church $church = null)
    {
        $this->church = $church;

        return $this;
    }

    /**
     * Get church
     *
     * @return \Hammond\ChurchBundle\Entity\Church 
     */
    public function getChurch()
    {
        return $this->church;
    }
}
