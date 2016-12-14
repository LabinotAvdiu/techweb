<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SousTache
 *
 * @ORM\Table(name="sous_tache")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SousTacheRepository")
 */
class SousTache
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
    * @ORM\Column(type="string")
    */
    private $name;


    /**
    * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Tache", inversedBy="sousTache")
    */
    private $tache;
    
    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean")
     */
    private $done;
    

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return SousTache
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set tache
     *
     * @param \AppBundle\Entity\Tache $tache
     *
     * @return SousTache
     */
    public function setTache(\AppBundle\Entity\Tache $tache = null)
    {
        $this->tache = $tache;

        return $this;
    }

    /**
     * Get tache
     *
     * @return \AppBundle\Entity\Tache
     */
    public function getTache()
    {
        return $this->tache;
    }

    /**
     * Set done
     *
     * @param boolean $done
     *
     * @return SousTache
     */
    public function setDone($done)
    {
        $this->done = $done;

        return $this;
    }

    /**
     * Get done
     *
     * @return boolean
     */
    public function getDone()
    {
        return $this->done;
    }
}
