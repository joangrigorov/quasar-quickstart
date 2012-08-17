<?php
/**
 * Quasar Framework QuickStart Project © 2012
 * Copyright © 2012 Sasquatch <Joan-Alexander Grigorov>
 *                              http://bgscripts.com
 *
 * LICENSE
 *
 * This source file is subject to the GNU General Public License v3
 * that is bundled with this package in the file LICENSE.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @category   Application
 * @package    Application Entities
 * @copyright  Copyright (c) 2012 Sasquatch
 */

namespace App\Model;

use Quasar\Entity\Standard;

/**
 * Book entity model
 * 
 * @author     Joan-Alexander Grigorov http://bgscripts.com
 * @category   Application
 * @package    Application Entities
 * @copyright  Copyright (c) 2012 Sasquatch
 */
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