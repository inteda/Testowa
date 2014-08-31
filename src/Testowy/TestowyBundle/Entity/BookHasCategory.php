<?php

namespace Testowy\TestowyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BookHasCategory
 *
 * @ORM\Table(name="book_has_category", indexes={@ORM\Index(name="FK_book_has_category_book", columns={"book"}), @ORM\Index(name="FK_book_has_category_category", columns={"category"})})
 * @ORM\Entity
 */
class BookHasCategory
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="priority", type="integer", nullable=false)
     */
    private $priority = '0';

    /**
     * @var \Book
     *
     * @ORM\ManyToOne(targetEntity="Book", inversedBy="categories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="book", referencedColumnName="id")
     * })
     */
    private $book;

    /**
     * @var \Category
     *
     * @ORM\ManyToOne(targetEntity="Category")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category", referencedColumnName="id")
     * })
     */
    private $category;



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
     * Set priority
     *
     * @param integer $priority
     * @return BookHasCategory
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Get priority
     *
     * @return integer 
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Set book
     *
     * @param \Testowy\TestowyBundle\Entity\Book $book
     * @return BookHasCategory
     */
    public function setBook(\Testowy\TestowyBundle\Entity\Book $book = null)
    {
        $this->book = $book;

        return $this;
    }

    /**
     * Get book
     *
     * @return \Testowy\TestowyBundle\Entity\Book 
     */
    public function getBook()
    {
        return $this->book;
    }

    /**
     * Set category
     *
     * @param \Testowy\TestowyBundle\Entity\Category $category
     * @return BookHasCategory
     */
    public function setCategory(\Testowy\TestowyBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \Testowy\TestowyBundle\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }
}
