<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Event
 *
 * @ORM\Table(name="event")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EventRepository")
 */
class Event
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
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=100)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="debut", type="date")
     */
    private $debut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fin", type="date")
     */
    private $fin;
    
    /**
     * @var ArryCollection
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\User", mappedBy="event")
     */
    private $user;
    
    /**
     * @var Image
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Image")
     */
    private $image;
    
    /**
     * @var Categories
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Categories", inversedBy="event") 
     */
    private $categories;
    
    
    
    

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
     * Set nom
     *
     * @param string $nom
     *
     * @return Event
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Event
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set debut
     *
     * @param \DateTime $debut
     *
     * @return Event
     */
    public function setDebut($debut)
    {
        $this->debut = $debut;

        return $this;
    }

    /**
     * Get debut
     *
     * @return \DateTime
     */
    public function getDebut()
    {
        return $this->debut;
    }

    /**
     * Set fin
     *
     * @param \DateTime $fin
     *
     * @return Event
     */
    public function setFin($fin)
    {
        $this->fin = $fin;

        return $this;
    }

    /**
     * Get fin
     *
     * @return \DateTime
     */
    public function getFin()
    {
        return $this->fin;
    }
    
    
    
    
    
    /**
     * Set user
     *
     * @param ArrayCollection $user
     *
     * @return Event
     */
    public function setUser(ArrayCollection $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return ArrayCollection
     */
    public function getUser()
    {
        return $this->user;
    }
    
    /**
     * Set categories
     *
     * @param \AppBundle\Entity\Categories $categories
     *
     * @return categories
     */
    public function setCategories(\AppBundle\Entity\Categories $categories)
    {
        $this->categories = $categories;

        return $this;
    }

    /**
     * Get categories
     *
     * @return \AppBundle\Entity\Categories
     */
    public function getCategories()
    {
        return $this->categories;
    }
    
    /**
     * Set image
     *
     * @param \AppBundle\Entity\Image $image
     *
     * @return image
     */
    public function setImage(\AppBundle\Entity\Image $image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \AppBundle\Entity\Image
     */
    public function getImage()
    {
        return $this->image;
    }
}

