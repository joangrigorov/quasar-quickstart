<?php

namespace App\Gateway;

use Quasar\Db\TableGateway\TableGateway;

class Books extends TableGateway
{
    
    protected $table = 'books';
    
}