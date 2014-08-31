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
     * @ORM\ManyToOne(targetEntity="Book")
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


}
