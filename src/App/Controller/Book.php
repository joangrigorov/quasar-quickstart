<?php
namespace App\Controller;

use App\Model\BookEntity,
    App\Mapper\Books,
    Quasar\Controller\Controller;

class Book extends Controller
{
    
    protected $paramsMap = array('id' => null);
    
    protected $booksMapper;
    
    public function __construct(Books $booksMapper)
    {
        $this->booksMapper = $booksMapper;
    }
    
    public function execute()
    {
        $id = $this->getParam('id');
        $bookEntity = new BookEntity(array('id' => $id));
        $this->response->book = $this->booksMapper->findById($bookEntity);
    }
}