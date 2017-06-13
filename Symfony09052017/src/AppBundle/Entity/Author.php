<?php
// generer avec la commande : php bin/console doctrine:generate:entity
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Author
 *
 * @ORM\Table(name="author")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AuthorRepository")
 */
class Author
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="firstName", type="string", length=255)
     */
    private $firstName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateBirth", type="datetime")
     */
    private $dateBirth;

    /**
     * @var string
     *
     * @ORM\Column(name="bio", type="text", nullable=true)
     */
    private $bio;
    
    
    ///**
    // * @var Image
    // * @ORM\OneToOne(targetEntity="AppBundle\Entity\Image", cascade={"persist"})
    // */
    //private $image;
    
    /**
     * @var ArryCollection
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Article", mappedBy="author")
     */
    private $articles;
    
    
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
     * @return Author
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
     * Set firstName
     *
     * @param string $firstName
     *
     * @return Author
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set dateBirth
     *
     * @param \DateTime $dateBirth
     *
     * @return Author
     */
    public function setDateBirth($dateBirth)
    {
        $this->dateBirth = $dateBirth;

        return $this;
    }

    /**
     * Get dateBirth
     *
     * @return \DateTime
     */
    public function getDateBirth()
    {
        return $this->dateBirth;
    }

    /**
     * Set bio
     *
     * @param string $bio
     *
     * @return Author
     */
    public function setBio($bio)
    {
        $this->bio = $bio;

        return $this;
    }

    /**
     * Get bio
     *
     */
    public function getBio()
    {
        return $this->bio;
    }
    
    public function setImage($Image)
    {
        $this->Image = $Image;

        return $this;
    }
    /**
     * Get Image
     *
     */
    public function getImage()
    {
        return $this->Image;
    }
    /**
     * @param ArrayCollection $articles
     */
    public function setArticles($articles)
    {
        $this->articles = $articles;
    }
    public function addArticles(Article $articles)
    {
        $this->articles->add($articles);
    }
    
}

