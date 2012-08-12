<?php

namespace App\Mapper;

use App\Model\BookEntity;

use App\Gateway\Books as BooksGateway;

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