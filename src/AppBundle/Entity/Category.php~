<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table(name="category")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CategoryRepository")
 */
class Category
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
    * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Project", inversedBy="category")
    */
    private $project;

    

    /**
    * @ORM\OneToMany(targetEntity="AppBundle\Entity\Tache", mappedBy="category", cascade={"persist","remove"})
    */
    private $tache;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tache = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Category
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
     * Set project
     *
     * @param \AppBundle\Entity\Project $project
     *
     * @return Category
     */
    public function setProject(\AppBundle\Entity\Project $project = null)
    {
        $this->project = $project;

        return $this;
    }

    /**
     * Get project
     *
     * @return \AppBundle\Entity\Project
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Add tache
     *
     * @param \AppBundle\Entity\Tache $tache
     *
     * @return Category
     */
    public function addTache(\AppBundle\Entity\Tache $tache)
    {
        $this->tache[] = $tache;

        return $this;
    }

    /**
     * Remove tache
     *
     * @param \AppBundle\Entity\Tache $tache
     */
    public function removeTache(\AppBundle\Entity\Tache $tache)
    {
        $this->tache->removeElement($tache);
    }

    /**
     * Get tache
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTache()
    {
        return $this->tache;
    }
}
