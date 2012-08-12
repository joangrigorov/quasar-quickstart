<?php

namespace App\Model;

use Quasar\Entity\Standard;

class BookEntity extends Standard
{
    
    /**
     * Book id
     * 
     * @var integer
     */
    protected $id;
    
    /**
     * Book name
     * 
     * @var string
     */
    protected $name;
    
    /**
     * Book author
     * 
     * @var string
     */
    protected $author;
    
    /**
     * Book release date
     * 
     * @var string
     */
    protected $date;
    
    /**
     * Getter for BooksEntity::$id
     * 
     * @return number
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Setter for BooksEntity::$id
     * 
     * @param number $id
     * @return BooksEntity
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Getter for BooksEntity::$name
     * 
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Setter for BooksEntity::$name
     * 
     * @param string $name
     * @return BooksEntity
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Getter for BooksEntity::$author
     * 
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Setter for BooksEntity::$author
     * 
     * @param string $author
     * @return BooksEntity
     */
    public function setAuthor($author)
    {
        $this->author = $author;
        return $this;
    }

    /**
     * Getter for BooksEntity::$date
     * 
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Setter for BooksEntity::$date
     * 
     * @param string $date
     * @return BooksEntity
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }
    
    /**
     * Constructor
     * 
     * Set entity's data
     * 
     * @param array $data
     */
    public function __construct(array $data = null)
    {
        if (null !== $data) {
            $this->populate($data);
        }
    }
    
}