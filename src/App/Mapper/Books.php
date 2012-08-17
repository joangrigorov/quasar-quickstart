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
 * @package    Application Data Mappers
 * @copyright  Copyright (c) 2012 Sasquatch
 */

namespace App\Mapper;

use App\Model\BookEntity,
    App\Gateway\Books as BooksGateway;

/**
 * Books data mapper
 * 
 * @author     Joan-Alexander Grigorov http://bgscripts.com
 * @category   Application
 * @package    Application Data Mappers
 * @copyright  Copyright (c) 2012 Sasquatch
 */
class Books
{
    
    /**
     * Books table data gateway
     * 
     * @var BooksGateway
     */
    protected $gateway;
    
    /**
     * Constructor
     * 
     * Sets dependencies
     * 
     * @param BooksGateway $gateway
     */
    public function __construct(BooksGateway $gateway)
    {
        $this->gateway = $gateway;
    }
    
    /**
     * Get all books
     * 
     * @return array|\Quasar\Db\TableGateway\Rowset\Rowset
     */
    public function browse()
    {
        return $this->gateway->fetchAll();
    }
    
    /**
     * Get book by id
     * 
     * @param BookEntity $entity
     * @return \Quasar\Db\TableGateway\Row\Row
     */
    public function findById(BookEntity $entity)
    {
        return $this->gateway->fetchRow(
            $this->gateway->select()->where('id = ?'),
            array($entity->getId())
        );
    }
    
}