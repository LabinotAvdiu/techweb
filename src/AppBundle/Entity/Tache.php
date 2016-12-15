<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tache
 *
 * @ORM\Table(name="tache")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TacheRepository")
 */
class Tache
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
     * @var sting
     *
     * @ORM\Column(name="name", type="string" ,length=255)
     */
    private $name;

    /**
     * 
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Category", inversedBy="tache")
     * 
     */
    private $category;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\SousTache", mappedBy="tache", cascade={"persist","remove"})
     */
    private $sousTache;

    /**
    * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="tache")
    * 
    */
    private $user;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->sousTache = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set name
     *
     * @param string $name
     *
     * @return Tache
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
     * Set category
     *
     * @param \AppBundle\Entity\Category $category
     *
     * @return Tache
     */
    public function setCategory(\AppBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \AppBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Add sousTache
     *
     * @param \AppBundle\Entity\SousTache $sousTache
     *
     * @return Tache
     */
    public function addSousTache(\AppBundle\Entity\SousTache $sousTache)
    {
        $this->sousTache[] = $sousTache;

        return $this;
    }

    /**
     * Remove sousTache
     *
     * @param \AppBundle\Entity\SousTache $sousTache
     */
    public function removeSousTache(\AppBundle\Entity\SousTache $sousTache)
    {
        $this->sousTache->removeElement($sousTache);
    }

    /**
     * Get sousTache
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSousTache()
    {
        return $this->sousTache;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return Tache
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}
