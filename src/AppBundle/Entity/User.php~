<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToMany;
/**
* @ORM\Entity
* @ORM\Table(name="fos_user")
*/
class User extends BaseUser
{
    /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    protected $id;

    

       /**
     * Many Groups have Many Users.
     * @ManyToMany(targetEntity="AppBundle\Entity\Project", mappedBy="user" , cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $project;


    
    /**
    * @ORM\OneToMany(targetEntity="AppBundle\Entity\Tache", mappedBy="user", cascade={"persist","remove"})
    */     
    private $tache;


    /**
     * Add project
     *
     * @param \AppBundle\Entity\Project $project
     *
     * @return User
     */
    public function addProject(\AppBundle\Entity\Project $project)
    {
        $this->project[] = $project;

        return $this;
    }

    /**
     * Remove project
     *
     * @param \AppBundle\Entity\Project $project
     */
    public function removeProject(\AppBundle\Entity\Project $project)
    {
        $this->project->removeElement($project);
    }

    /**
     * Get project
     *
     * @return \Doctrine\Common\Collections\Collection
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
     * @return User
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
