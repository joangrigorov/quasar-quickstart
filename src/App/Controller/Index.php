<?php
namespace App\Controller;

use App\Mapper\Books,
    Quasar\Controller\Controller;

class Index extends Controller
{
    
    protected $booksMapper;
    
    public function __construct(Books $booksMapper)
    {
        $this->booksMapper = $booksMapper;
    }
    
    public function execute()
    {
        $this->renderer('books');
        $this->response->books = $this->booksMapper->browse();
    }
}